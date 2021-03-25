<?php 
  session_start();
  if (isset($_SESSION["usuario"])) {
    require_once "../models/conexion_posiciones.php";
    $conexion_posiciones = new ConexionPosicion();
    $conexion_posiciones -> abrir();
    $filas = $conexion_posiciones -> eliminarPosicion($_GET["id"]);

      if ($filas > 0) {
        header("location:posiciones_index.php?action=6"); //La posicion se elimino
      }
      else{
        header("location:posiciones_index.php?action=7"); //La posicion no se elimino
      }
    }else{
    header("location:../index.php");
  }
?>