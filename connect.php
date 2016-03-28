<?php
  $servername = "127.0.0.1";
  $username = "root";
  $password = "";
  $database = "estudos";
  $dbport = 3306;

  $db = new mysqli($servername, $username, $password, $database, $dbport);

  if ($db->connect_error) {
      die("Connection failed:" . $db->connect_error);
  }
  echo "Connected successfully (".$db->host_info.")";
