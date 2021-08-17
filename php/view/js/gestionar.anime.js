function cerrarModal(){
    $('#trlAnm').attr('src', $('#trlAnm').attr('src'));
    $('#infoAnm').css('display', 'none');
}

function consultarInformacion(idAnime){
    $.ajax({
        method: 'post',
        url: 'php/ajax/anime.ajax.php',
        dataType: 'json',
        data: {
            'idAnimePost':idAnime
        },
        success: function(data){
            console.log(data);
            $('#infoAnm').css('display', 'block');
            $('#prfAnm').text(data[0]);
            $('#trlAnm').attr('src', data[1]);
            $('#verInfAdicional').attr('href', 'ver-anime/'+data[3]+'/'+data[2]);
            //alert(data[1]);
        }
    });
    //alert(idAnime);
}

function seleccionarPagina(){
    $('#btnPaginador').css('color','#e64949');
    $('#btnPaginador').css('font-size','15px');
    alert('df');
}

function consultarCapitulos(idAnime){
    $.ajax({
        method: 'post',
        url: 'php/view/anime.php',
        dataType: 'json',
        data: {
            'idAnimePost':idAnime
        },
        success: function(data){
            console.log(data);
            $('#infoAnm').css('display', 'block');
            $('#prfAnm').text(data[0]);
            $('#trlAnm').attr('src', data[1]);
            $('#verInfAdicional').attr('href', 'ver-anime/'+data[2]);
            //alert(data[1]);
        }
    });
    //alert(idAnime);
}
