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

Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix'=>'lojas', 'where'=>['loja_id'=>'[0-9]+']], function() {
        Route::any('', ['as'=>'lojas', 'uses'=>'\App\Http\Controllers\LojasController@index']);
        Route::get('create', ['as'=>'lojas.create', 'uses'=>'\App\Http\Controllers\LojasController@create']);
        Route::post('store', ['as'=>'lojas.store', 'uses'=>'\App\Http\Controllers\LojasController@store']);
        Route::get('{loja_id}/destroy', ['as'=>'lojas.destroy', 'uses'=>'\App\Http\Controllers\LojasController@destroy']);
        Route::get('{loja_id}/edit', ['as'=>'lojas.edit', 'uses'=>'\App\Http\Controllers\LojasController@edit']);
        Route::put('{loja_id}/update', ['as'=>'lojas.update', 'uses'=>'\App\Http\Controllers\LojasController@update']);
    });

    Route::group(['prefix'=>'cupons', 'where'=>['cupom_id'=>'[0-9]+']], function() {
        Route::any('', ['as'=>'cupons', 'uses'=>'\App\Http\Controllers\CupomsController@index']);
        Route::get('create', ['as'=>'cupons.create', 'uses'=>'\App\Http\Controllers\CupomsController@create']);
        Route::post('store', ['as'=>'cupons.store', 'uses'=>'\App\Http\Controllers\CupomsController@store']);
        Route::get('{cupom_id}/destroy', ['as'=>'cupons.destroy', 'uses'=>'\App\Http\Controllers\CupomsController@destroy']);
        Route::get('{cupom_id}/edit', ['as'=>'cupons.edit', 'uses'=>'\App\Http\Controllers\CupomsController@edit']);
        Route::put('{cupom_id}/update', ['as'=>'cupons.update', 'uses'=>'\App\Http\Controllers\CupomsController@update']);
    });

    Route::group(['prefix'=>'consumidores', 'where'=>['consumidor_id'=>'[0-9]+']], function() {
        Route::any('', ['as'=>'consumidores', 'uses'=>'\App\Http\Controllers\ConsumidoresController@index']);
        Route::get('create', ['as'=>'consumidores.create', 'uses'=>'\App\Http\Controllers\ConsumidoresController@create']);
        Route::post('store', ['as'=>'consumidores.store', 'uses'=>'\App\Http\Controllers\ConsumidoresController@store']);
        Route::get('{consumidor_id}/destroy', ['as'=>'consumidores.destroy', 'uses'=>'\App\Http\Controllers\ConsumidoresController@destroy']);
        Route::get('{consumidor_id}/edit', ['as'=>'consumidores.edit', 'uses'=>'\App\Http\Controllers\ConsumidoresController@edit']);
        Route::put('{consumidor_id}/update', ['as'=>'consumidores.update', 'uses'=>'\App\Http\Controllers\ConsumidoresController@update']);
    });

    Route::group(['prefix'=>'promocoes', 'where'=>['promocao_id'=>'[0-9]+']], function() {
        Route::any('', ['as'=>'promocoes', 'uses'=>'\App\Http\Controllers\PromocaosController@index']);
        Route::get('create', ['as'=>'promocoes.create', 'uses'=>'\App\Http\Controllers\PromocaosController@create']);
        Route::post('store', ['as'=>'promocoes.store', 'uses'=>'\App\Http\Controllers\PromocaosController@store']);
        Route::get('{promocao_id}/destroy', ['as'=>'promocoes.destroy', 'uses'=>'\App\Http\Controllers\PromocaosController@destroy']);
        Route::get('{promocao_id}/edit', ['as'=>'promocoes.edit', 'uses'=>'\App\Http\Controllers\PromocaosController@edit']);
        Route::put('{promocao_id}/update', ['as'=>'promocoes.update', 'uses'=>'\App\Http\Controllers\PromocaosController@update']);
    });

    Route::group(['prefix'=>'denuncias', 'where'=>['denuncia_id'=>'[0-9]+']], function() {
        Route::any('', ['as'=>'denuncias', 'uses'=>'\App\Http\Controllers\DenunciasController@index']);
        Route::get('create', ['as'=>'denuncias.create', 'uses'=>'\App\Http\Controllers\DenunciasController@create']);
        Route::post('store', ['as'=>'denuncias.store', 'uses'=>'\App\Http\Controllers\DenunciasController@store']);
        Route::get('{denuncia_id}/destroy', ['as'=>'denuncias.destroy', 'uses'=>'\App\Http\Controllers\DenunciasController@destroy']);
        Route::get('{denuncia_id}/edit', ['as'=>'denuncias.edit', 'uses'=>'\App\Http\Controllers\DenunciasController@edit']);
        Route::put('{denuncia_id}/update', ['as'=>'denuncias.update', 'uses'=>'\App\Http\Controllers\DenunciasController@update']);
    });

    Route::group(['prefix'=>'comentarios', 'where'=>['comentario_id'=>'[0-9]+']], function() {
        Route::any('', ['as'=>'comentarios', 'uses'=>'\App\Http\Controllers\ComentariosController@index']);
        Route::get('create', ['as'=>'comentarios.create', 'uses'=>'\App\Http\Controllers\ComentariosController@create']);
        Route::post('store', ['as'=>'comentarios.store', 'uses'=>'\App\Http\Controllers\ComentariosController@store']);
        Route::get('{comentario_id}/destroy', ['as'=>'comentarios.destroy', 'uses'=>'\App\Http\Controllers\ComentariosController@destroy']);
        Route::get('{comentario_id}/edit', ['as'=>'comentarios.edit', 'uses'=>'\App\Http\Controllers\ComentariosController@edit']);
        Route::put('{comentario_id}/update', ['as'=>'comentarios.update', 'uses'=>'\App\Http\Controllers\ComentariosController@update']);
    });
});


Route::get('tipos', [\App\Http\Controllers\TipoUsuariosController::class, 'index'])->name('tipos');
Route::get('tipos/create', [\App\Http\Controllers\TipoUsuariosController::class, 'create']);
Route::post('tipos/store', [\App\Http\Controllers\TipoUsuariosController::class, 'store']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
