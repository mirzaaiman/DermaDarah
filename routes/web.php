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

Route::get('/', function () {
    return view('base');
});

Route::get('/lokasi', function () {
    return view('lokasi.index');
});

Route::get('/klinik', function () {
    return view('klinik.index');
});

Route::get('/derma', function () {
    return view('derma.index');
});

Route::get('/user', function () {
    return view('user.index');
});
