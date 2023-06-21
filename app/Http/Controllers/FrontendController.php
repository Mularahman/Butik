<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home(){
        return view('home');
    }

    public function detailproduk(){
        return view('detail');
    }

    public function keranjang(){
        return view('keranjang');
    }

    public function konfirmasibayar(){
        return view('konfirmasibayar');
    }

}
