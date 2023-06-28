<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index($slug){
        $user = User::all();
        return view('pelanggan.dashboard',[
            'user' => $user
        ]);
    }
    public function setting($id){
        return view('pelanggan.dashboard');
    }
}
