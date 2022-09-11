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

Route::get('/update/{id}', [App\Http\Controllers\HomeController::class, 'update'])->name('update');
Route::get('/delete/{id}', [App\Http\Controllers\HomeController::class, 'destroy'])->name('end');
Route::Post('/update_now/{id}', [App\Http\Controllers\HomeController::class, 'change'])->name('change');
Route::post('/add_data', [App\Http\Controllers\HomeController::class, 'store'])->name('addnew');
Route::get('/add', [App\Http\Controllers\HomeController::class, 'add'])->name('add');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

