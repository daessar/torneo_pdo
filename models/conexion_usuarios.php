<?php 
  class ConexionUsuarios
  {
    private $conexion;

    public function abrir()
    {
      try
      {
        $this -> conexion = new PDO("mysql:host=localhost;dbname=torneo","root","");
        $this -> conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return 1;
      }
      catch (Exception $e)
      {
        return $e -> getMessage();
      }
    }

    public function cerrar()
    {
      $this -> conexion = null;
    }

    public function insertarUsuario(Usuario $usuario)
    {
      $consulta = $this -> conexion -> prepare("INSERT INTO login VALUES(null, ?, md5(?))");
      $consulta -> bindParam(1, $usuario -> usuario);
      $consulta -> bindParam(2, $usuario -> password);
      $consulta -> execute();
      return $consulta -> rowCount();
    }
    public function obtenerUsuarioUsuario($usuario)
    {
      $consulta = $this -> conexion -> prepare("SELECT * FROM login WHERE  usuario = ?");
      $consulta -> bindParam(1,$usuario);
      $consulta -> setFetchMode(PDO:: FETCH_OBJ);
      $consulta -> execute();
      return $consulta -> fetchAll();
    }
    public function obtenerUsuarioUsuarioPassword($usuario)
    {
      $consulta = $this -> conexion -> prepare("SELECT * FROM login WHERE  usuario = ? AND password = md5(?)");
      $consulta -> bindParam(1,$usuario -> usuario);
      $consulta -> bindParam(2,$usuario -> password);
      $consulta -> setFetchMode(PDO:: FETCH_OBJ);
      $consulta -> execute();
      return $consulta -> fetchAll();
    }
  }
?>