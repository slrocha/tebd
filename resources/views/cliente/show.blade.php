
@extends('layouts.cabecalho')
@section('content')
  <form class="form-horizontal" method="#" action="#">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
  @foreach($clientes as $cliente)
    <h1>Cliente</h1>
    <div class="form-group">
      <label class="col-sm-2 control-label">Nome</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" value="{{$cliente->nome}}" name="Cliente[nome]"> </input>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">CPF</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" value="{{$cliente->cpf}}"  name="Cliente[cpf]"> </input>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Data Nascimento</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" value="{{$cliente->dt_nascimento}}" name="Cliente[dt_nascimento]"> </input>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Telefone</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" value="{{$cliente->telefone}}" name="Cliente[telefone]"> </input>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Cliente VIP</label>
      <div class="col-sm-4">
      @if($cliente->is_vip == 1)  
        <input type="radio" name="1" value="other" checked="checked"> Sim  
        <input type="radio" name="0" value="other"> Não   
      @else
        <input type="radio" name="1" value="other"> Sim  
        <input type="radio" name="0" value="other" checked="checked"> Não 
      @endif  
      </div>
    </div>
  
    <hr />
    <h2>Endereço</h2>

    <div class="form-group">
      <label class="col-sm-2 control-label">Cidade</label>
      <div class="col-sm-4">
        <input text="type" class="form-control" name="Endereco[cidade]" > </input>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Bairro</label>
      <div class="col-sm-4">
        <input class="form-control" name="Endereco[bairro]"> </input>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Rua</label>
      <div class="col-sm-4">
        <input class="form-control" name="Endereco[rua]"> </input>
      </div>
       <label class="col-sm-1 control-label">Número</label>
      <div class="col-sm-1">
        <input class="form-control" name="Endereco[numero]"> </input>
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-offset-2">
        <button type="submit" class="btn btn-success">Cadastrar</button>
      </div>
    </div>
  </form>  
@stop('content')


