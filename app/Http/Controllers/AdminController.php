<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\TransactionDetail;

class AdminController extends Controller
{
    public function dashboard(){
        $transaksi = TransactionDetail::all();
        $toko = User::where('role', 'member')->get();
        $pelanggan = User::where('role', 'pelanggan')->orWhere('role', 'member')->get();
        $total = 0;
        foreach ($transaksi as $item) {
            $total += $item->transaction->total_harga;
        }
        return view('admin.dashboard-admin',[
            'transaksi' => $transaksi,
            'toko' => $toko,
            'pelanggan' => $pelanggan,
            'total' => $total,
        ]);
    }
}
