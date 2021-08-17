<?php
if(!isset($_POST['nmrPaginas'])){
    $_POST['nmrPaginas']=1;
}
if(isset($_POST['nmrPaginas'])){?>
    <style>
        .btnPaginador[value = '<?php echo $_POST['nmrPaginas']; ?>']{
            font-size: 20px;
            color: #e64949;
        }
    </style>
<?php
}
?>

<div id="paginador" style="position: relative; width: 30%; height: 80px; top: 25px; margin: 0 auto;">
  <div style="position: relative; width: fit-content; display: flex; align-items: flex-end; height: 60px; margin-left: auto; margin-right: auto;">
 <!-- <div style='position: relative; width: fit-content; height: 30px;'>
      <button type="submit" class='btnPaginador' name="atrPag">
      <
      </button>
  </div>!-->
    <?php
    $array_ini = parse_ini_file("properties.ini", true);
    $resultadoPaginas=AnimeControlador::BusquedaNumeroPaginas();
    $numeroPaginas=0;
    $h=0;
    for($i=1; $i<count($resultadoPaginas); $i++){
        //echo $i;
        $h+=1;
        if($h==$array_ini['propiedades_paginador']["numero_contenido"]){
            $numeroPaginas+=1;
            echo "<div style='position: relative; width: fit-content; height: 30px;'>";
            echo "<button type='submit' id='btnPaginador' class='btnPaginador' value='".$numeroPaginas."' name='nmrPaginas'>".$numeroPaginas."</button>";
            echo "</div>";
            $h=0;
            //echo $numeroPaginas;
        }
    }
    if((count($resultadoPaginas)-$numeroPaginas*$array_ini['propiedades_paginador']['numero_contenido'])>0){
        for($a=0; $a<count($resultadoPaginas)-$numeroPaginas*$array_ini['propiedades_paginador']['numero_contenido']; $a++){
            $numeroPaginas+=1;
            echo "<div  id='divPagina' style='position: relative; width: fit-content; height: 30px;'>";
            echo "<button type='submit' id='btnPaginador' class='btnPaginador' value='".$numeroPaginas."' name='nmrPaginas'>".$numeroPaginas."</button>";
            echo "</div>";
        }
    }
    //echo $paginador;
    ?>
   <!-- <div style='position: relative; width: fit-content; height: 30px;'>
        <button type="submit" class='btnPaginador' name="adlPag">
            >
        </button>
    </div>!-->
    </div>
</div>