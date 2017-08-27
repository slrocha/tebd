@extends('layouts.cabecalho')
@section('content')
<form class="form-horizontal" method="#">
 <div class="container">
  <div class="jumbotron">
    <h2>Atividades Realizadas</h2> </br>
  </div>
  <p>Segue abaixo a relação das atividades realizadas pelos componentes da equipe ao longo do desenvolvimento do projeto:</p>                  
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Integrante da Equipe</th>
        <th>Atividades</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Ana Cecília</td>
        <td>
	    	<ul class="circle">
	        	<li>Escolha da linguagem, framework de persistência e SGBD</li>
            <li>Estudo do Framework Lavavel e ORM Eloquent</li>
            <li>Configuração do Ambiente de Desenvolvimento</li>
            <li>Configuração da base de dados</li>
            <li>Realização da atividade de nivelamento</li>
            <li>Criação da modelagem conconceitual e do molego lógico. </li>
            <li>Implementação da persistência com o mapeamento objeto-relacional.</li>
            <li>Implementação da interface web Cliente/Endereço e CRUD com controle de transação.</li>
            <li>Povoamento do banco de dados.</li>
			</ul>
        </td>
      </tr>
      <tr>
        <td>Stephanie Lima</td>
	    <td>
	    	<ul class="circle">
	        	<li>Escolha da linguagem, framework de persistência e SGBD</li>
            <li>Criação do Site e do ambiente de versionamento</li>
	        	<li>Configuração do Ambiente de Desenvolvimento</li>
	        	<li>Configuração da base de dados</li>
            <li>Realização da atividade de nivelamento</li>
	        	<li>Criação da modelagem conconceitual e do molego lógico. </li>
            <li>Implementação da persistência com o mapeamento objeto-relacional.</li>
            <li>Implementação da interface web Cliente/Endereço e CRUD com controle de transação.</li>
            <li>Povoamento do banco de dados.</li>
			</ul>
        </td>
      </tr>
      <tr>
        <td>Thamires Asenate</td>
        <td>
	    	<ul class="circle">
	        	<li>Escolha da linguagem, framework de persistência e SGBD</li>
            <li>Estudo do Framework Lavavel e ORM Eloquent</li>
            <li>Configuração do Ambiente de Desenvolvimento</li>
            <li>Configuração da base de dados</li>
            <li>Realização da atividade de nivelamento</li>
            <li>Criação da modelagem conconceitual e do molego lógico. </li>
            <li>Implementação da persistência com o mapeamento objeto-relacional.</li>
            <li>Implementação da interface web Cliente/Endereço e CRUD com controle de transação.</li>
            <li>Povoamento do banco de dados.</li>
			</ul>
        </td>
      </tr>
    </tbody>
  </table>
</div>
</form>
@stop('content')





