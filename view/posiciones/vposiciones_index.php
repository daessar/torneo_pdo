<section style="min-height: 82vh;">
  <div class="container">
  <?php if (isset($_GET["action"])) {?>
    <div class="<?=$clase?>" role="alert">
      <?= $mensaje?>
    </div>
  <?php } ?>
  <h2>Listado Posiciones</h2>
  <div class="d-flex">
    <table class="table">
      <thead class="bg-primary">
        <tr>
          <th scope="col">Id</th>
          <th class="mr-5" scope="col">Posición</th>
          <th scope="col">Acción</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($posiciones as $posicion) {  ?> 
        <tr class="text-right">
          <td><?= $posicion -> id?></td>
          <td><?= $posicion -> nombre?></td>
          <td>
            <a href="posiciones_edit.php?id=<?= $posicion -> id?>" class="btn btn-success active" aria-current="page">Actualizar</a>
            <a href="posiciones_destroy.php?id=<?= $posicion -> id?>" class="btn btn-danger active" aria-current="page">Eliminar</a>
          </td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>
  </div>
</section>
