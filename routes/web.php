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

Route::get('/bank-dashboard', function () {
    return view('bank.dashboard.index');
});

// Route::get('/tagihan', function () {
//     return view('bank.tagihan.index');
// });
// Route::get('/log', function () {
//     return view('admin.activity-log.index');
// });

// DASHBOARD
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

// Route::get('/log', 'ActivityLogController@index')->name('log');


// TARIF
// Route::get('/tarif', 'TarifController@index')->name('tarif');
Route::post('/tarif/store', 'TarifController@store')->name('tarif.store');

// RIWAYAT
Route::get('/riwayat-pembayaran-bank', 'RiwayatController@riwayatpembayaran')->name('riwayat-pembayaran-bank');

// PEMBAYARAN
Route::get('/pembayaran', 'PembayaranController@bank')->name('pembayaran');
Route::get('/edit-verifikasi/{id}', 'PembayaranController@edit')->name('verifikasi');
Route::post('/change/{id}', 'PembayaranController@oneChange')->name('change');
Route::get('/pembayaran/{id}/delete', 'PembayaranController@destroy')->name('pembayaran.delete');

// PROFILE
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::post('/profile/update/{id}', 'ProfileController@update')->name('profile.update');

// LOG ACTIVITY
Route::get('/log', 'ActivityLogController@index')->name('log');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
