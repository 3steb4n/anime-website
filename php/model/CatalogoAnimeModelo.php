<?php
require_once "Conexion.php";

class CatalogoAnimeModelo{
    public static function ConsultarCatalogo($tabla, $item, $valor, $primeraPagina, $ultimaPagina){
        if($item != null){
            $consulta = Conexion::Conectar() -> prepare("SELECT * FROM $tabla WHERE $item = :$item LIMIT $primeraPagina,$ultimaPagina");
            $consulta -> bindParam(":". $item, $valor, PDO::PARAM_STR);
            $consulta -> execute();
            return $consulta -> fetch();
        }else{
            $consulta = Conexion::Conectar() -> prepare("SELECT * FROM $tabla LIMIT $primeraPagina,$ultimaPagina");
            $consulta -> execute();
            return $consulta -> fetchAll();
    }
  }

  public static function ConsultarCatalogoPaginador($tabla, $item, $valor){
      if($item!=null){
          $consultaPag = Conexion::Conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
          $consultaPag->bindParam(":". $item, $valor, PDO::PARAM_STR);
          $consultaPag->execute();
          return $consultaPag->fetch();
      }else{
          $consultaPag=Conexion::Conectar()->prepare("SELECT * FROM $tabla");
          $consultaPag->execute();
          return $consultaPag->fetchAll();
      }
  }
}
?>