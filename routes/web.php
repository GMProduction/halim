<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/admin/kardus', function () {
    return view('admin.kardus.kardus');
});

Route::get('/admin/tambahkardus', function () {
    return view('admin.kardus.tambahkardus');
});

Route::get('/admin/transaksi', function () {
    return view('admin.transaksi.transaksi');
});

Route::get('/admin/detailpesanan', function () {
    return view('admin.transaksi.detailTransaksi');
});

//USER
Route::get('/user', function () {
    return view('user.dashboard');
});

Route::get('/user/transaksi', function () {
    return view('user.transaksi.transaksi');
});

Route::get('/user/profile', function () {
    return view('user.profil.profil');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/pesan', function () {
    return view('pesan');
});

Route::get('/pembayaran', function () {
    return view('pembayaran');
});
//LOGIN
Route::get('/login', function () {
    return view('login.login');
});

Route::get('/daftaruser', function () {
    return view('login.daftaruser');
});
Route::get('/user/transaksi/cetak', 'LaporanController@cetakUserDataTransaksi')->name('cetakUserDataTransaksi');
Route::get('/admin/transaksi/cetak', 'LaporanController@cetakAdminDataTransaksi')->name('cetakAdminDataTransaksi');
