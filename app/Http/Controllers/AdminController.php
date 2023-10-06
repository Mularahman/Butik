<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\TransactionDetail;
use Illuminate\Support\Facades\DB;

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



        $pendapatanPerToko = [];
        $namaToko = [];

        $toko = User::where('role', 'member')->get();
        foreach ($toko as $tokoID) {
            $pendapatan = TransactionDetail::with('transaction', 'produk', 'produk.users', 'produk.gambar')
                ->whereHas('produk', function ($produk) use ($tokoID) {
                    $produk->where('user_id', $tokoID->id);
                })
                ->whereHas('transaction', function ($transaction) {
                    $transaction->where('status', 'SELESAI');
                })
                ->get();

            $totalPendapatan = $pendapatan->sum(function ($item) {
                return $item->transaction->total_harga;
            });
            $namaTokoarray[] = $tokoID->nama_toko;
            $pendapatanPerToko[$tokoID->id] =  (int)$totalPendapatan;
            $tokovalue[] =  $pendapatanPerToko[$tokoID->id];
        }

        $data = TransactionDetail::with('product')
        ->select('produk_id', DB::raw('count(*) as total'))
        ->groupBy('produk_id')
        ->orderBy('total', 'desc')
        ->limit(10)
        ->get();
        $chartData = [
            'categories' => $data->pluck('produk.namaproduk'),
            'values' => $data->pluck('total')
        ];
       
        return view('admin.dashboard-admin',[
            'transaksi' => $transaksi,
            'toko' => $toko,
            'pelanggan' => $pelanggan,
            'total' => $total,
            'pendapatantoko' => $tokovalue,
            'namaToko' => $namaTokoarray,
            'chartData' => $chartData,

        ]);
    }
}
