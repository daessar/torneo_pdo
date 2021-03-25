<?php 
  session_start();
  if(isset($_SESSION["usuario"])){
    header("location:index/index.php");
  }else{
    if (isset($_GET["action"])) {
    switch ($_GET["action"]) {
      case 1:
        $clase = "alert alert-danger";
        $mensaje = "El nombre de usuario ya existe";
        break;
      case 2:
        $clase = "alert alert-success";
        $mensaje = "El usuario se ha creado correctamente";
        break;
      case 3:
        $clase = "alert alert-danger";
        $mensaje = "El usuario no se pudo crear";
        break;
      }
    }
    require_once "view/partials/vheader1.php";
    require_once "view/vindex.php";
    require_once "view/partials/vfooter.php";
  }
?>