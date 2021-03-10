<?php 
  require_once "models/conexion_municipios.php";
  $conexion_municipios = new ConexionMunicipios();
  $conexion_municipios -> Abrir();
  $municipios = $conexion_municipios -> obtenerMunicipioId($_GET["id"]);
  $conexion_municipios -> cerrar();
  $municipio = $municipios[0];
  require_once "view/partials/vheader.php";
  require_once "view/vmunicipios_editar.php";
  require_once "view/partials/vfooter.php";
?>