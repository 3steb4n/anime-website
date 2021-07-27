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
            margin: 0;
            overflow-x: hidden;
        }
        h1{
            font-family: 'Open Sans', sans-serif;
        }
        li{
            list-style:none; 
        }
        .div-sinopsis:hover{
            background-color:rgba(99,99,99, 0.5);
            background-position: top center;
            background-repeat: no-repeat;
            background-image: url('https://img.icons8.com/material-outlined/192/000000/play--v2.png');
        }
    </style>
</head>
<body>
    <?php require_once "php/view/assets/layout/header.php" ?>
    <?php require_once "php/controller/AnimeControlador.php" ?>
    <div style="width: 50vw; height: 100vh; margin: 0 auto;">
    <?php 
    $resultado = AnimeControlador::BusquedaAnime();
    foreach($resultado as $dato){
        echo "<div style='width: 240px;  height: 420px; border: 6px solid #eee; border-radius: 30px; float: left; margin: 10px; z-index: 4;'>"; 
        echo "<div class='div-sinopsis' id='div-sinopsis' style='position: absolute; padding: 0; cursor: pointer; z-index: 3; width: 240px; border-radius: 30px;  height: 420px; float: left; '>";
        echo "</div>"; 
        echo "<img src=php/view/img/CatalogoAnimes/".$dato['IMG_ANIME']." style='height: 320px; width: 230px'; border-radius: 102px;'>";
        echo "<h1 style='font-size: 15px;'>".$dato["NOMBRE_ANIME"]."</h1>";  
        echo "</div>";
    }
    ?>
    </div>
    <br><br><br><br><br>
    <?php require_once "php/view/assets/layout/footer.php" ?>
</body>
</html>