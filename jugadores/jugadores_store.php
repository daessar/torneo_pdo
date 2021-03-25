<?php 
  session_start();
  if (isset($_SESSION["usuario"])) {
    require_once "../models/conexion_jugadores.php";
    $conexion_jugadores = new ConexionJugadores();
    $conexion_jugadores -> abrir();
    $jugadores = $conexion_jugadores -> obtenerJugadorNombre($_POST["nombre"]);

    if (count($jugadores) > 0) {
      header("location:jugadores_index.php?action=1"); //Jugador existe
      $conexion_jugadores -> cerrar();
    }else{
      require_once "../models/jugadores.php";
      $jugador = new Jugador();
      $jugador -> documento = $_POST["documento"];
      $jugador -> nombre = $_POST["nombre"];
      $jugador -> posicion = $_POST["posicion"];
      $jugador -> equipo = $_POST["equipo"];
      $filas = $conexion_jugadores -> insertarJugador($jugador);
      $conexion_jugadores -> cerrar();
      if ($filas > 0) {
        header("location:jugadores_index.php?action=2"); //Jugador se inserto
      }
      else{
        header("location:jugadores_index.php?action=3"); //Jugador no se inserto
      }
    }
  }else{
    header("location:../index.php");
  }
?>