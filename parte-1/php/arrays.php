<?php

// Sobre você - características
$corDoOlho1    = "Castanho";
$corDoCabelo1  = "Loiro";
$altura1       = 1.70;
$idade1        = 29;
$corDosLabios1 = "Avermelhado";

// Pessoa 2
$corDoOlho2    = "Castanho";
$corDoCabelo2  = "Loiro";
$altura2       = 1.70;
$idade2        = 29;
$corDosLabios2 = "Avermelhado";


//Um array no PHP é na verdade um mapa ordenado. 
//Um mapa é um tipo que relaciona valores a chaves.

// Array Simples

$array = array(
    "foo" => "bar",
    "bar" => "foo",
);

// a partir do PHP 5.4
$array = [
    "foo" => "bar",
    "bar" => "foo",
    "pessoa1" => ["corDoOlho" => "",2,3],
    "pessoa2" => ["corDoOlho" => "Azul",2,3]
];

print_r($array);

// Array indexado sem chave
$array = array("foo", "bar", "agora" => "Olá,", " mundo");
// var_dump($array);

// Acessar um elemento do array
// echo $array["agora"] . $array[2];