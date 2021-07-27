<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anisboard</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');
        body{
            margin: 0px;
            height:100%;
            overflow-x: hidden;
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
    <div style="width: 50vw; height: 100vh; margin: 0 auto;">
    <form method="post">
    <?php 
    $resultado = AnimeControlador::BusquedaAnime();
    foreach($resultado as $dato){
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
    </form>
    </div>
    <br><br><br><br><br>
    <?php require_once "php/view/assets/layout/footer.php" ?>
<script src="php/view/js/jquery.js"></script>
<script src="php/view/js/gestionar.anime.js"></script>
</body>
</html>