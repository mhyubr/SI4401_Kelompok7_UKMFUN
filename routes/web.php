<?php

use App\Http\Controllers\AuthController;
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
route::group(['middleware' => ['guest']], function () {
    Route::get('/', [AuthController::class, 'index_telutizen'])->name('/');
    Route::post('/auth-telutizen', [AuthController::class, 'authenticate_telutizen']);
    Route::get('/login-ukm', [AuthController::class, 'index_ukm'])->name('login-ukm');
    Route::post('/auth-ukm', [AuthController::class, 'authenticate_ukm']);
});
route::group(['middleware' => ['auth:user,ukm', 'CekRole:mahasiswa,ukm']], function () {
    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');
});

// TELUTIZEN VIEW
route::group(['middleware' => ['auth:user', 'CekRole:mahasiswa']], function () {
    Route::get('/home', [ViewController::class, 'home'])->name('home');
    Route::get('/ukm', [ViewController::class, 'ukm']);
    Route::get('/event', [ViewController::class, 'event']);
    Route::get('/about', [ViewController::class, 'about']);
});

// UKM VIEW
route::group(['middleware' => ['auth:ukm', 'CekRole:ukm']], function () {
    Route::get('/home-ukm', [ViewController::class, 'home_ukm']);
});
