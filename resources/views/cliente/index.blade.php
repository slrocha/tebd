
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
     <td>
     <form class="form-horizontal" method="get" action="{{ URL::to('cliente/'.$cliente->id.'/destroy') }}">
     	<button type="submit" class=" data-delete btn btn-danger">Excluir</a>
     </form>
     </td> 
      </tr>
    </tbody>
    @endforeach
  </table> 
</div>
@stop('content')

