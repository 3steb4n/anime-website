<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anisboard</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Gowun+Dodum&display=swap');
        body{
            margin: 0px;
            height:100%;
            overflow-x: hidden;
        }
        html{
            height:100%;
        }
        h1{
            font-family: 'Open Sans', sans-serif;
        }
        li{
            list-style:none; 
        }
        .div-sinopsis{
            transition-property: width, height, background-color;
        }
        .div-sinopsis:hover{
            background-position: center center;
            background-size: 70px;  
            background-repeat: no-repeat;
            background-image: url('php/view/img/icon-play.png');
            
        }
    </style>
</head>
<body>
    <?php require_once "php/view/assets/layout/informacion.anime.php" ?>
    <?php require_once "php/view/assets/layout/header.php" ?>
    <?php require_once "php/controller/AnimeControlador.php" ?>
    <div style="position: relative; overflow: hidden; width: 50vw; margin: 0 auto; top: 15px; border: 1px solid black;">
    <?php 
    $paginador=0;
    $resultado=AnimeControlador::BusquedaAnime();
    foreach($resultado as $dato){
        $paginador+=1;
        echo "<div class='div-container' style='width: 235px; padding: 15px;  height: 420px; border: 6px solid #eee; border-radius: 30px; float: left; margin: 10px; z-index: 4;'>"; 
        echo "<a href=javascript:consultarInformacion(".$dato['ID_ANIME'].")>";
        echo "<div class='div-sinopsis' name='div-sinopsis' style='position: absolute; padding: 0; cursor: pointer; z-index: 3; width: 240px; height: 420px; float: left; transition: width 3s; transition-delay: 21s;'>";
        echo "</div>"; 
        echo "</a>";
        echo "<img src=php/view/img/CatalogoAnimes/".$dato['IMG_ANIME']." style='height: 320px; width: 230px'; border-radius: 102px;'>";
        echo "<h1 class='anime-name' style='font-size: 15px;'>".$dato["NOMBRE_ANIME"]."</h1>";  
        echo "</div>";
    }
    ?>
    </div>
<div id="paginador" style="position: relative; width: 20%; height: 80px; background: green; top: 25px; margin: 0 auto;">
  <div style="position: absolue; background: red; width: 40%; height: 60px; margin: 0 auto; top: 10px;">
    <?php
    $numeroPaginas=0;
    $h=1;
    for($i=1; $i<$paginador; $i++){
        //echo $i;
        $h+=1;
        if($h==6){
            $numeroPaginas+=1;
            echo "<div style='position: relative; float: left; margin: 5px;'>";
            echo "<p>".$numeroPaginas."</p>";
            echo "</div>";
            $h=0;
        }
        
    }
    //echo $paginador;
    ?>
    </div>
</div>
    <?php require_once "php/view/assets/layout/footer.php" ?>
<script src="php/view/js/jquery.js"></script>
<script src="php/view/js/gestionar.anime.js"></script>
</body>
</html>