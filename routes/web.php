<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\PendaftaranController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UkmController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
use App\Http\Middleware\CekRole;

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

// LOGIN
Route::group(['middleware' => ['guest']], function () {
    Route::get('/', [AuthController::class, 'index'])->name('/');
    Route::post('/login', [AuthController::class, 'authenticate']);
});
Route::group(['middleware' => ['auth', 'CekRole:mahasiswa,ukm']], function () {
    Route::post('/logout', [AuthController::class, 'logout']);
});

// TELUTIZEN VIEW
Route::group(['middleware' => ['auth', 'CekRole:mahasiswa']], function () {
    Route::get('/home', [ViewController::class, 'home'])->name('home');
    Route::get('/ukm', [ViewController::class, 'ukm']);
    Route::get('/event', [ViewController::class, 'event']);
    Route::get('/about', [ViewController::class, 'about']);
    Route::get('/index_telutizen', [ContentController::class, 'index_telutizen'])->name('index_telutizen');
    Route::get('detail-ukm/{id_ukm}', [ContentController::class, 'detail_ukm']); 
    Route::post('/add-pendaftaran', [PendaftaranController::class, 'store']); 
    Route::get('/notifikasi', [PendaftaranController::class, 'notifikasi']); 
});

// UKM VIEW
Route::group(['middleware' => ['auth', 'CekRole:ukm']], function () {
    Route::get('/home-ukm', [ViewController::class, 'home_ukm'])->name('home-ukm');
    Route::get('/edit', [ViewController::class, 'edit_ukm']);
    Route::get('/pendaftaran', [ViewController::class, 'daftar_ukm'])->name('view-pendaftaran');
    Route::post('/pendaftaran', [ViewController::class, 'daftar_ukm']);
    Route::get('/index_ukm', [ContentController::class, 'index_ukm'])->name('index_ukm');
    Route::post('/add_content', [ContentController::class, 'store']);
    Route::get('/index-pendaftaran', [PendaftaranController::class, 'index'])->name('index-pendaftaran'); 
    Route::get('terima/{id_pendaftaran}', [PendaftaranController::class, 'terima']); 
    Route::get('tolak/{id_pendaftaran}', [PendaftaranController::class, 'tolak']); 
});
