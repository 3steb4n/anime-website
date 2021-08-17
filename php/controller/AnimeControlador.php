<?php
require_once "php/model/CatalogoAnimeModelo.php";
class AnimeControlador{
    public $prPagina;
    public $ultPagina;
    private $tabla;
    public static function BusquedaAnime(){
        if(isset($_POST['n'])){
            $controlador = new AnimeControlador;
            $controlador->tabla='anime';
            $respuesta = CatalogoAnimeModelo::ConsultarCatalogoPaginador($controlador->tabla, 'NOMBRE_ANIME', $_POST['n']);
            return $respuesta;

        }else{
            $tabla = "anime";
            $controlador = new AnimeControlador;
            $array_ini = parse_ini_file('properties.ini', true);
            if(!isset($_POST['nmrPaginas'])){
                $controlador->prPagina=0;
                $controlador->ultPagina=$array_ini['propiedades_paginador']['numero_contenido'];
            }else{
                $controlador->prPagina=(($_POST['nmrPaginas']*$array_ini['propiedades_paginador']['numero_contenido']) - $array_ini['propiedades_paginador']['numero_contenido']);
                $controlador->ultPagina=$array_ini['propiedades_paginador']['numero_contenido'];
            }
        $respuesta = CatalogoAnimeModelo::ConsultarCatalogo($tabla, "", "", $controlador->prPagina, $controlador->ultPagina);
        return $respuesta;
    }
}
public static function BusquedaNumeroPaginas(){
    $tabla="anime";
    $respuesta=CatalogoAnimeModelo::ConsultarCatalogoPaginador($tabla, "", "");
    return $respuesta;
}
}
?>