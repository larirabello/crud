<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Pimenta Rosa</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="shortcut icon" href="images/ppr.png" type="image/png" />
<!-- <script src="../global/js/jquery-2.1.1.js"></script>
<script src="../global/js/bootstrap.min.js"></script>
<script src="../global/js/utubers.js"></script> -->
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Consultar</a></li>
        <li><a href="inserirproduto.php">Inserir</a></li>
      </ul>
      <form class="navbar-form navbar-left pull-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container">
  <article>
    <h1>Tabela de Cadastrados </h1>
    <table class="table table-bordered">
      <tr>
        <td><b>Nome</b></td>
        <td><b>Idade</b></td>
        <td class="col-lg-1"><b>Remover</b></td>
        <td class="col-lg-1 text-center"> <a href="#"><span class="glyphicon glyphicon-refresh"></a></td>
      </tr>
      <tr>
        <td>Joãozinho</td>
        <td class="col-lg-3">20</td>
        <td class="col-lg-1 text-center"> <a href="#"><span class="glyphicon glyphicon-red glyphicon-remove"></a></td>
        <td class="col-lg-1 text-center"> <a href="#"><span class="glyphicon glyphicon-refresh"></a></td>
      </tr>
    </table>
  </article>
  <hr>
  <div class="col-md-6">
    <section>
      <h1> Últimos cadastrados</h1>
      <ul>
        <li>
          <p> Joãozinho</p>
        </li>
      </ul>
    </section>
  </div>
  <div class="col-md-6">
    <section>
      <h1> Outro exemplo</h1>
      <ul>
        <li>
          <p> Joãozinho</p>
        </li>
      </ul>
    </section>
  </div>
</div>
</body>
</html>
