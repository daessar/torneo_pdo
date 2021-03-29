<?php 
  session_start();
  unset($_SESSION["usuario"]);
  session_destroy(); //Se destruye la sesion
  header("location:index.php")
?>