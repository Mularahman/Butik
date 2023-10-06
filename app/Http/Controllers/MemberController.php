<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\User;
use App\Models\Gambar;
use App\Models\Produk;
use App\Models\Refund;
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
        $produk = Produk::with('kategori', 'users','gambar')->where('user_id', Auth::user()->id)->get();
        $transaction = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->whereHas('produk', function($produk){
            $produk->where('user_id', Auth::user()->id);
        })->get();
        $customer = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->whereHas('produk', function($produk){
            $produk->where('user_id', Auth::user()->id);
        })->get();
        $recent = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->whereHas('produk', function($produk){
            $produk->where('user_id', Auth::user()->id);
        })->latest()->take(3)->get();
        $data = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->whereHas('produk', function($produk){
            $produk->where('user_id', Auth::user()->id);
        })->where('status','SELESAI')->get();

        $pendapatan = 0;
        foreach ($data as $item) {
            $pendapatan += $item->transaction->total_harga;

        }

        $bulanAngka = [];
        $terjual = [];

        $currentYear = date('Y');

        $produkterjual = TransactionDetail::with('transaction', 'produk', 'produk.users', 'produk.gambar')
            ->whereHas('produk', function ($produk) {
                $produk->where('user_id', Auth::user()->id);
            })
            ->where('status', 'SELESAI')
            ->whereYear('created_at', $currentYear)
            ->groupBy(DB::raw('MONTH(created_at)'))
            ->selectRaw('MONTH(created_at) as month, sum(qty) as total_sold')
            ->orderBy('month')
            ->get();


            $bulanNama = [
                1 => 'Januari',
                2 => 'Februari',
                3 => 'Maret',
                4 => 'April',
                5 => 'Mei',
                6 => 'Juni',
                7 => 'Juli',
                8 => 'Agustus',
                9 => 'September',
                10 => 'Oktober',
                11 => 'November',
                12 => 'Desember',
            ];
        foreach($produkterjual as $jual){
            $bulanAngka[] = $jual->month;

            $terjual[] = (int)$jual->total_sold;
        }
        $bulanNamaIndonesia = array_map(function ($bulan) use ($bulanNama) {
            return $bulanNama[$bulan];
        }, $bulanAngka);


        return view('member.dashboard',[
            'user' => $user,
            'produk' => $produk,
            'transaction' => $transaction,
            'customer' => $customer,
            'pendapatan' => $pendapatan,
            'recent' => $recent,
            'terjual' => $terjual,
            'bulan' => $bulanNamaIndonesia,
        ]);
    }
     //myproduct
     public function myproduct(){
        $user = User::all();
        $produk = Produk::with('kategori', 'users','gambar')->where('user_id', Auth::user()->id)->get();
        return view('member.myproduct.myproduct',[
            'user' => $user,
            'produk' => $produk,
        ]);
    }
    public function add_product(){
        $kategori = Kategori::with('subkategori')->get();

        $user = User::all();
        $id = Auth::user()->id;
        $produk = Produk::with('gambar', 'users')->where('user_id', $id)->get();
        return view('member.myproduct.add_product',[
            'user' => $user,
            'kategori' => $kategori,
            'produk' => $produk,

        ]);
    }

    public function getsubkategori(Request $request, $id)
    {
        $subkategori = Subkategori::where('kategori_id', $id)->get();
        return response()->json($subkategori);
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
            // 'diskon' => $data['diskon'],
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

        return view('member.myproduct.edit_product',[
            'produk' => $produk,
            'kategori' => $kategori,
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
            // 'diskon' => 'required',
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

    public function deleteproduk(Request $request, $id){
       $data = Produk::findOrFail($id);
       $data->delete();
       return redirect('/myproduct-member')->with('success', 'Berhasil Menghapus Data Produk!');

    }
    //transaction


    public function transactionactive(){
        $user = User::all();
        $transaction = Transaction::with('user')->where(['transaction_status' => 'SUCCESS' , 'user_id'=> Auth::user()->id])->get();
        $transactiondetail = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->whereHas('produk', function($produk){
            $produk->where('user_id', Auth::user()->id);
        })->where('status','PENDING')->get();

        return view('member.transactions.sell.transactionactive',[
            'user' => $user,
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
        return view('member.transactions.sell.transactionconfirmed',[
            'user' => $user,
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
        return view('member.transactions.sell.transactionpacking',[
            'user' => $user,
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
        return view('member.transactions.sell.transactiondelivered',[
            'user' => $user,
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
        return view('member.transactions.sell.transactioncomplated',[
            'user' => $user,
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


        return view('member.transactions.transaction_details',[
            'user' => $user,
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


        return view('member.transactions.transaction_detail_dikirim',[
            'user' => $user,
            'transaction' => $transaction,
            'transactiondetail' => $transactiondetail,
        ]);
    }

    //reviews
    public function review(){
        $produk = Produk::with('ulasan','gambar','users')->where('user_id', Auth::user()->id)->get();
        $ulasan = Ulasan::where('produk_id',Auth::user()->id)->get();

        return view('member.review.review',[
            'ulasan' => $produk,
            'review' => $ulasan,

        ]);
    }

    //refund
    public function refund(){
        $produk = Produk::with('ulasan','gambar','users')->where('user_id', Auth::user()->id)->get();
        $refunds = Refund::with('transaction','user','transaction.transaction_details')->get();

        return view('member.refund.refund',[

            'ulasan' => $produk,
            'refunds' => $refunds,

        ]);
    }

    //store setting
    public function store(){
        $kategori = Kategori::with('subkategori')->get();
        $id = Auth::user()->id;
        $produk = Produk::with('users')->where('user_id', $id)->first();
        $user = User::where('id', $id)->first();
        return view('member.store_setting.store',[
            'produk' => $produk,
            'user' => $user,
            'id' => $id,
            'kategori' => $kategori,
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
