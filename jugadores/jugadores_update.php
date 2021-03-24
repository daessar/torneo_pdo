<?php 
  require_once "../models/conexion_jugadores.php";
  $conexion_jugadores = new ConexionJugadores();
  $conexion_jugadores -> abrir();

  require_once "../models/jugadores.php";
  $jugadores = new Jugador();
  $jugadores -> documento = $_POST["documento"];
  $jugadores -> nombre = $_POST["nombre"];
  $jugadores -> posicion = $_POST["posicion"];
  $jugadores -> equipo = $_POST["equipo"];
  $filas = $conexion_jugadores -> actualizarJugador($jugadores);
  $conexion_jugadores -> cerrar();
  if ($filas > 0) {
    header("location:jugadores_index.php?action=4"); //El Jugador se actualizo
  }else{
    header("location:jugadores_index.php?action=5"); //El Jugador no se actualizo
  }
?>