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
      $posiciones = new posicion();
      $posiciones -> id = $_POST["id"];
      $posiciones -> nombre = $_POST["nombre"];
      $filas = $conexion_posiciones -> actualizarPosicion($posiciones);
      $conexion_posiciones -> cerrar();
      if ($filas > 0) {
        header("location:posiciones_index.php?action=4"); //La posicion se actualizo
      }
      else{
        header("location:posiciones_index.php?action=5"); //La posicion no se actualizo
      }
    }
  }else{
    header("location:../index.php");
  }
?>