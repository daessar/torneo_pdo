<section class="text-center" style="min-height: 82vh;">
<?php if (isset($_GET["action"])) {?>
    <div class="<?=$clase?>" role="alert">
      <?= $mensaje?>
    </div>
  <?php } ?>
<h3 class="text text-center">Login</h3>
<hr>
  <div class="d-flex justify-content-center">
    <form method="POST" action="iniciar.php">
  <div class="mb-3">
    <label for="usuario" class="form-label">Usuario</label>
    <input type="text" class="form-control" id="usuario" name="usuario">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <button type="submit" class="btn btn-success mb-2">Entrar</button>
  <p class="mb-2">Or</p>
  <a href="usuarios/usuarios_create.php">Registrarse</a>
</form>
  </div>
</section>