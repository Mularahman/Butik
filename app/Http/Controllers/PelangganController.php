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
    //dashboard
    public function index(){
        $user = User::all();
        $keranjang = Keranjang::where('user_id', Auth::user()->id)->get();
        return view('pelanggan.dashboard',[
            'user' => $user,
            'keranjang' => $keranjang,
        ]);
    }

    //myproduct
    public function myproduct(){
        $user = User::all();
        $keranjang = Keranjang::where('user_id', Auth::user()->id)->get();
        $produk = Produk::with('kategori', 'users','gambar')->where('user_id', Auth::user()->id)->get();
        return view('pelanggan.myproduct.myproduct',[
            'user' => $user,
            'produk' => $produk,
            'keranjang' => $keranjang,
        ]);
    }
    public function add_product(){
        $kategori = Kategori::with('subkategori')->get();
        $subkategori = Subkategori::with('kategori')->get();
        $user = User::all();
        $id = Auth::user()->id;
        $produk = Produk::with('gambar', 'users')->where('user_id', $id)->get();

        $keranjang = Keranjang::where('user_id', $id)->get();
        return view('pelanggan.myproduct.add_product',[
            'user' => $user,
            'kategori' => $kategori,
            'keranjang' => $keranjang,
            'produk' => $produk,
            'subkategori' => $subkategori,
        ]);
    }

    public function add_product_aksi(Request $request){

        $data = $request->all();


        Produk::create([
            'user_id' => $data['user_id'],
            'kategori_id' => $data['kategori_id'],
            'subkategori_id' => $data['subkategori_id'],
            'namaproduk' => $data['namaproduk'],
            'kodeproduk' => $data['kodeproduk'],
            'beratproduk' => $data['beratproduk'],
            'ukuranproduk' => $data['ukuranproduk'],
            'warnaproduk' => $data['warnaproduk'],
            'stokproduk' => $data['stokproduk'],
            'hargaproduk' => $data['hargaproduk'],
            'deskripsishort' => $data['deskripsishort'],
            'deskripsiproduk' => $data['deskripsiproduk'],
            'diskon' => $data['diskon'],
            // 'promo' => $data['promo'],
            // 'produkbaru' => $data['produkbaru'],
            // 'barudatang' => $data['barudatang'],
            // 'bestseller' => $data['bestseller'],
            'status' => 1,



        ]);


        $id = Produk::orderBy('id','desc')->first();
        if ($request->hasFile('thumbnail')) {
            $gambarArray = $request->file('thumbnail');

            foreach ($gambarArray as $key=>$gambar) {
               $insert = [
                'produk_id' => $id->id,
                'thumbnail' => $gambarArray[$key]->store('public/thumbnail')
               ];

                DB::table('gambars')->insert($insert);
            }
        }


        return redirect('/myproduct')->with('success', 'Berhasil Menambah Data Produk!');
    }
    public function edit_product($id){

        $produk = Produk::with('kategori', 'subkategori')->where('id', $id)->get();
        $kategori = Kategori::with('subkategori')->get();
        $subkategori = Subkategori::with('kategori')->get();
        $keranjang = Keranjang::where('user_id', Auth::user()->id)->get();

        return view('pelanggan.myproduct.edit_product',[
            'produk' => $produk,
            'kategori' => $kategori,
            'keranjang' => $keranjang,
            'subkategori' => $subkategori,
            'id' => $id
        ]);
    }
    public function edit_product_aksi($id, Request $request){
        $data = $request->validate([
            'namaproduk' => 'required',
            'kodeproduk' => 'required',
            'beratproduk' => 'required',
            'warnaproduk' => 'required',
            'ukuranproduk' => 'required',
            'stokproduk' => 'required',
            'hargaproduk' => 'required',
            'diskon' => 'required',
            'user_id' => 'required',
            'kategori_id' => 'required',
            'subkategori_id' => 'required',
            'deskripsishort' => 'required',
            'deskripsiproduk' => 'required',
            // 'promo' => 'required',
            // 'bestseller' => 'required',
            // 'barudatang' => 'required',
            // 'produkbaru' => 'required',
            // 'status' => 'required',


        ]);
        $update = Produk::Find($id);


        $update->update($data);

        return redirect('/myproduct')->with('success', 'Berhasil Mengedit Data Produk!');
    }
    public function myproductgallery(Request $request){

        $data = $request->all();

        $data['thumbnail'] = $request->file('thumbnail')->store('public/thumbnail');

        Gambar::create($data);
        return redirect()->route('dashboard-product-details',$request->produk_id);
    }
    public function myproductgallerydelete(Request $request, $id){
        $data = Gambar::findOrFail($id);

        if($data->thumbnail){
            Storage::delete($data->thumbnail);
        }
        $data->delete();
        return back();

    }

    //transaction

    public function transactionbuy(){

        $transaction = Transaction::with('user')->where('user_id', Auth::user()->id)->get();
        $transactiondetail = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->whereHas('produk', function($produk){
            $produk->where('user_id', Auth::user()->id);
        })->get();
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
    public function transactionactive(){
        $user = User::all();
        $transaction = Transaction::with('user')->where(['transaction_status' => 'SUCCESS' , 'user_id'=> Auth::user()->id])->get();
        $transactiondetail = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->whereHas('produk', function($produk){
            $produk->where('user_id', Auth::user()->id);
        })->where('status','PENDING')->get();
        $keranjang = Keranjang::where('user_id', Auth::user()->id)->with('produk', 'user', 'produk.gambar')->get();

        return view('pelanggan.transactions.sell.transactionactive',[
            'user' => $user,
            'keranjang' => $keranjang,
            'transaction' => $transaction,
            'transactiondetail' => $transactiondetail,
        ]);
    }
    public function transactionactive_aksi(Request $request ,$id){

        $transaksi = TransactionDetail::findOrFail($id);

        if($transaksi->status == 'PENDING'){
            $transaksi->status = 'DIKONFIRMASI';
            $transaksi->save();
            return redirect('/transaction_confirmed')->with('success', 'Pesanan Dikonfirmasi !');

        }else if ($transaksi->status == 'DIKONFIRMASI') {
            $transaksi->status = 'DIKEMAS';
            $transaksi->save();
        return redirect('/transaction_packing')->with('success', 'Pesanan DiKemas !');

        }else if ($transaksi->status == 'DIKEMAS') {

            $transaksi->status = 'DALAM PERJALANAN';
            $transaksi->resi = $request->resi;
            $transaksi->save();
            return redirect('/transaction_delivered')->with('success', 'Pesanan Dalam Perjalanan !');

        }

    }
    public function transactionconfirmed(){
        $user = User::all();
        $transaction = Transaction::with('user')->where(['transaction_status' => 'SUCCESS' , 'user_id'=> Auth::user()->id])->get();
        $transactiondetail = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->whereHas('produk', function($produk){
            $produk->where('user_id', Auth::user()->id);
        })->where('status','DIKONFIRMASI')->get();
        $keranjang = Keranjang::where('user_id', Auth::user()->id)->with('produk', 'user', 'produk.gambar')->get();
        return view('pelanggan.transactions.sell.transactionconfirmed',[
            'user' => $user,
            'keranjang' => $keranjang,
            'transaction' => $transaction,
            'transactiondetail' => $transactiondetail,
        ]);
    }
    public function transactionpacking(){
        $user = User::all();
        $transaction = Transaction::with('user')->where(['transaction_status' => 'SUCCESS' , 'user_id'=> Auth::user()->id])->get();
        $transactiondetail = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->whereHas('produk', function($produk){
            $produk->where('user_id', Auth::user()->id);
        })->where('status','DIKEMAS')->get();
        $keranjang = Keranjang::where('user_id', Auth::user()->id)->with('produk', 'user', 'produk.gambar')->get();
        return view('pelanggan.transactions.sell.transactionpacking',[
            'user' => $user,
            'keranjang' => $keranjang,
            'transaction' => $transaction,
            'transactiondetail' => $transactiondetail,
        ]);
    }
    public function transactiondelivered(){
        $user = User::all();
        $transaction = Transaction::with('user')->where(['transaction_status' => 'SUCCESS' , 'user_id'=> Auth::user()->id])->get();
        $transactiondetail = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->whereHas('produk', function($produk){
            $produk->where('user_id', Auth::user()->id);
        })->where('status','DALAM PERJALANAN')->get();
        $keranjang = Keranjang::where('user_id', Auth::user()->id)->with('produk', 'user', 'produk.gambar')->get();
        return view('pelanggan.transactions.sell.transactiondelivered',[
            'user' => $user,
            'keranjang' => $keranjang,
            'transaction' => $transaction,
            'transactiondetail' => $transactiondetail,
        ]);
    }
    public function transactioncomplated(){
        $user = User::all();
        $transaction = Transaction::with('user')->where(['transaction_status' => 'SUCCESS' , 'user_id'=> Auth::user()->id])->get();
        $transactiondetail = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->whereHas('produk', function($produk){
            $produk->where('user_id', Auth::user()->id);
        })->where('status','SELESAI')->get();
        $keranjang = Keranjang::where('user_id', Auth::user()->id)->with('produk', 'user', 'produk.gambar')->get();
        return view('pelanggan.transactions.sell.transactioncomplated',[
            'user' => $user,
            'keranjang' => $keranjang,
            'transaction' => $transaction,
            'transactiondetail' => $transactiondetail,
        ]);
    }

    public function transaction_details($id){
        $user = User::all();
        $transaction = Transaction::with('user')->where(['transaction_status' => 'PENDDING' , 'user_id'=> Auth::user()->id])->get();
        $transactiondetail = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->whereHas('produk', function($produk){
            $produk->where('user_id', Auth::user()->id);
        })->where('id',$id)->first();

        $keranjang = Keranjang::where('user_id', Auth::user()->id)->with('produk', 'user', 'produk.gambar')->get();

        return view('pelanggan.transactions.transaction_details',[
            'user' => $user,
            'keranjang' => $keranjang,
            'keranjang' => $keranjang,
            'transaction' => $transaction,
            'transactiondetail' => $transactiondetail,
        ]);
    }
    public function transaction_detail_dikirim($id){
        $user = User::all();
        $transaction = Transaction::with('user')->where(['transaction_status' => 'PENDDING' , 'user_id'=> Auth::user()->id])->get();
        $transactiondetail = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->whereHas('produk', function($produk){
            $produk->where('user_id', Auth::user()->id);
        })->where('id',$id)->first();

        $keranjang = Keranjang::where('user_id', Auth::user()->id)->with('produk', 'user', 'produk.gambar')->get();

        return view('pelanggan.transactions.transaction_detail_dikirim',[
            'user' => $user,
            'keranjang' => $keranjang,
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
        return redirect('/transaction_buy')->with('success', 'Pesanan Selesai !');
    }


    //store setting
    public function store(){
        $kategori = Kategori::with('subkategori')->get();
        $id = Auth::user()->id;
        $produk = Produk::with('users')->where('user_id', $id)->first();
        $user = User::where('id', $id)->first();
        $keranjang = Keranjang::where('user_id', $id)->get();
        return view('pelanggan.store_setting.store',[
            'produk' => $produk,
            'user' => $user,
            'id' => $id,
            'kategori' => $kategori,
            'keranjang' => $keranjang,
        ]);
    }
    public function store_aksi(Request $request, $id ){
        $data = $request->validate([
            'nama_toko' => 'required',
            'kategori_id' => 'required',
            'status_toko' => 'required',
        ]);


        $update = User::findOrFail($id);
        $update->update([
            'nama_toko' => isset($data['nama_toko']) ? $data['nama_toko'] : '',
            'kategori_id' => isset($data['kategori_id']) ? $data['kategori_id'] : 0,
            'status_toko' => $data['status_toko'] ? 1 : 0,
            'role' => $data['status_toko'] ? 'member' : 'pelanggan',
        ]);

        return redirect('/store_settings')->with('success', 'Status Toko Berhasil Diubah!');

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
