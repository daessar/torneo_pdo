<section style="min-height: 82vh;">
  <h3 class="text text-center">Crear Jugadores</h3>
  <hr>
  <div class="d-flex justify-content-center text text-center">
    <form method="POST" action="jugadores_store.php  ">
      <div class="mb-3">
        <label for="documento" class="form-label">Número del documento</label>
        <input type="number" class="form-control" id="documento" name="documento">
      </div>
      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre">
      </div>
        <div class="mb-3">
          <label for="posicion" class="form-label">Posición</label>
          <select class="form-select" aria-label="Default select example" name="posicion" id="posicion">
            <option selected>Seleccione una posición</option>
            <?php foreach ($posiciones as $posicion){?>
            <option value=<?= $posicion -> id?>><?= $posicion -> nombre?></option>
            <?php } ?>
          </select>
        </div>
       <div class="mb-3">
        <label for="equipo" class="form-label">Equipo</label>
        <select class="form-select" aria-label="Default select example" name="equipo" id="equipo">
          <option selected>Seleccione un equipo</option>
          <?php foreach ($equipos as $equipo){?>
          <option value=<?= $equipo -> id?>><?= $equipo -> nombre?></option>
          <?php } ?>
        </select>
       </div>
      <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
  </div>
</section>