<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Endereco;
use App\Cliente;
use Illuminate\Support\Facades\DB;
use Session;
use Response;
use Illuminate\Support\Facades\Redirect;

class ClienteController extends Controller
{
   
    public function index()
    {
        $clientes = Cliente::paginate(15);
        return view('cliente.index', ['clientes' => $clientes]);
    }

    public function create()
    {
        return view('cliente.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
  
        DB::beginTransaction();

        try {
            
            $saveEndereco = new Endereco();
            $saveEndereco->fill($input['Endereco']);
            if ($saveEndereco->save()){
                $endereco_id = $saveEndereco->id;
                $saveCliente = new Cliente();
                $input['Cliente']['endereco_id'] = $endereco_id;
                $saveCliente->fill($input['Cliente']);
                $saveCliente->save();
                $cliente_id = $saveCliente->id;

                DB::commit();
                Session::flash('status', 'Cliente Cadastrado!');
                return  Redirect::route('cliente.show', array('cliente_id' => $cliente_id));
            }else {
                DB::rollback();
                Session::flash('status', 'Cliente não Cadastrado!');
                    return  Redirect::route('cliente.create');        
            }

        } catch (\Exception $e) {
            DB::rollback();
            Session::flash('status', 'Cadastro não pode ser concluído!');
                return  Redirect::route('cliente.create');
        }
    }

    public function show($id)
    {
        $cliente = Cliente::find($id);
        // $endereco = $cliente->endereco()->get();
        $endereco = Endereco::where('id', $cliente->endereco_id)->get();
        foreach ($endereco as $key => $value) {
            return view('cliente.show', ['cliente' => $cliente, 'endereco' => $value]);
        }
    }

    
    public function edit($id)
    {
        $cliente = Cliente::find($id);       
        $endereco = Endereco::where('id', $cliente->endereco_id)->get();
        foreach ($endereco as $key => $value) {
            return view('cliente.edit', ['cliente' => $cliente, 'endereco' => $value]);   
        }
    }

   
    public function update(Request $request, $id)
    {
        
        $input =  $request->all();
        $endereco = false;
        $cliente = false;
        $endereco_id = $input['Endereco']['endereco_id'];
        DB::beginTransaction();

        try {
            
            $endereco = Endereco::findOrFail($endereco_id);            
            $endereco->fill($input['Endereco']);
            $endereco->update();
            $endereco = true;

            if ($endereco != false){
                $cliente = Cliente::findOrFail($id);
                $cliente->fill($input['Cliente']);
                $cliente->update();

            DB::commit();
                Session::flash('status', 'Cliente Atualizado!');
                return Redirect::to('cliente');
            }else {
                DB::rollback();
                Session::flash('status', 'Cliente não Atualizado!');
                return  Redirect::route('cliente.edit',array('cliente' => $cliente, 'endereco' => $endereco));
          
             }

        } catch (\Exception $e) {
            DB::rollback();
            Session::flash('status', 'Cliente não Atualizado!');
            return  Redirect::route('cliente.edit',array('cliente' => $cliente, 'endereco' => $endereco));       
        }

    }    

 
    public function destroy($id)
    {
      
        DB::beginTransaction();

        try{

            $cliente = Cliente::findOrFail($id);
            $endereco_id = $cliente->endereco_id;
            $endereco = Endereco::findOrFail($endereco_id);

            if($cliente->delete()){
                $endereco->delete();

                DB::commit();
                Session::flash('status', 'Cliente Excluído!');
                return Redirect::to('cliente');
            }
            else{
                DB::rollback();
                Session::flash('status', 'Cliente não Excluído!');
                return Redirect::to('cliente');
            }

        }catch(\Exception $e){
            DB::rollback();
            Session::flash('status', 'Cliente não Encontrado!');
            return Redirect::to('cliente');
        }
    }

    public function gerarJson(){

        $clientes = Cliente::paginate(15);
        //$cliente = file_put_contents("file.json", json_encode($clientes));
        return Response::json($clientes);
    }
}
