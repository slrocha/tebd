@extends('layouts.cabecalho')
@section('content')
<form class="form-horizontal" method="#">
 <div class="container">
  <div class="jumbotron">
    <h2>Estratégias Utilizadas para Concepção da Etapa 3</h2> </br>
  </div>

  <div class="well">
  	<strong>Spago BI</strong></br>
  	<p align="justify">Para o desenvolvimento desta etapa, foi nencessário fazer um nivelamento usando o Data Warehouse disponibilizado pelo professor e seguir um tutorial ministrado por Peterson, disponível no Canal dele no Youtube. Foram definidas dimensões e fatos no DW e criado um indicador que tem como objetivo mostrar as principais informações referentes aos dados que foram mensurados na tabela que foi criada como fato e depois virá a ser um cubo. Para obter mais informações sobre o software utilizado para fazer o nivelamento e atividade pedida pelo professor, acesse <a href="http://www.spagobi.org/"></a>Spago BI.</p>
</div>

 <div class="well">
  	<strong>ETL - Extract Transform Load</strong></br>
  	<p align="justify">Para a criação do indicador, um novo modelo lógico foi criado, onde o mesmo é definido como Star Schema. Nele criaram-se o DW, onde após a criação, foi necessário implementar um script em php para povoamento nesse modelo. O código php e o DER estão disponíveis no <a href="#"></a>GitHub.</p>
</p>
</div>

 </div>
</form>
@stop('content')

