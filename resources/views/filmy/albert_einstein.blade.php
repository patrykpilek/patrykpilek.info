@extends('layouts.app')

@section('title', 'Geniusz - Albert Einstein')

@section('content')
    <main>
        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="display-4">Geniusz</h1>
                <hr class="my-4">
                <p class="lead">Albert Einstein</p>
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
                                <video poster="{{ url('storage/movie_posters/albert_einstein_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ url('storage/movies/albert_einstein/albert_einstein_o1.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>W wyniku zalewającej Niemcy fali antysemickich nastrojów, słynny fizyk Albert Einstein (Geoffrey Rush) zmaga się z decyzją, czy szukać wraz ze swoją drugą żoną Elsą (Emily Watson) schronienia w Stanach Zjednoczonych, czy jednak zostać w geście solidarności z innymi żydowskimi naukowcami. Rozterki wywołują w nim wspomnienia związane z doświadczeniami na Politechnice w Zurychu, gdzie poznał swoją pierwszą żonę Milevę Marić (Samantha Colley).</small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc2" role="tabpanel" aria-labelledby="list-odc2-list">
                                <p class="text-center">Rozdział drugi</p>
                                <video poster="{{ url('storage/movie_posters/albert_einstein_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ url('storage/movies/albert_einstein/albert_einstein_o2.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Młody Albert Einstein (Johnny Flynn) zakochuje się w koleżance ze studiów Milevie Marić (Samantha Colley), jedynej dziewczynie w jego grupie na Politechnice w Zurychu. Miłość do nauki zbliża ich ku sobie, co nie pozostaje niezauważone przez nauczyciela fizyki prof. Webera.</small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc3" role="tabpanel" aria-labelledby="list-odc3-list">
                                <p class="text-center">Rozdział trzeci</p>
                                <video poster="{{ url('storage/movie_posters/albert_einstein_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ url('storage/movies/albert_einstein/albert_einstein_o3.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Świeżo upieczony absolwent Albert Einstein (Johnny Flynn) próbuje związać koniec z końcem. Mężczyzna bezskutecznie stara się o posadę na uczelni. Ostatecznie udaje mu się zabezpieczyć byt swój i ciężarnej żony (Samantha Colley) poprzez udzielanie licznych korepetycji. Niespodziewanie jednak sprawy przybierają zły obrót…</small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc4" role="tabpanel" aria-labelledby="list-odc4-list">
                                <p class="text-center">Rozdział czwarty</p>
                                <video poster="{{ url('storage/movie_posters/albert_einstein_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ url('storage/movies/albert_einstein/albert_einstein_o4.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Einstein pracuje jako urzędnik patentowy w Bernie i jednocześnie, wpierany przez żonę Milevę (Samantha Colley), prowadzi badania naukowe. Jego przełomowe dla fizyki publikacje, które ukazały się w okresie nazwanym później „cudownym rokiem Einsteina”, przyciągnęły uwagę jednego ze znamienitych fizyków - Maxa Plancka.</small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc5" role="tabpanel" aria-labelledby="list-odc5-list">
                                <p class="text-center">Rozdział piąty</p>
                                <video poster="{{ url('storage/movie_posters/albert_einstein_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ url('storage/movies/albert_einstein/albert_einstein_o5.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Wraz z nowymi obowiązkami, Albert Einstein (Johnny Flynn wreszcie zaczyna smakować życia naukowca, którego zawsze pragnął. Otwierają się przed nim drzwi do środowiska najbardziej cenionych badaczy, włączając Carla Junga czy Marię Skłodowską-Curie. Spotyka się tam z uznaniem. Cierpi na tym jednak jego życie prywatne i rodzinne. Pewnego dnia Einstein odwiedza swych dalekich krewnych i zostaje przedstawiony kuzynce Elsie (Emily Watson).</small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc6" role="tabpanel" aria-labelledby="list-odc6-list">
                                <p class="text-center">Rozdział szósty</p>
                                <video poster="{{ url('storage/movie_posters/albert_einstein_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ url('storage/movies/albert_einstein/albert_einstein_o6.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Einstein przeprowadza się wraz ze swoją rodziną do Berlina. Nie tylko ze względów służbowych, ale również z uwagi na swoją nową miłość Elsę (Emily Watson). Pracuje tam nad dowodami ogólnej teorii względności. Z pomocą astronoma pragnie sfotografować zaćmienie słońca w Rosji, jednak wyprawa nie idzie po jego myśli. Tymczasem Elsa (Emily Watson) stawia Einsteinowi ultimatum – albo rozwiedzie się z Milevą, albo straci ją na zawsze.</small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc7" role="tabpanel" aria-labelledby="list-odc7-list">
                                <p class="text-center">Rozdział siódmy</p>
                                <video poster="{{ url('storage/movie_posters/albert_einstein_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ url('storage/movies/albert_einstein/albert_einstein_o7.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Zmęczony i wypalony Einstein (Geoffrey Rush) zaczyna doświadczać problemów ze zdrowiem. Naukowiec wchodzi w konflikt z jednym ze swoich najbliższych przyjaciół Fritzem Haberem (Richard Topol), wynikający ze sprzecznych poglądów na tle politycznym.</small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc8" role="tabpanel" aria-labelledby="list-odc8-list">
                                <p class="text-center">Rozdział ósmy</p>
                                <video poster="{{ url('storage/movie_posters/albert_einstein_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ url('storage/movies/albert_einstein/albert_einstein_o8.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>W wyniku nasilonej działalności nazistów, Einstein (Geoffrey Rush) i jego żona Elsa (Emily Watson) próbują znaleźć schronienie w Stanach Zjednoczonych. Okazuje się jednak, że ich wizy zostały zablokowane przez Departament Stanu USA. Aktywność polityczna Einsteina ściągnęła na niego uwagę dyrektora FBI J. Edgara Hoovera (T.R. Knight). Teraz Einstein musi przekonać amerykańskiego konsula w Niemczech, że nie stanowi zagrożenia dla Stanów Zjednoczonych.</small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc9" role="tabpanel" aria-labelledby="list-odc9-list">
                                <p class="text-center">Rozdział dziewiąty</p>
                                <video poster="{{ url('storage/movie_posters/albert_einstein_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ url('storage/movies/albert_einstein/albert_einstein_o9.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Albert Einstein (Geoffrey Rush) i Elsa (Emily Watson) osiedlają się w Stanach Zjednoczonych. Mimo że fizyka kwantowa nadal zaprząta większość myśli naukowca, to jego uwagę cały czas przyciągają nazistowskie Niemcy, które podejmują się próby rozszczepienia atomu. Kiedy sprawy przybierają zły obrót, Einstein szuka ukojenia w ramionach Rosjanki, której intencje nie są jasne. </small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc10" role="tabpanel"
                                 aria-labelledby="list-odc10-list">
                                <p class="text-center">Rozdział dziesiąty</p>
                                <video poster="{{ url('storage/movie_posters/albert_einstein_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ url('storage/movies/albert_einstein/albert_einstein_o10.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Wraz z końcem drugiej wojny światowej, mając na uwadze szkody, jakie wyrządziła, Einstein przyjmuje rolę obywatela świata. Łączony z pracami nad bronią nuklearną, pogrąża się w winie i oddaje się pracy, by zapobiec kolejnym tego typu konfliktom w przyszłości. Jego pasję i radość do nauki rozpala ponownie nowa znajomość.</small>
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