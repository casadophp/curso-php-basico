<?php

function getBody(string $param) {
  switch ($param) {
    case '/':
      $body = 'home.php';
      $js = false;
      $titulo = "Página Inicial";
      break;
    
    case '/contato':
      $body = 'contato.php';
      $js = 'contato.js';
      $titulo = "Contato";
      break;
    default:
      $body = '/errors/404.php';
      $js = false;
      $titulo = "Página 404";
      break;
  }

  return ['body' => $body, 'js' => $js, 'titulo' => $titulo];
}

if($_GET) {
  $param = $_GET['param'];
  $data = getBody($param);
  $body = $data['body'];
  $js = $data['js'];
  $titulo = $data['titulo'];
} else {
  $data = getBody("/");
  $body = $data['body'];
  $js = $data['js'];
  $titulo = $data['titulo'];
}

require_once 'views/layout.php';