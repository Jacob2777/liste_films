<div class="carousel-container">
    <h1>Films à l'affiche</h1>
    <div id="carrousel">
        @foreach ($films as $film)
        <div class="film-item">
            <a href="{{ route('film.show', ['id' => $film->id]) }}">
                <img src="{{ $film->poster }}" class="d-block w-100" alt="{{ $film->titre }}">
                <h2>{{ $film->id }}. {{ $film->titre }}</h2>
            </a>
        </div>
        @endforeach
    </div>
</div>

<!-- Script pour activer le carrousel Slick -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
    $(document).ready(function(){
        var $carousel = $("#carrousel");
        $carousel.slick({
            infinite: true,
            slidesToShow: 5, // Nombre d'éléments à afficher simultanément
            slidesToScroll: 5, // Nombre d'éléments à faire défiler à la fois
        });

        // Fonctionnalité pour les boutons de contrôle
        $(".custom-prev").on("click", function(){
            $carousel.slick("slickPrev");
        });

        $(".custom-next").on("click", function(){
            $carousel.slick("slickNext");
        });
    });
</script>
