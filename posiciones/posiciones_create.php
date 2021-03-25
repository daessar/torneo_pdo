<?php 
  session_start();
  if (isset($_SESSION["usuario"])) {
    require_once "../view/partials/vheader.php";
    require_once "../view/posiciones/vposiciones_create.php";
    require_once "../view/partials/vfooter.php";
  }else{
    header("location:../index.php");
  }
?>