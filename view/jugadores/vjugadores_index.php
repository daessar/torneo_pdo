<section style="min-height: 82vh;">
  <div class="container">
  <?php if (isset($_GET["action"])) {?>
    <div class="<?=$clase?>" role="alert">
      <?= $mensaje?>
    </div>
  <?php } ?>
  <h2>Listado De Jugadores</h2>
  <div class="d-flex">
    <table class="table">
      <thead class="bg-primary">
        <tr>
          <th scope="col">Documento</th>
          <th class="mr-5" scope="col">Nombre</th>
          <th scope="col">Posición</th>
          <th scope="col">Equipo</th>
          <th scope="col">Acción</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($jugadores as $jugador) {  ?> 
        <tr class="text-right">
          <td><?= $jugador -> documento?></td>
          <td><?= $jugador -> nombre?></td>
          <td><?= $jugador -> posicion_nombre?></td>
          <td><?= $jugador -> equipo_nombre?></td>
          <td>
            <a href="jugadores_edit.php?documento=<?= $jugador -> documento?>" class="btn btn-success active" aria-current="page"><i class="fas fa-marker"></i></a>
            <a href="jugadores_destroy.php?documento=<?= $jugador -> documento?>" class="btn btn-danger active" aria-current="page"><i class="far fa-trash-alt"></i></a>
          </td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>
  </div>
</section>
