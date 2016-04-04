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
<script src="https://code.jquery.com/jquery-2.2.2.js"   integrity="sha256-4/zUCqiq0kqxhZIyp4G0Gk+AOtCJsY1TA00k5ClsZYE="   crossorigin="anonymous"></script>
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
        <td><b>Tipo</b></td>
        <td><b>Preço</b></td>
        <td><b>Quantidade</b></td>
        <td class="col-lg-1"><b>Remover</b></td>
      </tr>
      <?php
        include "listar.php";
       ?>

    </table>
  </article>



  <hr>
  <div class="col-md-6">
    <section>
      <h1> Sex Shop</h1>
      <ul>
        <?php
          include "sexshop.php";
         ?>
      </ul>
    </section>
  </div>
  <div class="col-md-6">
    <section>
      <h1> Lingerie</h1>
      <ul>
        <?php
          include "lingerie.php";
         ?>
      </ul>
    </section>
  </div>
</div>
<script type="text/javascript">

    $(".botaoDeletar").on("click", function(e) {
      e.preventDefault();
      var elem = $(this);
      $.ajax ({
        url: "crud.php",
        data: {action:"deletar", id:$(this).data("id")}
      }).done(function() {
        elem.closest("tr").remove();
      });
    });
</script>
</body>
</html>
