<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KuponController;
use App\Http\Controllers\KurirController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\LaporanController;
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
    Route:: get('/produk-admin_edit/{id}', [ProdukController::class, 'editprodukview'])->name('dashboard-product');
    Route:: put('/produk-admin_edit_aksi/{id}', [ProdukController::class, 'editproduk']);
    Route:: post('/produk-admin/gallery', [ProdukController::class, 'myproductgallery']);
    Route:: get('/produk-admin/gallery/delete/{id}', [ProdukController::class, 'myproductgallerydelete'])->name('dashboard-product-galleri-delete');
    Route:: get('/getsubkategori/{id}', [ProdukController::class, 'subkategori']);

    Route:: get('/slider-admin', [SliderController::class, 'slider']);
    Route:: Post('/tambah_slider', [SliderController::class, 'tambahslider']);
    Route:: delete('/hapus_slider/{id}', [SliderController::class, 'hapusslider']);
    Route:: put('/edit_slider/{id}', [SliderController::class, 'editslider']);

    Route:: get('/kupon-admin', [KuponController::class, 'kupon']);
    Route:: Post('/tambah_kupon', [KuponController::class, 'tambahkupon']);
    Route:: delete('/hapus_kupon/{id}', [KuponController::class, 'hapuskupon']);
    Route:: put('/edit_kupon/{id}', [KuponController::class, 'editkupon']);

    Route:: get('/kurir-admin', [KurirController::class, 'kurir']);
    Route:: Post('/tambah_kurir', [KurirController::class, 'tambahkurir']);
    Route:: delete('/hapus_kurir/{id}', [KurirController::class, 'hapuskurir']);
    Route:: put('/edit_kurir/{id}', [KurirController::class, 'editkurir']);

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

    Route:: get('/laporan-transaksi-admin', [LaporanController::class, 'transaksiadmin']);
    Route:: get('/laporan-pelanggan-admin', [LaporanController::class, 'pelangganadmin']);
    Route:: get('/laporan-toko-admin', [LaporanController::class, 'tokoadmin']);
    Route:: get('/laporan-tokoberlangganan-admin', [LaporanController::class, 'tokoberlanggananadmin']);
    Route:: get('/laporan-pembelian-admin', [LaporanController::class, 'pembelianadmin']);
    Route:: get('/laporan-penjualan-admin', [LaporanController::class, 'penjualanadmin']);
    Route:: get('/laporan-produk-admin', [LaporanController::class, 'produkadmin']);

    Route:: get('/laporan-transaksi-admin-cetak', [LaporanController::class, 'transaksicetakadmin']);
    Route:: get('/laporan-pelanggan-admin-cetak', [LaporanController::class, 'pelanggancetakadmin']);
    Route:: get('/laporan-toko-admin-cetak', [LaporanController::class, 'tokocetakadmin']);
    Route:: get('/laporan-tokoberlangganan-admin-cetak', [LaporanController::class, 'tokoberlangganancetakadmin']);
    Route:: get('/laporan-pembelian-admin-cetak', [LaporanController::class, 'pembeliancetakadmin']);
    Route:: get('/laporan-penjualan-admin-cetak', [LaporanController::class, 'penjualancetakadmin']);
    Route:: get('/laporan-produk-admin-cetak', [LaporanController::class, 'produkcetakadmin']);
});

Route:: group(['middleware' => ['auth']], function(){
    Route:: get('/dashboard-member', [MemberController::class, 'index']);

    Route:: get('/myproduct-member', [MemberController::class, 'myproduct']);
    Route:: get('/myproduct_add', [MemberController::class, 'add_product']);
    Route:: Post('/myproduct_add_aksi', [MemberController::class, 'add_product_aksi']);
    Route:: get('/myproduct_edit/{id}', [MemberController::class, 'edit_product'])->name('dashboard-product-details');
    Route:: put('/myproduct_edit_aksi/{id}', [MemberController::class, 'edit_product_aksi']);
    Route:: post('/myproduct/gallery', [MemberController::class, 'myproductgallery']);
    Route:: get('/myproduct/gallery/delete/{id}', [MemberController::class, 'myproductgallerydelete'])->name('dashboard-product-gallery-delete');
    Route:: get('/subkategori/{id}', [MemberController::class, 'getsubkategori']);
    Route:: delete('/delete-produk/{id}', [MemberController::class, 'deleteproduk']);

    Route:: get('/transaction-member', [MemberController::class, 'transactionactive']);

    Route:: post('/transaction_active_aksi/{id}', [MemberController::class, 'transactionactive_aksi']);
    Route:: get('/transaction_confirmed', [MemberController::class, 'transactionconfirmed']);
    Route:: get('/transaction_packing', [MemberController::class, 'transactionpacking']);
    Route:: get('/transaction_delivered', [MemberController::class, 'transactiondelivered']);
    Route:: get('/transaction_complated', [MemberController::class, 'transactioncomplated']);


    Route:: get('/transaction_details/{id}', [MemberController::class, 'transaction_details']);
    Route:: get('/transaction_detail_dikirim/{id}', [MemberController::class, 'transaction_detail_dikirim']);



    Route:: get('/review-member', [MemberController::class, 'review']);

    Route:: get('/refund-member', [MemberController::class, 'refund']);

    Route:: get('/store_settings', [MemberController::class, 'store']);
    Route:: put('/store_aksi/{id}', [MemberController::class, 'store_aksi']);

    Route:: get('/laporan-transaksi', [LaporanController::class, 'transaksi']);
    Route:: get('/laporan-pelanggan', [LaporanController::class, 'pelanggan']);
    Route:: get('/laporan-produk', [LaporanController::class, 'produk']);
    Route:: get('/laporan-ulasan', [LaporanController::class, 'review']);
    Route:: get('/laporan-laba', [LaporanController::class, 'laba']);
    Route:: get('/laporan-pembayaran', [LaporanController::class, 'pembayaran']);

    Route:: get('/laporan-transaksi-cetak', [LaporanController::class, 'transaksicetak']);
    Route:: get('/laporan-pelanggan-cetak', [LaporanController::class, 'pelanggancetak']);
    Route:: get('/laporan-produk-cetak', [LaporanController::class, 'produkcetak']);
    Route:: get('/laporan-ulasan-cetak', [LaporanController::class, 'reviewcetak']);
    Route:: get('/laporan-laba-cetak', [LaporanController::class, 'labacetak']);
    Route:: get('/laporan-pembayaran-cetak', [LaporanController::class, 'pembayarancetak']);

});

