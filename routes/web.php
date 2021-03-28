<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', function () {
    return view('login.index');
});

Route::get('/register', function () {
    return view('register.index');
});

// Route::get('/dashboard', function () {
//     return view('dashboard.index');
// });

Route::get('/', function () {
    return view('homepage.index');
});

Route::get('/penggunaan', function () {
    return view('penggunaan.index');
});

Route::get('/tagihan', function () {
    return view('tagihan.index');
});

Route::get('/pelanggan-dashboard', function () {
    return view('pelanggan.dashboard.index');
});

Route::get('/bank-dashboard', function () {
    return view('bank.dashboard.index');
});

// Route::get('/log', function () {
//     return view('admin.activity-log.index');
// });


Route::get('/create-tarif', function () {
    return view('tarif.create');
});

Route::get('/detail-tarif', function () {
    return view('tarif.detail');
});


// DASHBOARD
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

// TARIF
Route::get('/tarif', 'TarifController@index')->name('tarif');
Route::post('/tarif/store', 'TarifController@store')->name('tarif.store');
Route::get('/tarif/{id}/edit', 'TarifController@edit')->name('tarif.edit');
Route::post('/tarif/{id}/update', 'TarifController@update')->name('tarif.update');
Route::get('/tarif/{id}/delete', 'TarifController@destroy')->name('tarif.delete');

// PELANGGAN
Route::get('/pelanggan', 'PelangganController@index')->name('pelanggan');
Route::post('/pelanggan/store', 'PelangganController@store')->name('pelanggan.store');
Route::get('/pelanggan/{id}/edit', 'PelangganController@edit')->name('pelanggan.edit');
Route::post('/pelanggan/{id}/update', 'PelangganController@update')->name('pelanggan.update');
Route::get('/pelanggan/{id}/delete', 'PelangganController@destroy')->name('pelanggan.delete');

// PENGGUNAAN
Route::get('/penggunaan', 'PenggunaanController@index')->name('penggunaan');
Route::post('/penggunaan/store', 'PenggunaanController@create')->name('penggunaan.create');
Route::get('/penggunaan/{id}/edit', 'PenggunaanController@edit')->name('penggunaan.edit');
Route::post('/penggunaan/{id}/update', 'PenggunaanController@update')->name('penggunaan.update');
Route::get('/penggunaan/{id}/delete', 'PenggunaanController@destroy')->name('penggunaan.delete');
// Route::resource('pelanggan', 'PelangganController');

Route::get('/tagihan', 'TagihanController@index')->name('tagihan');
Route::get('/detail-tagihan/{id}', 'PembayaranController@index')->name('tagihan.detail');
Route::post('/bayar', 'PembayaranController@store')->name('bayar');
Route::get('/pelanggan-tagihan', 'TagihanController@tagihan_pelanggan')->name('pelanggan-tagihan');
Route::post('/pelanggan-tagihan', 'TagihanController@tagihan_check')->name('tagihan.check');
Route::get('/log', 'ActivityLogController@index')->name('log');

// RIWAYAT
Route::get('/riwayat', 'RiwayatController@index')->name('riwayat');
Route::get('/riwayat-pembayaran', 'RiwayatController@riwayat')->name('riwayat-pembayaran');
Route::get('/riwayat-pembayaran/pdf', 'RiwayatController@riwayatPdf')->name('riwayat-pembayaran-pdf');
Route::get('/riwayat-pembayaran-bank', 'RiwayatController@riwayatpembayaran')->name('riwayat-pembayaran-bank');

// PEMBAYARAN
Route::get('/pembayaran', 'PembayaranController@bank')->name('pembayaran');
Route::get('/edit-verifikasi/{id}', 'PembayaranController@edit')->name('verifikasi');
Route::post('/change/{id}', 'PembayaranController@oneChange')->name('change');

// PROFILE
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::post('/profile/update/{id}', 'ProfileController@update')->name('profile.update');

// LAPORAN
Route::get('/laporan', 'LaporanController@index')->name('laporan');
Route::get('/laporan-pembayaran', 'LaporanController@laporan')->name('laporan-pembayaran');
Route::get('/laporan-pembayaran/pdf', 'LaporanController@riwayatPdf')->name('laporan-pembayaran-pdf');
Route::get('/laporan-pembayaran-bank', 'LaporanController@riwayatpembayaran')->name('laporan-pembayaran-bank');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

