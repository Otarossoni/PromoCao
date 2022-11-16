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

Route::group(['prefix'=>'cupons', 'where'=>['cupom_id'=>'[0-9]+']], function() {
    Route::get('', ['as'=>'cupons', 'uses'=>'\App\Http\Controllers\CupomsController@index']);
    Route::get('create', ['as'=>'cupons.create', 'uses'=>'\App\Http\Controllers\CupomsController@create']);
    Route::post('store', ['as'=>'cupons.store', 'uses'=>'\App\Http\Controllers\CupomsController@store']);
    Route::get('{cupom_id}/destroy', ['as'=>'cupons.destroy', 'uses'=>'\App\Http\Controllers\CupomsController@destroy']);
    Route::get('{cupom_id}/edit', ['as'=>'cupons.edit', 'uses'=>'\App\Http\Controllers\CupomsController@edit']);
    Route::put('{cupom_id}/update', ['as'=>'cupons.update', 'uses'=>'\App\Http\Controllers\CupomsController@update']);
});



Route::get('tipos', [\App\Http\Controllers\TipoUsuariosController::class, 'index'])->name('tipos');
Route::get('tipos/create', [\App\Http\Controllers\TipoUsuariosController::class, 'create']);
Route::post('tipos/store', [\App\Http\Controllers\TipoUsuariosController::class, 'store']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
