<?php 
  require_once "models/conexion_municipios.php";
  $conexion_municipios = new ConexionMunicipios();
  $conexion_municipios -> abrir();
  $municipios = $conexion_municipios -> obtenerMunicipiosNombre($_POST["nombre"]);

  if (count($municipios) > 0) {
    header("location:municipios_index.php?action=1");
    $conexion_municipios -> cerrar();
  }else{
    require_once "models/municipios.php";
    $municipio = new Municipio();
    $municipio -> id = $_POST["id"];
    $municipio -> nombre = $_POST["nombre"];
    $filas = $conexion_municipios -> actualizarMunicipio($municipio);
    $conexion_municipios -> cerrar();
    if ($filas > 0) {
      header("location:municipios_index.php?action=4"); //Municipio se actualizo
    }
    else{
      header("location:municipios_index.php?action=5"); //Municipio no se actualizo
    }
  }

?>