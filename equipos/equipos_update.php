<?php 
  require_once "../models/conexion_equipos.php";
  $conexion_equipos = new ConexionEquipos();
  $conexion_equipos -> abrir();

  require_once "../models/equipos.php";
  $equipo = new Equipo();
  $equipo -> id = $_POST["id"];
  $equipo -> nombre = $_POST["nombre"];
  $equipo -> dt = $_POST["dt"];
  $equipo -> municipio = $_POST["municipio"];
  $filas = $conexion_equipos -> actualizarEquipo($equipo);
  $conexion_equipos -> cerrar();
  if ($filas > 0) {
    header("location:equipos_index.php?action=4"); //Equipo se ac/Equipo
  }else{
    header("location:equipos_index.php?action=5"); //Equipo no se actualizo
  }
?>