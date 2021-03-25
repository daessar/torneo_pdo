<?php 
  session_start();
  if (isset($_SESSION["usuario"])) {
    if (isset($_GET["action"])) {
      switch ($_GET["action"]) {
        case 1:
          $clase = "alert alert-danger";
          $mensaje = "El jugador ya existe";
          break;
        case 2:
          $clase = "alert alert-success";
          $mensaje = "El jugador se inserto correctamente";
          break;
        case 3:
          $clase = "alert alert-danger";
          $mensaje = "El jugador no se pudo insertar";
          break;
        case 4:
          $clase = "alert alert-success";
          $mensaje = "El jugador se actualizo correctamente";
          break;
        case 5:
          $clase = "alert alert-danger";
          $mensaje = "El jugador no se pudo actualizar";
          break;
        case 6:
          $clase = "alert alert-success";
          $mensaje = "El jugador se elimino correctamente";
          break;
        case 7:
          $clase = "alert alert-danger";
          $mensaje = "El jugador no se pudo eliminar";
          break;
      }
    }
    require_once "../models/conexion_jugadores.php";
    $conexion_jugadores = new ConexionJugadores();
    $conexion_jugadores -> abrir();
    $jugadores = $conexion_jugadores -> obtenerJugadores();
    $conexion_jugadores -> cerrar();

    require_once "../view/partials/vheader.php";
    require_once "../view/jugadores/vjugadores_index.php";
    require_once "../view/partials/vfooter.php";
  }else{
    header("location:../index.php");
  }
?>