<?php 
  session_start();
  if (isset($_SESSION["usuario"])) {
    require_once "../models/conexion_equipos.php";
    $conexion_equipos = new Conexionequipos();
    $conexion_equipos -> abrir();
    $filas = $conexion_equipos -> eliminarEquipo($_GET["id"]);

      if ($filas > 0) {
        header("location:equipos_index.php?action=6"); //Equipo se elimino
      }else{
        header("location:equipos_index.php?action=7"); //Equipo no se elimino
      }
  }else{
  header("location:../index.php");
  }
?>