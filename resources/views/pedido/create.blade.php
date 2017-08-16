
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
  <form class="form-horizontal" method="POST" action="{!!URL::route('pedido.store')!!}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="Item[pedido_id]">
    <h1>Pedido</h1>
    <div class="form-group">
      <label class="col-sm-2 control-label">Descrição</label>
      <div class="col-sm-10">
        <textarea class="form-control" rows="5" name="Pedido[descricao]"  placeholder="Descrição do Pedido"> </textarea>
      </div>
    </div>

    <h2>Cadastrar Item</h2>

    <div class="form-group">
      <label class="col-sm-2 control-label">Descrição do Item</label>
      <div class="col-sm-10">
        <textarea class="form-control" rows="3" name="Item[descricao]"  placeholder="Descrição do Pedido"> </textarea>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Quantidade</label>
      <div class="col-sm-10">
        <input class="form-control" name="Item[quantidade]" placeholder="Quantidade"> </textarea>
      </div>
    </div>
     <div class="form-group">
      <label class="col-sm-2 control-label">Valor Unitário</label>
      <div class="col-sm-10">
        <input class="form-control" name="Item[valor]" placeholder="$ 00,00"> </textarea>
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-offset-2">
        <button type="button" class="btn btn-warning">Adicionar Item</button>
        <button type="submit" class="btn btn-success">Cadastrar</button>
      </div>
    </div>
  </form>  
</div>
@section('content')

</body>
</html>




