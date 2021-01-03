<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Área administrativa</title>
  <link rel="stylesheet" href="<?php echo css('bootstrap.min'); ?>">
  <link rel="stylesheet" href="<?php echo css('dashboard'); ?>">
</head>

<body>
  <?php pagina('header'); ?>

  <div class="container-fluid">
    <div class="row">
      <?php pagina('menu'); ?>
      <?php pagina('corpo') ?>
    </div>
  </div>

  <script src="<?php echo js('bootstrap.bundle.min'); ?>"></script>
  <script src="<?php echo js('feather.min'); ?>"></script>
  <script src="<?php echo js('Chart.min'); ?>"></script>
  <script src="<?php echo js('dashboard'); ?>"></script>
</body>

</html>