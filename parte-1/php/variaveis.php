<?php

// Iniciando
// $nomeCompleto = 'Douglas Paulo Almeida';
// $numero = 20;

// $concatenada = "Nome: " . 
// $nomeCompleto . " A idade e de: " 
// . $numero;

// echo $nomeCompleto, " ", $numero, "<br />"
// ,$concatenada;

$var = 'Curso de';
$Var = 'PHP';
echo "<br /> $var $Var - 1";

//$4site = 'not yet'; // Inválido
$_4site = 'not yet'; // Iniciar com _

// Atribuição por referência
$foo = 'PHP';             
$bar = &$foo;
$bar = "<br /> Curso de $bar - 2";
echo $bar;

//
$teste = "Curso ";
$teste .= "de PHP";
echo "<br />",$teste, " - 3";

$facilDeSerEncontradoNumerosIgualA5 = 5;
echo "<br />",$facilDeSerEncontradoNumerosIgualA5;