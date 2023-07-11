<?php

namespace App\Http\Controllers;

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
            'total_harga' => $request->total,
            'status_transaksi' => 'PENDDING',
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


        return redirect('/transaction_buy')->with('success','Transaksi Sedang Di Prosess !');


    }
}
