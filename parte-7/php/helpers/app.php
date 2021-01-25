<?php

function app(){
  if(verificarLogado() == false) {
    redirecionarLogin("/admin/login");
  }
}

function redirecionarLogin(string $url)
{
  if($_SERVER['REQUEST_URI'] !== "/admin/login") {
    header("Location: $url");
  }
}

function redirecionar(string $url)
{
  header("Location: $url");
}

function layout()
{
  $verificarUrl = verificaURL($_GET);
  $pagina = obterParametros($verificarUrl, $_GET)[1];

  if($pagina == 'login') {
    require_once "./views/layout_login.php";
  } else if($pagina == 'sair') {
    session_destroy();
    redirecionar('/admin/login');
  } else {
    require_once "./views/layout.php";
  }
}

function pagina() {
  $verificarUrl = verificaURL($_GET);
  $pagina = obterParametros($verificarUrl, $_GET)[1];

  if($pagina) {
    $arquivoDiretorio = __DIR__. '/../admin/paginas/' . $pagina . '.php';
    if(file_exists($arquivoDiretorio)) {
      include_once $arquivoDiretorio;
    } else {
      include_once __DIR__. '/../admin/paginas/404.php'; 
    }
  }
}

function view($arquivo){
  if($arquivo) {
    $arquivoDiretorio = __DIR__ . '/../admin/views/includes/' . $arquivo. '.php';
    if(file_exists($arquivoDiretorio)) {
      include_once $arquivoDiretorio;
    }
  }
}

function css($arquivo) {
  if($arquivo) {
    $arquivoPadrao = 'admin/assets/css/' . $arquivo. '.css';
    $arquivoDiretorio = __DIR__ . '/../' . $arquivoPadrao;
    if(file_exists($arquivoDiretorio)) {
      return '/'.$arquivoPadrao;
    }
  }
}

function js($arquivo) {
  if($arquivo) {
    $arquivoPadrao = 'admin/assets/js/' . $arquivo. '.js';
    $arquivoDiretorio = __DIR__ . '/../' . $arquivoPadrao;
    if(file_exists($arquivoDiretorio)) {
      return '/'.$arquivoPadrao;
    }
  }
}