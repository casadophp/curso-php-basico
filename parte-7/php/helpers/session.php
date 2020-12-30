<?php

function verificarLogado()
{
  if($_SESSION) {
    if (array_key_exists('logado', $_SESSION)) {
      return true;
    }
  }

  return false;
}

function logar($usuario)
{
  $_SESSION['usuario'] = $usuario;
  $_SESSION['logado'] = true;
  redirecionar('/admin/home'); 
}