
@extends('layouts.cabecalho')
@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
  <form class="form-horizontal" method="POST" action="{!!URL::route('cliente.store')!!}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="Cliente[endereco_id]">
    <h1>Cliente</h1>
    <div class="form-group">
      <label class="col-sm-2 control-label">Nome</label>
      <div class="col-sm-4">
        <input type="text" class="form-control"  name="Cliente[nome]"> </input>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">CPF</label>
      <div class="col-sm-4">
        <input type="text" class="form-control"  name="Cliente[cpf]"> </input>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Data Nascimento</label>
      <div class="col-sm-4">
        <input type="text" class="form-control"  name="Cliente[dt_nascimento]"> </input>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Telefone</label>
      <div class="col-sm-4">
        <input type="text" class="form-control"  name="Cliente[telefone]"> </input>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Cliente VIP</label>
      <div class="col-sm-4">
        <input type="radio" name="Cliente[is_vip]" value="1" checked="checked"> Sim  
        <input type="radio" name="Cliente[is_vip]" value="0"> Não      
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


