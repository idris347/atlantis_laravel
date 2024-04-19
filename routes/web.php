<?php

use App\Http\Controllers\Barang\BarangController;
use App\Http\Controllers\Barang_Keluar\BarangKeluarController;
use App\Http\Controllers\Barang_masuk\BarangMasukController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Jenis\JenisController;
use App\Http\Controllers\Laporan\LaporanController;
use App\Http\Controllers\Satuan\SatuanController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/kerangka', function () {
    return view('kerangka');
});
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::middleware(['auth'])->group(function(){
    //data barang
    Route::get('/barang',[BarangController::class,'index'])->name('barang');//tampil data barang
    Route::get('/barang/create',[BarangController::class,'create'])->name('barang.create');//buat data barang
    Route::post('/barang/store',[BarangController::class,'store'])->name('barang.store');//simpan data barang
    Route::get('/barang/edit/{id}',[BarangController::class,'edit'])->name('barang.edit');//ubah data barang
    Route::post('/barang/update/{id}',[BarangController::class,'update'])->name('barang.update');//simpan ubah data barang
    Route::get('/barang/delete/{id}',[BarangController::class,'delete'])->name('barang.delete');//hapus data barang
    //jenis barang
    Route::get('/jenis',[JenisController::class,'index'])->name('jenis');//tampil data jenis
    Route::get('/jenis/create',[JenisController::class,'create'])->name('jenis.create');//buat data jenis
    Route::post('/jenis/store',[JenisController::class,'store'])->name('jenis.store');//simpan data jenis
    Route::get('/jenis/edit/{id}',[JenisController::class,'edit'])->name('jenis.edit');//ubah data jenis
    Route::post('/jenis/update/{id}',[JenisController::class,'update'])->name('jenis.update');//simpan ubah data jenis
    Route::get('/jenis/delete/{id}',[JenisController::class,'delete'])->name('jenis.delete');//hapus data jenis
    //Satuan Barang
    Route::get('/satuan',[SatuanController::class,'index'])->name('satuan');//tampil data satuan
    Route::get('/satuan/create',[SatuanController::class,'create'])->name('satuan.create');//buat data satuan
    Route::post('/satuan/store',[SatuanController::class,'store'])->name('satuan.store');//simpan data satuan
    Route::get('/satuan/edit/{id}',[SatuanController::class,'edit'])->name('satuan.edit');//ubah data satuan
    Route::post('/satuan/update/{id}',[SatuanController::class,'update'])->name('satuan.update');//simpan ubah data satuan
    Route::get('/satuan/delete/{id}',[SatuanController::class,'delete'])->name('satuan.delete');//hapus data satuan
    //Barang Masuk
    Route::get('/barang-masuk',[BarangMasukController::class,'index'])->name('barang_masuk');//tampil data barang masuk
    Route::get('/barang-masuk/create',[BarangMasukController::class,'create'])->name('barang_masuk.create');//buat data barang masuk
    Route::post('/barang-masuk/store',[BarangMasukController::class,'store'])->name('barang_masuk.store');//simpan data barang masuk
    Route::get('/barang-masuk/edit/{id}',[BarangMasukController::class,'edit'])->name('barang_masuk.edit');//ubah data barang masuk
    Route::post('/barang-masuk/update/{id}',[BarangMasukController::class,'update'])->name('barang_masuk.update');//simpan ubah data barang masuk
    Route::get('/barang-masuk/delete/{id}',[BarangMasukController::class,'delete'])->name('barang-masuk.delete');//hapus data barang masuk
    //Barang Keluar
    Route::get('/barang-keluar',[BarangKeluarController::class,'index'])->name('barang_keluar');//tampil data barang keluar
    Route::get('/barang-keluar/create',[BarangKeluarController::class,'create'])->name('barang_keluar.create');//buat data barang keluar
    Route::post('/barang-keluar/store',[BarangKeluarController::class,'store'])->name('barang_keluar.store');//simpan data barang keluar
    Route::get('/barang-keluar/edit/{id}',[BarangKeluarController::class,'edit'])->name('barang_keluar.edit');//ubah data barang keluar
    Route::post('/barang-keluar/update/{id}',[BarangKeluarController::class,'update'])->name('barang_keluar.update');//simpan ubah data barang keluar
    Route::get('/barang-keluar/delete/{id}',[BarangKeluarController::class,'delete'])->name('barang_keluar.delete');//hapus data barang keluar
    //laporan
    Route::get('/laporan/stok',[LaporanController::class,'getLpStok'])->name('laporan_stok');//tampil data laporan stok
    Route::get('/laporan/masuk',[LaporanController::class,'getLpMasuk'])->name('laporan_masuk');//tampil data laporan barang masuk 
    Route::get('/laporan/keluar',[LaporanController::class,'getLpkeluar'])->name('laporan_keluar');//tampil data laporan barang keluar 
    //user
    Route::get('/user',[UserController::class,'index'])->name('user');//tampil data user
    Route::get('/user/create',[UserController::class,'create'])->name('user.create');//buat data user
    Route::post('/user/store',[UserController::class,'store'])->name('user.store');//simpan data user
    Route::get('/user/edit/{id}',[UserController::class,'edit'])->name('user.edit');//ubah data user
    Route::post('/user/update/{id}',[UserController::class,'update'])->name('user.update');//simpan ubah data user
    Route::get('/user/delete/{id}',[UserController::class,'delete'])->name('user.delete');//hapus data user
    Route::get('/password', [UserController::class, 'reset'])->name('password');//ubah password

});

