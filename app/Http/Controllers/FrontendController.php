<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home(){
        $produk = Produk::with('kategori')->where('status', 1)->take(6)->get();
        return view('home',[
            'produk' => $produk
        ]);
    }

    public function detailproduk($id){
        $produk = Produk::with('kategori')->where('id', $id)->get();
        return view('detail',[
            'produk' => $produk
        ]);
    }
   
    public function keranjang(){
        return view('keranjang');
    }

    public function konfirmasibayar(){
        return view('konfirmasibayar');
    }

}
