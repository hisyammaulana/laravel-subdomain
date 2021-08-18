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

Route::domain('{subdomain}.'. env('SESSION_DOMAIN'))->group(function(){
    Route::get('/', 'SubdomainController@subdomain')->name('subdomain');
});

Route::get('/', 'DashboarController@index')->name('index');
Route::get('/tambah-sub', 'DashboarController@create')->name('tambah-sub');
Route::post('/tambah/subdomain', 'DashboarController@store')->name('store');
Route::post('/cari/subdomain', 'DashboarController@cek')->name('cek');