<?php 

  require_once "../models/conexion_usuarios.php";
  $conexion_usuarios = new ConexionUsuarios();
  $conexion_usuarios -> abrir();
  $usuarios = $conexion_usuarios -> obtenerUsuarioUsuario($_POST["usuario"]);
  
  if (count($usuarios) > 0) {
    header("location:../index.php?action=1"); //Usuario existe
    $conexion_usuarios -> cerrar();
  }else{
    require_once "../models/usuario.php";
    $usuario = new Usuario();
    $usuario -> usuario = $_POST["usuario"];
    $usuario -> password = $_POST["password"];
    $filas = $conexion_usuarios -> insertarUsuario($usuario);
    $conexion_usuarios -> cerrar();
    if ($filas > 0) {
      header("location:../index.php?action=2"); //Usuario se inserto
    }
    else{
      header("location:../index.php?action=3"); //Usuario no se inserto
    }
  }
?>