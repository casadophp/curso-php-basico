<html>

<body>
  <script>
  let array = [10, 20, 30, 40, 50];
  let arrayReturn = [];

  // Executa a função callback para cada item da array.
  // Mais indicado caso não precise do valor retornado
  // const teste1 = array.forEach(item => item * 2);
  // console.log(teste1);

  //Cria uma nova array com os resultados da função callback
  // const teste2 = array.map(item => item * 2);
  //console.log(teste2.map(outro => outro += 1));

  // const teste3 = array.forEach((item, index) => {
  //   return arrayReturn[index] = item * 2;
  // });
  // console.log(teste3);

  // // Filter
  console.log("\n =============== FILTER ===============\n ");
  const teste4 = array.filter(item => {
    if (true) {
      return item != 10
    }

    return item;
  }).map(item => item * 2).map(outro => outro += 1);
  // console.log(teste4);

  // Reduce
  console.log("\n =============== REDUCE ===============\n ");
  // acumulador - valor inicial (ou o valor do callback anterior),
  // valorAtual - o valor do elemento atual
  // index - o índice atual e
  // array - o array onde a iteração está ocorrendo.
  // valorInicial - Opcional. Valor a ser usado como o primeiro argumento da primeira chamada da função callback.

  array = teste4;
  const teste5 = array.reduce((acumulador, valorAtual, index, array) => {
    //console.log(acumulador);
    // console.log(valorAtual);

    return acumulador + valorAtual;
  }, 0);
  console.log(teste5);
  </script>
</body>

</html>