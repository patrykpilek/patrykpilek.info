@extends('layouts.app')

@section('title', 'People vs O.J Simpson')

@section('content')

    <main>
        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="display-4">People vs O.J Simpson</h1>
                <hr class="my-4">
            </div>
        </section>
        <div class="py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <p class="text-center">Odcinki</p>
                        <div class="list-group" id="list-tab" role="tablist">
                            <a class="list-group-item list-group-item-action active" id="list-odc1-list"
                               data-toggle="list" href="#list-odc1" role="tab" aria-controls="odc1">
                                #1. Z popiołów tragedii
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-odc2-list" data-toggle="list"
                               href="#list-odc2" role="tab" aria-controls="odc2">
                                #2. Ratuj się
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-odc3-list" data-toggle="list"
                               href="#list-odc3" role="tab" aria-controls="odc3">
                                #3. Wymarzona ekipa
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-odc4-list" data-toggle="list"
                               href="#list-odc4" role="tab" aria-controls="odc4">
                                #4. Niewinny na 100%
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-odc5-list" data-toggle="list"
                               href="#list-odc5" role="tab" aria-controls="odc5">
                                #5. Dyskryminacja rasowa
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-odc6-list" data-toggle="list"
                               href="#list-odc6" role="tab" aria-controls="odc6">
                                #6. Marcia, Marcia, Marcia
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-odc7-list" data-toggle="list"
                               href="#list-odc7" role="tab" aria-controls="odc7">
                                #7. Teorie spiskowe
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-odc8-list" data-toggle="list"
                               href="#list-odc8" role="tab" aria-controls="odc8">
                                #8. Ława przysięgłych w więzieniu
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-odc9-list" data-toggle="list"
                               href="#list-odc9" role="tab" aria-controls="odc9">
                                #9. Manna z nieba
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-odc10-list" data-toggle="list"
                               href="#list-odc10" role="tab" aria-controls="odc10">
                                #10. Werdykt
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="list-odc1" role="tabpanel"
                                 aria-labelledby="list-odc1-list">
                                <p class="text-center">Odcinek 1. Z popiołów tragedii</p>
                                <video poster="{{ asset('img/people_vs_oj_simpson_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ asset('movies/people_vs_oj_simpson/people_vs_oj_simpson_s1o1.mp4') }}"
                                            type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Zabójstwa Nicole Brown Simpson i Ronalda Goldmana prowadzą policję Los
                                        Angeles do domu O.J. Simpsona.
                                    </small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc2" role="tabpanel" aria-labelledby="list-odc2-list">
                                <p class="text-center">Odcinek 2. Ratuj się</p>
                                <video poster="{{ asset('img/people_vs_oj_simpson_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ asset('movies/people_vs_oj_simpson/people_vs_oj_simpson_s1o2.mp4') }}"
                                            type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Zamiast oddać się w ręce policji, O.J. Simpson ucieka swoim białym Fordem
                                        Bronco. Jego adwokaci, Robert Shapiro i Robert Kardashian muszą poradzić sobie z
                                        negatywnymi skutkami zniknięcia swojego sławnego klienta. Tymczasem prokuratura
                                        i policja Los Angeles robią wszystko, co w ich mocy, by odnaleźć zbiega.
                                    </small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc3" role="tabpanel" aria-labelledby="list-odc3-list">
                                <p class="text-center">Odcinek 3. Wymarzona ekipa</p>
                                <video poster="{{ asset('img/people_vs_oj_simpson_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ asset('movies/people_vs_oj_simpson/people_vs_oj_simpson_s1o3.mp4') }}"
                                            type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Prokurator Marcia Clark ogłasza, że O.J. Simpson został oskarżony o podwójne
                                        morderstwo swojej żony Nicole Brown oraz jej przyjaciela Rona Goldmana, kelnera
                                        z restauracji „Mezzaluna”. Adwokat Robert Shapiro szuka porady u uznanego
                                        prawnika F. Lee Baileya, po czym wpada na pomysł prowokacyjnej strategii obrony.
                                        W miarę jak Shapiro zaczyna dobierać członków „wymarzonej ekipy”, która ma
                                        bronić O.J.’a w sądzie, musi przekonać swojego klienta, by ten wyraził zgodę na
                                        zatrudnienie Johnniego Cochrana.
                                    </small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc4" role="tabpanel" aria-labelledby="list-odc4-list">
                                <p class="text-center">Odcinek 4. Niewinny na 100%</p>
                                <video poster="{{ asset('img/people_vs_oj_simpson_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ asset('movies/people_vs_oj_simpson/people_vs_oj_simpson_s1o4.mp4') }}"
                                            type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Zatrudnienie nowego obrońcy – Johnniego Cochrana, całkowicie zmienia postać
                                        rzeczy. W ramach przygotowań do procesu wybierani są członkowie ławy
                                        przysięgłych. Zarówno oskarżenie, jak i obrona korzystają z pomocy ekspertów,
                                        którzy mają im pomóc w doborze odpowiednich ławników. Tymczasem na rynku ukazuje
                                        się książka Faye Resnick, znajomej Nicole Brown. Ujawnione w niej fakty w
                                        znacznym stopniu wpływają na przebieg postępowania sądowego.
                                    </small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc5" role="tabpanel" aria-labelledby="list-odc5-list">
                                <p class="text-center">Odcinek 5. Dyskryminacja rasowa</p>
                                <video poster="{{ asset('img/people_vs_oj_simpson_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ asset('movies/people_vs_oj_simpson/people_vs_oj_simpson_s1o5.mp4') }}"
                                            type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Rozpoczyna się proces O.J. Simpsona. Prokurator Christopher Darden ściera się
                                        w sądzie z obrońcą oskarżonego, Johnniem Cochranem. Chris ma wątpliwości
                                        związane z Markiem Fuhrmanem. Nie jest pewien czy detektyw to odpowiedni
                                        kandydat na świadka oskarżenia. Ławnikom zostaje pokazane miejsce zbrodni.
                                    </small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc6" role="tabpanel" aria-labelledby="list-odc6-list">
                                <p class="text-center">Odcinek 6. Marcia, Marcia, Marcia</p>
                                <video poster="{{ asset('img/people_vs_oj_simpson_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ asset('movies/people_vs_oj_simpson/people_vs_oj_simpson_s1o6.mp4') }}"
                                            type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>W miarę jak prokurator Marcia Clark stara się pogodzić swoje obowiązki w domu
                                        i w pracy, zaczyna odczuwać wzmożone zainteresowanie opinii publicznej swoją
                                        osobą, do czego jest kompletnie nieprzygotowana.
                                    </small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc7" role="tabpanel" aria-labelledby="list-odc7-list">
                                <p class="text-center">Odcinek 7. Teorie spiskowe</p>
                                <video poster="{{ asset('img/people_vs_oj_simpson_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ asset('movies/people_vs_oj_simpson/people_vs_oj_simpson_s1o7.mp4') }}"
                                            type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Wokół procesu O.J. Simpsona zaczyna krążyć coraz więcej teorii spiskowych.
                                        Tymczasem oskarżyciele zastanawiają się, czy powinni nakłonić Simpsona do
                                        przymierzenia w sądzie rękawiczek, które są materiałem dowodowym w sprawie.
                                    </small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc8" role="tabpanel" aria-labelledby="list-odc8-list">
                                <p class="text-center">Odcinek 8. Ława przysięgłych w więzieniu</p>
                                <video poster="{{ asset('img/people_vs_oj_simpson_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ asset('movies/people_vs_oj_simpson/people_vs_oj_simpson_s1o8.mp4') }}"
                                            type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Proces O.J. Simpsona trwa już kilka miesięcy. Odcięci od rodzin,
                                        społeczeństwa oraz mediów ławnicy robią się coraz bardziej ześwirowani, stając
                                        się tym samym łatwiejszym celem dla zarówno obrony, jak i oskarżenia. Tymczasem
                                        ludzie w całym kraju mają okazję dowiedzieć się, na czym polega wykorzystanie
                                        badań DNA w kryminalistyce i medycynie sądowej.
                                    </small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc9" role="tabpanel" aria-labelledby="list-odc9-list">
                                <p class="text-center">Odcinek 9. Manna z nieba</p>
                                <video poster="{{ asset('img/people_vs_oj_simpson_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ asset('movies/people_vs_oj_simpson/people_vs_oj_simpson_s1o9.mp4') }}"
                                            type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Obrońcy Simpsona Johnnie Cochran i F. Lee Bailey jadą na drugi koniec kraju,
                                        aby przejąć taśmy Marka Fuhrmana. Sędzia Ito musi zadecydować czy taśmy, które
                                        zawierają epitety na tle rasowym, można dopuścić jako materiały dowodowe w
                                        procesie O.J.'a.
                                    </small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc10" role="tabpanel"
                                 aria-labelledby="list-odc10-list">
                                <p class="text-center">Odcinek 10. Werdykt</p>
                                <video poster="{{ asset('img/people_vs_oj_simpson_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ asset('movies/people_vs_oj_simpson/people_vs_oj_simpson_s1o10.mp4') }}"
                                            type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Przedstawiciele oskarżenia i obrony wygłaszają swoje mowy końcowe. Ławnicy
                                        przeprowadzają obrady. W końcu ogłoszony zostaje werdykt w sprawie O.J.
                                        Simpsona.
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