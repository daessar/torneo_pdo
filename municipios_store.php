<?php 
  require_once "models/conexion_municipios.php";
  require_once "models/municipios.php";
  
  $municipios = new Municipio();
  $municipios -> nombre = $_POST["nombre"];

  $conexion_municipios = new ConexionMunicipios();
  $conexion_municipios -> abrir();
  $filas = $conexion_municipios -> insertar_municipios($municipios);
  $conexion_municipios -> cerrar();
  if ($filas > 0) {
    echo "Municipios insertando correctamente";
  }
  else{
    echo "El municipio no se pudo insertar";
  }
?>