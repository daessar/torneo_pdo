<section style="min-height: 82vh;">
  <h2 class="text-center">Actualizar Posición</h2>
  <div class="d-flex justify-content-center">
    <form method="POST" action="posiciones_update.php">
      <div class="mb-3">
        <label for="id" class="form-label">Id Posición</label>
        <input type="number" class="form-control" id="id" name="id" value="<?= $municipio -> id?>" readonly>
      </div>

      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre de la posición</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $municipio -> nombre?>">
      </div>
      <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
  </div>
</section>