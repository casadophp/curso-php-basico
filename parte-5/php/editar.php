<?php

$mysql = new mysqli("php-mysql","root","devphp","devphp");
$mysql->set_charset("utf8");

if ($mysql->connect_errno) {
    echo "Não foi possível conectar no MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

if($_GET) {
  $id = $_GET['id'];

  $pessoas = $mysql->query("SELECT * FROM pessoa where id = $id");
  $pessoa = $pessoas->fetch_assoc();
}

if($_POST) {
  $nome = $_POST['nome'];
  $idade = $_POST['idade'];
  
  if($mysql->query("UPDATE pessoa set nome = '$nome', idade = $idade where id = $id")) {
    header("Location: index.php");
  }
}

?>

<html>

<body>
  <?php if($pessoas->num_rows == 0): ?>
  <h1>Ops, não encontramos este usuário</h1>
  <?php endif; ?>

  <?php if($pessoas->num_rows > 0): ?>
  <form method="POST">
    <input type="hidden" name="id" value="<?php echo $pessoa['id'] ?>">
    Nome: <input type="text" name="nome" value="<?php echo $pessoa['nome'] ?>" required />
    <br />
    Idade: <input type="text" name="idade" value="<?php echo $pessoa['idade'] ?>" required />
    <br />
    <input type="submit" value="Editar">
  </form>
  <?php endif; ?>
</body>

</html>