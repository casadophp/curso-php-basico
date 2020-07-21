<?php

if ($_GET) {
  if (array_key_exists('curso', $_GET) &&
   array_key_exists('ano_do_curso', $_GET)) {
    echo $_GET['curso'], " - ", $_GET['ano_do_curso'];
  } else {
    echo "Você não possui curso para o ano atual";
  }
} else {
  echo "Você não possui curso para o ano atual";
} 
  $nomeDoCurso = "Curso de PHP";
  $ano = date("Y");
?>

<a href="get.php?curso=<?php echo $nomeDoCurso; ?>
&ano_do_curso=<?php echo $ano; ?>">Curso 2020</a>