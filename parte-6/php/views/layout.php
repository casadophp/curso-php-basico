<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $titulo; ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <style>
  html {
    background: url(image.jpg) no-repeat center center fixed;
    background-size: cover;
  }

  body {
    background-color: transparent;
  }
  </style>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <a href="/">
          <img class="img-fluid mx-auto d-block col-sm-2 mt-3 mb-3"
            src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png"
            alt="Meu Primeiro Site Bootstap"></a>
      </div>
    </div>
    <div class="row">
      <nav class="navbar navbar-expand-lg navbar-light bg-light rounded shadow">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link" aria-current="page" href="/">
                <div class="d-grid">
                  <span class="btn btn-outline-success">Home</span>
                </div>
              </a>
              <a class="nav-link" href="/contato">
                <div class="d-grid">
                  <span class="btn btn-outline-success">Contato</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </div>

  <div class="container bg-light rounded shadow mt-5">
    <div class="row">
      <div class="col mt-3">
        <?php 
          include_once "includes/$body";
        ?>
      </div>
    </div>
  </div>

  <div class="container bg-light rounded shadow mt-5 mb-5">
    <div class="row">
      <div class="col">
        <p class="pt-4 p-3 text-center">
          Todos os direitos reservados <?php echo date('Y'); ?>.
        </p>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
  </script>
  <?php if($js): ?>
  <script src="/assets/js/contato.js"></script>
  <?php endif; ?>
</body>

</html>