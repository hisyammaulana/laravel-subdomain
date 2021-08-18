<?php

use App\Http\Controllers\DashboarController;
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

Route::get('/', [DashboarController::class, 'index']);
Route::get('/tambah-sub', [DashboarController::class, 'create'])->name('tambah-sub');