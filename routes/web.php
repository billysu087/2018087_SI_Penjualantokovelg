<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\SuplierController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\PemasukanController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});


//PEGAWAI
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::post('/pegawai/updateProcess', [PegawaiController::class, 'updateProcess']);
Route::get('/pegawai/pegawai-tambah', [PegawaiController::class, 'pegawai_tambah']);

//CUSTOMER
Route::get('/customer', [CustomerController::class, 'index2']);
Route::post('/customer/updateProcess', [CustomerController::class, 'updateProcess']);
Route::get('/customer/customer-tambah', [CustomerController::class, 'customer_tambah']);

//BARANG
Route::get('/barang', [BarangController::class, 'index3']);
Route::post('/barang/updateProcess', [BarangController::class, 'updateProcess']);
Route::get('/barang/barang-tambah', [BarangController::class, 'barang_tambah']);


//SUPLIER
Route::get('/suplier', [SuplierController::class, 'index4']);
Route::post('/suplier/updateProcess', [SuplierController::class, 'updateProcess']);
Route::get('/suplier/suplier-tambah', [SuplierController::class, 'suplier_tambah']);

//PEMBELIAN
Route::get('/pembelian', [PembelianController::class, 'index5']);
Route::post('/pembelian/pembelian_full', [PembelianController::class, 'pembelian_full']);

//PENJUALAN
Route::get('/penjualan', [PenjualanController::class, 'index6']);
Route::post('/penjualan/penjualan_full', [PenjualanController::class, 'penjualan_full']);

//PENGELUARAN
Route::get('/pengeluaran', [PengeluaranController::class, 'index7']);
Route::post('/pengeluaran/pengeluaran_full', [PengeluaranController::class, 'pengeluaran_full']);

//PEMASUKAN
Route::get('/pemasukan', [PemasukanController::class, 'index8']);
Route::post('/pemasukan/pemasukan_full', [PemasukanController::class, 'pemasukan_full']);
