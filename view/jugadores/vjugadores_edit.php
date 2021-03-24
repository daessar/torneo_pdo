<section style="min-height: 82vh;">
  <h2 class="text-center">Actualizar Jugador</h2>
  <div class="d-flex justify-content-center">
    <form method="POST" action="jugadores_update.php">
      <div class="mb-3">
        <label for="documento" class="form-label">Documento</label>
        <input type="text" class="form-control" id="documento" name="documento" readonly value="<?=$jugadores -> documento?>">
      </div>
      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre del jugador</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="<?=$jugadores -> nombre?>">
      </div>
      <div class="mb-3">
        <label for="posicion" class="form-label">Posición</label>
        <select class="form-select" aria-label="Default select example" name="posicion" id="posicion">
          <?php foreach ($posiciones as $posicion){?>
          <option value='<?= $posicion -> id?>'<?php if($posicion -> id == $jugadores -> posicion) echo "selected"?>><?= $posicion -> nombre?></option>
          <?php } ?>
        </select>
       </div>


       <div class="mb-3">
        <label for="equipo" class="form-label">Equipo</label>
        <select class="form-select" aria-label="Default select example" name="equipo" id="equipo">
          <?php foreach ($equipos as $equipo){?>
          <option value='<?= $equipo -> id?>'<?php if($equipo -> id == $jugadores -> equipo) echo "selected"?>><?= $equipo -> nombre?></option>
          <?php } ?>
        </select>
       </div>

      <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
  </div>
</section>