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

Route::get('/', 'Main\MainController@index');
Route::get('/product/{id}', 'Main\MainController@detail');
Route::post('/addToCart', 'Main\TransactionController@addToCart');
Route::get('/cart', 'Main\TransactionController@cartPage');
Route::post('/ajax/cekout', 'Main\TransactionController@cekOut');
Route::get('/payment/{id}', 'Main\TransactionController@pagePayment');
Route::post('/payment/send', 'Main\TransactionController@send');

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

Route::get('/admin/user', function () {
    return view('admin.user.user');
});

//USER
Route::get('/user', 'Main\MainController@dashboard');
Route::get('/user/pesanan', 'Main\TransactionController@pageTransaksi');
Route::get('/user/pesanan/{id}', 'Main\TransactionController@detailHistory');
Route::get('/user/profil', 'Main\MainController@profile');
Route::post('/user/profil/update', 'Main\MainController@updateProfile');

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

Route::post('/post-register', 'Auth\AuthController@register');
Route::post('/post-login', 'Auth\AuthController@login');
Route::get('/logout', 'Auth\AuthController@logout');

Route::get('/user/transaksi/cetak', 'LaporanController@cetakUserDataTransaksi')->name('cetakUserDataTransaksi');
Route::get('/admin/transaksi/cetak', 'LaporanController@cetakAdminDataTransaksi')->name('cetakAdminDataTransaksi');
