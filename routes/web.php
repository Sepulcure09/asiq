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
//Js2 Prak1
Route::get('/', function () {
    echo "Selamat Datang";
});
Route::get('/about', function() {
    echo nl2br("Nama : Irfan Thalib Alfarid \n \n NIM : 1941720039 \n \n Kelas : TI-2A");
});
Route::get('/article/{id}', function($id) {
    echo ("Halaman artikel ini ber-id ".$id);
});
