<?php 
  session_start();
  if (isset($_SESSION["usuario"])) {
    if (isset($_GET["action"])) {
      switch ($_GET["action"]) {
        case 1:
          $clase = "alert alert-danger";
          $mensaje = "La posicion ya existe";
          break;
        case 2:
          $clase = "alert alert-success";
          $mensaje = "La posicion se inserto correctamente";
          break;
        case 3:
          $clase = "alert alert-danger";
          $mensaje = "La posicion no se pudo insertar";
          break;
        case 4:
          $clase = "alert alert-success";
          $mensaje = "La posicion se actualizo correctamente";
          break;
        case 5:
          $clase = "alert alert-danger";
          $mensaje = "La posicion no se pudo actualizar";
          break;
        case 6:
          $clase = "alert alert-success";
          $mensaje = "La posicion se elimino correctamente";
          break;
        case 7:
          $clase = "alert alert-danger";
          $mensaje = "La posicion no se pudo eliminar";
          break;
      }
    }
    require_once "../models/conexion_posiciones.php";
    $conexion_posiciones = new ConexionPosicion();
    $conexion_posiciones -> abrir();
    $posiciones = $conexion_posiciones -> obtenerPosiciones();
    $conexion_posiciones -> cerrar();

    require_once "../view/partials/vheader.php";
    require_once "../view/posiciones/vposiciones_index.php";
    require_once "../view/partials/vfooter.php";
  }else{
    header("location:../index.php");
  }
?>