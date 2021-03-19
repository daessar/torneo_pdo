<?php 
  require_once "../models/conexion_jugadores.php";
  $conexion_jugadores = new ConexionJugadores();
  $conexion_jugadores -> abrir();
  $jugadores = $conexion_jugadores -> obtenerJugadorNombre($_POST["nombre"]);

  if (count($jugadores) > 0) {
    header("location:jugadores_index.php?action=1"); //Jugador existe
    $conexion_jugadores -> cerrar();
  }else{
    require_once "../models/jugadores.php";
    $jugadores = new Jugador();
    $jugadores -> documento = $_POST["documento"];
    $jugadores -> nombre = $_POST["nombre"];
    $jugadores -> posicion = $_POST["posicion"];
    $jugadores -> equipo = $_POST["equipo"];
    $filas = $conexion_jugadores -> insertarJugador($jugadores);
    $conexion_jugadores -> cerrar();
    if ($filas > 0) {
      header("location:jugadores_index.php?action=2"); //Jugador se inserto
    }
    else{
      header("location:jugadores_index.php?action=3"); //Jugador no se inserto
    }
  }
?>