<?php

$logado = false;

if($_POST) {
  if (array_key_exists('senha', $_POST)) {
    $senha = $_POST['senha'];
    $senhaMestre = 123456;
    if ($senha == $senhaMestre) {
      echo "<a href=\"get.php?curso=php&ano_do_curso=2020\">Bem vindo.</a>";
      $logado = true;
    } else {
      echo "Infelizmente sua senha não está correta!";
    }
  }
}

?>

<?php if(!$logado) { ?>
<form method="POST" action="post.php">
  Nome: <input type="password" name="senha" />
  <input type="submit" value="::: ENVIAR :::">
</form>
<?php } ?>