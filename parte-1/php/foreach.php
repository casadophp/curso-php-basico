<?php

$pessoas = [
  [
    "nome" => "Fernando", 
    "idade" => 18, 
    "dados_profissionais" => [
      'profissao' => 'Programador',
      'empresa' => 'IBM'
    ]
  ],
  [
    "nome" => "Paulo", 
    "idade" => 20,
    "dados_profissionais" => [
      'profissao' => 'Designer',
      'empresa' => 'Microsoft'
    ]
  ]
];

// foreach($pessoas as $pessoa) {
//   echo "<pre>";
//   // print_r($pessoa);
//   foreach($pessoa['dados_profissionais'] as $dados) {

//      echo "<br />" , $pessoa['nome'], ' - ',
//           $pessoa['idade'], " - ", $dados;
//   }
// }

$novo[][] = [1,2,3,4,5];
$novo[][1] = [6,7,8,9,10];

foreach($novo as $key => $value) {
  // echo "{$key} => {$value} ";
  print_r($value[$key]);
}