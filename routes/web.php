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
    return view('informacao.homeTebd');
});

//rotas para pedidios
Route::get('pedido/consultarPedido', 'PedidoController@consultarPedido')->name('pedido.consultarPedido');
Route::resource('pedido', 'PedidoController');
// Route::get('pedido/pesquisar', 'PedidoController@pesquisar');

Route::resource('item', 'ItemController');

//referentes a tela de informações
Route::get('informacao/atividades', 'InformacaoController@atividades')->name('informacao.atividades');
Route::get('informacao/documentacao', 'InformacaoController@documentacao')->name('informacao.documentacao');
Route::get('informacao/estrategias', 'InformacaoController@estrategias')->name('informacao.estrategias');
Route::resource('informacao', 'InformacaoController');

Route::resource('programacao', 'ProgramacaoController');


Route::resource('bilhete', 'BilheteController');
Route::resource('cliente', 'CLienteController');
Route::resource('endereco', 'EnderecoController');
Route::resource('espetaculo', 'EspetaculoController');
Route::resource('poltrona', 'PoltronaController');
Route::resource('programacao', 'ProgramacaoController');
Route::resource('reserva', 'ReservaBilheteController');
Route::resource('teatro', 'TeatroController');


