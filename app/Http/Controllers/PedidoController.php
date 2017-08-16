<?php

namespace App\Http\Controllers;

use App\Pedido;
use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class PedidoController extends Controller
{
    
    public function index()
    {
        return view ('pedido.index');
                dd($request);

    }


    public function create()
    {
        return View('pedido.create');

    }

    public function pesquisar (Request $request){
        dd($request);

    }

 
    public function store(Request $request)
    {
        $input = $request->all();

        $savePedido = Pedido::create($input['Pedido']);
        $pedido = $savePedido->orderby('created_at','DESC')->first();

        $input['Item']['pedido_id'] =  $pedido->id;
        Item::create($input['Item']);

        return ("Cadastrado com sucesso");

    }


    public function show(Pedido $pedido)
    {
        dd($pedido);
    }

    public function consultarPedido(Request $request){
        
        $pedido = Pedido::find($request->pedido_id);
                dd($pedido);

        // return view ('pedido.consultarPedido');
    }

    
    public function edit(Pedido $pedido)
    {
        //
    }

   
    public function update(Request $request, Pedido $pedido)
    {
        //
    }

    
    public function destroy(Pedido $pedido)
    {
        //
    }
}
