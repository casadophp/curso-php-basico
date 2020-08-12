<?php

$mysql = new mysqli("php-mysql","root","devphp","devphp");
$mysql->set_charset("utf8");

if ($mysql->connect_errno) {
    echo "Não foi possível conectar no MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

if($_GET) {
  $id = $_GET['id'];

  if( $mysql->query("DELETE FROM pessoa where id = $id") ) {
     header("Location: index.php");
  }
 
}