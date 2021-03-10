<?php 
  class ConexionMunicipios
  {
    private $conexion;

    public function Abrir()
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

    public function insertar_municipios(Municipio $municipio)
    {
      $consulta = $this -> conexion -> prepare("INSERT INTO municipios VALUES(null,?)");
      $consulta -> bindParam(1, $municipio -> nombre);
      $consulta -> execute();
      return $consulta -> rowCount();
    }
  }
?>