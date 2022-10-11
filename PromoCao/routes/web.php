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


Route::group(['prefix'=>'lojas', 'where'=>['loja_id'=>'[0-9]+']], function() {
    Route::get('', ['as'=>'lojas', 'uses'=>'\App\Http\Controllers\LojasController@index']);
    Route::get('create', ['as'=>'lojas.create', 'uses'=>'\App\Http\Controllers\LojasController@create']);
    Route::post('store', ['as'=>'lojas.store', 'uses'=>'\App\Http\Controllers\LojasController@store']);
    Route::get('{loja_id}/destroy', ['as'=>'lojas.destroy', 'uses'=>'\App\Http\Controllers\LojasController@destroy']);
    Route::get('{loja_id}/edit', ['as'=>'lojas.edit', 'uses'=>'\App\Http\Controllers\LojasController@edit']);
    Route::put('{loja_id}/update', ['as'=>'lojas.update', 'uses'=>'\App\Http\Controllers\LojasController@update']);
});

// Route::get('lojas', [\App\Http\Controllers\LojasController::class, 'index'])->name('lojas');
// Route::get('lojas/create', [\App\Http\Controllers\LojasController::class, 'create']);
// Route::post('lojas/store', [\App\Http\Controllers\LojasController::class, 'store']);
// Route::get('lojas/{loja_id}/destroy', [\App\Http\Controllers\LojasController::class, 'destroy']);
// Route::get('lojas/{loja_id}/edit', [\App\Http\Controllers\LojasController::class, 'edit']);
// Route::put('lojas/{loja_id}/update', [\App\Http\Controllers\LojasController::class, 'update']);

Route::get('tipos', [\App\Http\Controllers\TipoUsuariosController::class, 'index'])->name('tipos');
Route::get('tipos/create', [\App\Http\Controllers\TipoUsuariosController::class, 'create']);
Route::post('tipos/store', [\App\Http\Controllers\TipoUsuariosController::class, 'store']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
