<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Produk;
use App\Models\Ulasan;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;
use App\Models\TransactionDetail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LaporanController extends Controller
{
    //admin
    public function transaksiadmin(){
        $data = TransactionDetail::all();

        return view('admin.laporan.transaksi.transaksi',[
            'data' => $data
        ]);
    }
public function transaksicetakadmin(){
    $data = TransactionDetail::all();
    $total = 0;
    foreach ($data as $item) {
        $total += $item->transaction->total_harga;
    }
    $success = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->where('status','SELESAI')->get();
    $pending = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->where('status','!=', 'SELESAI')->get();


    $pdf = PDF::loadview('admin.laporan.transaksi.transaksicetak',['data'=>$data, 'total' => $total, 'success'=>$success, 'pending' => $pending]);
    return $pdf->stream();
}
public function pelangganadmin(){
    $data = User::where('role', 'pelanggan')->orWhere('role', 'member')->get();

    return view('admin.laporan.Pengguna.pengguna',[
        'data' => $data
    ]);
}
public function pelanggancetakadmin(){
    $data =  User::where('role', 'pelanggan')->orWhere('role', 'member')->get();


    $pdf = PDF::loadview('admin.laporan.Pengguna.penggunacetak',['data'=>$data, ]);
    return $pdf->stream();
}
public function tokoadmin(){
    $data = User::where('role', 'member')->get();

    return view('admin.laporan.Toko.toko',[
        'data' => $data
    ]);
}
public function tokocetakadmin(){
    $data =  User::where('role', 'member')->get();
    $total = $data->where('status_toko', 1)->count();

    $pdf = PDF::loadview('admin.laporan.Toko.tokocetak',['data'=>$data, 'total' => $total]);
    return $pdf->stream();
}
public function pembelianadmin(){
    $data = TransactionDetail::join('transactions', 'transaction_details.transaction_id', '=', 'transactions.id')->with('transaction', 'produk','produk.users', 'produk.gambar')->where(function ($query) {
        $query->where('transactions.transaction_status', 'SUCCESS');})->get();

    return view('admin.laporan.pembelian.pembelian',[
        'data' => $data
    ]);
}
public function pembeliancetakadmin(){
    $data = TransactionDetail::join('transactions', 'transaction_details.transaction_id', '=', 'transactions.id')->with('transaction', 'produk','produk.users', 'produk.gambar')->where(function ($query) {
        $query->where('transactions.transaction_status', 'SUCCESS');})->get();
    $total = 0;
    foreach ($data as $item) {
        $total += $item->transaction->total_harga;
    }
    $success = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->where('status','SELESAI')->get();
    $pending = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->where('status','!=', 'SELESAI')->get();


    $pdf = PDF::loadview('admin.laporan.pembelian.pembeliancetak',['data'=>$data, 'total' => $total, 'success'=>$success, 'pending' => $pending]);
    return $pdf->stream();
    }
public function penjualanadmin(){
    $data = TransactionDetail::join('transactions', 'transaction_details.transaction_id', '=', 'transactions.id')->with('transaction', 'produk','produk.users', 'produk.gambar')->where(function ($query) {
        $query->where('transactions.transaction_status', 'SUCCESS');})->get();

    return view('admin.laporan.penjualan.penjualan',[
        'data' => $data
    ]);
}
public function penjualancetakadmin(){
    $data = TransactionDetail::join('transactions', 'transaction_details.transaction_id', '=', 'transactions.id')->with('transaction', 'produk','produk.users', 'produk.gambar')->where(function ($query) {
        $query->where('transactions.transaction_status', 'SUCCESS');})->get();
    $total = 0;
    foreach ($data as $item) {
        $total += $item->transaction->total_harga;
    }
    $success = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->where('status','SELESAI')->get();
    $pending = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->where('status','!=', 'SELESAI')->get();


    $pdf = PDF::loadview('admin.laporan.penjualan.penjualancetak',['data'=>$data, 'total' => $total, 'success'=>$success, 'pending' => $pending]);
    return $pdf->stream();
    }
public function produkadmin(){
    $totalSoldProducts = Transaction::with('transaction_details')->get()->sum(function ($transaction) {
        return $transaction->totalSoldQuantity();
    });
    $bestSellingProducts = TransactionDetail::with('produk','transaction')->soldProductsCount()->get();
    

    return view('admin.laporan.produk.produk',[
        'total' => $totalSoldProducts,
        'jual' => $bestSellingProducts

    ]);
}
public function produkcetakadmin(){

    $totalSoldProducts = Transaction::with('transaction_details')->get()->sum(function ($transaction) {
        return $transaction->totalSoldQuantity();
    });
    $bestSellingProducts = TransactionDetail::with('produk','transaction')->soldProductsCount()->get();

    $pdf = PDF::loadview('admin.laporan.produk.produkcetak',[ 'total' => $totalSoldProducts, 'jual' => $bestSellingProducts]);
    return $pdf->stream();
}

    //member
    public function transaksi(){
        $data = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->whereHas('produk', function($produk){
            $produk->where('user_id', Auth::user()->id);
        })->get();

        return view('member.laporan.historitransaksi',[
            'data' => $data
        ]);
    }
    public function transaksicetak(){
        $data = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->whereHas('produk', function($produk){
            $produk->where('user_id', Auth::user()->id);
        })->get();
        $total = 0;
        foreach ($data as $item) {
            $total += $item->transaction->total_harga;
        }
        $success = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->whereHas('produk', function($produk){
            $produk->where('user_id', Auth::user()->id);
        })->where('status','SELESAI')->get();
        $pending = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->whereHas('produk', function($produk){
            $produk->where('user_id', Auth::user()->id);
        })->where('status','!=', 'SELESAI')->get();


        $pdf = PDF::loadview('member.laporancetak.transaksicetak',['data'=>$data, 'total' => $total, 'success'=>$success, 'pending' => $pending]);
    	return $pdf->stream();
    }
    public function pelanggan(){
        $data = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->whereHas('produk', function($produk){
            $produk->where('user_id', Auth::user()->id);
        })->get();

        return view('member.laporan.historipelanggan',[
            'data' => $data
        ]);
    }
    public function pelanggancetak(){
        $data = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->whereHas('produk', function($produk){
            $produk->where('user_id', Auth::user()->id);
        })->get();
        $total = 0;
        foreach ($data as $item) {
            $total += $item->transaction->total_harga;
        }

        $pdf = PDF::loadview('member.laporancetak.pelanggancetak',['data'=>$data, 'total' => $total]);
    	return $pdf->stream();
    }
    public function produk(){


        $totalSoldProducts = Transaction::with('transaction_details')->get()->sum(function ($transaction) {
            return $transaction->totalSoldQuantity();
        });
        $bestSellingProducts =  TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->whereHas('produk', function($produk){
            $produk->where('user_id', Auth::user()->id);
        })->where('status','SELESAI')->soldProductsCount()->get();
        // dd($bestSellingProducts);
        return view('member.laporan.historiproduk',[

            'total' => $totalSoldProducts,
            'jual' => $bestSellingProducts,
        ]);
    }
    public function produkcetak(){
        $totalSoldProducts = Transaction::with('transaction_details')->get()->sum(function ($transaction) {
            return $transaction->totalSoldQuantity();
        });
        $bestSellingProducts =  TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->whereHas('produk', function($produk){
            $produk->where('user_id', Auth::user()->id);
        })->where('status','SELESAI')->soldProductsCount()->get();

        $pdf = PDF::loadview('member.laporancetak.produkcetak',[ 'total' => $totalSoldProducts, 'jual' => $bestSellingProducts]);
    	return $pdf->stream();
    }
    public function review(){
        $produk = Produk::with('ulasan','gambar','users')->where('user_id', Auth::user()->id)->get();
        $ulasan = Ulasan::where('produk_id',Auth::user()->id)->get();

        return view('member.laporan.historireview',[
            'ulasan' => $produk,
            'review' => $ulasan,
        ]);

    }
    public function reviewcetak(){
        $produk = Produk::with('ulasan','gambar','users')->where('user_id', Auth::user()->id)->get();
        $ulasan = Ulasan::where('produk_id',Auth::user()->id)->get();

        $pdf = PDF::loadview('member.laporancetak.reviewcetak',[
            'ulasan' => $produk,
            'review' => $ulasan,
        ]);
    	return $pdf->stream();
    }

    public function laba(){
        $data = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->whereHas('produk', function($produk){
            $produk->where('user_id', Auth::user()->id);
        })->where('status','SELESAI')->get();

        $pendapatan = 0;
        foreach ($data as $item) {
            $pendapatan += $item->transaction->total_harga;

        }
        return view('member.laporan.laba',[
            'data' => $data,
            'pendapatan' => $pendapatan,
        ]);
    }
    public function labacetak(){
        $data = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->whereHas('produk', function($produk){
            $produk->where('user_id', Auth::user()->id);
        })->where('status','SELESAI')->get();

        $total = 0;
        foreach ($data as $item) {
            $total += $item->transaction->total_harga;

        }

        $pdf = PDF::loadview('member.laporancetak.pendapatancetak',['data'=>$data, 'total' => $total]);
    	return $pdf->stream();
    }


}
