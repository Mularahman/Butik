<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\User;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Provinsi;
use App\Models\Kecamatan;
use App\Models\Keranjang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function home(){
        $keranjang = Keranjang::all();
        if(Auth::check()){

            $keranjang = Keranjang::where('user_id', Auth::user()->id)->get();
        }


        $produk = Produk::with('kategori','users','gambar')->where('status', 1)->take(8)->get();

        return view('home',[
            'produk' => $produk,
            'keranjang' => $keranjang,
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
        return view('keranjang',[
            'keranjang' => $keranjang,
            'user' => $user,
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


}
