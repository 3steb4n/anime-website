<?php
if(isset($_GET['ruta'])){
    if($_GET['ruta']=='test1' || $_GET['ruta']=='test2'){
        require_once "php/view/index.php";
    }else{
        require_once "php/view/assets/layout/error.notfound.php";
    }
}else{
    require_once "php/view/index.php";
}
require_once "php/model/Conexion.php";
//require_once "php/model/CatalogoAnimeModelo.php";
require_once "php/controller/AnimeControlador.php";
?>