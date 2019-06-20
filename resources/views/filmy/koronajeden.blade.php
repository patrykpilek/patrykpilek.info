@extends('layouts.app')

@section('title', 'Korona - Sezon Pierwszy')

@section('content')
    <main>
        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="display-4">Korona</h1>
                <hr class="my-4">
                <p class="lead">sezon pierwszy</p>
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
                                #1. Wolferton Splash
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-odc2-list" data-toggle="list"
                               href="#list-odc2" role="tab" aria-controls="odc2">
                                #2. Hyde Park Corner
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-odc3-list" data-toggle="list"
                               href="#list-odc3" role="tab" aria-controls="odc3">
                                #3. Książę Windsoru
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-odc4-list" data-toggle="list"
                               href="#list-odc4" role="tab" aria-controls="odc4">
                                #4. Siła wyższa
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-odc5-list" data-toggle="list"
                               href="#list-odc5" role="tab" aria-controls="odc5">
                                #5. Magia korony
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-odc6-list" data-toggle="list"
                               href="#list-odc6" role="tab" aria-controls="odc6">
                                #6. Punkt zapalny
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-odc7-list" data-toggle="list"
                               href="#list-odc7" role="tab" aria-controls="odc7">
                                #7. Wiedza to potęga
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-odc8-list" data-toggle="list"
                               href="#list-odc8" role="tab" aria-controls="odc8">
                                #8. Duma i radość
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-odc9-list" data-toggle="list"
                               href="#list-odc9" role="tab" aria-controls="odc9">
                                #9. Przyjaźń i szacunek
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-odc10-list" data-toggle="list"
                               href="#list-odc10" role="tab" aria-controls="odc10">
                                #10. Gloriana
                            </a>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="list-odc1" role="tabpanel"
                                 aria-labelledby="list-odc1-list">
                                <p class="text-center">Odcinek 1. Wolferton Splash</p>
                                <video poster="{{ url('storage/movie_posters/the_crown_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ url('storage/movies/crown/Korona_s1o1.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Odcinek ukazuje w skrócie wydarzenia z lat 1947-1951, to jest od ślubu
                                        księżniczki Elżbiety z Filipem, księciem Danii i Grecji, odtąd tytułowanym
                                        księciem Edynburga, do powrotu Winstona Churchilla na urząd premiera Wielkiej
                                        Brytanii po sześcioletniej przerwie. Mocno zarysowany jest też wątek
                                        postępującej choroby króla Jerzego VI, który zdaje sobie sprawę ze zbliżającej
                                        się śmierci i choć nie mówi o tym swojej rodzinie, to stara się przygotowywać
                                        Elżbietę i Filipa do sukcesji
                                    </small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc2" role="tabpanel" aria-labelledby="list-odc2-list">
                                <p class="text-center">Odcinek 2. Hyde Park Corner</p>
                                <video poster="{{ url('storage/movie_posters/the_crown_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ url('storage/movies/crown/Korona_s1o2.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Elżbieta i Filip wyruszają w długą podróż po krajach Wspólnoty Narodów.
                                        Pierwszym etapem jest wizyta w Kenii, gdzie oprócz wypełniania oficjalnych
                                        obowiązków, mają też trochę czasu, aby cieszyć się sobą nawzajem i swoją
                                        miłością. Nagle dociera do nich wiadomość o śmierci Jerzego VI, co automatycznie
                                        oznacza, iż Elżbieta została właśnie królową.
                                    </small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc3" role="tabpanel" aria-labelledby="list-odc3-list">
                                <p class="text-center">Odcinek 3. Książę Windsoru</p>
                                <video poster="{{ url('storage/movie_posters/the_crown_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ url('storage/movies/crown/Korona_s1o3.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Między Elżbietą a Filipem pojawiają się pierwsze poważne konflikty,
                                        wynikające ze zobowiązań królowej. Rodzina panująca powinna mieszkać w
                                        Buckingham Palace, tymczasem Filip jest bardzo przywiązany do ich dotychczasowej
                                        siedziby w Clarence House, w której remont włożył dużo serca i środków. Sporna
                                        jest również nazwa dynastii panującej - czy powinna nadal nazywać się Windsorami
                                        czy też Mountbattenami, od nazwiska przybranego przez Filipa po jego przybyciu
                                        do Wielkiej Brytanii. Ponadto odcinek prezentuje, w dużej mierze poprzez
                                        retrospekcje, wydarzenia kryzysu abdykacyjnego z 1936 roku i złego traktowania,
                                        jakiego doświadczał po opuszczeniu tronu Edward VIII, jako były król tytułowany
                                        księciem Windsoru
                                    </small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc4" role="tabpanel" aria-labelledby="list-odc4-list">
                                <p class="text-center">Odcinek 4. Siła wyższa</p>
                                <video poster="{{ url('storage/movie_posters/the_crown_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ url('storage/movies/crown/Korona_s1o4.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Odcinek poświęcony jest niemal w całości wydarzeniom związanym z tzw. wielkim
                                        smogiem londyńskim z grudnia 1952 roku. Początkowo premier Churchill
                                        bagatelizuje narastający kryzys, co wywołuje rosnące niezadowolenie zarówno
                                        opinii publicznej, jak i królowej Elżbiety, która coraz mocniej skłania się do
                                        poglądu, że sędziwy szef rządu stracił kontakt z realnymi problemami i powinien
                                        odejść. Dopiero śmierć ulubionej sekretarki Churchilla, która ginie w
                                        spowodowanym smogiem wypadku, radykalnie zmienia zachowanie premiera.
                                    </small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc5" role="tabpanel" aria-labelledby="list-odc5-list">
                                <p class="text-center">Odcinek 5. Magia korony</p>
                                <video poster="{{ url('storage/movie_posters/the_crown_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ url('storage/movies/crown/Korona_s1o5.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Umiera królowa Maria, babcia Elżbiety II, co staje się pretekstem do wizyty w
                                        Londynie mieszkającego na co dzień we Francji księcia Windsoru i w konsekwencji
                                        prowadzi do kolejnej odsłony konfliktu między byłym królem a elitami dworskimi i
                                        kościelnymi. Równocześnie trwają przygotowania do uroczystej koronacji Elżbiety.
                                        Monarchini wbrew utartym zwyczajom stawia na czele komitetu organizacyjnego
                                        własnego męża, ten zaś stara się unowocześnić uświęconą stuleciami tradycji
                                        ceremonię, m.in. poprzez transmisję telewizyjną.
                                    </small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc6" role="tabpanel" aria-labelledby="list-odc6-list">
                                <p class="text-center">Odcinek 6. Punkt zapalny</p>
                                <video poster="{{ url('storage/movie_posters/the_crown_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ url('storage/movies/crown/Korona_s1o6.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Romans księżniczki Małgorzaty i kapitana Petera Townsenda, dotąd będący
                                        tajemnicą poliszynela na dworze królewskim, wychodzi na światło dziennie i staje
                                        się jednym z najszerzej komentowanych w tabloidach tematów. Zakochani proszą
                                        królową o zgodę na ślub, ale Townsend jest rozwodnikiem, co znacznie komplikuje
                                        sytuację. Ostatecznie kapitan zostaje zmuszony do wyjazdu na placówkę
                                        dyplomatyczną w Brukseli, ale Elżbieta przyrzeka swej młodszej siostrze, że gdy
                                        ta skończy 25 lat (czyli za dwa lata) będzie mogła decydować o sobie zupełnie
                                        swobodnie.
                                    </small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc7" role="tabpanel" aria-labelledby="list-odc7-list">
                                <p class="text-center">Odcinek 7. Wiedza to potęga</p>
                                <video poster="{{ url('storage/movie_posters/the_crown_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ url('storage/movies/crown/Korona_s1o7.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Elżbieta dochodzi do wniosku, że wykształcenie, które odebrała jako
                                        księżniczka, jest dalece niewystarczające, aby mogła po partnersku rozmawiać z
                                        czołowymi politykami. W tajemnicy zatrudnia więc znanego profesora jako swego
                                        korepetytora. Tommy Lascelles przechodzi na emeryturę i widzi jako swojego
                                        następcę na stanowisku głównego sekretarza królowej Michaela Adeane'a, ale
                                        kandydatem preferowanym przez samą Elżbietę jest Martin Charteris. Tymczasem
                                        premier Churchill przechodzi dwa wylewy i jest przykuty do łóżka, co rząd stara
                                        się skwapliwie ukrywać przed królową.
                                    </small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc8" role="tabpanel" aria-labelledby="list-odc8-list">
                                <p class="text-center">Odcinek 8. Duma i radość</p>
                                <video poster="{{ url('storage/movie_posters/the_crown_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ url('storage/movies/crown/Korona_s1o8.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Elżbieta i Filip wyruszają w wielomiesięczną, wycieńczającą podróż po krajach
                                        Wspólnoty Narodów. Zmęczona wydarzeniami ostatnich lat królowa-matka Elżbieta
                                        zaszywa się w Szkocji, gdzie negocjuje zakup zamku Mey. W tej sytuacji najwyższą
                                        rangą członkinią rodziny królewskiej, wypełniającą oficjalne obowiązki w
                                        Londynie, staje się Małgorzata, która postanawia zdecydowanie rozluźnić
                                        tradycyjnie obowiązujące normy i rygory. Popada przez to w konflikt z siostrą.
                                    </small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc9" role="tabpanel" aria-labelledby="list-odc9-list">
                                <p class="text-center">Odcinek 9. Przyjaźń i szacunek</p>
                                <video poster="{{ url('storage/movie_posters/the_crown_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ url('storage/movies/crown/Korona_s1o9.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Coraz bardziej napięte relacje Elżbiety i Filipa skłaniają królową do
                                        zacieśnienia przyjaźni z lordem Porchesterem, zarządzającym królewską stadniną.
                                        Budzi to zazdrość księcia Edynburga. Churchill kończy 80 lat, zaś częścią
                                        obchodów jego urodzin ma być odsłonięcie jego nowego oficjalnego portretu, który
                                        ma namalować słynny artysta Graham Sutherland. Dzieło Sutherlanda, choć
                                        znakomite artystycznie, ukazuje Churchilla bardzo naturalistycznie, jako
                                        schorowanego starca. Początkowo szef rządu publicznie upokarza malarza i każe
                                        zniszczyć obraz, ale ostatecznie pod wpływem wzbudzonych przez te wydarzenia
                                        refleksji, a także nacisków ze strony własnego zaplecza politycznego, przechodzi
                                        na emeryturę. Nowym premierem zostaje Anthony Eden.
                                    </small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc10" role="tabpanel"
                                 aria-labelledby="list-odc10-list">
                                <p class="text-center">Odcinek 10. Gloriana</p>
                                <video poster="{{ url('storage/movie_posters/the_crown_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ url('storage/movies/crown/Korona_s1o10.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Małgorzata kończy 25 lat i domaga się od Elżbiety wypełnienia danej jej dwa
                                        lata wcześniej obietnicy, iż w tym wieku będzie mogła poślubić rozwiedzionego
                                        kapitana Townsenda. Choć monarchini początkowo bardzo chce dotrzymać słowa,
                                        napotyka na silny opór gabinetu i Kościoła. Ostatecznie Małgorzata musi wybierać
                                        między swoją wielką miłością a przywilejami wynikającymi z członkostwa w
                                        rodzinie królewskiej, których ewentualny ślub automatycznie ją pozbawi. W
                                        polityce zagranicznej zaostrza się konflikt premiera Edena z rządzącym Egiptem
                                        pułkownikiem Naserem, co stanowi preludium kryzysu sueskiego.
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