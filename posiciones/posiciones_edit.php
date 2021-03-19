<?php 
  require_once "../models/conexion_posiciones.php";
  $conexion_posiciones = new ConexionPosicion();
  $conexion_posiciones -> abrir();
  $posiciones = $conexion_posiciones -> obtenerPosicionId($_GET["id"]);
  $conexion_posiciones -> cerrar();
  $municipio = $posiciones[0];
  require_once "../view/partials/vheader.php";
  require_once "../view/posiciones/vposiciones_edit.php";
  require_once "../view/partials/vfooter.php";
?>