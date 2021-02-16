<?php

use App\Mail\EmailExamen;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\View\ViewName;

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
Route::get('/mail', function () {
    $correo = new EmailExamen;

    Mail::to('destinatario@correo.com')->send($correo);

    return view('mail');
});
