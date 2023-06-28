<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Subkategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    public function produk(){
        $produk = Produk::all();
        return view('admin.produk.produk',[
            'produk' => $produk
        ]);
    }

    public function tambahprodukview(){
        $produk = Produk::with('kategori', 'subkategori')->get();
        $kategori = Kategori::with('subkategori')->get();
        $subkategori = Subkategori::with('kategori')->get();

        return view('admin.produk.tambahproduk',[
            'produk' => $produk,
            'kategori' => $kategori,
            'subkategori' => $subkategori,

        ]);
    }
    public function tambahproduk(Request $request){

        $data = $request->validate([
            'namaproduk' => 'required',
            'kodeproduk' => 'required',
            'beratproduk' => 'required',
            'warnaproduk' => 'required',
            'ukuranproduk' => 'required',
            'stokproduk' => 'required',
            'hargaproduk' => 'required',
            'diskon' => 'required',
            'kategori_id' => 'required',
            'subkategori_id' => 'required',
            'deskripsishort' => 'required',
            'deskripsiproduk' => 'required',
            // 'promo' => 'required',
            // 'bestseller' => 'required',
            // 'barudatang' => 'required',
            // 'produkbaru' => 'required',
            'thumbnail' => 'required',
            'galeri' => 'required',
        ]);
        if($request->file('thumbnail')){
            if($request->oldthumbnail){
                Storage::delete($request->oldthumbnail);
            }
            $data['thumbnail'] = $request->file('thumbnail')->store('public/thumbnail');
        }
        if($request->file('galeri')){
            if($request->oldgaleri){
                Storage::delete($request->oldgaleri);
            }
            $data['galeri'] = $request->file('galeri')->store('public/galeri');
        }
        Produk::create([
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
            'thumbnail' => $data['thumbnail'],
            'galeri' => $data['galeri'],

        ]);

        return redirect('/produk-admin')->with('success', 'Berhasil Menambah Data Produk!');
    }
    public function hapusproduk($id){
        $data = Produk::FindOrfail($id);
        if($data->thumbnail){
            Storage::delete($data->thumbnail);
        }
        if($data->galeri){
            Storage::delete($data->galeri);
        }
        $data->delete();
        return redirect('/produk-admin')->with('success', 'Berhasil Menghapus Produk!');

    }

    public function editprodukview($id){
        $produk = Produk::with('kategori', 'subkategori')->where('id', $id)->get();
       
        $kategori = Kategori::with('subkategori')->get();
        $subkategori = Subkategori::with('kategori')->get();

        return view('admin.produk.editproduk',[
            'produk' => $produk,
            'kategori' => $kategori,
            'subkategori' => $subkategori,

        ]);
    }
    public function editproduk($id, Request $request){
        $data = $request->validate([
            'namaproduk' => 'required',
            'kodeproduk' => 'required',
            'beratproduk' => 'required',
            'warnaproduk' => 'required',
            'ukuranproduk' => 'required',
            'stokproduk' => 'required',
            'hargaproduk' => 'required',
            'diskon' => 'required',
            'kategori_id' => 'required',
            'subkategori_id' => 'required',
            'deskripsishort' => 'required',
            'deskripsiproduk' => 'required',
            // 'promo' => 'required',
            // 'bestseller' => 'required',
            // 'barudatang' => 'required',
            // 'produkbaru' => 'required',
            'status' => 'required',
            'thumbnail' => 'required',
            'galeri' => 'required',
        ]);
        $update = Produk::Find($id);
        if($request->file('thumbnail')){
            if($request->oldthumbnail){
                Storage::delete($request->oldthumbnail);
            }
            $data['thumbnail'] = $request->file('thumbnail')->store('public/thumbnail');
        }
        if($request->file('galeri')){
            if($request->oldgaleri){
                Storage::delete($request->oldgaleri);
            }
            $data['galeri'] = $request->file('galeri')->store('public/galeri');
        }
        $update->update($data);

        return redirect('/produk-admin')->with('success', 'Berhasil Mengedit Produk!');
    }
}
