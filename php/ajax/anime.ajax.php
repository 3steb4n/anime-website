<?php
//require_once "../controller/AnimeControlador.php";
require_once "../model/CatalogoAnimeModelo.php";

class AnimeAjax{
    public $idAnime;
    public function ConsultarInformacion(){
        $primerValor = $this -> idAnime;
        $resultado = CatalogoAnimeModelo::ConsultarCatalogo("anime", "ID_ANIME", $primerValor);
        return $resultado;
    }
}
if(isset($_POST['idAnimePost'])){
    $llamarFuncion = new AnimeAjax;
    $llamarFuncion -> idAnime = $_POST['idAnimePost'];
    //$llamarFuncion -> ConsultarInformacion();
    echo $llamarFuncion -> idAnime;
}


?>