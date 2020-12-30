<?php

function verificaURL($url = []) {
  $separarURL = explode("/", $url['param']);

  return array_search('admin', $separarURL);
}

function obterParametros($verificador, $url){
  if($verificador){
    $separarURL = explode("/admin", $url['param']);
    $filtrado = array_filter($separarURL)[1];
    $param = explode("/", $filtrado);
    return array_filter($param);
  } else {
    $separarURL = explode("/", $url['param']);

    return array_filter($separarURL);
  }
}