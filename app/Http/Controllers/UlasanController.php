<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Refund;
use App\Models\Ulasan;
use App\Models\Keranjang;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\TransactionDetail;
use Illuminate\Support\Facades\Auth;

class UlasanController extends Controller
{
    //
    public function ulasan(){

        $transaction = Transaction::with('user')->where(['transaction_status' => 'SUCCESS' , 'user_id'=> Auth::user()->id])->get();
        $transactiondetail = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar', 'produk.ulasan')->whereHas('transaction', function($produk){
            $produk->where('user_id', Auth::user()->id);
        })->where('status','SELESAI')->get();
        $ulasan = Ulasan::with('produk','user')->where('user_id', Auth::user()->id)->get();
        $keranjang = Keranjang::where('user_id', Auth::user()->id)->with('produk', 'user', 'produk.gambar')->get();

        return view('pelanggan.ulasan.ulasan',[
            'keranjang' => $keranjang,
            'transaction' => $transaction,
            'transactiondetail' => $transactiondetail,
            'ulasan' => $ulasan,
        ]);
    }
    public function produk($id){
        $keranjang = Keranjang::all();
        if(Auth::check()){

            $keranjang = Keranjang::where('user_id', Auth::user()->id)->get();
        }
        $produk = Produk::with('kategori','users','gambar','ulasan')->where('id', $id)->get();

        return view('detail',[
            'produk' => $produk,
            'keranjang' => $keranjang,
        ]);
    }

    public function ulasanproduk($id){
        $keranjang = Keranjang::where('user_id', Auth::user()->id)->with('produk', 'user', 'produk.gambar')->get();
        $transactiondetail = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->whereHas('transaction', function($produk){
            $produk->where('user_id', Auth::user()->id);
        })->where('status','SELESAI')->where('transaction_id',$id)->first();


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
    public function refund(){
        $refunds = Refund::with('transaction','user')->where('user_id',Auth::user()->id)->get();
        $produk =  TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->whereHas('transaction', function($produk){
            $produk->where('user_id', Auth::user()->id);
        })->where('status','SELESAI')->get();

        $keranjang = Keranjang::where('user_id', Auth::user()->id)->with('produk', 'user', 'produk.gambar')->get();

        return view('pelanggan.refund.refund',[
            'keranjang' => $keranjang,
            'refunds' => $refunds,
            'produk' => $produk,

        ]);
    }
    public function formrefund($id){
        $refunds = Refund::with('transaction','user')->where('user_id',Auth::user()->id)->get();
        $produk =  TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->whereHas('transaction', function($produk){
            $produk->where('user_id', Auth::user()->id);
        })->where('status','SELESAI')->get();

        $keranjang = Keranjang::where('user_id', Auth::user()->id)->with('produk', 'user', 'produk.gambar')->get();
        $pengembalian = Transaction::find($id)->transaction_details;
        return response()->json($pengembalian);



    }
    public function refundaksi(Request $request){

        $data = $this->validate($request,[
            'alasan' => 'required|string|max:255',

        ]);
        $date = Carbon::now();
        $refund = new Refund([
            'transaction_id' => $request->kode,
            'user_id' => auth()->user()->id,
            'tanggal' => $date->toDateString(),
            'alasan' => $request->alasan,
            'status' => 'PENDING',
        ]);
        $refund->save();

        return redirect('/refund')->with('success','Pengajuan Berhasil Dikirim!');

    }
    public function refundtolak(Request $request, $id){

        $refund=Refund::findOrFail($id);
        $refund->status='DITOLAK';
        $refund->save();

        return redirect('/refund-member')->with('success', 'Pengajuan Refund Berhasil Ditolak!');
    }
    public function refundterima(Request $request, $id){

        $refund=Refund::findOrFail($id);
        $refund->status='DITERIMA';
        $refund->save();

        return redirect('/refund-member')->with('success', 'Pengajuan Refund Berhasil Diterima!');
    }
}
