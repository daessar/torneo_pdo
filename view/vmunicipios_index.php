<section style="min-height: 82vh;">
  <div class="container">
  <?php if (isset($_GET["action"])) {?>
    <div class="<?=$clase?>" role="alert">
      <?= $mensaje?>
    </div>
  <?php } ?>
  <h2>Listado Municipios</h2>
  <div class="d-flex">
    <table class="table">
      <thead class="bg-primary">
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Nombre</th>
          <th scope="col">Acción</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($municipios as $municipio) {  ?> 
        <tr class="text-right">
          <td><?= $municipio -> id?></td>
          <td><?= $municipio -> nombre?></td>
          <td>
            <a href="municipios_editar.php?id=<?= $municipio -> id?>" class="btn btn-success active" aria-current="page">Actualizar</a>
            <a href="municipios_destroy.php?id=<?= $municipio -> id?>" class="btn btn-danger active" aria-current="page">Eliminar</a>
          </td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>
  </div>
</section>
