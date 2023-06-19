<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\KategoriController;

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

Route::get('/', function () {
    return view('home');
});

Route:: get('/login', [AuthController::class, 'login']);
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

});

Route:: group(['middleware' => ['auth', 'member']], function(){

});

Route:: group(['middleware' => ['auth', 'pelanggan']], function(){
    Route:: get('/dashboard');
});

Route:: get('/home', [FrontendController::class, 'home']);
Route:: get('/detail-produk', [FrontendController::class, 'detailproduk']);

