<?php
//require_once "../controller/AnimeControlador.php";
require_once "../model/CatalogoAnimeModelo.php";

class AnimeAjax{
    public $idAnime;
    public function ConsultarInformacion(){
        $primerValor = $this -> idAnime;
        $resultado = CatalogoAnimeModelo::ConsultarCatalogoPaginador("anime", "ID_ANIME", $primerValor);
        $array = array($resultado['SINOPSIS_ANIME'], $resultado['URL_TRAILER'], str_replace(" ", "-", $resultado['NOMBRE_ANIME']), $resultado['ID_ANIME']);
        return json_encode($array);
    }
}
if(isset($_POST['idAnimePost'])){
    $llamarFuncion = new AnimeAjax;
    $llamarFuncion -> idAnime = $_POST['idAnimePost'];
    print_r($llamarFuncion -> ConsultarInformacion());
}


?>