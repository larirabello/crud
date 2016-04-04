<?php
  $servername = "127.0.0.1"; //igual a localhost
  $username = "root"; //padrao do mysql
  $password = ""; //nao necessario p root
  $database = "estudos"; //banco que vou acessar
  $dbport = 3306; //encontrei nas configs my.ini do xampp

  //$db = new mysql($servername, $username, $password, $database, $dbport);
  $db = mysql_connect($servername, $username, $password);

  if (!$db) {
    echo "Não foi possível conectar ao banco de dados: " . mysql_error();
    exit;
}

if (!mysql_select_db($database)) {
    echo "Não foi possível selecionar mydbname: " . mysql_error();
    exit;
}

/*  if ($db->connect_error) {
      die("Connection failed:" . $db->connect_error);
  }
  echo "Connected successfully (".$db->host_info.")";
*/
