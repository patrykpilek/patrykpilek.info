@extends('layouts.app')

@section('title', 'Korona - Sezon Drugi')

@section('content')
    <main>
        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="display-4">Korona</h1>
                <hr class="my-4">
                <p class="lead">sezon drugi</p>
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
                                #1. Nieszczęśliwy wypadek
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-odc2-list" data-toggle="list"
                               href="#list-odc2" role="tab" aria-controls="odc2">
                                #2. W męskim gronie
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-odc3-list" data-toggle="list"
                               href="#list-odc3" role="tab" aria-controls="odc3">
                                #3. Lizbona
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-odc4-list" data-toggle="list"
                               href="#list-odc4" role="tab" aria-controls="odc4">
                                #4. Beryl
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-odc5-list" data-toggle="list"
                               href="#list-odc5" role="tab" aria-controls="odc5">
                                #5. Marionetki
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-odc6-list" data-toggle="list"
                               href="#list-odc6" role="tab" aria-controls="odc6">
                                #6. Przeszlosc
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-odc7-list" data-toggle="list"
                               href="#list-odc7" role="tab" aria-controls="odc7">
                                #7. Matrimonim
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-odc8-list" data-toggle="list"
                               href="#list-odc8" role="tab" aria-controls="odc8">
                                #8. Szanowna Pani Kennedy
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-odc9-list" data-toggle="list"
                               href="#list-odc9" role="tab" aria-controls="odc9">
                                #9. Rodzinna Sprawa
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-odc10-list" data-toggle="list"
                               href="#list-odc10" role="tab" aria-controls="odc10">
                                #10. Tajemniczy mezczyzna
                            </a>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="list-odc1" role="tabpanel"
                                 aria-labelledby="list-odc1-list">
                                <p class="text-center">Odcinek 1. Nieszczęśliwy wypadek</p>
                                <video poster="{{url('storage/movie_posters/the_crown_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ url('storage/movies/crown/Korona_s2o1.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Filip na długo wyjeżdża, a Elżbieta dokonuje niepokojącego odkrycia. Premier
                                        Eden chce ruszyć z kontrofensywą, gdy Egipt przejmuje kontrolę nad Kanałem
                                        Sueskim.
                                    </small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc2" role="tabpanel" aria-labelledby="list-odc2-list">
                                <p class="text-center">Odcinek 2. W męskim gronie</p>
                                <video poster="{{ url('storage/movie_posters/the_crown_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ url('storage/movies/crown/Korona_s2o2.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Filip na długo wyjeżdża, a Elżbieta dokonuje niepokojącego odkrycia. Premier
                                        Eden chce ruszyć z kontrofensywą, gdy Egipt przejmuje kontrolę nad Kanałem
                                        Sueskim.
                                    </small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc3" role="tabpanel" aria-labelledby="list-odc3-list">
                                <p class="text-center">Odcinek 3. Lizbona</p>
                                <video poster="{{ url('storage/movie_posters/the_crown_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ url('storage/movies/crown/Korona_s2o3.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Pałac stara się zapobiec skandalowi, który Filip mógłby bardzo mocno odczuć.
                                        Eden jest krytykowany przez prasę oraz własnych ministrów.
                                    </small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc4" role="tabpanel" aria-labelledby="list-odc4-list">
                                <p class="text-center">Odcinek 4. Beryl</p>
                                <video poster="{{ url('storage/movie_posters/the_crown_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ url('storage/movies/crown/Korona_s2o4.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Elżbieta i Filip urządzają huczne obchody swojej dziesiątej rocznicy, a
                                        Małgorzata i nowy premier zmagają się z problemami natury sercowej.
                                    </small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc5" role="tabpanel" aria-labelledby="list-odc5-list">
                                <p class="text-center">Odcinek 5. Marionetki</p>
                                <video poster="{{ url('storage/movie_posters/the_crown_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ url('storage/movies/crown/Korona_s2o5.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Po staromodnej przemowie Elżbiety w fabryce Jaguara, zarówno ona, jak i
                                        instytucja monarchii stają się obiektem publicznej krytyki ze strony jednego z
                                        lordów.
                                    </small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc6" role="tabpanel" aria-labelledby="list-odc6-list">
                                <p class="text-center">Odcinek 6. Przeszlosc</p>
                                <video poster="{{ url('storage/movie_posters/the_crown_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ url('storage/movies/crown/Korona_s2o6.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Tajny dokument z czasów II wojny światowej pozwala Elżbiecie poznać smutną
                                        prawdę o kimś z jej rodziny. Książę Windsoru stara się wrócić do życia
                                        publicznego.
                                    </small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc7" role="tabpanel" aria-labelledby="list-odc7-list">
                                <p class="text-center">Odcinek 7. Matrimonim</p>
                                <video poster="{{ url('storage/movie_posters/the_crown_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ url('storage/movies/crown/Korona_s2o7.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>List od Petera Townsenda sprawia, że Małgorzata składa odważną propozycję.
                                        Elżbieta ma dobre wieści, które komplikują Małgorzacie życie.
                                    </small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc8" role="tabpanel" aria-labelledby="list-odc8-list">
                                <p class="text-center">Odcinek 8. Szanowna Pani Kennedy</p>
                                <video poster="{{ url('storage/movie_posters/the_crown_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ url('storage/movies/crown/Korona_s2o8.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Elżbieta inspiruje się postawą Jackie Kennedy i wbrew swojemu rządowi
                                        podejmuje niekonwencjonalną decyzję w sprawie konfliktu z Ghaną.
                                    </small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc9" role="tabpanel" aria-labelledby="list-odc9-list">
                                <p class="text-center">Odcinek 9. Rodzinna Sprawa</p>
                                <video poster="{{ url('storage/movie_posters/the_crown_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ url('storage/movies/crown/Korona_s2o9.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Filip nalega, aby książę Karol poszedł do tej samej szkockiej szkoły co on,
                                        oraz wspomina trudne chwile, których tam doświadczył i które zmieniły jego
                                        życie.
                                    </small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc10" role="tabpanel"
                                 aria-labelledby="list-odc10-list">
                                <p class="text-center">Odcinek 10. Tajemniczy mezczyzna</p>
                                <video poster="{{ url('storage/movie_posters/the_crown_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ url('storage/movies/crown/Korona_s2o10.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Skandal obyczajowy w rządzie mocno uderza też w królewską parę. Elżbieta
                                        udaje się do Szkocji, aby odpocząć ze względu na problemy ciążowe i chwilowo
                                        zejść ze sceny.
                                    </small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="text-muted">
        <div class="container">
            <p class="float-right">
                <a href="#" class="btn">Back to top</a>
            </p>
        </div>
    </footer>

@endsection

@push('scripts')
    <script type="text/javascript">
        document.addEventListener('play', function (e) {
            var videos = document.getElementsByTagName('video');
            for (var i = 0, len = videos.length; i < len; i++) {
                if (videos[i] != e.target) {
                    videos[i].pause();
                }
            }
        }, true);
    </script>
@endpush