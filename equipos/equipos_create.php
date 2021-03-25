<?php 
  session_start();
  if (isset($_SESSION["usuario"])) {
    require_once "../models/conexion_municipios.php";
    $conexion_municipios = new ConexionMunicipios();
    $conexion_municipios -> abrir();
    $municipios = $conexion_municipios -> obtenerMunicipios();
    $conexion_municipios -> cerrar();

    require_once "../view/partials/vheader.php";
    require_once "../view/equipos/vequipos_create.php";
    require_once "../view/partials/vfooter.php";
  }else{
    header("location:../index.php");
  }
?>