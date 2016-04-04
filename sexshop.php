<?php
  require_once "connect.php";


     $result = mysql_query ("SELECT * FROM `produto` WHERE tipo = 1 limit 3");

     if (!$result) {
        echo "<li>Não foi possível executar a consulta  no banco de dados: " . mysql_error().'</li>';
        //exit;
    }

    if (mysql_num_rows($result) == 0) {
        echo "<li>Não foram encontradas linhas, nada para mostrar, assim eu estou saindo</li>";
        //exit;
    }

    while ($row = mysql_fetch_assoc($result)) {

        echo "<li>";
        echo $row["nome"];
        echo "</li>";

    }

mysql_free_result($result);


        //echo $resultado;
?>
