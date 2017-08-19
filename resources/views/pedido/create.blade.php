
@extends('layouts.cabecalho')
@section('content')
  <form class="form-horizontal" method="POST" action="{!!URL::route('pedido.store')!!}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="Item[pedido_id]">
    <h1>Pedido</h1>
    <div class="form-group">
      <label class="col-sm-2 control-label">Descrição</label>
      <div class="col-sm-10">
        <textarea class="form-control" rows="5" name="Pedido[descricao]"  placeholder="Descrição do Pedido"> </textarea>
      </div>
    </div>

    <h2>Cadastrar Item</h2>

    <div class="form-group">
      <label class="col-sm-2 control-label">Descrição do Item</label>
      <div class="col-sm-10">
        <textarea class="form-control" rows="3" name="Item[descricao]"  placeholder="Descrição do Pedido"> </textarea>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Quantidade</label>
      <div class="col-sm-10">
        <input class="form-control" name="Item[quantidade]" placeholder="Quantidade"> </textarea>
      </div>
    </div>
     <div class="form-group">
      <label class="col-sm-2 control-label">Valor Unitário</label>
      <div class="col-sm-10">
        <input class="form-control" name="Item[valor]" placeholder="$ 00,00"> </textarea>
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-offset-2">
        <button type="button" class="btn btn-warning">Adicionar Item</button>
        <button type="submit" class="btn btn-success">Cadastrar</button>
      </div>
    </div>
  </form>  
@stop('content')


