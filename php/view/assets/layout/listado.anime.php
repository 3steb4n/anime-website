
<div style="position: relative; overflow: hidden; width: 50vw; margin: 0 auto; top: 15px;">
    <?php 
    if(isset($_POST['nmrPaginas'])){
        $resultado=AnimeControlador::BusquedaAnime();
    }else{
        $resultado=AnimeControlador::BusquedaAnime();
    }
    foreach($resultado as $dato){
        //$paginador+=1;
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