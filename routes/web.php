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
Route::get('informacao/documentacaop1', 'InformacaoController@documentacao_p1')->name('informacao.documentacaop1');
Route::get('informacao/documentacaop2', 'InformacaoController@documentacao_p2')->name('informacao.documentacaop2');
Route::get('informacao/estrategias', 'InformacaoController@estrategias')->name('informacao.estrategias');
Route::get('informacao/estrategiap1', 'InformacaoController@estrategia_p1')->name('informacao.estrategiap1');
Route::get('informacao/estrategiap2', 'InformacaoController@estrategia_p2')->name('informacao.estrategiap2');
Route::resource('informacao', 'InformacaoController');

Route::resource('bilhete', 'BilheteController');
Route::resource('cliente', 'CLienteController');
Route::any('gerarJson', 'ClienteController@gerarJson');
Route::resource('endereco', 'EnderecoController');
Route::resource('espetaculo', 'EspetaculoController');
Route::resource('poltrona', 'PoltronaController');
Route::resource('programacao', 'ProgramacaoController');
Route::resource('reserva', 'ReservaBilheteController');
Route::resource('teatro', 'TeatroController');

Route::get('cliente/{id}/destroy', 'CLienteController@destroy');

