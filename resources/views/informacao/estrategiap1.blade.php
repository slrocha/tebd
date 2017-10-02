@extends('layouts.cabecalho')
@section('content')
<form class="form-horizontal" method="#">
 <div class="container">
  <div class="jumbotron">
    <h2>Estratégias Utilizadas para Concepção da Etapa 2</h2> </br>
  </div>

  <div class="well">
  	<strong>Android Studio</strong></br>
  	<p align="justify"> Para o desenvolvimento do aplicativo, foi utilizado uma IDE baseada do IntelliJ IDEA(link). Essa plataforma foi escolhida porque oferece uma variedade de recursos para aumentar a produtividade na criação de aplicativos Android como, um ambiente unificado para poder desenvolver para todos os dispositivos Android, modelos de códigos e integração com GitHub para ajudar a criar recursos comuns dos aplicativos e importar exemplos de código, etc. Para obter mais informações sobre a plataforma, acesse <a href="https://developer.android.com/studio/index.html"></a>Android Studio.</p>
  </div>

  <div class="well">
  	<strong>JSON - JavaScript Object Notation</strong></br>
  	<p align="justify"> JSON (JavaScript Object Notation) é uma formatação leve de troca de dados. É muito utilizado, pois além da leveza,  ele é estruturado em uma coleção de pares nome/valor. Em várias linguagens, isto é caracterizado como um object, record, struct, dicionário, hash table, keyed list, ou arrays associativas, além de apresentar uma lista ordenada de valores, caracterixado em muitas linguagens como um array, vetor, lista ou sequência. Para obter mais informações, acesse: <a href="http://www.json.org/json-pt.html">JSON</a>.
    </p>
  </div>

  <div class="well">
  	<strong>SQLite</strong></br>
  	<p align="justify">
     Biblioteca em linguagem C que implementa um banco de dados SQL embutido. O acesso ao banco de dados pode ser executado em um processo diferente no SGBD. É recomendável para conexões com o próprio servidor, esta biblioteca lê e escreve diretamente no arquivo de banco de dados no disco. Para obter mais informações, acesse: <a href="https://www.sqlite.org/">SQLite</a>.
    </p>
  </div>

 


</div>
</form>
@stop('content')

