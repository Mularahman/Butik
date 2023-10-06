<?php

namespace App\Http\Controllers;

use Midtrans\Snap;
use App\Models\Kota;
use App\Models\User;
use Midtrans\Config;
use App\Models\Kupon;
use App\Models\Kurir;
use App\Models\Produk;
use App\Models\Provinsi;
use App\Models\Kecamatan;
use App\Models\Keranjang;
use Midtrans\Notification;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\TransactionDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class TransaksiController extends Controller
{

    public function transaksi(Request $request)
    {
        $request->validate([
            'total' => 'required',
            'qty' => 'required',
            'kurir' => 'required', // Validasi kurir harus dipilih
        ]);

        $user = Auth::user();
        $user->update($request->except(['total','subtotal','diskon']));
        $date = Carbon::now();
        $kode = '#INVOICE-' . mt_rand(0000,9999);
        $keranjang = Keranjang::with('produk', 'user', 'produk.gambar')->where('user_id', Auth::user()->id)->get();
        $transaksi = Transaction::create([
            'user_id' => Auth::user()->id,
            'tanggal' => $date->toDateString(),
            'diskon' => $request->diskon,
            'total_harga' => 0,
            'transaction_status' => 'PENDING',
            'kode' => $kode,
            'pembayaran' => ''
        ]);

        $subtotal =0;

        foreach ($keranjang as $cart) {
            $subtotal += $cart->produk->hargaproduk * $cart->jumlah;

            $trx = 'TRX-' . mt_rand(0000,9999);

            TransactionDetail::create([
                'transaction_id' => $transaksi->id,
                'produk_id' => $cart->produk->id,
                'harga' => $cart->produk->hargaproduk,
                'status' => 'PENDING',
                'resi' => '',
                'kode' => $trx,
                'qty' => $cart->jumlah,
                'ongkir' => $request->ongkir,
                'kurir' => $request->kurir,
                'catatan' => $request->catatan
            ]);
            $stokProduk = Produk::findOrFail($cart->produk->id);
            $stokProduk->stokproduk = $stokProduk->stokproduk - $cart->jumlah;
            $stokProduk->update();
        }

        $transaksi->total_harga = $subtotal;
        $transaksi->save();

        Keranjang::with('produk', 'user', 'produk.gambar')->where('user_id', Auth::user()->id)->delete();

        Config::$serverKey = config('services.midtrans.serverKey');
        Config::$isProduction = config('services.midtrans.isProduction');
        Config::$isSanitized = config('services.midtrans.isSanitized');
        Config::$is3ds = config('services.midtrans.is3ds');

        $transaksi->load('transaction_details');

        $midtrans = [
            'transaction_details' => [
                'order_id'=> $kode . '/' . $transaksi->id,
                'gross_amount'=> (int) $transaksi->total_harga + $request->ongkir - $transaksi->diskon
            ],
            'customer_details' =>[
                'first_name' => Auth::user()->name,
                'email' => Auth::user()->email,
            ],
            'enabled_payments' => [
                'gopay', 'bank_transfer', 'bni_va', 'bri_va','alfamart','bca_klikbca'
            ],
            'vtweb' => []
        ];

        try{
            $paymentUrl = Snap::createTransaction($midtrans)->redirect_url;

            return redirect($paymentUrl);
        }
        catch(Exception $e) {
            echo $e->getMessage();
        }
    }

    public function callback(Request $request)
    {

        // Set konfigurasi midtrans
        Config::$serverKey = config('services.midtrans.serverKey');
        Config::$isProduction = config('services.midtrans.isProduction');
        Config::$isSanitized = config('services.midtrans.isSanitized');
        Config::$is3ds = config('services.midtrans.is3ds');

        // Buat instance midtrans notification
        $notification = new Notification();
        // Assign ke variable untuk memudahkan coding
        $status = $notification->transaction_status;
        $type = $notification->payment_type;
        $fraud = $notification->fraud_status;
        $order_id = $notification->order_id;


        $order = explode('/', $order_id);
        // Cari transaksi berdasarkan ID
        $transaction = Transaction::findOrFail($order[1]);

        if($type == 'bank_transfer'){
            $transaction->pembayaran = $notification->va_numbers[0]->bank;
        }else if($type == 'qris'){
            $transaction->pembayaran = $notification->acquirer;
        }else if($type == 'cstore'){
            $transaction->pembayaran = $notification->store;
        }

        // Handle notification status midtrans
        if ($status == 'capture') {
            if ($type == 'credit_card'){
                if($fraud == 'challenge'){
                    $transaction->transaction_status = 'PENDING';
                }
                else {
                    $this->sendMessage($transaction);
                    $transaction->transaction_status = 'SUCCESS';
                }
            }
        }
        else if ($status == 'settlement'){
            $this->sendMessage($transaction);
            $transaction->transaction_status = 'SUCCESS';
        }
        else if($status == 'pending'){
            $transaction->transaction_status = 'PENDING';
        }
        else if ($status == 'deny') {
            $transaction->transaction_status = 'CANCELLED';
        }
        else if ($status == 'expire') {
            $transaction->transaction_status = 'CANCELLED';
        }
        else if ($status == 'cancel') {
            $transaction->transaction_status = 'CANCELLED';
        }

        // Simpan transaksi
        $transaction->save();


        //kirim ke wa

        // Kirimkan email
        if ($transaction)
        {
            if($status == 'capture' && $fraud == 'accept' )
            {
                //
            }
            else if ($status == 'settlement')
            {
                //
            }
            else if ($status == 'success')
            {
                //
            }
            else if($status == 'capture' && $fraud == 'challenge' )
            {
                return response()->json([
                    'meta' => [
                        'code' => 200,
                        'message' => 'Midtrans Payment Challenge'
                    ]
                ]);
            }
            else
            {
                return response()->json([
                    'meta' => [
                        'code' => 200,
                        'message' => 'Midtrans Payment not Settlement'
                    ]
                ]);
            }

            return response()->json([
                'meta' => [
                    'code' => 200,
                    'message' => 'Midtrans Notification Success'
                ]
            ]);
        }
    }
    private function sendMessage($transaction)
    {

        Http::withHeaders([
            'Authorization' => 'jgFdAHng9cKRd@NpfMif',
        ])
        ->post('https://api.fonnte.com/send', [
            'target' => $transaction->user->no_hp . '|' . $transaction->user->name . '|' . $transaction->kode . '|' . $transaction->transaction_details->pluck('produk.namaproduk')->implode(','),
            'message' => 'Halo *{name}*,'. "\n" .'Pesanan Anda dengan kode transaksi *{var1}* yaitu pesanan *{var2}* berhasil dibuat.'. "\n" .'Silahkan Cek Detail Pesanan Anda ',
            'delay' => '2'
        ]);

    }
}

