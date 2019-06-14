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
                    <div class="col-md-4">
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
                                <video poster="{{ asset('img/chernobyl_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ asset('movies/chernobyl/chernobyl_odc1.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>26 kwietnia 1986 r. Ukraińska SRR. Pracownicy zakładu i strażacy poświęcają
                                        życie, aby opanować katastrofalną eksplozję w radzieckiej elektrowni jądrowej.
                                    </small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc2" role="tabpanel" aria-labelledby="list-odc2-list">
                                <p class="text-center">Odcinek 2. Uprasza się o zachowanie spokoju</p>
                                <video poster="{{ asset('img/chernobyl_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ asset('movies/chernobyl/chernobyl_odc2.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>W obliczu zagrożenia wielu milionów ludzi po wybuchu w Czarnobylu, fizyk
                                        jądrowy Uliana Chomiuk podejmuje desperacką próbę dotarcia do Walerija Legasowa,
                                        czołowego radzieckiego fizyka jądrowego i ostrzega go przed groźbą drugiej
                                        eksplozji, która mogłaby zniszczyć kontynent.
                                    </small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc3" role="tabpanel" aria-labelledby="list-odc3-list">
                                <p class="text-center">Odcinek 3. Otwórz się szeroko, ziemio</p>
                                <video poster="{{ asset('img/chernobyl_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ asset('movies/chernobyl/chernobyl_odc3.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Ludmiła Ignatienko, mieszkanka Prypeci, ignoruje ostrzeżenie o skażeniu męża
                                        strażaka. Walerij Legasow przedstawia plan dekontaminacji, uwzględniający ryzyko
                                        dla ludzi.
                                    </small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc4" role="tabpanel" aria-labelledby="list-odc4-list">
                                <p class="text-center">Odcinek 4. Szczęście całej ludzkości</p>
                                <video poster="{{ asset('img/chernobyl_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ asset('movies/chernobyl/chernobyl_odc4.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Walerij Legasow i radziecki wicepremier Boris Szczerbina rozważają użycie
                                        łazików księżycowych do usuwania radioaktywnych szczątków, podczas gdy Uliana
                                        Chomiuk napotyka rządowe przeszkody w ustaleniu prawdy o przyczynie eksplozji.
                                    </small>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-odc5" role="tabpanel" aria-labelledby="list-odc5-list">
                                <p class="text-center">Odcinek 5. </p>
                                <video poster="{{ asset('img/chernobyl_poster_horizontal.jpg') }}" controls
                                       controlsList="nodownload" preload="none">
                                    <source src="{{ asset('movies/chernobyl/chernobyl_odc5.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>
                                    <small>Walerij Legasow, Boris Szczerbina i Uliana Chomiuk ryzykują życiem i
                                        reputacją, aby ujawnić prawdę o Czarnobylu.
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