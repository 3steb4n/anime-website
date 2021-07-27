<?php
class Conexion{
    public static function Conectar(){
        $ruta = new PDO("mysql:host=127.0.0.1;dbname=anishboard", "root", "", array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
        return $ruta;
    }
}
?>