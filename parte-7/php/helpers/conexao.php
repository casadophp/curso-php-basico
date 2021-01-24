<?php

function conexao() {
  $conf = require_once "../conf/db.php";

  $conexao = $conf['dev'];

  $mysql = new mysqli(
    $conexao['servidor'],
    $conexao['usuario'],
    $conexao['senha'],
    $conexao['schema']
  );

  $mysql->set_charset($conexao['caracter']);

  if ($mysql->connect_errno) {
      echo "Não foi possível conectar no MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  }

  return $mysql;
}


function obterDados($query, $mysql)
{
  $resultadoQuery = $mysql->query($query);

  $dados = [];
  while($execucao = $resultadoQuery->fetch_assoc()) {
    $dados[] = $execucao;
  }

  mysqli_close($mysql);

  if(count($dados) > 0) {
    return $dados;
  }

  return false;
}