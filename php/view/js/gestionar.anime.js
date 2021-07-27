function consultarInformacion(idAnime){
    $.ajax({
        method: 'post',
        url: 'php/ajax/anime.ajax.php',
        data: {
            'idAnimePost':idAnime
        },
        success: function(data){
            console.log(data);

        }
    });
}