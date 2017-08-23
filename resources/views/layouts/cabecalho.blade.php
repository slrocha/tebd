<!DOCTYPE html>
<html>
<head>
  <title>TEBD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../../../css/bootstrap.css">
  <script src="../../../../js/jquery.min.js"></script>
  <script src="../../../../js/bootstrap.min.js"></script>
  <style>
  body {
      position: relative; 
  }

  #section1 {padding-top:50px;height:500px;color: #fff; background-color: #1E88E5;}
  #section2 {padding-top:50px;height:500px;color: #fff; background-color: #673ab7;}
  #section3 {padding-top:50px;height:500px;color: #fff; background-color: #ff9800;}
  #section41 {padding-top:50px;height:500px;color: #fff; background-color: #00bcd4;}
  #section42 {padding-top:50px;height:500px;color: #fff; background-color: #009688;}
  </style>
</head>
<body>
<hearder>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('informacao') }}">TEBD</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ URL::to('informacao/atividades') }}">Atividades</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Documentação do Projeto
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ URL::to('informacao/documentacao') }}">Etapa 1</a></li>
            <li><a href="#">Etapa 2</a></li>
            <li><a href="#">Etapa 3</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Estratégias
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ URL::to('informacao/estrategias') }}">Etapa 1</a></li>
            <li><a href="#">Etapa 2</a></li>
            <li><a href="#">Etapa 3</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Atividade de Nivelamento
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ URL::to('pedido/create') }}">Adicionar Pedido</a></li>
            <li><a href="{{ URL::to('pedido') }}">Consultar Pedido</a></li>
            <li><a href="{{ URL::to('pedido/removerPedido') }}">Remover Pedido</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</hearder>  
<section class="container-fluid">
  @yield('content')
</section>
</body>
</html>
