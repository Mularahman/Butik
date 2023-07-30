<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\User;
use App\Models\Kupon;
use App\Models\Kurir;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Provinsi;
use App\Models\Kecamatan;
use App\Models\Keranjang;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Kavist\RajaOngkir\Facades\RajaOngkir;


class FrontendController extends Controller
{
    public function home(){
        $kategori = Kategori::all();
        $keranjang = Keranjang::all();
        if(Auth::check()){

            $keranjang = Keranjang::where('user_id', Auth::user()->id)->get();
        }


        $produk = Produk::with('kategori','users','gambar')->where('status', 1)->take(8)->get();

        return view('home',[
            'produk' => $produk,
            'keranjang' => $keranjang,
            'kategori' => $kategori,
        ]);

    }

    public function detailproduk($id){
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
    public function settingalamat(){
        $id = Auth::user()->id;
        $user = User::where('id', $id)->first();


        $provinsi = Provinsi::with('kecamatans','kotas')->get();
        $kota = Kota::all();
        $kecamatan = Kecamatan::all();
        return view('settingalamat',[
            'user' => $user,
            'id' => $id,
            'provinsi' => $provinsi,
            'kota' => $kota,
            'kecamatan' => $kecamatan,
        ]);
    }
    public function settingalamataksi(Request $request ,$id){

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

            return redirect('/dashboard-member');
    }

    public function produkaddkeranjangs(Request $request, $id){
        $data = $request->all();

        if(Auth::check()){

            Keranjang::create([
                'produk_id' => $id,
                'user_id' => Auth::user()->id,
                'jumlah' => 1
            ]);
            return back();
        }
        return redirect('/login');





    }
    public function produkaddkeranjang(Request $request, $id){
        $data = $request->all();

        if(Auth::check()){

            Keranjang::create([
                'produk_id' => $id,
                'user_id' => Auth::user()->id,
                'jumlah' => $data['jumlah']
            ]);
            return redirect('/keranjang');
        }
        return redirect('/login');





    }

    public function keranjang(){
        $keranjang = Keranjang::with('produk', 'user', 'produk.gambar')->where('user_id', Auth::user()->id)->get();
        $id = Auth::user()->id;
        $user = User::where('id', $id)->first();
        $provinsi = Provinsi::with('kecamatans','kotas')->get();
        $kota = Kota::all();
        $kecamatan = Kecamatan::all();
        $kurir = Kurir::all();
        return view('keranjang',[
            'keranjang' => $keranjang,
            'user' => $user,
            'kurir' => $kurir,
            'id' => $id,
            'provinsi' => $provinsi,
            'kota' => $kota,
            'kecamatan' => $kecamatan,
        ]);
    }
    public function deletekeranjang(Request $request, $id){
        $keranjang = Keranjang::findOrFail($id);
        $keranjang->delete();
        return redirect('/keranjang')->with('success', 'Berhasil Menghapus Produk Dari Keranjang !');
    }

    public function bukatoko(){
        $kategori = Kategori::all();
        return view('bukatoko',[
            'kategori' => $kategori
        ]);
    }
    public function bukatokoaksi(Request $request){
        $data = $this->validate($request,[
            'nama_toko' => ['nullable', 'string', 'max:255'],
            'kategori_id' => ['nullable', 'integer', 'exists:kategoris,id'],
            'status_toko' => ['required'],
        ]);

        $save = User::findOrFail(Auth::user()->id);
        $save->nama_toko = isset($data['nama_toko']) ? $data['nama_toko'] : '';
        $save->kategori_id = isset($data['kategori_id']) ? $data['kategori_id'] : 0;
        $save->status_toko = $data['status_toko'] ? 1 : 0;
        $save->role = $data['status_toko'] ? 'member' : 'pelanggan';

        $save->save();

        return redirect('/dashboard-member');
    }

    public function checkout(Request $request ){
        $keranjang = Keranjang::with('produk', 'user', 'produk.gambar','produk.users')->where('user_id', Auth::user()->id)->get();
        $id = Auth::user()->id;
        $user = User::with('kecamatan','kota','provinsi')->where('id', $id)->first();
        $provinsi = Provinsi::all();
        $kota = Kota::all();
        $kecamatan = Kecamatan::all();
        $kurir = Kurir::all();
        foreach ($keranjang as $item) {
           $city=$item->produk->users->kota_id;
           $berat=$item->produk->beratproduk;

        }


        return view('buatpesanan',[
            'keranjang' => $keranjang,
            'user' => $user,
            'kurir' => $kurir,
            'id' => $id,
            'provinsi' => $provinsi,
            'kota' => $kota,
            'kecamatan' => $kecamatan,
            'city' => $city,
            'berat' => $berat,
        ]);
    }
    public function diskon(Request $request){
        $request->validate([
            'diskon_kode' => 'required|string|max:10',
            'total' => 'required',
        ]);


        $inputData = $request->all();
        $totalbayar = $request->total;

        $diskon = Kupon::where('code', $inputData['diskon_kode'])->first();

        if ($diskon && $diskon->is_active && now()->between($diskon->start_date, $diskon->end_date)) {
            if($diskon->type == 'percentage'){
                $hargadiskon = $diskon->amount / 100 * $totalbayar;
            }
            else{
                $hargadiskon = $diskon->amount;
            }


            // $totalbayar -= $hargadiskon;

            return redirect()->route('buatpesanan')->with('hargadiskon', $hargadiskon)->with('success', 'Kupon Berhasil Digunakan!')->withErrors($request->all())->withInput();
        }
        if (!$diskon) {

            return redirect()->back()->with('error', 'Kode diskon tidak valid.');
        }

        if (!$diskon->is_active || now()->lt($diskon->start_date) || now()->gt($diskon->end_date)) {

            return redirect()->back()->with('error', 'Diskon tidak berlaku saat ini.');
        }

    }


    public function getkota(Request $request, $id)
    {

        $kota = Kota::where('provinsi_id', $id)->get();
        return response()->json($kota);
    }
    public function getkecamatan(Request $request, $id)
    {

        $kecamatan = Kecamatan::where('kota_id', $id)->get();
        return response()->json($kecamatan);
    }

    public function cekongkir(Request $request)
    {
        $respon = Http::withHeaders([
            'key' => '0ec88033bc08f349899004b9bb8f84ed'
        ])->get('https://api.rajaongkir.com/starter/city');
        $responCost = Http::withHeaders([
            'key' => '0ec88033bc08f349899004b9bb8f84ed'
        ])->post('https://api.rajaongkir.com/starter/cost',[
            'origin'        => $request->city_origin, // ID kota/kabupaten asal
            'destination'   => $request->city_destination, // ID kota/kabupaten tujuan
            'weight'        => $request->weight, // berat barang dalam gram
            'courier'       => $request->courier // kode kurir pengiriman: ['jne', 'tiki', 'pos'] untuk starter
        ]);


        return response()->json($responCost->json());
    }

}
