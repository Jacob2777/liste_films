<div class="film-container">
    <h1>{{$film->titre}}</h1>
    <div class="infos-container">
        <div class="barre">Date de sortie: {{$film->date_sortie}}</div>
        <div>{{$film->vote_moyen}} <span style="color: yellow;">&#9733;</span> ({{$film->votes}} votes)</div>
    </div>
    <div class="img-container">
        <img src="{{ $film->poster_arriere_plan }}" alt="">
    </div>
    <div class="synopsis">{{$film->synopsis}}</div>
</div>
