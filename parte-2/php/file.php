<?php
if($_FILES) {
  if ($_POST) {
    $diretorioDeArquivos = './uploads/';
    $nomeDoArquivo = $_POST['nome'];
    $extensao = ".".end(explode(".",$_FILES['arquivo']['name']));

    $arquivo = $diretorioDeArquivos . 
    basename($nomeDoArquivo . $extensao);

    echo "<pre />";

    if (move_uploaded_file($_FILES['arquivo']['tmp_name'], 
    $arquivo)) {
      echo 'Arquivo salvo com sucesso';
    } else {
      echo "Ops, temos um problema";
    }
  }
}

?>

<?php if($_GET) { ?>
<form enctype="multipart/form-data" method="POST" action="file.php">
  Bem vindo: <?php echo $_GET['pessoa']; ?> <br /><br />
  Nome: <input type="text" name="nome" />
  Arquivo: <input type="file" name="arquivo">
  <input type="submit" value="::: ENVIAR :::">
</form>
<?php } ?>