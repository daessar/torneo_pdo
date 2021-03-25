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
    // public function obtenerEquipos()
    // {
    //   $consulta = $this -> conexion -> prepare("SELECT equipos.*, municipios.nombre as municipios_nombre FROM equipos INNER JOIN municipios ON equipos.municipio = municipios.id ORDER BY nombre");
    //   $consulta -> setFetchMode(PDO:: FETCH_OBJ);
    //   $consulta -> execute();
    //   return $consulta -> fetchAll();
    // }
    // public function obtenerEquipoId($id)
    // {
    //   $consulta = $this -> conexion -> prepare("SELECT * FROM equipos WHERE  id = ?");
    //   $consulta -> bindParam(1,$id);
    //   $consulta -> setFetchMode(PDO:: FETCH_OBJ);
    //   $consulta -> execute();
    //   return $consulta -> fetchAll();
    // }
    // public function actualizarEquipo(Equipo $equipo)
    // {
    //   $consulta = $this -> conexion -> prepare("UPDATE equipos SET nombre = ?, dt = ?, municipio = ? WHERE id = ?");
    //   $consulta -> bindParam(1, $equipo -> nombre);
    //   $consulta -> bindParam(2, $equipo -> dt);
    //   $consulta -> bindParam(3, $equipo -> municipio);
    //   $consulta -> bindParam(4, $equipo -> id);
    //   $consulta -> execute();
    //   return $consulta -> rowCount();
    // }
    // public function eliminarEquipo($id)
    // {
    //   $consulta = $this -> conexion -> prepare("DELETE FROM equipos WHERE id = ?");
    //   $consulta -> bindParam(1, $id);
    //   $consulta -> execute();
    //   return $consulta -> rowCount();
    // }
  }
?>