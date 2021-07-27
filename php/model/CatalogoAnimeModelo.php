<?php
require_once "Conexion.php";

class CatalogoAnimeModelo{
    public static function ConsultarCatalogo($tabla, $item, $valor){
        if($item != null){
            $consulta = Conexion::Conectar() -> prepare("SELECT * FROM $tabla WHERE $item = :$item");
            $consulta -> bindParam(":". $item, $valor, PDO::PARAM_STR);
            $consulta -> execute();
            return $consulta -> fetch();
        }else{
            $consulta = Conexion::Conectar() -> prepare("SELECT * FROM $tabla");
            $consulta -> execute();
            return $consulta -> fetchAll();
    }
  }
}
?>