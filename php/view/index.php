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
        h1, p{
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
        .btnPaginador{
            cursor: pointer; 
            font-family: 'Open Sans', sans-serif; 
            font-size: 15px;
            border: none;
        }
        .btnPaginador:hover{
            font-size: 20px;
            color: #e64949;
        }
    </style>
</head>
<body>
    <form method="post">
    <?php require_once "php/controller/AnimeControlador.php"?>
    <?php require_once "php/view/assets/layout/informacion.anime.php"?>
    <?php require_once "php/view/assets/layout/header.php"?>
    <?php require_once "php/view/assets/layout/listado.anime.php"?>
    <?php require_once "php/view/assets/layout/paginador.listado.anime.php"?>
    <?php require_once "php/view/assets/layout/footer.php"?>
    </form>
<script src="php/view/js/jquery.js"></script>
<script src="php/view/js/gestionar.anime.js"></script>
</body>
</html>