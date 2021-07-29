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
            //alert(data[1]);
        }
    });
}

function organizarPaginas(){
    let manyAnime=[
        ['1', '2', '3', '4', '5', '6'],
        ['7', '8', '9', '10', '11', '12']
    ]
}
