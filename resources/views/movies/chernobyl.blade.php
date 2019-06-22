@extends('layouts.app')

@section('title', 'Chernobyl')

@section('content')
    <main>
        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="display-4">Chernobyl</h1>
                <hr class="my-4">
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
                                #1. "1:23:45"
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-odc2-list" data-toggle="list"
                               href="#list-odc2" role="tab" aria-controls="odc2">
                                #2. Uprasza się o zachowanie spokoju
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-odc3-list" data-toggle="list"
                               href="#list-odc3" role="tab" aria-controls="odc3">
                                #3. Otwórz się szeroko, ziemio
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-odc4-list" data-toggle="list"
                               href="#list-odc4" role="tab" aria-controls="odc4">
                                #4. Szczęście całej ludzkości
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-odc5-list" data-toggle="list"
                               href="#list-odc5" role="tab" aria-controls="odc5">
                                #5. Wieczna pamięć
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="list-odc1" role="tabpanel"
                                 aria-labelledby="list-odc1-list">
                                <p class="text-center">Odcinek 1. "1:23:45"</p>
                                <video poster="{{ url('storage/movie_posters/chernobyl_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ url('storage/movies/chernobyl/chernobyl_odc1.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Serial i pierwszy jego odcinek zaczynają się od powierzchownego wprowadzenia nas w tajniki akcji. Powierzchownego, gdyż same nazwijmy je 'niefortunne' wydarzenia rozpoczynają się praktycznie od samego startu. O dziwo nie widzimy rozkładu na czynniki pierwsze winy oraz dylematu: kto, co i dlaczego? Widzimy natomiast lawinowo postępujące sceny po sobie zbliżające nas do nieuchronnego, niewidocznego skażenia ciała i terenu. Moim zdaniem w odcinku pokazano dobrze stanowczość i zadufanie decyzyjnych aparatczyków i dyrektorstwa elektrowni, lecz powinno się pokazać nieco więcej przyczyn takiego stanu, gdyż… takie wtedy były czasy. Wtedy po prostu na każdym szczeblu władzy były takie same buce.</small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc2" role="tabpanel" aria-labelledby="list-odc2-list">
                                <p class="text-center">Odcinek 2. Uprasza się o zachowanie spokoju</p>
                                <video poster="{{ url('storage/movie_posters/chernobyl_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ url('storage/movies/chernobyl/chernobyl_odc2.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>W białoruskim Instytucie Energii Jądrowej w Mińsku, włącza się alarm, sygnalizujący skażenie radioaktywne. Dane wskazują, że jest to pochodna uranu 235, używanego jako paliwo atomowe. Pracownica instytutu Uliana Chomiuk (Emily Watson) próbuje telefonicznie skontaktować się z oddaloną o 400 kilometrów elektrownią jądrową w Czarnobylu, bez skutku. W tym czasie na Kremlu prof. Legasof (Jared Harris) próbuje przekonać Sekretarza Generalnego Komunistycznej Partii Związku Radzieckiego Michaiła Gorbaczowa (David Dencik), że w elektrowni doszło do wybuchu reaktora, i odsłonięcia rdzenia radioaktywnego.</small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc3" role="tabpanel" aria-labelledby="list-odc3-list">
                                <p class="text-center">Odcinek 3. Otwórz się szeroko, ziemio</p>
                                <video poster="{{ url('storage/movie_posters/chernobyl_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ url('storage/movies/chernobyl/chernobyl_odc3.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Na polecenie ministra górnictwa (Michael Colgan) z Tuły do Czarnobyla zostaje ściągnięta załoga kopalni. Zadaniem górników jest wydrążenie tunelu pod uszkodzonym reaktorem, gdzie zostaną zainstalowane wymienniki ciepła. Operacja ma zapobiec stopieniu się radioaktywnego rdzenia, co mogłoby doprowadzić do skażenia wód gruntowych.</small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc4" role="tabpanel" aria-labelledby="list-odc4-list">
                                <p class="text-center">Odcinek 4. Szczęście całej ludzkości</p>
                                <video poster="{{ url('storage/movie_posters/chernobyl_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ url('storage/movies/chernobyl/chernobyl_odc4.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Wokół Czarnobyla powstaje strefa wykluczenia, ludność cywilna zostaje przymusowo ewakuowana. Na terenie zniszczonej elektrowni, chemik powołany do zbadania przyczyn awarii Valery Legasov (Jared Harris), wraz z wicepremierem Borisem Szczerbiną (Stellan Skarsgård) próbują znaleźć sposób na usunięcie z dachów budynków silnie napromieniowanych resztek grafitu, którym osłonięty był rdzeń reaktora. Tymczasem w strefie pracują tysiące żołnierzy i cywilni ochotnicy, wycinają drzewa, zrywają górną warstwę ziemi i zabijają wszystkie zwierzęta domowe, które zostały napromieniowane. Ponad osiemset kilometrów od Czarnobyla, w Moskwie Ulana Khomyuk (Emily Watson) próbuje wyjaśnić przyczynę tajemniczego wybuchu reaktora, pojawia się szpitalu gdzie przebywa Anatolij Diatłow (Paul Ritter) zastępca naczelnego inżyniera w elektrowni jądrowej w Czarnobylu, który był na miejscu podczas awarii...</small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc5" role="tabpanel" aria-labelledby="list-odc5-list">
                                <p class="text-center">Odcinek 5. Vichnaya Pamyat</p>
                                <video poster="{{ url('storage/movie_posters/chernobyl_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ url('storage/movies/chernobyl/chernobyl_odc5.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Czarnobyl, lipiec 1987 roku. Rusza proces w sprawie spowodowania katastrofy jądrowej w elektrowni atomowej. Oskarżonym są, Wiktor Briuchanow (Con O'Neill) dyrektor elektrowni, Anatolij Diatłow (Paul Ritter) zastępca głównego inżyniera i Nikołaj Fomin (Adrian Rawlins) naczelny inżynier. W charakterze świadków zostają powołani, pracownica Białoruskiego Instytutu Jądrowego Uliana Chomiuk (Emily Watson), wiceminister Boris Szczerbina (Stellan Skarsgård), oraz naukowiec Valery Legasov (Jared Harris). W trakcie rozprawy na jaw wychodzą nieznane dotąd fakty świadczące o braku kompetencji i rażących zaniedbaniach, do jakich doszło podczas przeprowadzania testów bezpieczeństwa reaktora atomowego w dniu 26 kwietnia 1986.</small>
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