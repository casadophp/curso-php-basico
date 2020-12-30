<form method="POST" class="mb-4 mt-2 needs-validation" novalidate>
  <div class="mb-3">
    <label for="nome" class="form-label">Nome</label>
    <input name="nome" type="text" class="form-control" id="nome" aria-describedby="nomeHelp" required>
    <div class="valid-feedback">
      Nome válido!
    </div>
    <div class="invalid-feedback">
      Digite um nome válido.
    </div>
    <div id="nomeHelp" class="form-text">Digite o seu nome.</div>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
    <div class="valid-feedback">
      Email válido!
    </div>
    <div class="invalid-feedback">
      Digite um email válido.
    </div>
    <div id="emailHelp" class="form-text">Digite o seu email.</div>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php if($_POST): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <p class="pb-0 mb-1">Obrigado por entrar em contato. Recebemos os seus dados:</p>

  <ul>
    <?php foreach($_POST as $key => $data): ?>
    <li>
      <?php 
       $type = ucfirst($key);
       echo "{$type}: {$data}" 
       ?>
    </li>
    <?php endforeach; ?>
  </ul>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

</div>
<?php endif; ?>