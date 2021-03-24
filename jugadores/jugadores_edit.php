<?php 
require_once "../models/conexion_jugadores.php";
  $conexion_jugadores = new ConexionJugadores();
  $conexion_jugadores -> abrir();
  $jugadores = $conexion_jugadores -> obtenerJugadorDocumento($_GET["documento"]);
  $conexion_jugadores -> cerrar();
  $jugadores = $jugadores[0];

  require_once "../models/conexion_posiciones.php";
  $conexion_posiciones = new ConexionPosicion();
  $conexion_posiciones -> abrir();
  $posiciones = $conexion_posiciones -> obtenerPosiciones();
  $conexion_posiciones -> cerrar();

  require_once "../models/conexion_equipos.php";
  $conexion_equipos = new ConexionEquipos();
  $conexion_equipos -> abrir();
  $equipos = $conexion_equipos -> obtenerEquipos();
  $conexion_equipos -> cerrar();


  require_once "../view/partials/vheader.php";
  require_once "../view/jugadores/vjugadores_edit.php";
  require_once "../view/partials/vfooter.php";
?>