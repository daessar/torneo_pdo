<?php 
  require_once "../models/conexion_jugadores.php";
  $conexion_jugadores = new ConexionJugadores();
  $conexion_jugadores -> abrir();
  $filas = $conexion_jugadores -> eliminarJugador($_GET["documento"]);

    if ($filas > 0) {
      header("location:jugadores_index.php?action=6"); //El jugador se elimino
    }else{
      header("location:jugadores_index.php?action=7"); //El jugador no se elimino
    }
?>