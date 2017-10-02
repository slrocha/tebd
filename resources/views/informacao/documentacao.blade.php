@extends('layouts.cabecalho')
@section('content')
<form class="form-horizontal" method="#">
 <div class="container">
  <div class="jumbotron">
    <h2>Estratégias Utilizadas para Concepção da Etapa 1</h2> </br>
  </div>

   <div class="well">
    <strong>Sistema de Controle para Venda de Ingressos para Espetáculos em um Teatro</strong></br>
    <p align="justify">O sistema deverá permitir reservar e adquirir bilhetes para espetáculos em um teatro. Na reserva, os dados do cliente devem ser mantidos. Bilhetes reservados e não retirados até 48h antes do início do espetáculo são automaticamente cancelados. Num período de 01 (um) ano, clientes que fizeram reserva e não retiraram o bilhete por 03 (três) vezes são automaticamente proibidos de reservar bilhetes por um período de 06 (seis) meses. O sistema deve permitir ainda o cancelamento de reservas de bilhetes. Os bilhetes podem ser entregues a domicílio, sendo cobrada uma taxa de entrega. O sistema deve permitir também, a reserva de poltronas para convidados (VIP’S). Esses bilhetes não são comprados e não devem ser cancelados de acordo com a regra de 48h de antecedência. As poltronas do teatro são numeradas de acordo com a fila e posição que ocupam na fila. Os valores dos ingressos variam de acordo com o espetáculo e localização da poltrona.</p>
  </div>

  <div class="well">
    <strong>Modelagem Conceitual e Esquema Lógico</strong></br>
    <p align="justify"> A modelagem conceitual está disponivel em: <a href="https://github.com/slrocha/tebd/blob/master/documentos/Teatro%20DER.png">Git Modelagem Conceitual</a>.
    </br>
    O Esquema Lógico do Banco de Dados está  disponivel em: <a href="https://github.com/slrocha/tebd/blob/master/documentos/NewModeloLogico.png">Git Modelo Lógico</a>.
  </p>
  </div>

  <div class="well">
    <strong>Persistência com ORM</strong></br>
    <p align="justify"> A persistência foi implementada através dos Models. Cada entidade do modelo conceitual extendeu a um Model, e nele foi implementado o mapeamento objeto-relacional (relações entre as tabelas através das chaves estrangeiras e definidos os atributos que poderam ser recebidos em massa.</p>
  </div>

  <div class="well">
    <strong>Interface Web</strong></br>
    <p align="justify"> A interface Web de cliente e endereço foi desenvolvida para aplicação das ténicas de controle de transação. Foi implementado o CRUD de cliente.
  </p>
    <a href="{{ URL::to('cliente') }}" class="btn btn-warning">Acessar Interface</a>
  </div>

   <div class="well">
    <strong>Povoamento do Banco</strong></br>
    <p align="justify">Povoamento
      Para o povoamento do banco de dados, foi utilizado as factories que permite de uma forma extremamente simples, adicionar dados de teste em aplicações. Para chamar essas factories foram utilizadas as seeds através da função call que executa as factorys que foram criadas. Os dados foram gerados utilizando uma biblioteca do PHP chamada <a href="https://github.com/fzaninotto/Faker">Faker</a>.
  </p>
  </div>
</div>
</form>
@stop('content')