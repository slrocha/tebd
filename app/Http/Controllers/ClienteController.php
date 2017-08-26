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

            }

        DB::commit();

        } catch (\Exception $e) {
            DB::rollback();
        }

    }

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
