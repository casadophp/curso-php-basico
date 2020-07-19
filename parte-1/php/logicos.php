<?php

// Exemplo	Nome	Resultado
// $a == $b	Igual	Verdadeiro (TRUE) se $a é igual a $b.
$a = 1;
$b = 1;

var_dump($a == $b);

// $a === $b	Idêntico	Verdadeiro (TRUE) se $a é igual a $b, 
//e eles são do mesmo tipo.
$a = 1;
$b = 1;

var_dump($a === $b);

// $a != $b	Diferente	Verdadeiro se $a não é igual a $b.
$a = "1";
$b = "2";

var_dump($a != $b);

// $a <> $b	Diferente	Verdadeiro se $a não é igual a $b.
$a = "1";
$b = "2";

var_dump($a <> $b);

// $a !== $b	Não idêntico	Verdadeiro de $a não é igual a $b, 
//ou eles não são do mesmo tipo (introduzido no PHP4).
$a = "1";
$b = "1";

var_dump($a !== $b);

// $a < $b	Menor que	Verdadeiro se $a é estritamente menor que 
//$b.
$a = 1;
$b = 2;

var_dump($a < $b);

// $a > $b	Maior que	Verdadeiro se $a é estritamente maior que 
//$b.

$a = 2;
$b = 1;

var_dump($a > $b);

// $a <= $b	Menor ou igual	Verdadeiro se $a é menor ou igual a $b.

$a = 2;
$b = 2;

var_dump($a <= $b);

// $a >= $b	Maior ou igual	Verdadeiro se $a é maior ou igual a $b.

$a = 3;
$b = 3;

var_dump($a >= $b);

// $a <=> $b	Spaceship (nave espacial)	Um integer menor que, 
// igual a ou maior que zero quando $a é, 
// respectivamente, menor que, igual a ou maior que $b. 
// Disponível a partir do PHP 7.

// ! $a	NÃO	Verdadeiro se $a não é verdadeiro.
// $a && $b	E	Verdadeiro se tanto $a quanto $b são verdadeiros.
// $a || $b	OU	Verdadeiro se $a ou $b são verdadeiros.

echo "<br /> ---- ";

$a = true;
var_dump(!$a);

$a = true;
$b = false;

var_dump($a && $b);

$a = true;
$b = false;

var_dump($a || $b);