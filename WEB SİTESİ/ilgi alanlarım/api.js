function api(){
    $.getJSON('http://www.omdbapi.com/?t=divergent&apikey=fe780975').then(function(response)
   {
    var resim = response.Poster;
    console.log(response)
    var baslik = response.Title;
    var yazar = response.Writer;
    var imdb = response.imdbRating
    var konu = response.Plot;
    var aktorler = response.Actors;
    var oduller = response.Awards;

    $('.resim').attr('src', resim);
    document.querySelector('.moviebaslik').innerHTML+=baslik;
    document.querySelector('.movieimdb').innerHTML+=imdb;
    document.querySelector('.movieyazar').innerHTML+=yazar;
    document.querySelector('.moviekonu').innerHTML+=konu;
    document.querySelector('.movieaktorler').innerHTML+=actorler;
    document.querySelector('.movieoduller').innerHTML+=oduller;
   });

}
api();