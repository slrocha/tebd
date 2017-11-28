<form class="form-horizontal" method="#">
 <div class="container">
  <div class="jumbotron">
    <h2>Tópicos Especiais em Banco de Dados</h2> </br>
    <p align="justify">É uma disciplina que aborda temáticas avançadas na área de banco de dados permitindo uma compreensão mais ampla da área. Neste site será possível ter conhecimento sobre algumas dessas temáticas que serão apresentadas como trabalhos
    para conclusão da disciplina sob orientação do professor Eduardo Jorge. Este sitw foi desenvolvido pelas alunas Ana Cecília, Thamires Asenate e Stephanie Lima, discentes da Universidade do Estado da Bahia - UNEB, Departamento de Exatas e Ciências da Terra - DECET, Campus I.  </p> 
  </div>
</div>
</form>

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
