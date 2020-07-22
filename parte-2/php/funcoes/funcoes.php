<?php

function nomeCompleto($nomes = false) {
  if($nomes) {
    return devolveNomes($nomes);
  }
    
  return false;
}

function devolveNomes($nomes)
{
  $nomeComQuebra = [];
  foreach(explode(",", $nomes) as $nome) {
    $nomeComQuebra[] = "O Nome é: {$nome}";
  }

  return implode("<br />", $nomeComQuebra);
}