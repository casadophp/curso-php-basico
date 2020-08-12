<?php

$mysql = new mysqli("php-mysql","root","devphp","devphp");
$mysql->set_charset("utf8");

if ($mysql->connect_errno) {
    echo "Não foi possível conectar no MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$idade = "";
$query = "SELECT * FROM pessoa";
if($_POST) {
    if (array_key_exists('idade', $_POST)) {
        $idade = $_POST['idade'];
        $query = "SELECT * FROM pessoa WHERE idade = $idade";
    }
}

?>

<html>

<body>
  <form method="POST">
    Filtrar por idade: <input value="<?php echo $idade; ?>" type="text" name="idade" required />
    <br /> <br /> <input type="submit" value="::: FILTRAR :::">
    <br /> <br /> <a href="index.php">::: LIMPAR FILTROS :::</a>
  </form>
  <table border="1" width="50%">
    <tr>
      <td>Nome</td>
      <td>Idade</td>
      <td>&nbsp;</td>
    </tr>

    <?php 
    if($pessoas = $mysql->query($query)) {
        while($pessoa = $pessoas->fetch_assoc()) {
    ?>
    <tr>
      <td>
        <?php echo $pessoa['nome']; ?>
      </td>
      <td>
        <?php echo $pessoa['idade']; ?>
      </td>
      <td>
        <a href="editar.php?id=<?php echo $pessoa['id'] ?>">Editar</a> |
        <a href="excluir.php?id=<?php echo $pessoa['id'] ?>">Excluir</a>
      </td>
    </tr>
    <?php
        }

        if ( $pessoas->num_rows == 0 ) {
            echo "<strong>Nenhuma pessoa encontrada</strong><br /><br />";
        }
    }
    ?>

  </table>
</body>

</html>