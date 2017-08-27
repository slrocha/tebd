<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Endereco;
use App\Cliente;
use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Support\Facades\Redirect;

class ClienteController extends Controller
{
   
    public function index()
    {
        $clientes = Cliente::all();
        return view('cliente.index', ['clientes' => $clientes]);
    }

    public function create()
    {
        return view('cliente.create');
    }

    public function store(Request $request)
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
                dd($saveCliente);
                $saveCliente->save();
                $cliente_id = $saveCliente->id;

            }else {
                return redirect ('cliente/create')->with('status', 'Cadastro não pode ser concluído');
            }

        DB::commit();
            return redirect ('cliente.show', ['cliente_id' => $cliente_id]);

        } catch (\Exception $e) {
            DB::rollback();
            return redirect ('cliente/create')->with('status', 'Cadastro não pode ser concluído');
        }

    }

    public function show($id)
    {
        $cliente = Cliente::find($id);
        $endereco = $cliente->endereco()->get();
        foreach ($endereco as $key => $value) {
            return view('cliente.show', ['cliente' => $cliente, 'enderecos' => $value]);
        }
    }

    
    public function edit($id)
    {
        $cliente = Cliente::find($id);
        $endereco = $cliente->endereco()->get();
        foreach ($endereco as $key => $value) {
            return view('cliente.edit', ['cliente' => $cliente, 'endereco' => $value]);   
        }
    }

   
    public function update(Request $request, $id)
    {
        
        $input =  $request->all();
        $input = $request->all();
        $endereco = false;
        $cliente = false;
        $endereco_id = $input['Endereco']['endereco_id'];
        DB::beginTransaction();

        try {
            
            $endereco = Endereco::find($endereco_id);            
            $endereco->fill($input['Endereco']);
            $endereco->save();
            $endereco = true;

            if ($endereco != false){
                $cliente = Cliente::find($id);
                $cliente->fill($input['Cliente']);
                $cliente->save();

            DB::commit();
                Session::flash('status', 'Cliente Atualizado!');
                return Redirect::to('cliente');
            }else {
                Session::flash('status', 'Cliente não Atualizado!');
                return  Redirect::route('cliente.edit',array('cliente' => $cliente, 'endereco' => $endereco));
          
             }

        } catch (\Exception $e) {
            DB::rollback();
            return redirect ('cliente.edit', $id);
        }

    }    

 
    public function destroy($id)
    {
        //
    }
}
