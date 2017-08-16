
<!DOCTYPE html>
<html>
<head>
  <title>TEBD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">TEBD</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Atividades</a></li>
      <li><a href="">Documentação do Projeto</a></li>
      <li><a href="#">Estratégias</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Pedido
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
@section('content')
<div class="container-fluid">
  <form class="form-horizontal" method="get" action="{!!URL::route('pedido.consultarPedido')!!}">
    <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->

    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
      <input id="pesquisar" type="text" class="form-control" name="pedido_id" placeholder="Pesquisar pelo ID">
    </div>
    <div class="form-group">
      <div class="col-md-offset-2">
        <button type="submit" class="btn btn-warning">Consultar Pedido</button>
      </div>
    </div>
  </form>
</div>
</body>
</html>