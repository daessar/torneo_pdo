<section style="min-height: 82vh;">
  <div class="container">
  <?php if (isset($_GET["action"])) {?>
    <div class="<?=$clase?>" role="alert">
      <?= $mensaje?>
    </div>
  <?php } ?>
  <h2>Listado Equipos</h2>
  <div class="d-flex">
    <table class="table">
      <thead class="bg-primary">
        <tr>
          <th scope="col">Id</th>
          <th class="mr-5" scope="col">Nombre</th>
          <th scope="col">D.T</th>
          <th scope="col">Municipio</th>
          <th scope="col">Acción</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($equipos as $equipo) {  ?> 
        <tr class="text-right">
          <td><?= $equipo -> id?></td>
          <td><?= $equipo -> nombre?></td>
          <td><?= $equipo -> dt?></td>
          <td><?= $equipo -> municipios_nombre?></td>
          <td>
            <a href="equipos_edit.php?id=<?= $equipo -> id?>" class="btn btn-success active" aria-current="page">Actualizar</a>
            <a href="equipos_destroy.php?id=<?= $equipo -> id?>" class="btn btn-danger active" aria-current="page">Eliminar</a>
          </td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>
  </div>
</section>
