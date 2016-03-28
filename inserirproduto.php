<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Inserir</title>
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
        <li><a href="gallery.php">Consultar</a></li>
        <li class="active"><a href="#">Inserir</a></li>
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
    <h1> Formulário de Cadastro </h1>
    <form action="crud.php" method="post">
    <div class="form-group">
        <div class="row">
      <div class="col-lg-6">
        <label for="nome1">Nome</label>
        <input name="nome" type="text" class="form-control" id="nome1" placeholder="Nome">
      </div>
    </div>

    <div class="form-group">
        <div class="row">
      <div class="col-lg-2">
        <label for="id1">Preço</label>
        <input name="preco" type="number" class="form-control" id="preco1" placeholder="Preço">
      </div>
    </div>
  </div>

  <div class="form-group">
      <div class="row">
    <div class="col-lg-2">
      <label for="id1">Quantidade</label>
      <input name="qtd" type="number" class="form-control" id="qtd1" placeholder="Quantidade">
    </div>
  </div>
</div>
</div>

<div class="row">
  <div class="col-lg-2">
    <label for="id1">Tipo de produto</label>
<select class="form-control" name="tipo">
  <option value="0">Lingerie</option>
  <option value="1">Sex Shop</option>
</select>
</div>
</div>
    <br>

    <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div>
</article>
</body>
</html>
