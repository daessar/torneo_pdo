<section style="min-height: 82vh;">
  <div class="d-flex justify-content-center">
    <form method="POST" action="equipos_store.php  ">
      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre del equipo</label>
        <input type="text" class="form-control" id="nombre" name="nombre">
      </div>
      <div class="mb-3">
        <label for="dt" class="form-label">Director Técnico</label>
        <input type="text" class="form-control" id="nombre" name="dt">
      </div>
      <select class="form-select" aria-label="Default select example">
        <option selected>Open this select menu</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
      <button type="submit" class="btn btn-primary">Insertar</button>
    </form>
  </div>
</section>