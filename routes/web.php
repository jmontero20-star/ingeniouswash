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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', function () {
    return view('client.home');
});

Route::get('/nosotros', function () {
    return view('client.about');
});

Route::get('nuestros-servicios', function () {
    return view('client.services');
});

Route::get('solicitar-servicio', function () {
    return view('client.service-request');
});
