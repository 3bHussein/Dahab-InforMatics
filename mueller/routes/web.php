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

Route::get('/index','App\Http\Controllers\Master@index');
Route::get('/about','App\Http\Controllers\Master@about');
Route::get('/login','App\Http\Controllers\Master@login');
Route::get('/cart','App\Http\Controllers\Master@cart');
Route::get('/wishlist','App\Http\Controllers\Master@wishlist');
Route::get('/shoplist','App\Http\Controllers\Master@shopplist');
Route::get('/comingsoon','App\Http\Controllers\Master@comingsoon');
Route::get('/branches','App\Http\Controllers\Master@branches');
Route::get('/pharmacies','App\Http\Controllers\Master@pharmacies');
Route::get('/online','App\Http\Controllers\Master@online');

Route::get('/contact','App\Http\Controllers\Master@contact');

Route::post('/contactmail','App\Http\Controllers\Master@mail')->name('master.mail');
