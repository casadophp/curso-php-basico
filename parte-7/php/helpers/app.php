<?php

function app(){
  if(verificarLogado() == false) {
    redirecionarLogin("/admin/login");
  } else {
    // redirecionarLogin("/admin/home");
    
    echo 'Admin';
    echo "<br />";
    echo "<br />";
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

  echo $pagina;

  // require_once "./paginas/{$pagina}.php";

  require_once "./views/layout_login.php";
}