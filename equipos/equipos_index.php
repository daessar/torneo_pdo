<?php 
  session_start();
  if (isset($_SESSION["usuario"])) {
    if (isset($_GET["action"])) { //Se verifica la acción que es enviada desde el formulario
      switch ($_GET["action"]) {
        case 1:
          $clase = "alert alert-danger";
          $mensaje = "El equipo ya existe";
          break;
        case 2:
          $clase = "alert alert-success";
          $mensaje = "El equipo se inserto correctamente";
          break;
        case 3:
          $clase = "alert alert-danger";
          $mensaje = "El equipo no se pudo insertar";
          break;
        case 4:
          $clase = "alert alert-success";
          $mensaje = "El equipo se actualizo correctamente";
          break;
        case 5:
          $clase = "alert alert-danger";
          $mensaje = "El equipo no se pudo actualizar";
          break;
        case 6:
          $clase = "alert alert-success";
          $mensaje = "El equipo se elimino correctamente";
          break;
        case 7:
          $clase = "alert alert-danger";
          $mensaje = "El equipo no se pudo eliminar";
          break;
      }
    }
    require_once "../models/conexion_equipos.php";
    $conexion_equipos = new ConexionEquipos();
    $conexion_equipos -> abrir();
    $equipos = $conexion_equipos -> obtenerEquipos();
    $conexion_equipos -> cerrar();


    require_once "../view/partials/vheader.php";
    require_once "../view/equipos/vequipos_index.php";
    require_once "../view/partials/vfooter.php";
  }else{
    header("location:../index.php");
  }
?>