<?php

namespace App\Http\Controllers;

use App\Models\Ulasan;
use App\Models\Keranjang;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\TransactionDetail;
use Illuminate\Support\Facades\Auth;

class UlasanController extends Controller
{
    //
    public function ulasan(){

        $transaction = Transaction::with('user')->where(['transaction_status' => 'SUCCESS' , 'user_id'=> Auth::user()->id])->get();
        $transactiondetail = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->whereHas('transaction', function($produk){
            $produk->where('user_id', Auth::user()->id);
        })->where('status','SELESAI')->get();
        $keranjang = Keranjang::where('user_id', Auth::user()->id)->with('produk', 'user', 'produk.gambar')->get();
        return view('pelanggan.ulasan.ulasan',[
            'keranjang' => $keranjang,
            'transaction' => $transaction,
            'transactiondetail' => $transactiondetail,
        ]);
    }
    public function ulasanproduk($id){
        $keranjang = Keranjang::where('user_id', Auth::user()->id)->with('produk', 'user', 'produk.gambar')->get();
        $transactiondetail = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->whereHas('transaction', function($produk){
            $produk->where('user_id', Auth::user()->id);
        })->where('status','SELESAI')->where('produk_id',$id)->first();


        return view('pelanggan.ulasan.add_ulasan',[
            'keranjang' => $keranjang,
            'transactiondetail' => $transactiondetail,

        ]);
    }
    public function ulasanaksi(Request $request, $id){

        $data = $this->validate($request,[
            'ulasan' => 'required|string|max:255',
            'bintang' => 'required|integer|min:1|max:5',
        ]);
        $date = Carbon::now();


        $ulasan = new Ulasan([
            'produk_id' => $id,
            'user_id' => auth()->user()->id,
            'tanggal' => $date->toDateString(),
            'ulasan' => $request->ulasan,
            'bintang' => $request->bintang,
        ]);
        $ulasan->save();

        return redirect('/transaction-complated');
    }
}
