<?php 
  require_once "../models/conexion_municipios.php";
  $conexion_municipios = new ConexionMunicipios();
  $conexion_municipios -> abrir();
  $filas = $conexion_municipios -> eliminarMunicipio($_GET["id"]);

    if ($filas > 0) {
      header("location:municipios_index.php?action=6"); //Municipio se elimino
    }
    else{
      header("location:municipios_index.php?action=7"); //Municipio no se elimino
    }
?>