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
        if(request('search')){
            $data = TransactionDetail::where('kode','LIKE','%'.request('search'). '%')->get();
        }
        return view('admin.laporan.transaksi.transaksi',[
            'data' => $data
        ]);
    }
public function transaksicetakadmin(){
    $data = TransactionDetail::when(request('start'), function ($query, $start) {
        return $query->whereDate('created_at', '>=', $start);
    })
    ->when(request('end'), function ($query, $end) {
        return $query->whereDate('created_at', '<=', $end);
    });
    $data = $data->get();
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
    if(request('search')){
        $data = User::where(function ($query) {
            $query->where('role', 'pelanggan')
                  ->orWhere('role', 'member');
        })
        ->where('name', 'LIKE', '%' . request('search') . '%')
        ->get();
    }
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
    if(request('search')){
        $data = User::where('role', 'member')->where('nama_toko', 'LIKE', '%' . request('search') . '%')->get();
    }
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
    $data = TransactionDetail::join('transactions', 'transaction_details.transaction_id', '=', 'transactions.id')
    ->with('transaction', 'produk', 'produk.users', 'produk.gambar')
    ->where(function ($query) {
        $query->where('transactions.transaction_status', 'SUCCESS');
    })
    ->get();

if (request('search')) {
    $data = TransactionDetail::join('transactions', 'transaction_details.transaction_id', '=', 'transactions.id')
        ->with('transaction', 'produk', 'produk.users', 'produk.gambar')
        ->where(function ($query) {
            $query->where('transactions.transaction_status', 'SUCCESS');
        })
        ->where('transactions.kode', 'LIKE', '%' . request('search') . '%')
        ->get();
}
    return view('admin.laporan.pembelian.pembelian',[
        'data' => $data
    ]);
}
public function pembeliancetakadmin(){
    $data = TransactionDetail::join('transactions', 'transaction_details.transaction_id', '=', 'transactions.id')
    ->join('produks', 'transaction_details.produk_id', '=', 'produks.id')
    ->with('transaction', 'produk', 'produk.users', 'produk.gambar')
    ->select('transaction_details.*', 'transactions.transaction_status', 'produks.*')
    ->where(function ($query) {
        $query->where('transactions.transaction_status', 'SUCCESS');
    })
    ->when(request('start'), function ($query, $start) {
        return $query->whereDate('transaction_details.created_at', '>=', $start);
    })
    ->when(request('end'), function ($query, $end) {
        return $query->whereDate('transaction_details.created_at', '<=', $end);
    });
        $data = $data->get();
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
        if (request('search')) {
            $data = TransactionDetail::join('transactions', 'transaction_details.transaction_id', '=', 'transactions.id')
                ->with('transaction', 'produk', 'produk.users', 'produk.gambar')
                ->where(function ($query) {
                    $query->where('transactions.transaction_status', 'SUCCESS');
                })
                ->where('transactions.kode', 'LIKE', '%' . request('search') . '%')
                ->get();
        }
    return view('admin.laporan.penjualan.penjualan',[
        'data' => $data
    ]);
}
public function penjualancetakadmin(){
    $data = TransactionDetail::join('transactions', 'transaction_details.transaction_id', '=', 'transactions.id')
    ->join('produks', 'transaction_details.produk_id', '=', 'produks.id')
    ->with('transaction', 'produk', 'produk.users', 'produk.gambar')
    ->select('transaction_details.*', 'transactions.transaction_status', 'produks.*')
    ->where(function ($query) {
        $query->where('transactions.transaction_status', 'SUCCESS');
    })
    ->when(request('start'), function ($query, $start) {
        return $query->whereDate('transaction_details.created_at', '>=', $start);
    })
    ->when(request('end'), function ($query, $end) {
        return $query->whereDate('transaction_details.created_at', '<=', $end);
    });
        $data = $data->get();
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
    $bestSellingProducts = TransactionDetail::with('produk','transaction')->soldProductsCount();
    if (request('search')) {
        $bestSellingProducts = $bestSellingProducts->whereHas('produk', function ($query) {
            $query->where('kodeproduk', 'LIKE', '%' . request('search') . '%');
        });
    }

    $bestSellingProducts =  $bestSellingProducts->get();
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
        });
        if(request('search')){
            $data = $data->where('kode','LIKE','%'.request('search'). '%');
        }
        $data = $data->get();

        return view('member.laporan.historitransaksi',[
            'data' => $data
        ]);
    }
    public function transaksicetak(){
        $data = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->whereHas('produk', function($produk){
            $produk->where('user_id', Auth::user()->id);
        })->when(request('start'), function ($query, $start) {
            return $query->whereDate('created_at', '>=', $start);
        })
        ->when(request('end'), function ($query, $end) {
            return $query->whereDate('created_at', '<=', $end);
        });
        $data = $data->get();
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
    public function pembayaran(){
        $data = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->whereHas('produk', function($produk){
            $produk->where('user_id', Auth::user()->id);
        });
        if(request('search')){
            $data = $data->where('kode', 'LIKE', '%' . request('search') . '%');
        }
        $data = $data->get();

        return view('member.laporan.historipembayaran',[
            'data' => $data
        ]);
    }
    public function pembayarancetak(){
        $data = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->whereHas('produk', function($produk){
            $produk->where('user_id', Auth::user()->id);
        })->when(request('start'), function ($query, $start) {
            return $query->whereDate('created_at', '>=', $start);
        })
        ->when(request('end'), function ($query, $end) {
            return $query->whereDate('created_at', '<=', $end);
        });

        $data = $data->get();
        $total = 0;
        foreach ($data as $item) {
            $total += $item->transaction->total_harga;
        }
        $success = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->whereHas('produk', function($produk){
            $produk->where('user_id', Auth::user()->id);
        })->whereHas('transaction', function($transaction){
            $transaction->where('transaction_status', 'SUCCESS');
        })
        ->get();
        $pending = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->whereHas('produk', function($produk){
            $produk->where('user_id', Auth::user()->id);
        })->whereHas('transaction', function($transaction){
            $transaction->where('transaction_status','!=', 'SUCCESS');
        })
        ->get();


        $pdf = PDF::loadview('member.laporancetak.pembayarancetak',['data'=>$data, 'total' => $total, 'success'=>$success, 'pending' => $pending]);
    	return $pdf->stream();
    }
    public function pelanggan(){
        $data = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->whereHas('produk', function($produk){
            $produk->where('user_id', Auth::user()->id);
        });
        if (request('search')) {
            $data = $data->whereHas('produk.users', function ($user) {
                $user->where('name', 'LIKE', '%' . request('search') . '%');
            });
        }


        $data = $data->get();
        return view('member.laporan.historipelanggan',[
            'data' => $data
        ]);
    }
    public function pelanggancetak(){
        $data = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->whereHas('produk', function($produk){
            $produk->where('user_id', Auth::user()->id);
        })->when(request('start'), function ($query, $start) {
            return $query->whereDate('created_at', '>=', $start);
        })
        ->when(request('end'), function ($query, $end) {
            return $query->whereDate('created_at', '<=', $end);
        });
        $data = $data->get();
        $total = 0;
        foreach ($data as $item) {
            $total += $item->transaction->total_harga;
        }

        $pdf = PDF::loadview('member.laporancetak.pelanggancetak',['data'=>$data, 'total' => $total]);
    	return $pdf->stream();
    }
    public function produk(){



        $bestSellingProducts =  TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->whereHas('produk', function($produk){
            $produk->where('user_id', Auth::user()->id);
        })->where('status','SELESAI')->soldProductsCount();
        if (request('search')) {
            $bestSellingProducts = $bestSellingProducts->whereHas('produk', function ($query) {
                $query->where('namaproduk', 'LIKE', '%' . request('search') . '%');
            });
        }

        $bestSellingProducts =  $bestSellingProducts->get();
        $totalSoldProducts = Transaction::with('transaction_details')->get()->sum(function ($transaction) {
            return $transaction->totalSoldQuantity();
        });
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
        $produk = Produk::with('ulasan','gambar','users')->where('user_id', Auth::user()->id);
        $ulasan = Ulasan::where('produk_id',Auth::user()->id)->get();
        if(request('search')){
            $produk = $produk->where('namaproduk', 'LIKE', '%' . request('search') . '%');
        }
        $produk = $produk->get();
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
        })->where('status','SELESAI')
        ;
        if(request('search')){
            $data = $data->where('kode', 'LIKE', '%' . request('search') . '%');
        }
        $data= $data->get();
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
        $data = TransactionDetail::with('transaction', 'produk','produk.users', 'produk.gambar')->whereHas('produk', function($produk){
            $produk->where('user_id', Auth::user()->id);
        })->where('status','SELESAI')->when(request('start'), function ($query, $start) {
            return $query->whereDate('created_at', '>=', $start);
        })
        ->when(request('end'), function ($query, $end) {
            return $query->whereDate('created_at', '<=', $end);
        });

        $data= $data->get();
        $total = 0;
        foreach ($data as $item) {
            $total += $item->transaction->total_harga;

        }

        $pdf = PDF::loadview('member.laporancetak.pendapatancetak',['data'=>$data, 'total' => $total]);
    	return $pdf->stream();
    }


}
