
@extends('layouts.cabecalho')
@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<div class="container">
  <h2>Cliente</h2>
<div class="form-group">
	<div class="col-md-offset-1" style="margin-left: 0;">
	    <a href="{{ URL::to('cliente/create') }}" class="btn btn-primary">Cadastrar Cliente</a>
	</div>
</div>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Nome</th>
        <th>CPF</th>
        <th>Telefone</th>
        <th>Data Nascimento</th>
        <th>Cliente VIP</th>
      </tr>
    </thead>
   @foreach($clientes as $key => $cliente) 
    <tbody>
      <tr>
        <td>{{$cliente->nome}}</td>
        <td>{{$cliente->cpf}}</td>
        <td>{{$cliente->telefone}}</td>
        <td>{{$cliente->dt_nascimento}}</td>
    @if($cliente->is_vip == 1)    
        <td>Sim</td>
    @else
        <td>Não</td>
    @endif   
    <td><a href="{{route('cliente.edit', $cliente->id)}}" class="btn btn-warning">Editar</a></td> 
     <td><a href="{{ route('cliente.destroy', $cliente->id) }}" data-toggle="modal" data-target="#myModal" class="btn btn-danger">Deletar</a></td> 
      </tr>
    </tbody>
    @endforeach
  </table>

   <!-- Modal -->
<form class="form-horizontal" method="DELETE" action="{{ route('cliente.destroy', $cliente->id) }}">
<div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog modal-sm">    
  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
      <p>Deseja excluir?</p>
    </div>
    <div class="modal-footer">
      <button type="submit" class="btn btn-danger" data-dismiss="modal">Excluir</button>
    </div>
  </div>
</form>   
 
</div>
@stop('content')
