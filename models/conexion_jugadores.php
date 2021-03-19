<?php 
  class ConexionJugadores
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
    public function insertarJugador(Jugador $jugador)
    {
      $consulta = $this -> conexion -> prepare("INSERT INTO jugadores VALUES(null, ?,?,?,?)");
      $consulta -> bindParam(1, $jugador -> documento);
      $consulta -> bindParam(2, $jugador -> nombre);
      $consulta -> bindParam(3, $jugador -> posicion);
      $consulta -> bindParam(4, $jugador -> equipo);
      $consulta -> execute();
      return $consulta -> rowCount();
    }
    public function obtenerJugadorNombre($nombre)
    {
      $consulta = $this -> conexion -> prepare("SELECT * FROM jugadores WHERE  nombre = ?");
      $consulta -> bindParam(1,$nombre);
      $consulta -> setFetchMode(PDO:: FETCH_OBJ);
      $consulta -> execute();
      return $consulta -> fetchAll();
    }
  }
?>