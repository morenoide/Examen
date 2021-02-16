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
    return view('welcome');
});
Route::get('/plantilla', function () {
    return view('plantilla');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/migraciones', function () {
    return view('migraciones');
});
Route::get('mail', function () {
    return view('mail');
});