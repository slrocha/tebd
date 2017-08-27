
@extends('layouts.cabecalho')
@section('content')
  <form class="form-horizontal" method="post" action="{!!URL::route('cliente.update', $cliente->id)!!}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input name="_method" type="hidden" value="PUT">
   
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
    
    <div class="form-group">
      <div class="col-md-offset-2">
        <button type="submit" class="btn btn-success">Atualizar Cliente</button> 
      </div>
    </div>
  </form>  
@stop('content')


