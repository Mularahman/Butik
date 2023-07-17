<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\User;
use App\Models\Gambar;
use App\Models\Produk;
use App\Models\Ulasan;
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
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class MemberController extends Controller
{
     //dashboard
     public function index(){
        $user = User::all();
        $keranjang = Keranjang::where('user_id', Auth::user()->id)->get();
        return view('member.dashboard',[
            'user' => $user,
            'keranjang' => $keranjang,
        ]);
    }
     //myproduct
     public function myproduct(){
        $user = User::all();
        $keranjang = Keranjang::where('user_id', Auth::user()->id)->get();
        $produk = Produk::with('kategori', 'users','gambar')->where('user_id', Auth::user()->id)->get();
        return view('member.myproduct.myproduct',[
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
        return view('member.myproduct.add_product',[
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


        return redirect('/myproduct-member')->with('success', 'Berhasil Menambah Data Produk!');
    }
    public function edit_product($id){

        $produk = Produk::with('kategori', 'subkategori')->where('id', $id)->get();
        $kategori = Kategori::with('subkategori')->get();
        $subkategori = Subkategori::with('kategori')->get();
        $keranjang = Keranjang::where('user_id', Auth::user()->id)->get();

        return view('member.myproduct.edit_product',[
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

        return redirect('/myproduct-member')->with('success', 'Berhasil Mengedit Data Produk!');
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


    public function transactionactive(){
        $user = User::all();
        $transaction = Transaction::with('user')->where(['transaction_status' => 'SUCCESS' , 'user_id'=> Auth::user()->id])->get();
        $transactiondetail = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->whereHas('produk', function($produk){
            $produk->where('user_id', Auth::user()->id);
        })->where('status','PENDING')->get();
        $keranjang = Keranjang::where('user_id', Auth::user()->id)->with('produk', 'user', 'produk.gambar')->get();

        return view('member.transactions.sell.transactionactive',[
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
        return view('member.transactions.sell.transactionconfirmed',[
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
        return view('member.transactions.sell.transactionpacking',[
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
        return view('member.transactions.sell.transactiondelivered',[
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
        return view('member.transactions.sell.transactioncomplated',[
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

        return view('member.transactions.transaction_details',[
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

        return view('member.transactions.transaction_detail_dikirim',[
            'user' => $user,
            'keranjang' => $keranjang,
            'keranjang' => $keranjang,
            'transaction' => $transaction,
            'transactiondetail' => $transactiondetail,
        ]);
    }

    //reviews
    public function review(){
        $produk = Produk::with('ulasan','gambar','users')->where('user_id', Auth::user()->id)->get();
        $ulasan = Ulasan::where('produk_id',Auth::user()->id)->get();

        $keranjang = Keranjang::where('user_id', Auth::user()->id)->with('produk', 'user', 'produk.gambar')->get();
        return view('member.review.review',[
            'keranjang' => $keranjang,
            'ulasan' => $produk,


        ]);
    }

    //store setting
    public function store(){
        $kategori = Kategori::with('subkategori')->get();
        $id = Auth::user()->id;
        $produk = Produk::with('users')->where('user_id', $id)->first();
        $user = User::where('id', $id)->first();
        $keranjang = Keranjang::where('user_id', $id)->get();
        return view('member.store_setting.store',[
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
            'role' => $data['status_toko'] ? 'member' : 'member',
        ]);

        return redirect('/store_settings')->with('success', 'Status Toko Berhasil Diubah!');

    }
}
