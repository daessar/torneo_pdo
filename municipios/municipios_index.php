<?php 
  if (isset($_GET["action"])) {
    switch ($_GET["action"]) {
      case 1:
        $clase = "alert alert-danger";
        $mensaje = "El municipio ya existe";
        break;
      case 2:
        $clase = "alert alert-success";
        $mensaje = "El municipio se inserto correctamente";
        break;
      case 3:
        $clase = "alert alert-danger";
        $mensaje = "El municipio no se pudo insertar";
        break;
      case 4:
        $clase = "alert alert-success";
        $mensaje = "El municipio se actualizo correctamente";
        break;
      case 5:
        $clase = "alert alert-danger";
        $mensaje = "El municipio no se pudo actualizar";
        break;
      case 6:
        $clase = "alert alert-success";
        $mensaje = "El municipio se elimino correctamente";
        break;
      case 7:
        $clase = "alert alert-danger";
        $mensaje = "El municipio no se pudo eliminar";
        break;
    }
  }
  require_once "../models/conexion_municipios.php";
  $conexion_municipios = new ConexionMunicipios();
  $conexion_municipios -> abrir();
  $municipios = $conexion_municipios -> obtenerMunicipios();
  $conexion_municipios -> cerrar();

  require_once "../view/partials/vheader.php";
  require_once "../view/municipios/vmunicipios_index.php";
  require_once "../view/partials/vfooter.php";
?>