Route:: group(['middleware' => ['auth']], function(){

    Route:: get('/transaction', [PelangganController::class, 'transactionbuy']);
    Route:: get('/transaction-confirmed', [PelangganController::class, 'transactionconfirmed']);
    Route:: get('/transaction-packing', [PelangganController::class, 'transactionpacking']);
    Route:: get('/transaction-delivered', [PelangganController::class, 'transactiondelivered']);
    Route:: get('/transaction-complated', [PelangganController::class, 'transactioncomplated']);

    Route:: get('/transaction_detail/{id}', [PelangganController::class, 'transaction_detail']);
    Route:: get('/transaction_detailss/{id}', [PelangganController::class, 'transaction_details']);
    Route:: post('/transaction_selesai_aksi/{id}', [PelangganController::class, 'transaction_selesai']);
    Route:: post('/keranjang_aksi/{id}', [PelangganController::class, 'belilagi']);

    Route:: get('/review', [UlasanController::class, 'ulasan']);
    Route:: get('/review-product/{id}', [UlasanController::class, 'ulasanproduk'])->name('review.product');
    Route:: get('/produk-detail/{id}', [UlasanController::class, 'produk']);
    Route:: post('/review-aksi/{id}', [UlasanController::class, 'ulasanaksi']);

    Route:: get('/refund', [UlasanController::class, 'refund']);
    Route:: post('/refund-aksi', [UlasanController::class, 'refundaksi']);
    Route:: get('/refund/{id}', [UlasanController::class, 'formrefund']);

    Route:: post('/refund-tolak/{id}', [UlasanController::class, 'refundtolak']);
    Route:: post('/refund-terima/{id}', [UlasanController::class, 'refundterima']);

    Route:: get('/myaccount', [PelangganController::class, 'myaccount']);
    Route:: put('/myaccount/update_profile/{id}', [PelangganController::class, 'update_profile']);
    Route:: put('/myaccount/update_password/{id}', [PelangganController::class, 'update_password']);
    Route:: put('/myaccount/update_alamat/{id}', [PelangganController::class, 'update_alamat']);
});

Route:: get('/home', [FrontendController::class, 'home']);
Route:: get('/kategori/{id}', [FrontendController::class, 'kategori']);
Route:: post('/kategori', [FrontendController::class, 'cari']);
Route:: get('/detail-produk/{id}', [FrontendController::class, 'detailproduk']);
Route:: get('/setting-alamat', [FrontendController::class, 'settingalamat']);
Route:: get('/setting-alamats', [FrontendController::class, 'settingalamats']);
Route:: put('/setting-alamat/{id}', [FrontendController::class, 'settingalamataksi']);
Route:: put('/setting-alamats/{id}', [FrontendController::class, 'settingalamataksis']);

Route::group(['middleware' => 'auth'], function() {
    //
    Route:: post('/produk_add_keranjang/{id}', [FrontendController::class, 'produkaddkeranjang']);
    Route:: post('/produk_add_keranjangs/{id}', [FrontendController::class, 'produkaddkeranjangs']);
    Route:: get('/keranjang', [FrontendController::class, 'keranjang']);
    Route:: get('/buka-toko', [FrontendController::class, 'bukatoko']);
    Route:: post('/buka-toko_aksi', [FrontendController::class, 'bukatokoaksi']);
    Route:: delete('/keranjang_delete/{id}', [FrontendController::class, 'deletekeranjang']);
    Route:: get('/buatpesanan', [FrontendController::class, 'checkout'])->name('buatpesanan');


    Route:: get('/kota/{id}', [FrontendController::class, 'getkota']);
    Route:: get('/kecamatan/{id}', [FrontendController::class, 'getkecamatan']);
    Route:: post('/diskon', [FrontendController::class, 'diskon']);

    Route:: post('/checkout', [TransaksiController::class, 'transaksi']);



});


