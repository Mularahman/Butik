<?php

namespace App\Http\Controllers;

use Midtrans\Snap;
use App\Models\Kota;
use App\Models\User;
use Midtrans\Config;
use App\Models\Kurir;
use App\Models\Provinsi;
use App\Models\Kecamatan;
use App\Models\Keranjang;
use Midtrans\Notification;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\TransactionDetail;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    public function checkout(Request $request ){
        $keranjang = Keranjang::with('produk', 'user', 'produk.gambar')->where('user_id', Auth::user()->id)->get();
        $id = Auth::user()->id;
        $user = User::where('id', $id)->first();
        $provinsi = Provinsi::with('kecamatans','kotas')->get();
        $kota = Kota::all();
        $kecamatan = Kecamatan::all();
        $kurir = Kurir::all();
        return view('buatpesanan',[
            'keranjang' => $keranjang,
            'user' => $user,
            'kurir' => $kurir,
            'id' => $id,
            'provinsi' => $provinsi,
            'kota' => $kota,
            'kecamatan' => $kecamatan,
        ]);
    }
    public function diskon(Request $request){
        $request->validate([
            'diskon_kode' => 'required|string|max:10',
        ]);

        $inputData = $request->all();
        $totalbayar = $request->total;

        $diskon = Kupon::where('code', $inputData['diskon_kode'])->first();

        if ($diskon && $diskon->is_active && now()->between($diskon->start_date, $diskon->end_date)) {

            $hargadiskon = $diskon->percentage / 100 * $totalbayar;


            $totalbayar -= $hargadiskon;
        }
        if (!$diskon) {

            return redirect()->back()->with('error', 'Kode diskon tidak valid.');
        }

        if (!$diskon->is_active || now()->lt($diskon->start_date) || now()->gt($diskon->end_date)) {

            return redirect()->back()->with('error', 'Diskon tidak berlaku saat ini.');
        }
    }
    public function transaksi(Request $request)
    {
        $user = Auth::user();
        $user->update($request->except(['total','subtotal','diskon']));
        $date = Carbon::now();
        $kode = '#INVOICE-' . mt_rand(0000,9999);
        $keranjang = Keranjang::with('produk', 'user', 'produk.gambar')->where('user_id', Auth::user()->id)->get();
        $transaksi = Transaction::create([
            'user_id' => Auth::user()->id,
            'tanggal' => $date->toDateString(),
            'diskon' => $request->diskon,
            'total_harga' => (int)$request->total,
            'transaction_status' => 'PENDING',
            'kode' => $kode
        ]);
        foreach ($keranjang as $cart) {

            $trx = 'TRX-' . mt_rand(0000,9999);

            TransactionDetail::create([
                'transaction_id' => $transaksi->id,
                'produk_id' => $cart->produk->id,
                'harga' => $cart->produk->hargaproduk,
                'status' => 'PENDING',
                'resi' => '',
                'kode' => $trx,
                'qty' => $cart->jumlah,
                'kurir' => $request->kurir,
                'catatan' => $request->catatan
            ]);
        }

        Keranjang::with('produk', 'user', 'produk.gambar')->where('user_id', Auth::user()->id)->delete();

        Config::$serverKey = config('services.midtrans.serverKey');
        Config::$isProduction = config('services.midtrans.isProduction');
        Config::$isSanitized = config('services.midtrans.isSanitized');
        Config::$is3ds = config('services.midtrans.is3ds');

        $midtrans = [
            'transaction_details' => [
                'order_id'=> $kode . '/' . $transaksi->id,
                'gross_amount'=> (int) $request->total
            ],
            'customer_details' =>[
                'first_name' => Auth::user()->name,
                'email' => Auth::user()->email,
            ],
            'enabled_payments' => [
                'gopay', 'bank_transfer', 'bni_va', 'bri_va','indomaret','bca_klikbca'
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

        // Handle notification status midtrans
        if ($status == 'capture') {
            if ($type == 'credit_card'){
                if($fraud == 'challenge'){
                    $transaction->transaction_status = 'PENDING';
                }
                else {
                    $transaction->transaction_status = 'SUCCESS';
                }
            }
        }
        else if ($status == 'settlement'){
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
}

