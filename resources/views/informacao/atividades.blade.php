@extends('layouts.cabecalho')
@section('content')
<form class="form-horizontal" method="#">
 <div class="container">
  <div class="jumbotron">
    <h2>Atividades Realizadas</h2> </br>
  </div>
  <p>Abaixo segue a relação das atividades executadas por cada componente do grupo ao longo do desenvolvimento do projeto:</p>                  
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Quem fez</th>
        <th>O que fez</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Ana Cecília</td>
        <td>
	    	<ul class="circle">
	        	<li></li>
			</ul>
        </td>
      </tr>
      <tr>
        <td>Stephanie Lima</td>
	    <td>
	    	<ul class="circle">
	        	<li>Criação do Site</li>
	        	<li>Configuração do Ambiente de Desenvolvimento</li>
	        	<li>Configuração da base de dados</li>
	        	<li>Participação na criação da modelagem lógica e esquema conceitual. </li>
			</ul>
        </td>
      </tr>
      <tr>
        <td>Thamires Asenate</td>
        <td>
	    	<ul class="circle">
	        	<li></li>
			</ul>
        </td>
      </tr>
    </tbody>
  </table>
</div>
</form>
@stop('content')