<?php 
  session_start();
    if (isset($_SESSION["usuario"])) {
    require_once "../models/conexion_equipos.php";
    $conexion_equipos = new ConexionEquipos();
    $conexion_equipos -> abrir();
    $equipos = $conexion_equipos -> obtenerEquipos();
    $conexion_equipos -> cerrar();

    require_once "../models/conexion_posiciones.php";
    $conexion_posicione = new ConexionPosicion();
    $conexion_posicione -> abrir();
    $posiciones = $conexion_posicione -> obtenerPosiciones();
    $conexion_posicione -> cerrar();

    require_once "../view/partials/vheader.php";
    require_once "../view/jugadores/vjugadores_create.php";
    require_once "../view/partials/vfooter.php";
  }else{
      header("location:../index.php");
    }
?>