<?php

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

Route::get('pedido/consultarPedido', 'PedidoController@consultarPedido')->name('pedido.consultarPedido');

Route::resource('pedido', 'PedidoController');
// Route::get('pedido/pesquisar', 'PedidoController@pesquisar');

Route::resource('item', 'ItemController');
Route::get('informacao/atividades', 'InformacaoController@atividades')->name('informacao.atividades');
Route::get('informacao/documentacao', 'InformacaoController@documentacao')->name('informacao.documentacao');
Route::get('informacao/estrategias', 'InformacaoController@estrategias')->name('informacao.estrategias');


Route::resource('informacao', 'InformacaoController');

