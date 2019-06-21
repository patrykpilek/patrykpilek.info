@extends('layouts.app')

@section('title', 'Geniusz - Picasso')

@section('content')
    <main>
        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="display-4">Geniusz</h1>
                <hr class="my-4">
                <p class="lead">Picasso</p>
            </div>
        </section>

        <div class="py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <p class="text-center">Odcinki</p>
                        <div class="list-group" id="list-tab" role="tablist">
                            <a class="list-group-item list-group-item-action active" id="list-odc1-list"
                               data-toggle="list" href="#list-odc1" role="tab" aria-controls="odc1">
                                #1. Rozdział pierwszy
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-odc2-list" data-toggle="list"
                               href="#list-odc2" role="tab" aria-controls="odc2">
                                #2. Rozdział drugi
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-odc3-list" data-toggle="list"
                               href="#list-odc3" role="tab" aria-controls="odc3">
                                #3. Rozdział trzeci
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-odc4-list" data-toggle="list"
                               href="#list-odc4" role="tab" aria-controls="odc4">
                                #4. Rozdział czwarty
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-odc5-list" data-toggle="list"
                               href="#list-odc5" role="tab" aria-controls="odc5">
                                #5. Rozdział piąty
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-odc6-list" data-toggle="list"
                               href="#list-odc6" role="tab" aria-controls="odc6">
                                #6. Rozdział szósty
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-odc7-list" data-toggle="list"
                               href="#list-odc7" role="tab" aria-controls="odc7">
                                #7. Rozdział siódmy
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-odc8-list" data-toggle="list"
                               href="#list-odc8" role="tab" aria-controls="odc8">
                                #8. Rozdział ósmy
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-odc9-list" data-toggle="list"
                               href="#list-odc9" role="tab" aria-controls="odc9">
                                #9. Rozdział dziewiąty
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-odc10-list" data-toggle="list"
                               href="#list-odc10" role="tab" aria-controls="odc10">
                                #10. Rozdział dziesiąty
                            </a>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="list-odc1" role="tabpanel"
                                 aria-labelledby="list-odc1-list">
                                <p class="text-center">Rozdział pierwszy</p>
                                <video poster="{{ url('storage/movie_posters/picasso_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ url('storage/movies/picasso/picasso_o1.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>W pierwszym odcinku poznajemy historię artysty od samego początku, czyli jego narodzin. Przyszły geniusz tuż po urodzeniu był tak słaby, że obawiano się, czy w ogóle przeżyje. Niekonwencjonalna metoda zastosowana przez wuja, przywróciła siły noworodkowi i w kolejnych scenach poznamy najpierw chłopca zafascynowanego malarstwem, następnie niezwykle zdolnego młodzieńca. Młody Pablo to artysta pewny siebie, z wyrazistą osobowością, która nie zgadza się na podporządkowanie i postępowanie zgodnie z ogólnie przyjętymi zasadami. Dlatego właśnie bardzo wcześnie rozpoczyna pracę nad własnym – niepowtarzalnym stylem. Bunt i łamanie zasad, ale jednocześnie pasja i fascynacja, to kilka słów, którymi można by opisać wczesny okres życia artysty. Pierwszy odcinek serii pokaże też młodzieńca bezskutecznie starającego się zwrócić uwagę opinii publicznej na zdobywający coraz więcej zwolenników w Hiszpanii faszyzm. Artysta rozpoczyna pracę nad swoim największym dziełem - Guernicą.</small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc2" role="tabpanel" aria-labelledby="list-odc2-list">
                                <p class="text-center">Rozdział drugi</p>
                                <video poster="{{ url('storage/movie_posters/picasso_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ url('storage/movies/picasso/picasso_o2.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>W drugim odcinku serii zobaczymy młodego Pabla, który maluje obrazy w stylu wielkich mistrzów i szybko osiąga sukces w Paryżu. Nie jest jednak z tego zadowolony, bo chce stworzyć coś prawdziwie oryginalnego. Zobaczymy też dojrzałego artystę, który mimo że trwa II wojna światowa, nie chce wyjeżdżać z Paryża. To z kolei odciśnie piętno na jego prywatnym życiu i związku z fotografką Dorą Maar.</small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc3" role="tabpanel" aria-labelledby="list-odc3-list">
                                <p class="text-center">Rozdział trzeci</p>
                                <video poster="{{ url('storage/movie_posters/picasso_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ url('storage/movies/picasso/picasso_o3.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Po samobójstwie przyjaciela – malarza Carlesa Casagemasa, w twórczości wielkiego geniusza rozpoczyna się okres błękitny. Niedługo potem hiszpański malarz poznaje swoją pierwszą wielką miłość, Fernandę Olivier. Kobiety były dla Pabla ulubionymi muzami. Wśród obrazów przedstawiających mężczyzn są właściwie jedynie autoportrety. W trzecim odcinku serii Geniusz: Picasso zobaczymy również kulisy romansu z kolejną ważną kobietą w jego życiu - młodą artystką Françoise Gilot.</small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc4" role="tabpanel" aria-labelledby="list-odc4-list">
                                <p class="text-center">Rozdział czwarty</p>
                                <video poster="{{ url('storage/movie_posters/picasso_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ url('storage/movies/picasso/picasso_o4.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Młody Pablo znajduje natchnienie w twórczości legendarnych poetów Guillaume’a Apollinaire'a i Maxa Jacoba. Chce wykorzystać ich wizjonerskie pomysły, żeby stworzyć arcydzieło, które zapewni mu status wielkiego artysty.</small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc5" role="tabpanel" aria-labelledby="list-odc5-list">
                                <p class="text-center">Rozdział piąty</p>
                                <video poster="{{ url('storage/movie_posters/picasso_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ url('storage/movies/picasso/picasso_o5.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Pablo za wszelką cenę stara się przyćmić geniusz Henri’ego Matisse'a. Nowe źródło mrocznych inspiracji znajduje w nieudanym związku z Fernandą Olivier, która stanie się inspiracją dla jednego z najbardziej intymnych portretów.</small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc6" role="tabpanel" aria-labelledby="list-odc6-list">
                                <p class="text-center">Rozdział szósty</p>
                                <video poster="{{ url('storage/movie_posters/picasso_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ url('storage/movies/picasso/picasso_o6.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>W kolejnym odcinku serii będziemy świadkami narodzin i rozwoju nowego kierunku w sztuce. Pablo porzuci hulaszczy tryb życia i wspólnie z Georges’em Braque’em stanie się prekursorem kubizmu. Jego dalsza kariera stanie pod znakiem zapytania, kiedy artysta zostanie oskarżony o kradzież słynnej Mony Lisy.</small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc7" role="tabpanel" aria-labelledby="list-odc7-list">
                                <p class="text-center">Rozdział siódmy</p>
                                <video poster="{{ url('storage/movie_posters/picasso_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ url('storage/movies/picasso/picasso_o7.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Tuż przed wybuchem II wojny światowej, starszy Pablo zapisuje się do partii komunistycznej i stara się pogodzić sztukę ze swoimi przekonaniami politycznymi. Wspomnienia skazanego z góry na niepowodzenie związku sprzed wielu lat zaczynają rzutować na jego relację z Françoise Gilot.</small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc8" role="tabpanel" aria-labelledby="list-odc8-list">
                                <p class="text-center">Rozdział ósmy</p>
                                <video poster="{{ url('storage/movie_posters/picasso_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ url('storage/movies/picasso/picasso_o8.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Pablo marzy o stworzeniu czegoś zupełnie nowego. Zaczyna projektować scenografię i kostiumy do przedstawienia baletowego. W teatrze poznaje swoją pierwszą żonę, baletnicę Olgę Chochłową.</small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc9" role="tabpanel" aria-labelledby="list-odc9-list">
                                <p class="text-center">Rozdział dziewiąty</p>
                                <video poster="{{ url('storage/movie_posters/picasso_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ url('storage/movies/picasso/picasso_o9.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Młody Pablo jest znużony małżeństwem z Olgą i wdaje się w nowy, szalony romans. O spotkaniu z nim marzy młoda fotografka - Dora Maar. Czy wyobrażenia kobiety będą zgodne z rzeczywistym portretem malarza?</small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc10" role="tabpanel"
                                 aria-labelledby="list-odc10-list">
                                <p class="text-center">Rozdział dziesiąty</p>
                                <video poster="{{ url('storage/movie_posters/picasso_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ url('storage/movies/picasso/picasso_o10.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>W ostatnim odcinku serii, po raz kolejny zobaczymy wielkiego artystę, który znajduje ukojenie w ramionach nowej kobiety. Tym razem będzie to Jacqueline Roque, która stanie się drugą żoną malarza-geniusza. To jedna z jego ulubionych muz – stworzył 400 jej portretów. Artysta odizoluje się jednak od świata, aby namalować obraz doskonały.</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection

@push('scripts')
    <script type="text/javascript">
        document.addEventListener('play', function (e) {
            let videos = document.getElementsByTagName('video');
            for (let i = 0, len = videos.length; i < len; i++) {
                if (videos[i] !== e.target) {
                    videos[i].pause();
                }
            }
        }, true);
    </script>
@endpush