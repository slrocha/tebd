@extends('layouts.cabecalho')
@section('content')
<form class="form-horizontal" method="get" action="{!!URL::route('pedido.consultarPedido')!!}">
  <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->

  <div class="form-group">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
      <input id="pesquisar" type="text" class="form-control" name="pedido_id" placeholder="Pesquisar pelo ID">
    </div>
</div>    
  <div class="form-group">
    <div class="col-md-12">
      <button type="submit" class="btn btn-warning">Pesquisar Produto</button>
    </div>
  </div>
</form>
@stop('content')