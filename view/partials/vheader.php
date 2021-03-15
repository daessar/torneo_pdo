<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Torneo PDO</title>
  </head>
  <body class="">
  <header>
    <!-- Menu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary ps-5 pe-5 mb-3 d-flex flex-column flex-md-row align-items-center  border-bottom shadow-sm">
    <div class="container-fluid d-flex">
      <a class="navbar-brand fs-4 fw-bold" href="index.php">Torneo PDO ⚽</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class=" d-flex flex-row-reverse bd-highlight" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       <!-- Municipios -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Municipios
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="../municipios/municipios_create.php">Agregar Municipio</a></li>
              <li><a class="dropdown-item" href="../municipios/municipios_index.php">Ver Municipios</a></li>
            </ul>
          </li>

          <!-- Equipos -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Equipo
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="../equipos/equipos_create.php">Agregar Equipo</a></li>
              <li><a class="dropdown-item" href="../equipos/equipos_index.php">Ver Equipo</a></li>
            </ul>
          </li>

          <!-- Jugadores -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Jugadores
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="../jugadores/jugadores_create.php">Agregar Jugadores</a></li>
              <li><a class="dropdown-item" href="../jugadores/jugadores_index.php">Ver Jugadores</a></li>
            </ul>
          </li>

          <!-- Posiciones -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Posiciones
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="equipo_create.php">Agregar Posiciones</a></li>
              <li><a class="dropdown-item" href="equipo_index.php">Ver Posiciones</a></li>
            </ul>
          </li>

        </ul>
      </div>
    </div>
</nav>
</header>

