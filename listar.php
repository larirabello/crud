<?php
  require_once "connect.php";






     $result = mysql_query ("select * from produto;");

     if (!$result) {
        echo "Não foi possível executar a consulta  no banco de dados: " . mysql_error();
        exit;
    }

    if (mysql_num_rows($result) == 0) {
        echo "Não foram encontradas linhas, nada para mostrar, assim eu estou saindo";
        exit;
    }

    while ($row = mysql_fetch_assoc($result)) {

        echo "<tr>";
        echo "<td> {$row["nome"]} </td>";
        echo "<td>".($row["tipo"]=="1" ? "Sex Shop" : "Lingerie")."</td>";
        echo "<td> {$row["preco"]} </td>";
        echo "<td> {$row["qtd"]} </td>";
        echo '<td class="col-lg-1 text-center"> <a data-id="'.$row["id"].'" class="botaoDeletar" href="crud.php?action=deletar&id='.$row["id"].'"><span class="glyphicon glyphicon-red glyphicon-remove"></a></td>';
        echo "</tr>";

    }


mysql_free_result($result);


        //echo $resultado;
?>
