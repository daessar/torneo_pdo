<?php 
  session_start(); //Inicializar o reiniciar una sesion
  if (isset($_SESSION["usuario"])) { //Verifica si la sesión está iniciada
    require_once "../models/conexion_municipios.php"; //Trae el modelo de conexion municipios para crear un objeto
    $conexion_municipios = new ConexionMunicipios();
    $conexion_municipios -> abrir();
    $municipios = $conexion_municipios -> obtenerMunicipios();
    $conexion_municipios -> cerrar();

    require_once "../view/partials/vheader.php"; //Se muestran las vistas correspondientes
    require_once "../view/equipos/vequipos_create.php";
    require_once "../view/partials/vfooter.php";
  }else{
    header("location:../index.php"); //Si no hay ninguna sesion iniciada, se lleva a index para que inicie sesion
  }
?>