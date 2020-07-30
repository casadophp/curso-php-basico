<html>

<body>
  <script>
  let idade = 17;
  let nome = "Michael";
  let convite = 2;

  let festa1 = "12A";
  let festa2 = "1B";

  let dados = ['Laranja', 'Morango', 'Uva'];
  dados.forEach((item, indice) => console.log(`Sua fruta é: ${item}`));

  if (idade == 18) {
    console.log(`Olá, ${nome} seja bem vindo a festa.`);
    if (convite == 1) {
      console.log(`Por favor entre na porta: ${festa1}`);
    } else {
      console.log(`Por favor entre na porta: ${festa2}`);
    }
  } else {
    console.log(`Olá, ${nome} infelizmente você não pode entrar.`);
  }
  </script>
</body>

</html>