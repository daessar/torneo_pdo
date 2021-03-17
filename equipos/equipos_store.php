<?php 
  require_once "../models/conexion_equipos.php";
  $conexion_equipos = new ConexionEquipos();
  $conexion_equipos -> abrir();
  $equipos = $conexion_equipos -> obtenerEquipoNombre($_POST["nombre"]);

  if (count($equipos) > 0) {
    header("location:equipos_index.php?action=1"); //Equipo existe
    $conexion_equipos -> cerrar();
  }else{
    require_once "../models/equipos.php";
    $equipo = new Equipo();
    $equipo -> nombre = $_POST["nombre"];
    $equipo -> dt = $_POST["dt"];
    $equipo -> municipio = $_POST["municipio"];
    $filas = $conexion_equipos -> insertarEquipo($equipo);
    $conexion_equipos -> cerrar();
    if ($filas > 0) {
      header("location:equipos_index.php?action=2"); //Equipo se inserto
    }
    else{
      header("location:equipos_index.php?action=3"); //Equipo no se inserto
    }
  }
?>