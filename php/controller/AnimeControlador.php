<?php
require_once "php/model/CatalogoAnimeModelo.php";
class AnimeControlador{
    public static function BusquedaAnime(){
        if(isset($_POST['buscarAnm'])){

        }else{
            $tabla = "anime";
            $respuesta = CatalogoAnimeModelo::ConsultarCatalogo($tabla, "", "");
            return $respuesta;
        }
    }
}
?>