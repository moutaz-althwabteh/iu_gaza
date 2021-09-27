<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;


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
    return view('Dashboard.show');
});


Auth::routes();

Route::resource('project', ProjectController::class);
Route::get('/show',[App\Http\Controllers\dataController::class, 'index'])->name('data');
Route::get('/project/delete/{id}',[App\Http\Controllers\ProjectController::class, 'destroy'])->name('project.destroy');



// Route::get('home','App\Http\Controllers\HomeController@index');

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/project/create',[App\Http\Controllers\HomeController::class, 'create'])->name('create');
// Route::post('/store',[App\Http\Controllers\HomeController::class, 'store'])->name('store');
// Route::get('/show',[App\Http\Controllers\HomeController::class, 'show'])->name('show');

// Route::get('/update',[App\Http\Controllers\HomeController::class, 'update'])->name('update');

// Route::get('/project/delete/{id}',[App\Http\Controllers\HomeController::class, 'delete'])->name('delete');
// Route::get('/project/edit{offer_id}',[App\Http\Controllers\HomeController::class, 'edit'])->name('edit');
// Route::POST('/project/update/{offer_id}',[App\Http\Controllers\HomeController::class, 'update'])->name('update');



