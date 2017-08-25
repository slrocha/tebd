<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Endereco;
use App\Cliente;
use Illuminate\Support\Facades\DB;


class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $saveEndereco = false;
        $saveCliente = false;


        DB::beginTransaction();

            $saveEndereco = new Endereco();
            $saveEndereco = $input['Endereco'];
            $saveEndereco->save();
            $saveEndereco = true;
            $endereco_id = $saveEndereco->id;

            if ($saveEndereco != false){
                $saveCliente = new Cliente();
                $saveCliente = $input['Cliente'];
                dd($saveCliente);
                $saveCliente->save();
                $cliente_id = $saveCliente->id;

                }
            $pedido = $savePedido->orderby('created_at','DESC')->first();

            $input['Item']['pedido_id'] =  $pedido->id;
            Item::create($input['Item']);

            return ("Cadastrado com sucesso");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
