<?php
  require_once "connect.php";


  $nome = $_POST['nome'];
  $tipo = $_POST['tipo'];
  $qtd = $_POST['qtd'];
  $preco = $_POST['preco'];



 mysqli_query ($db,"insert into produto (tipo,nome,preco,qtd) values (  ".$tipo.",'".$nome."', ".$preco.", ".$qtd.")");
