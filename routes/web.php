<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UkmController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;

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

// TELUTIZEN VIEW
Route::get('/home', [ViewController::class, 'home'])->middleware('auth');
Route::get('/ukm', [ViewController::class, 'home'])->middleware('auth');
Route::get('/event', [ViewController::class, 'home'])->middleware('auth');
Route::get('/about', [ViewController::class, 'home'])->middleware('auth');

// Route::get('/', function () {
//     return view('login-telutizen', [
//         'title' => 'Login'
//     ]);
// })->middleware('guest');

Route::get('/login-ukm', function () {
    return view('login-ukm', [
        'title' => 'Login UKM'
    ]);
})->middleware('guest');

// LOGIN
Route::get('/', [UserController::class, 'index'])->middleware('guest');
Route::get('/login', [UserController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [UserController::class, 'authenticate'])->middleware('guest');

Route::get('/login-ukm', [UkmController::class, 'index'])->name('login-ukm')->middleware('guest');

// TELUTIZEN

Route::get('/home', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/ukm', function () {
    return view('ukm', [
        'title' => 'UKM'
    ]);
});

Route::get('/event', function () {
    return view('event', [
        'title' => 'Event'
    ]);
});

Route::get('/about', function () {
    return view('about-us', [
        'title' => 'About Us'
    ]);
});

Route::post('/logout', [UserController::class, 'logout']);

// UKM
Route::get('/home-ukm', function () {
    return view('home', [
        'title' => 'Home'
    ]);
})->middleware('auth');