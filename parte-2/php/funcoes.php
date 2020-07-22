<?php

require_once './funcoes/funcoes.php';


$nomeCompleto = nomeCompleto($_GET['nome']);

if(!$nomeCompleto) {
  echo "Você deve passar o nome";
} else {
  echo $nomeCompleto;
}