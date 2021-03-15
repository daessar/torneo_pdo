<?php 
  require_once "../models/conexion_municipios.php";
  $conexion_municipios = new ConexionMunicipios();
  $conexion_municipios -> abrir();
  $municipios = $conexion_municipios -> obtenerMunicipiosNombre($_POST["nombre"]);

  if (count($municipios) > 0) {
    header("location:municipios_index.php?action=1");
    $conexion_municipios -> cerrar();
  }else{
    require_once "../models/municipios.php";
    $municipios = new Municipio();
    $municipios -> nombre = $_POST["nombre"];
    $filas = $conexion_municipios -> insertarMunicipios($municipios);
    $conexion_municipios -> cerrar();
    if ($filas > 0) {
      header("location:municipios_index.php?action=2"); //Municipio se inserto
    }
    else{
      header("location:municipios_index.php?action=3"); //Municipio no se inserto
    }
  }
?>