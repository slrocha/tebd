<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Endereco;
use App\Cliente;
use Illuminate\Support\Facades\DB;



class ClienteController extends Controller
{
   
    public function index()
    {
        $clientes = Cliente::all();
        return redirect ('cliente.index', ['clientes' => $clientes]);
    }

    public function create()
    {
        return view('cliente.create');
    }

    public function store(ClienteStoreRequest $request)
    {
        $input = $request->all();
        $saveEndereco = false;
        $saveCliente = false;


        DB::beginTransaction();

        try {
            
            $saveEndereco = new Endereco();
            $saveEndereco->fill($input['Endereco']);
            $saveEndereco->save();
            $saveEndereco = true;
            $endereco_id = $saveEndereco->id;

            if ($saveEndereco != false){
                $saveCliente = new Cliente();
                $saveCliente->fill($input['Cliente']);
                $saveCliente->save();
                $cliente_id = $saveCliente->id;

            }else {
                return redirect ('cliente.create')->with('status', 'Cadastro não pode ser concluído');
            }

        DB::commit();
            return redirect ('cliente.show', ['cliente_id' => $cliente_id]);

        } catch (\Exception $e) {
            DB::rollback();
            return redirect ('cliente.create')->with('status', 'Cadastro não pode ser concluído');
        }

    }

    public function show($id)
    {
        $cliente = Cliente::find($id);
        $endereco = $cliente->endereco()->get();
        return view('cliente.show', ['cliente' => $cliente, 'endereco' => $endereco]);
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
