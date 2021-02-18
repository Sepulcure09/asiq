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
//Js2 Prak2 No.1,2
Route::get('/', [App\Http\Controllers\PageController::class, 'index']);
Route::get('/about', [App\Http\Controllers\PageController::class, 'about']);
Route::get('/article/{id}', [App\Http\Controllers\PageController::class, 'article']);
//Js2 Prak2 No.3
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index']);
Route::get('/article/{id}', [App\Http\Controllers\ArticleController::class, 'index']);
//Js2 Prak3
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/products/{produk}', [App\Http\Controllers\ProductsController::class, 'index']);
Route::get('/news/{tanggal}', [App\Http\Controllers\NewsController::class, 'index']);
Route::get('/programs/{prog}', [App\Http\Controllers\ProgramController::class, 'index']);
Route::get('/aboutUs', [App\Http\Controllers\AboutUsController::class, 'index']);
Route::get('/contactUs', [App\Http\Controllers\ContactUsController::class, 'index']);

