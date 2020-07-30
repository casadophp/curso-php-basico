<html>

<body>
  <script>
  // Exemplo	Nome	Resultado
  // $a == $b	Igual	Verdadeiro (TRUE) se $a é igual a $b.
  let a = 1;
  let b = 1;

  // console.log(a == b, "(1) - a == b");

  // $a === $b	Idêntico	Verdadeiro (TRUE) se $a é igual a $b, 
  //e eles são do mesmo tipo.
  a = 1;
  b = 1;

  // console.log(a === b, "(2) - a === b");

  // $a != $b	Diferente	Verdadeiro se $a não é igual a $b.
  a = "1";
  b = "2";

  // console.log(a != b, "(3) - a != b");

  // $a !== $b	Não idêntico	Verdadeiro de $a não é igual a $b, 
  //ou eles não são do mesmo tipo (introduzido no PHP4).
  a = "1";
  b = "2";

  // console.log(a !== b, "(4) - a !== b  - OK");

  // $a < $b	Menor que	Verdadeiro se $a é estritamente menor que 
  //$b.
  a = 1;
  b = 2;

  // console.log(a < b, "(5) - a < b");

  // $a > $b	Maior que	Verdadeiro se $a é estritamente maior que 
  //$b.

  a = 2;
  b = 1;

  // console.log(a > b, "(6) - a > b");

  // $a <= $b	Menor ou igual	Verdadeiro se $a é menor ou igual a $b.

  a = 2;
  b = 3;

  // console.log(a <= b, "(7) - a <= b");

  // $a >= $b	Maior ou igual	Verdadeiro se $a é maior ou igual a $b.

  a = 3;
  b = 4;

  // console.log(a >= b, "(8) - a >= b");

  // ! $a	NÃO	Verdadeiro se $a não é verdadeiro.
  // $a && $b	E	Verdadeiro se tanto $a quanto $b são verdadeiros.
  // $a || $b	OU	Verdadeiro se $a ou $b são verdadeiros.

  a = false;
  // console.log(!a, "(9) - !a");

  a = true;
  b = true;

  // console.log(a && b, "(10) - a && b");

  a = true;
  b = true;

  // console.log(a || b, "(11) - a || b");
  </script>
</body>

</html>