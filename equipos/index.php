<?php 
//Este archivo index se crea por seguridad y no poder ingresar al directorio del servidor sin haber iniciado sesión
  session_start();
  if (isset($_SESSION["usuario"])) {
    header("location:../index/index.php");
  }else{
    header("location:../index.php");
  }
?>