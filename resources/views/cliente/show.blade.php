
@extends('layouts.cabecalho')
@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
  <form class="form-horizontal" method="#" action="#">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
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
        <input type="radio" name="Cliente[is_vip]" value="{{$cliente->is_vip}}" checked="checked"> Sim  
        <input type="radio" name="Cliente[is_vip]" > Não   
      @else
        <input type="radio" name="Cliente[is_vip]"> Sim  
        <input type="radio" name="Cliente[is_vip]" value="{{$cliente->is_vip}}" checked="checked"> Não 
      @endif  
      </div>
    </div>
  
    <hr />
    <h2>Endereço</h2>
    <div class="form-group">
      <label class="col-sm-2 control-label">Cidade</label>
      <div class="col-sm-4">
        <input text="type" class="form-control" value="{{$endereco->cidade}}" name="Endereco[cidade]" > </input>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Bairro</label>
      <div class="col-sm-4">
        <input class="form-control" value="{{$endereco->bairro}}" name="Endereco[bairro]"> </input>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Rua</label>
      <div class="col-sm-4">
        <input class="form-control" value="{{$endereco->rua}}" name="Endereco[rua]"> </input>
      </div>
       <label class="col-sm-1 control-label">Número</label>
      <div class="col-sm-1">
        <input class="form-control" value="{{$endereco->numero}}" name="Endereco[numero]"> </input>
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-offset-2">
        <a href="{{ URL::to('cliente') }}" class="btn btn-primary">Início</a>
      </div>
    </div>  
  </form>  
@stop('content')


