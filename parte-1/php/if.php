<?php

// Se - IF
// Se não - ELSE

/**
 * Software que permite apenas pessoas que tem
 * 18 anos entrar na festa!
 */

$idade = 18;
$nome = "Michael";
$convite = 2;

$festa1 = "12A";
$festa2 = "1B";

/**
 * Se a festa for a 12A o Michael dirá oi 
 * para alguém?
 */

if ($idade == 18) {
  echo "<br /> Olá, {$nome}
  seja bem vindo a festa.";
  if ($convite == 1) {
    echo "<br /><br /> Por favor 
    entre na porta: $festa1";
  } else {
    echo "<br /><br /> Por favor 
    entre na porta: $festa2";
  }
} else {
  echo "<br /> Olá, {$nome}
  infelizmente você não pode entrar.";
}

// if($idade < 18) {
//   echo "Infelizmente você não pode entrar";
// }

// if ( $idade > 17 ) { // TRUE
//   echo "Pode entrar";
// }

// if ($nome == "Michael") {
//   echo "<br /> Olá: $nome";
// }

// if($idade == 18) {
//   echo "<br /> Sua festa é a 13B";
// }

// if($idade == 20) {
//   echo "<br /> Sua festa é a 15A";
// }