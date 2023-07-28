
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\PengeluaranController;

//Halaman Landing
Route::get('/', [LandingController::class, 'index'])->name('landing.index');
Route::post('/search-invoice', [LandingController::class, 'searchInvoice'])->name('landing.search-invoice');
//Halaman Login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/forgot-password', [LoginController::class, 'lupapw'])->name('password.request');

//-----------Admin---------------------------------------------------------------------------------------------------------------
//Halaman Dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);
//Halaman pelanggan
Route::get('/pelanggan', [PelangganController::class, 'index']);
Route::get('/createPelanggan', [PelangganController::class, 'create']);
Route::post('/storePelanggan', [PelangganController::class, 'store']);
Route::get('/EditPelanggan/{id_pelanggan}', [PelangganController::class, 'edit']);
Route::put('/UpdatePelanggan/{id_pelanggan}', [PelangganController::class, 'update'])->name('UpdatePelanggan.update');
Route::delete('/deletePelanggan/{id_pelanggan}', [PelangganController::class, 'destroy']);
//Halaman pengeluaran
Route::get('/pengeluaran', [PengeluaranController::class, 'index']);
Route::get('/createPengeluaran', [PengeluaranController::class, 'create']);
Route::post('/storePengeluaran', [PengeluaranController::class, 'store']);
Route::get('/EditPengeluaran/{id_pengeluaran}', [PengeluaranController::class, 'edit']);
Route::put('/UpdatePengeluaran/{id_pengeluaran}', [PengeluaranController::class, 'update'])->name('UpdatePengeluaran.update');
Route::delete('/deletePengeluaran/{id_pengeluaran}', [PengeluaranController::class, 'destroy']);
//Halaman Order
Route::get('/order', [OrderController::class, 'index']);
Route::get('/createOrder', [OrderController::class, 'create']);
Route::post('/storeOrder', [OrderController::class, 'store'])->name('storeOrder');
Route::delete('/deleteOrder/{id_order}', [OrderController::class, 'destroy']);
Route::get('/EditOrder/{id_order}', [OrderController::class, 'edit']);
Route::put('/UpdateOrder/{id_order}', [OrderController::class, 'update'])->name('UpdateOrder.update');
Route::post('/selesai/{id_order}',[OrderController::class, 'markAsSelesai']);
Route::post('/sudahdibayar/{id_order}',[OrderController::class, 'markAsSudahDibayar']);
//Halaman Transaksi
Route::get('/laporan', [TransaksiController::class, 'index']);
Route::get('/filterINV', [TransaksiController::class, 'filterData']);
Route::get('/cetakINV/{id_order}', [TransaksiController::class, 'cetak']);

//Halaman Arus Kas
Route::get('/kas', [KasController::class, 'index']);
Route::get('/filterKas', [KasController::class, 'filterData']);
Route::get('/cetakKas', [KasController::class, 'cetak']);
//Halaman profil laundry
Route::get('/profil', [ProfilController::class, 'index']);
Route::get('/EditProfil/{id_profil}', [ProfilController::class, 'edit']);
Route::put('/UpdateProfil/{id_profil}', [ProfilController::class, 'update'])->name('UpdateProfil.update');
//Halaman produk
Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/createProduk', [ProdukController::class, 'create']);
Route::post('/storeProduk', [ProdukController::class, 'store']);
Route::get('/EditProduk/{id_layanan}', [ProdukController::class, 'edit']);
Route::put('/UpdateProduk/{id_layanan}', [ProdukController::class, 'update'])->name('UpdateProduk.update');
Route::delete('/deleteProduk/{id_layanan}', [ProdukController::class, 'destroy']);
//Halaman Artikel
Route::get('/artikel', [ArtikelController::class, 'index']);
Route::get('/createArtikel', [ArtikelController::class, 'create']);
Route::post('/storeArtikel', [ArtikelController::class, 'store'])->name('artikel.store');
Route::get('/EditArtikel/{id_artikel}', [ArtikelController::class, 'edit']);
Route::put('/UpdateArtikel/{id_artikel}', [ArtikelController::class, 'update'])->name('UpdateArtikel.update');
Route::delete('/deleteArtikel/{id_artikel}', [ArtikelController::class, 'destroy']);
//Halaman user
Route::get('/user', [UserController::class, 'index']);
Route::get('/createUser', [UserController::class, 'create']);
Route::post('/StoreUser', [UserController::class, 'store']);
Route::get('/EditUser/{id_user}', [UserController::class, 'edit']);
Route::put('/UpdateUser/{id_user}', [UserController::class, 'update'])->name('UpdateUser.update');
Route::delete('/deleteUser/{id_user}', [UserController::class, 'destroy']);

//---Pegawai----------------------------------------------------------------------------------------
//Halaman Dashboard
Route::get('/dashboard_pegawai', [DashboardController::class, 'index_pegawai']);
//Halaman pelanggan
Route::get('/pelanggan', [PelangganController::class, 'index']);
Route::get('/createPelanggan', [PelangganController::class, 'create']);
Route::post('/storePelanggan', [PelangganController::class, 'store']);
Route::get('/EditPelanggan/{id_pelanggan}', [PelangganController::class, 'edit']);
Route::put('/UpdatePelanggan/{id_pelanggan}', [PelangganController::class, 'update'])->name('UpdatePelanggan.update');
Route::delete('/deletePelanggan/{id_pelanggan}', [PelangganController::class, 'destroy']);
//Halaman pengeluaran
Route::get('/pengeluaran', [PengeluaranController::class, 'index']);
Route::get('/createPengeluaran', [PengeluaranController::class, 'create']);
Route::post('/storePengeluaran', [PengeluaranController::class, 'store']);
Route::get('/EditPengeluaran/{id_pengeluaran}', [PengeluaranController::class, 'edit']);
Route::put('/UpdatePengeluaran/{id_pengeluaran}', [PengeluaranController::class, 'update'])->name('UpdatePengeluaran.update');
Route::delete('/deletePengeluaran/{id_pengeluaran}', [PengeluaranController::class, 'destroy']);
//Halaman Order
Route::get('/order', [OrderController::class, 'index']);
Route::get('/createOrder', [OrderController::class, 'create']);
Route::post('/storeOrder', [OrderController::class, 'store']);
Route::get('/EditOrder/{id_order}', [OrderController::class, 'edit']);
Route::put('/UpdateOrder/{id_order}', [OrderController::class, 'update'])->name('UpdateOrder.update');
Route::delete('/deleteOrder/{id_order}', [OrderController::class, 'destroy']);
