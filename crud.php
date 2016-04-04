<?php
  require_once "connect.php";

  $action = $_REQUEST['action'];


switch ($action) {
  case "cadastrar":
    // Action Cadastrar
    $nome = $_POST['nome'];
    $tipo = $_POST['tipo'];
    $qtd = $_POST['qtd'];
    $preco = $_POST['preco'];
     mysql_query ("insert into produto (tipo,nome,preco,qtd) values (  ".$tipo.",'".$nome."', ".$preco.", ".$qtd.")");
     break;
  case "editar":
     break;
  case "deletar":
    $id= $_GET['id'];
    mysql_query("delete from produto where id=".$id);
     break;
}
