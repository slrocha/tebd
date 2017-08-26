
@extends('layouts.cabecalho')
@section('content')

<div class="container">
  <h2>Cliente</h2>
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
      </tr>
    </tbody>
    @endforeach
  </table>
</div>