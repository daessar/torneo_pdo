<?php 
  session_start();
  require_once "models/conexion_usuarios.php";
  require_once "models/usuario.php";
  $usuario = new Usuario();
  $usuario -> usuario = $_POST["usuario"];
  $usuario -> password = $_POST["password"];

  $conexion_usuarios = new ConexionUsuarios();
  $conexion_usuarios -> abrir();
  $usuarios = $conexion_usuarios -> obtenerUsuarioUsuarioPassword($usuario);
  $conexion_usuarios -> cerrar();
  if (count($usuarios) > 0) {
    $usuario = $usuarios[0];
    $_SESSION["usuario"] = $usuario -> usuario;
    header("location:index/index.php?action=1"); //Usuario existe
  }else{
    echo "Usuario no existe";
  }
?>