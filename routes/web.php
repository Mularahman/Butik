<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KuponController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\WilayahController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\TransaksiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FrontendController::class, 'home']);

Route:: get('/login', [AuthController::class, 'login'])->name('login');
Route:: post('/login', [AuthController::class, 'loginaksi']);
Route:: get('/register', [AuthController::class, 'register']);
Route:: post('/register', [AuthController::class, 'registeraksi']);

Route:: post('/logout', [AuthController::class, 'logout']);

Route:: group(['middleware' => ['auth', 'admin']], function(){

    Route:: get('/dashboard-admin', [AdminController::class, 'dashboard']);

    Route:: get('/kategori-admin', [KategoriController::class, 'kategori']);
    Route:: Post('/tambah_kategori', [KategoriController::class, 'tambahkategori']);
    Route:: delete('/hapus_kategori/{id}', [KategoriController::class, 'hapuskategori']);
    Route:: put('/edit_kategori/{id}', [KategoriController::class, 'editkategori']);

    Route:: get('/sub_kategori-admin', [KategoriController::class, 'subkategori']);
    Route:: Post('/tambah_subkategori', [KategoriController::class, 'tambahsubkategori']);
    Route:: delete('/hapus_subkategori/{id}', [KategoriController::class, 'hapussubkategori']);
    Route:: put('/edit_subkategori/{id}', [KategoriController::class, 'editsubkategori']);

    Route:: get('/produk-admin', [ProdukController::class, 'produk']);
    Route:: get('/produk-admin_tambah', [ProdukController::class, 'tambahprodukview']);
    Route:: Post('/produk-admin_tambah_aksi', [ProdukController::class, 'tambahproduk']);
    Route:: delete('/produk-admin_hapus/{id}', [ProdukController::class, 'hapusproduk']);
    Route:: get('/produk-admin_edit/{id}', [ProdukController::class, 'editprodukview']);
    Route:: put('/produk-admin_edit_aksi/{id}', [ProdukController::class, 'editproduk']);

    Route:: get('/slider-admin', [SliderController::class, 'slider']);
    Route:: Post('/tambah_slider', [SliderController::class, 'tambahslider']);
    Route:: delete('/hapus_slider/{id}', [SliderController::class, 'hapusslider']);
    Route:: put('/edit_slider/{id}', [SliderController::class, 'editslider']);

    Route:: get('/kupon-admin', [KuponController::class, 'kupon']);
    Route:: Post('/tambah_kupon', [KuponController::class, 'tambahkupon']);
    Route:: delete('/hapus_kupon/{id}', [KuponController::class, 'hapuskupon']);
    Route:: put('/edit_kupon/{id}', [KuponController::class, 'editkupon']);

    Route:: get('/provinsi-admin', [WilayahController::class, 'provinsi']);
    Route:: Post('/tambah_provinsi', [WilayahController::class, 'tambahprovinsi']);
    Route:: delete('/hapus_provinsi/{id}', [WilayahController::class, 'hapusprovinsi']);
    Route:: put('/edit_provinsi/{id}', [WilayahController::class, 'editprovinsi']);

    Route:: get('/kota-admin', [WilayahController::class, 'kota']);
    Route:: Post('/tambah_kota', [WilayahController::class, 'tambahkota']);
    Route:: delete('/hapus_kota/{id}', [WilayahController::class, 'hapuskota']);
    Route:: put('/edit_kota/{id}', [WilayahController::class, 'editkota']);

    Route:: get('/kecamatan-admin', [WilayahController::class, 'kecamatan']);
    Route:: Post('/tambah_kecamatan', [WilayahController::class, 'tambahkecamatan']);
    Route:: delete('/hapus_kecamatan/{id}', [WilayahController::class, 'hapuskecamatan']);
    Route:: put('/edit_kecamatan/{id}', [WilayahController::class, 'editkecamatan']);

    Route:: get('/customer-admin', [CustomerController::class, 'customer']);
    Route:: Post('/tambah_customer', [CustomerController::class, 'tambahcustomer']);
    Route:: delete('/hapus_customer/{id}', [CustomerController::class, 'hapuscustomer']);
    Route:: put('/edit_customer/{id}', [CustomerController::class, 'editcustomer']);

});

Route:: group(['middleware' => ['auth', 'member']], function(){

});

Route:: group(['middleware' => ['auth']], function(){
    Route:: get('/dashboard', [PelangganController::class, 'index']);

    Route:: get('/myproduct', [PelangganController::class, 'myproduct']);
    Route:: get('/myproduct_add', [PelangganController::class, 'add_product']);
    Route:: Post('/myproduct_add_aksi', [PelangganController::class, 'add_product_aksi']);
    Route:: get('/myproduct_edit/{id}', [PelangganController::class, 'edit_product'])->name('dashboard-product-details');
    Route:: put('/myproduct_edit_aksi/{id}', [PelangganController::class, 'edit_product_aksi']);
    Route:: post('/myproduct/gallery', [PelangganController::class, 'myproductgallery']);
    Route:: get('/myproduct/gallery/delete/{id}', [PelangganController::class, 'myproductgallerydelete'])->name('dashboard-product-gallery-delete');


    Route:: get('/transaction', [PelangganController::class, 'transaction']);
    Route:: get('/transaction_buy', [PelangganController::class, 'transactionbuy']);
    Route:: get('/transaction_active', [PelangganController::class, 'transactionactive']);
    Route:: post('/transaction_active_aksi/{id}', [PelangganController::class, 'transactionactive_aksi']);
    Route:: get('/transaction_confirmed', [PelangganController::class, 'transactionconfirmed']);
    Route:: get('/transaction_packing', [PelangganController::class, 'transactionpacking']);
    Route:: get('/transaction_delivered', [PelangganController::class, 'transactiondelivered']);
    Route:: get('/transaction_complated', [PelangganController::class, 'transactioncomplated']);

    Route:: get('/transaction_sell', [PelangganController::class, 'transactionactive']);

    Route:: get('/transaction_details/{id}', [PelangganController::class, 'transaction_details']);
    Route:: get('/transaction_detail_dikirim/{id}', [PelangganController::class, 'transaction_detail_dikirim']);
    Route:: get('/transaction_detail/{id}', [PelangganController::class, 'transaction_detail']);
    Route:: post('/transaction_selesai_aksi/{id}', [PelangganController::class, 'transaction_selesai']);


    Route:: get('/store_settings', [PelangganController::class, 'store']);
    Route:: put('/store_aksi/{id}', [PelangganController::class, 'store_aksi']);

    Route:: get('/myaccount', [PelangganController::class, 'myaccount']);
    Route:: put('/myaccount/update_profile/{id}', [PelangganController::class, 'update_profile']);
    Route:: put('/myaccount/update_password/{id}', [PelangganController::class, 'update_password']);
    Route:: put('/myaccount/update_alamat/{id}', [PelangganController::class, 'update_alamat']);
});

Route:: get('/home', [FrontendController::class, 'home']);
Route:: get('/detail-produk/{id}', [FrontendController::class, 'detailproduk']);

Route::group(['middleware' => 'auth'], function() {
    //
    Route:: post('/produk_add_keranjang/{id}', [FrontendController::class, 'produkaddkeranjang']);
    Route:: get('/keranjang', [FrontendController::class, 'keranjang']);
    Route:: delete('/keranjang_delete/{id}', [FrontendController::class, 'deletekeranjang']);
    Route:: post('/checkout', [TransaksiController::class, 'transaksi']);

});


