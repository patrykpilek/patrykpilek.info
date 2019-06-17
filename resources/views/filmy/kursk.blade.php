@extends('layouts.app')

@section('title', 'Kursk')

@section('content')

    <main>
        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="display-4">Kursk</h1>
                <hr class="my-4">
            </div>
        </section>

        <div class="py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <video poster="{{ url('storage/movie_posters/kursk_poster_horizontal.jpg') }}" controls
                               controlsList="nodownload" preload="none">
                            <source src="{{ url('storage/movies/kursk/kursk.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <p>
                            <small>Kursk w reżyserii Thomasa Vinterberga to film stojący na rozdrożu. Pragnący z jednej
                                strony pokazać dramat tragicznie zmarłych marynarzy, z drugiej zaś zwrócić uwagi na
                                niejasną, pełną sprzeczności, jak również niezdrowej dumy politykę molocha na glinianych
                                nogach, jakim jest Rosja. Kilka wątków zasygnalizowanych w tym filmie jest wyłącznie z
                                chęci pokazania palącego problemu. Jednak nie znajdują one rozwinięcia w produkcji, a
                                szkoda, bo być może obraz zwróciłby na siebie większą uwagę.
                            </small>
                        </p>
                        <p>
                            <small>12 sierpnia 2000 roku okręt podwodny klasy Oscar II wypłynął na wody Morza Barentsa,
                                aby wziąć udział w standardowych manewrach wojskowych. Pokazie siły dawnego imperium.
                                Sielankowe nastroje marynarzy dość szybko zmąciły niepokojące informacje o
                                niestabilności jednej z torped. Kursk miał podczas manewrów wystrzelić dwie ćwiczebne
                                torpedy. Nie zdążył. Ta feralna, która do zasilania napędu wykorzystuje stężony
                                nadtlenek wodoru, eksplodowała, co skutkowało pożarem i wybuchem kolejnych torped. Okręt
                                poszedł na dno.
                            </small>
                        </p>
                        <p>
                            <small>Twórcy filmu opierają dramat marynarzy na tragedii związanej z wybuchem torpedy.
                                Dezinformacja po stronie rosyjskiej, podawanie nieprawdziwych informacji i igranie z
                                rodzinami ofiar pokazują, że Mateczka Rosja już za rządów Putina nie bardzo chciała
                                ujawniać szczegółów katastrofy i narażać się na wstyd na arenie międzynarodowej. Stary i
                                przestarzały sprzęt nie tylko w postaci wiekowej torpedy, ale i sprzętu ratunkowego
                                boleśnie obnażył aspiracje mocarstwa. Spekulacji i teorii spiskowych było kilka, wraz z
                                terrorystą zamachowcem na pokładzie. Nie dziwi jednak, że twórcy sięgnęli po tę
                                najbardziej prawdopodobną.
                            </small>
                        </p>
                        <p>
                            <small>Kursk w przeważającej mierze skupia się na grupce ocalałych marynarzy, która robiła
                                wszystko, by przeżyć i doczekać ekipy ratunkowej. Nie wiadomo, co wydarzyło się po
                                wybuchu na okręcie. Przebieg wydarzeń to już interpretacja twórców filmu. Całkiem
                                prawdopodobny i ukazujący zarówno hart ducha rosyjskiej załogi, jak i zwątpienie i
                                desperackie próby wydostania się z matni. Nie mniej ciekawie rysował się wątek na
                                powierzchni, gdzie zwlekano z poinformowaniem opinii publicznej o katastrofie. Walka
                                rodzin marynarzy o wyjawienie prawdy, a także pomocy Zachodu stronie rosyjskiej zostały
                                ujęte zbyt powierzchownie. Działania rosyjskich władz pragnących zataić jak najwięcej
                                informacji o katastrofie i niechętnych udziału Brytyjczyków w akcji ratunkowej miast
                                stanowić jedną z głównych osi fabularnych sprawiają wrażenie niezamierzenie komicznych.
                                Oto Wielki Brat w tym przypadku reprezentowany przez stareńkiego Maxa von Sydowa mówi
                                stanowcze nie kapitalistycznym darmozjadom i szpiegom. Dlatego też o wiele lepiej
                                prezentuje się heroiczna walka marynarzy, którzy wykorzystali wszystkie możliwe środki,
                                by przeżyć jak najdłużej w podwodnej pułapce.
                            </small>
                        </p>
                        <p>
                            <small>Film Thomasa Vinterberga nie ucieka od politycznego rozliczenia katastrofy okrętu
                                podwodnego, ale czyni to w sposób mało satysfakcjonujący. Korzystniej wypada jako kino
                                katastroficzne, przez co angażuje widza śledzącego zmagania uwięzionych pod wodą
                                marynarzy. Jednak jest to zdecydowanie za mało, by nazwać Kursk filmem udanym.
                            </small>
                        </p>
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