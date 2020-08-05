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

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/admin/kardus', 'Admin\ProdukController@index');
Route::get('/admin/kardus/tambahkardus', 'Admin\ProdukController@addForm');
Route::post('/admin/kardus/tambahkardus', 'Admin\ProdukController@addForm');
Route::get('/admin/kardus/editkardus/{id}', 'Admin\ProdukController@editForm');
Route::post('/admin/kardus/editkardus/{id}', 'Admin\ProdukController@editForm');
Route::post('/admin/kardus/hapus/{id}', 'Admin\ProdukController@hapus');


Route::get('/admin/transaksi', 'Admin\TransaksiController@index');
Route::get('/admin/transaksi/detailpesanan/{id}', 'Admin\TransaksiController@detail');
Route::post('/admin/transaksi/detailpesanan/{id}', 'Admin\TransaksiController@detail');

Route::get('/admin/user', 'Admin\UserController@index');

//USER
Route::get('/user', function () {
    return view('user.dashboard');
});

Route::get('/user/transaksi', function () {
    return view('user.transaksi.transaksi');
});

Route::get('/user/detailtransaksi', function () {
    return view('user.transaksi.detailtransaksi');
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

Route::post('/post-register', 'Auth\AuthController@register');
Route::post('/post-login', 'Auth\AuthController@login');
Route::get('/logout', 'Auth\AuthController@logout');
