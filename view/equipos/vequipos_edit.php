<section style="min-height: 82vh;">
  <h2 class="text-center">Actualizar Equipo</h2>
  <div class="d-flex justify-content-center">
    <form method="POST" action="equipos_update.php">
      <div class="mb-3">
        <label for="id" class="form-label">Id del equipo</label>
        <input type="text" class="form-control" id="id" name="id" readonly value="<?=$equipo -> id?>">
      </div>
      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre del equipo</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="<?=$equipo -> nombre?>">
      </div>
      <div class="mb-3">
        <label for="dt" class="form-label">Director Técnico</label>
        <input type="text" class="form-control" id="nombre" name="dt" value="<?=$equipo -> dt?>">
      </div>
       <div class="mb-3">
        <label for="municipio" class="form-label">Municipio</label>
        <select class="form-select" aria-label="Default select example" name="municipio" id="municipio">
          <?php foreach ($municipios as $municipio){?>
          <option value='<?= $municipio -> id?>'<?php if($municipio -> id == $equipo -> municipio) echo "selected"?>><?= $municipio -> nombre?></option>
          <?php } ?>
        </select>
       </div>
      <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
  </div>
</section>