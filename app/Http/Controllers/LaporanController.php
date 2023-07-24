<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Ulasan;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\TransactionDetail;
use Illuminate\Support\Facades\Auth;

class LaporanController extends Controller
{
    public function transaksi(){
        $data = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->whereHas('produk', function($produk){
            $produk->where('user_id', Auth::user()->id);
        })->get();

        return view('member.laporan.historitransaksi',[
            'data' => $data
        ]);
    }
    public function pelanggan(){
        $data = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->whereHas('produk', function($produk){
            $produk->where('user_id', Auth::user()->id);
        })->get();

        return view('member.laporan.historipelanggan',[
            'data' => $data
        ]);
    }
    public function produk(){
        $data = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->whereHas('produk', function($produk){
            $produk->where('user_id', Auth::user()->id);
        })->where('status','SELESAI')->get();
        $totalSoldProducts = Transaction::with('transaction_details')->get()->sum(function ($transaction) {
            return $transaction->totalSoldQuantity();
        });
        $bestSellingProducts = TransactionDetail::with('produk','transaction')->soldProductsCount()->get();
        // dd($bestSellingProducts);
        return view('member.laporan.historiproduk',[
            'data' => $data,
            'total' => $totalSoldProducts,
            'jual' => $bestSellingProducts,
        ]);
    }
    public function review(){
        $produk = Produk::with('ulasan','gambar','users')->where('user_id', Auth::user()->id)->get();
        $ulasan = Ulasan::where('produk_id',Auth::user()->id)->get();

        return view('member.laporan.historireview',[
            'ulasan' => $produk,
            'review' => $ulasan,
        ]);

    }

    public function laba(){
        $data = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->whereHas('produk', function($produk){
            $produk->where('user_id', Auth::user()->id);
        })->get();

        foreach($data as $total){
            $pendapatan = $total->transaction->sum('total_harga');
        }

        return view('member.laporan.laba',[
            'data' => $data,
            'pendapatan' => $pendapatan,
        ]);
    }


}
