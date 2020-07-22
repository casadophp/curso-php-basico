<?php

if ($_POST) {
  $primeiro = $_POST['primeiro'];
  $segundo = $_POST['segundo'];
  $operacao = $_POST['operacao'];

  function calc($primeiro, $segundo, $operacao) {
    $total = 0;
    switch($operacao) {
      case "soma":
        $total =  $primeiro + $segundo;
      break;
      case "sub":
        $total =  $primeiro - $segundo;
      break;
      case "multi":
        $total =  $primeiro * $segundo;
      break;
      case "div":
        $total =  $primeiro / $segundo;
      break;
      default:
        $total =  "Ops, tivemos um erro";
    }

    return $total;
  }
}

?>

<html>
<form action="calculadora.php" method="POST">
  <br />
  Primeiro valor: <input type="text" name="primeiro" />
  Operação:
  <select name="operacao">
    <option value="soma">Somar (+)</option>
    <option value="sub">Subtrair (-)</option>
    <option value="multi">Multiplicar (*)</option>
    <option value="div">Divisão (/)</option>
  </select>
  Segundo Valor: <input type="text" name="segundo" />
  <br />
  <br />
  <input type="submit" value="::: EXECUTAR :::">

  <br />
  <hr>
  <h1>Resultado:</h1>
  <h3>
    <?php echo calc($primeiro, $segundo, $operacao); ?>
  </h3>
</form>

</html>