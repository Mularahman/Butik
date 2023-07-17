<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\User;
use App\Models\Gambar;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Provinsi;
use App\Models\Kecamatan;
use App\Models\Keranjang;
use App\Models\Subkategori;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\TransactionDetail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PelangganController extends Controller
{
    //transaksi
    public function transactionbuy(){

        $user = User::all();
        $transaction = Transaction::with('user')->where(['transaction_status' => 'SUCCESS' , 'user_id'=> Auth::user()->id])->get();
        $transactiondetail = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->whereHas('transaction', function($produk){
            $produk->where('user_id', Auth::user()->id);
        })->where('status','PENDING')->get();
        $keranjang = Keranjang::where('user_id', Auth::user()->id)->with('produk', 'user', 'produk.gambar')->get();

        if(request('search')){
            $transaction = Transaction::with('user')->where('user_id', Auth::user()->id)->where('kode','LIKE','%'.request('search'). '%')->get();

         }
        return view('pelanggan.transactions.transactionbuy',[

            'keranjang' => $keranjang,
            'transaction' => $transaction,
            'transactiondetail' => $transactiondetail,
        ]);
    }
    public function transactionconfirmed(){
        $user = User::all();
        $transaction = Transaction::with('user')->where(['transaction_status' => 'SUCCESS' , 'user_id'=> Auth::user()->id])->get();
        $transactiondetail = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->whereHas('transaction', function($produk){
            $produk->where('user_id', Auth::user()->id);
        })->where('status','DIKONFIRMASI')->get();
        $keranjang = Keranjang::where('user_id', Auth::user()->id)->with('produk', 'user', 'produk.gambar')->get();
        return view('pelanggan.transactions.buy.transactionconfirmed',[
            'user' => $user,
            'keranjang' => $keranjang,
            'transaction' => $transaction,
            'transactiondetail' => $transactiondetail,
        ]);
    }
    public function transactionpacking(){
        $user = User::all();
        $transaction = Transaction::with('user')->where(['transaction_status' => 'SUCCESS' , 'user_id'=> Auth::user()->id])->get();
        $transactiondetail = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->whereHas('transaction', function($produk){
            $produk->where('user_id', Auth::user()->id);
        })->where('status','DIKEMAS')->get();
        $keranjang = Keranjang::where('user_id', Auth::user()->id)->with('produk', 'user', 'produk.gambar')->get();
        return view('pelanggan.transactions.buy.transactionpacking',[
            'user' => $user,
            'keranjang' => $keranjang,
            'transaction' => $transaction,
            'transactiondetail' => $transactiondetail,
        ]);
    }
    public function transactiondelivered(){
        $user = User::all();
        $transaction = Transaction::with('user')->where(['transaction_status' => 'SUCCESS' , 'user_id'=> Auth::user()->id])->get();
        $transactiondetail = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->whereHas('transaction', function($produk){
            $produk->where('user_id', Auth::user()->id);
        })->where('status','DALAM PERJALANAN')->get();
        $keranjang = Keranjang::where('user_id', Auth::user()->id)->with('produk', 'user', 'produk.gambar')->get();
        return view('pelanggan.transactions.buy.transactiondelivered',[
            'user' => $user,
            'keranjang' => $keranjang,
            'transaction' => $transaction,
            'transactiondetail' => $transactiondetail,
        ]);
    }
    public function transactioncomplated(){
        $user = User::all();
        $transaction = Transaction::with('user')->where(['transaction_status' => 'SUCCESS' , 'user_id'=> Auth::user()->id])->get();
        $transactiondetail = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->whereHas('transaction', function($produk){
            $produk->where('user_id', Auth::user()->id);
        })->where('status','SELESAI')->get();
        $keranjang = Keranjang::where('user_id', Auth::user()->id)->with('produk', 'user', 'produk.gambar')->get();
        return view('pelanggan.transactions.buy.transactioncomplated',[
            'user' => $user,
            'keranjang' => $keranjang,
            'transaction' => $transaction,
            'transactiondetail' => $transactiondetail,
        ]);
    }
    public function transaction_detail($id){
        $user = User::all();
        $transaction = Transaction::with('user')->where(['id' => $id , 'user_id'=> Auth::user()->id])->first();
        $transactiondetail = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->where('transactions_id',$id)->get();


        $keranjang = Keranjang::where('user_id', Auth::user()->id)->with('produk', 'user', 'produk.gambar')->get();

        return view('pelanggan.transactions.transaction_detail',[
            'user' => $user,
            'keranjang' => $keranjang,
            'keranjang' => $keranjang,
            'transaction' => $transaction,
            'transactiondetail' => $transactiondetail,
        ]);
    }
    public function transaction_selesai(Request $request, $id){

        $transaksi = TransactionDetail::findOrFail($id);

        $transaksi->status = 'SELESAI';
        $transaksi->save();
        return redirect()->route('review.product', $request->id)->with('success', 'Pesanan Selesai !');
    }

    //myaccount
    public function myaccount(){
        $id = Auth::user()->id;
        $user = User::where('id', $id)->first();

        $keranjang = Keranjang::where('user_id', $id);
        $provinsi = Provinsi::with('kecamatans','kotas')->get();
        $kota = Kota::all();
        $kecamatan = Kecamatan::all();
        return view('pelanggan.myaccount.myaccount',[
            'keranjang' => $keranjang,
            'user' => $user,
            'id' => $id,

            'provinsi' => $provinsi,
            'kota' => $kota,
            'kecamatan' => $kecamatan,
        ]);
    }

    public function update_profile(Request $request ,$id){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns',
            'tahun' => 'required',
            'jenis_kelamin' => 'required',
            'image' => 'required|file|max:800'
        ]);


        $user = User::find($id);

            if($request->file('image')){
                if($request->oldimage){
                    Storage::delete($request->oldimage);
                }
                $data['image'] = $request->file('image')->store('public/photo-profile');
            }

            $user->update([
                'name' => $data['name'],
                'email' => $data['email'],
                'jenis_kelamin' => $data['jenis_kelamin'],
                'tahun' => $data['tahun'],
                'image' => $data['image'],
            ]);


            return redirect()->back()->with('success', 'Data update successfully!');
    }
    public function update_password(Request $request ,$id)
    {

        $data = $request->validate([
            'oldpassword' => 'required',
            'newpassword' => 'required',
            'confirmpassword' => 'required',

        ]);
        $user = User::find($id);

        if (!Hash::check($data['oldpassword'], $user->password)) {
            return redirect()->back()->with('error', 'Password salah!');
        }

        if($data['newpassword'] != $data['confirmpassword']) {
            return redirect()->back()->with('error', 'Password konfirmasi salah!');
        }

        $user->password = Hash::make($data['newpassword']);
        $user->save();

        return redirect()->back()->with('success', 'Password Berhasil diganti!');
    }
    public function update_alamat(Request $request ,$id){

        $data = $this->validate($request,[

            'provinsi_id' => 'required',
            'kota_id' => 'required',
            'kecamatan_id' => 'required',
            'alamat1' => 'required',
            'alamat2' => 'required',
            'negara' => 'required',
            'kodepos' => 'required',
            'no_hp' => 'required',

        ]);


        $user = User::find($id);
        $user->update($data);

            return redirect()->back()->with('success', 'Data update successfully!');
    }

}
