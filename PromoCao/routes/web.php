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

Route::get('lojas', [\App\Http\Controllers\LojasController::class, 'index'])->name('lojas');
Route::get('lojas/create', [\App\Http\Controllers\LojasController::class, 'create']);
Route::post('lojas/store', [\App\Http\Controllers\LojasController::class, 'store']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
