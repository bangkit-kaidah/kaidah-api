<?php

use Illuminate\Support\Facades\Auth;
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
    return redirect('/home');
});

Auth::routes([
    'register' => false
]);

Route::group(['middleware' => ['checkrole']], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/anggota', [App\Http\Controllers\AnggotaController::class, 'index'])->name('anggota');
    Route::post('/anggota', [App\Http\Controllers\AnggotaController::class, 'send'])->name('anggota.send');
});

