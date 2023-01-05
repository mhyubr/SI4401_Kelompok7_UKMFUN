<?php

use App\Http\Controllers\UserController;
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
    return view('login-telutizen', [
        'title' => 'Login'
    ]);
})->middleware('guest');

Route::get('/login-ukm', function () {
    return view('login-ukm', [
        'title' => 'Login UKM'
    ]);
})->middleware('guest');

Route::get('/login', [UserController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [UserController::class, 'authenticate'])->middleware('guest');

// TELUTIZEN

Route::get('/home', function () {
    return view('home', [
        'title' => 'Home'
    ]);
})->middleware('auth');

Route::get('/ukm', function () {
    return view('ukm', [
        'title' => 'UKM'
    ]);
})->middleware('auth');

Route::get('/event', function () {
    return view('event', [
        'title' => 'Event'
    ]);
})->middleware('auth');

Route::get('/about', function () {
    return view('about-us', [
        'title' => 'About Us'
    ]);
})->middleware('auth');;

Route::post('/logout', [UserController::class, 'logout']);

// UKM
Route::get('/home-ukm', function () {
    return view('home', [
        'title' => 'Home'
    ]);
})->middleware('auth');