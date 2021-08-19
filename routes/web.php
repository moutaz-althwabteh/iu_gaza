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
Route::get('home','App\Http\Controllers\HomeController@index');

Auth::routes();

// Route::get('/', function () {
//     return view('home');
// });

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/create',[App\Http\Controllers\HomeController::class, 'create'])->name('create');
Route::post('/store',[App\Http\Controllers\HomeController::class, 'store'])->name('store');
Route::get('/show',[App\Http\Controllers\HomeController::class, 'show'])->name('show');
Route::get('/show',[App\Http\Controllers\dataController::class, 'index'])->name('data');
// Route::get('/update',[App\Http\Controllers\HomeController::class, 'update'])->name('update');

Route::get('/delete/{id}',[App\Http\Controllers\HomeController::class, 'delete'])->name('delete');
Route::get('/edit{offer_id}',[App\Http\Controllers\HomeController::class, 'edit'])->name('edit');
Route::POST('/update/{offer_id}',[App\Http\Controllers\HomeController::class, 'update'])->name('update');

// Route::post('delete', 'OfferController@delete')->name('ajax.offers.delete');

