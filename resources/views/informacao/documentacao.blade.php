@extends('layouts.cabecalho')
@section('content')
<form class="form-horizontal" method="#">
 <div class="container">
  <div class="jumbotron">
    <h2>Documentação do Projeto</h2> </br>
  </div>

   <div class="well">
    <strong>Especificação do Projeto</strong></br>
    <p align="justify">Para a concepção do blog, foi utilizado um framework HTML, CSS e JS que permite a criação de sites responsíveis. O Bootstrap é um framework que traz consigo diversas classes prontas facilitando a customização das páginas.</p>
  </div>

  <div class="well">
    <strong>Modelagem Conceitual e Esquema Lógico</strong></br>
    <p align="justify">Para a concepção do blog, foi utilizado um framework HTML, CSS e JS que permite a criação de sites responsíveis. O Bootstrap é um framework que traz consigo diversas classes prontas facilitando a customização das páginas.</p>
  </div>

  <div class="well">
    <strong>Persistência com ORM</strong></br>
    <p align="justify">Para a concepção do blog, foi utilizado um framework HTML, CSS e JS que permite a criação de sites responsíveis. O Bootstrap é um framework que traz consigo diversas classes prontas facilitando a customização das páginas.</p>
  </div>

  <div class="well">
    <strong>Interface Web e Script para Povoamento do Banco</strong></br>
    <p align="justify">Para a concepção do blog, foi utilizado um framework HTML, CSS e JS que permite a criação de sites responsíveis. O Bootstrap é um framework que traz consigo diversas classes prontas facilitando a customização das páginas.</p>
    <a href="{{ URL::to('cliente/create') }}" class="btn btn-warning">Acessar Interface</a>
  </div>

  <div class="well">
    <strong>Slide da Primeira Apresentação para download</strong></br>
    <p align="justify">Para a concepção do blog, foi utilizado um framework HTML, CSS e JS que permite a criação de sites responsíveis. O Bootstrap é um framework que traz consigo diversas classes prontas facilitando a customização das páginas.</p>
  </div>
</div>
</form>
@stop('content')