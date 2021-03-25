<?php 
  session_start();
  if (isset($_SESSION["usuario"])) {
    require_once "../models/conexion_posiciones.php";
    $conexion_posiciones = new ConexionPosicion();
    $conexion_posiciones -> abrir();
    $posiciones = $conexion_posiciones -> obtenerPosicionesNombre($_POST["nombre"]);

    if (count($posiciones) > 0) {
      header("location:posiciones_index.php?action=1");
      $conexion_posiciones -> cerrar();
    }else{
      require_once "../models/posicion.php";
      $posiciones = new Posicion();
      $posiciones -> nombre = $_POST["nombre"];
      $filas = $conexion_posiciones -> insertarPosicion($posiciones);
      $conexion_posiciones -> cerrar();
      if ($filas > 0) {
        header("location:posiciones_index.php?action=2"); //La posicion se inserto
      }
      else{
        header("location:posiciones_index.php?action=3"); //La posicion no se inserto
      }
    }
  }else{
    header("location:../index.php");
  }
?>