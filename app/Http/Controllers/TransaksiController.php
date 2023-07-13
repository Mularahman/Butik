<?php

namespace App\Http\Controllers;

use Midtrans\Snap;
use Midtrans\Config;
use Midtrans\Notification;
use App\Models\Keranjang;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\TransactionDetail;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    public function transaksi(Request $request){

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
                'transactions_id' => $transaksi->id,
                'produk_id' => $cart->produk->id,
                'harga' => $cart->produk->hargaproduk,
                'status' => 'PENDING',
                'resi' => '',
                'kode' => $trx
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

