@extends('layouts.cabecalho')
@section('content')
<form class="form-horizontal" method="#">
 <div class="container">
  <div class="jumbotron">
    <h2>Estratégias Utilizadas para Concepção da Etapa 1</h2> </br>
  </div>

  <div class="well">
  	<strong>Front-end com Bootstrap</strong></br>
  	<p align="justify">Para a concepção do blog, foi utilizado um framework HTML, CSS e JS que permite a criação de sites responsíveis. O Bootstrap é um framework que traz consigo diversas classes prontas facilitando a customização das páginas.</p>
  </div>

  <div class="well">
  	<strong>ORM - Object Relational Mapper</strong></br>
  	<p align="justify"> ORM é uma técnica de desenvolvimento de software que serve para o uso de tabelas de bancos de dados em formato de objetos relacionais, facilitando assim a manutenção de dados. Usando esta técnica o programador não precisa se preocupar em escrever códigos na linguagem SQL, pois a listagem e persistência é toda feita pela interface do ORM. Para saber mais sobre como utilizar o ORM Eloquente acesse: <a href="http://clubedosgeeks.com.br/programacao/php/laravel-usando-o-orm-eloquent">Clube dos Geeks</a>.</p>
  </div>

  <div class="well">
  	<strong>Framework - Laravel</strong></br>
  	<p align="justify">
     É um framework PHP utilizado para o desenvolvimento web, que utiliza arquitetura MVC. Para se comunicar com o Banco de Dados o Laravel utiliza uma implementação simples do ActiveRecord chamada de Eloquent ORM, que é uma ferramenta que traz várias funcionalidades para facilitar a inserção, atualização, busca e exclusão de registros. A documentação sobre o Laravel, instalação e comandos para utilização está disponivel em: <a href="https://laravel.com/docs/5.4">Laravel Documentação</a>.
    </p>
  </div>

   <div class="well">
  	<strong>Eloquent ORM</strong></br>
  	<p align="justify">
     O Laravel trabalha com o ORM Eloquent e implemetação ActiveRecord para trabalhar com o banco de dados. Cada "Modelo" corresponde a uma tabela no banco de dados, sendo este modelo utilizado para interação com a tabela respectiva no banco. A documentação sobre o ORM Eloquent, instalação e comandos para utilização está disponivel em: <a href="https://laravel.com/docs/5.0/eloquent#introduction">Eloquent Documentação</a>.
    </p>
  </div>

  <div class="well">
  	<strong>Softwares e Frameworks necessários para concepção do Projeto</strong> </br>
  	<p align="justify"> 
    Apache disponivel em: <a href="https://www.apachelounge.com/download/">Apache Downloads</a>.
    </br>
    Bootstrap disponivel em: <a href="http://getbootstrap.com/">Bootstrap Downloads</a>.
    </br>
    Composer disponivel em: <a href="https://getcomposer.org/">Composer Downloads</a>.
    </br>
    Sublime disponivel em: <a href="http://www.sublimetext.com/2">Sublime Downloads</a>.
    </br>
    MySql disponivel em: <a href="https://www.mysql.com/downloads/">MySql Downloads</a>.
    </br>
    PHP disponivel em: <a href="http://php.net/downloads.php">PHP Downloads</a>.
    </br>
    Git disponivel em: <a href="https://git-scm.com/downloads">Git Downloads</a>.
    </p>
  </div>

  <div class="well">
    <strong>Atividade de Nivelamento</strong></br>
    <p align="justify">
    A atividade de nivelamento teve como propósito familiarizar a equipe com a linguagem PHP e o framework Laravel. A atividade propôs o mapeamento objeto-relacional entre Pedidos e Itens. O Eloquent que vem incluso no Laravel utiliza o Model para fazer a relação entre a aplicação e o banco de dados. Utilizando as migrations foi possíve criar o esquema de tabelas no banco de dados com suas respecitivas colunas. No Model é feito o mapeamento objeto-relacional entre as tabelas, é aonde informamos as relações utilizando comandos como belongsTo e hasMany ver mais em: <a href="https://laravel.com/docs/5.0/eloquent#introduction">Eloquent Documentação</a> . Após a execução da atividade foi possível compreender o funcionamento da criação das tabelas no banco de dados como também as relações entre elas.  Como a atividade estava implementada na linguagem java foi necessário a conversão do código-fonte para PHP.
    </p>
  </div>

</div>
</form>
@stop('content')

