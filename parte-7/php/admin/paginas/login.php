<?php

if(verificarLogado()) {
  redirecionar('/admin/home');  
}

if($_POST) {
  $usuario = $_POST['usuario'];
  $senha = $_POST['senha'];

  if($usuario == 'admin' && $senha == 'admin') {
    logar($usuario);
  }
}

?>

<form method="POST">
  <img class="mb-4" src="/admin/assets/img/logo.png" alt="" width="72" height="57">
  <h1 class="h3 mb-3 fw-normal">Área administrativa</h1>
  <label for="usuario" class="visually-hidden">Usuário</label>
  <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Digite o seu usuário" required
    autofocus>

  <label for="senha" class="visually-hidden">Senha</label>
  <input type="password" id="senha" name="senha" class="form-control" placeholder="Digite sua senha" required>


  <button class="w-100 btn btn-lg btn-primary" type="submit">Logar</button>
  <p class="mt-5 mb-3 text-muted">Todos os direitos reservados &copy; <?php echo date('Y'); ?></p>
</form>

<!-- <form method="POST">
  Usuário: <input type="text" name="usuario" id="usuario" />
  Senha: <input type="password" name="senha" id="senha" />
  <input type="submit" value="LOGAR">
</form> -->