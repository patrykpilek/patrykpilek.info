@extends('layouts.app')

@section('title', 'Mary Queen of Scots')

@section('content')

    <main>
        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="display-4">Mary Queen of Scots</h1>
                <hr class="my-4">
            </div>
        </section>

        <div class="py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <video poster="{{ asset('img/mary_queen_of_scots_poster_horizontal.jpg') }}" controls
                               controlsList="nodownload" preload="none">
                            <source src="{{ asset('movies/mary_queen_of_scots/mary_queen_of_scots.mp4') }}"
                                    type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <p>
                            <small>Z pewnością nie zabraknie widzów, którzy "Marii, królowej Szkotów" będą zarzucać
                                przekłamania i bezmyślne hołdowanie politycznej poprawności. Obecność na XVI-wiecznym
                                dworze osób nieheteronormatywnych lub innego niż europejskie pochodzenia etnicznego, a
                                także feministyczne idee dające się wyczuć w działaniach bohaterek, rzeczywiście mogą
                                wprawić w konsternację odbiorcę przyzwyczajonego do wersji historii uwzględniającej
                                przede wszystkim punkt widzenia białych heteroseksualnych mężczyzn. Josie Rourke, do tej
                                pory działająca przede wszystkim w teatrze, choć nie ukrywa, że swą opowieść chce
                                zaprezentować z kobiecej perspektywy, zadbała o wiarygodność źródeł. Odpowiedzialny za
                                scenariusz Beau Willimon, znany przede wszystkim jako twórca "House of Cards", opierał
                                się bowiem na biografii Marii Stuart pióra Johna Guya. Ów ceniony historyk,
                                specjalizujący się w epoce Tudorów, w swoich pracach nie boi się redefiniować historii,
                                dekonstruując pomnikowe wizerunki występujących w niej postaci. Podobną strategię obrali
                                twórcy filmu, oprowadzając nas po renesansowej Wielkiej Brytanii.
                            </small>
                        </p>
                        <p>
                            <small>Wiadomo, że ze względu na narzucone przez dystrybutora ograniczenia czasowe niektóre
                                wątki musiały zostać potraktowane po macoszemu, z problemem tym mierzy się jednak
                                większość filmów historycznych. Przedstawione na ekranie wydarzenia, od przybycia Marii
                                (Saoirse Ronan) do ojczystej Szkocji po jej detronizację i ucieczkę do Anglii, układają
                                się w spójną fabułę, pozwalającą zgłębić motywacje zarówno protagonistki, jak i jej
                                rywalki, Elżbiety I (Margot Robbie). Jednocześnie ze względu na śmiałe sceny erotyczne,
                                często odwracające porządek genderowy, "Marię, królową Szkotów" można uznać za bliską
                                kuzynkę takich produkcji telewizyjnych jak "Dynastia Tudorów", "Rzym" czy nawet "Gra o
                                tron". Nie jest to zatem film historyczny niewolniczo trzymający się podręcznikowej
                                narracji, lecz raczej wariacja na temat bohaterki mająca nie tylko uatrakcyjnić fabułę w
                                oczach widza (lub widzki), ale także pozwolić mu (jej) na odniesienie problematyki
                                dzieła do osobistego doświadczenia. Burzliwe życie Marii Stuart staje się punktem
                                wyjścia dla opowieści o kobiecie u władzy, która w zdominowanym przez mężczyzn świecie
                                musi dokonać wyboru między dążeniem do osiągnięcia swych politycznych celów a realizacją
                                marzenia o miłości i rodzinie.
                            </small>
                        </p>
                        <p>
                            <small>Już od pierwszych scen Rourke ostrzega, że status społeczny jest podrzędny wobec
                                płci, zaś sam fakt bycia kobietą może zostać wykorzystany przeciwko bohaterkom. Aby
                                zdobyć posłuch wśród otaczających je doradców, zarówno Maria, jak i Elżbieta muszą
                                ukrywać się za fasadą silnych person – niedających się sentymentom, trzymających na
                                wodzy uczucia, gotowych wyrzec się pragnień na rzecz idei. Mimo że obie kobiety łączy
                                siostrzeństwo, wynikające nie tylko z więzów krwi, ale i pełnionej funkcji, są one
                                odwrotnymi stronami tej samej monety. Wybory Marii rymują się z decyzjami Elżbiety:
                                kiedy jedna plotkuje z dwórkami o miłosnych uniesieniach, druga w obawie przed
                                spiskowcami i skrytobójcami gotowymi wykorzystać chwilę jej słabości odmawia kochankowi
                                zbliżenia. Gdy szkocki reformator John Knox (David Tennant) podburza lud przeciwko
                                katoliczce Marii, otwarcie nazywając ją dziwką, protestantka Elżbieta cierpliwie buduje
                                wizerunek królowej dziewicy. W końcu swoim dopełnieniem stają się doświadczenie
                                macierzyństwa i bezdzietność: choć Maria straciła prawo do tronu, nieposiadająca
                                potomstwa Elżbieta wie, że to właśnie jej dorastający syn obejmie w przyszłości
                                brytyjski tron.
                            </small>
                        </p>
                        <p>
                            <small>Mimo że "Maria, królowa Szkotów" to kinowy debiut reżyserki, jest to dzieło dojrzałe
                                i odważne. Być może niektóre z wykorzystanych przez nią środków wyrazu wzbudzą
                                kontrowersje, wydaje się jednak, że bogate doświadczenie, jakie Rourke miała okazję
                                zdobyć w teatrze (gdzie równie chętnie co po Szekspira sięgała choćby po Eve Ensler),
                                zaprocentowało na planie filmowym, szczególnie w pracy z aktorami. Choć na główną
                                gwiazdę produkcji wytypowano Ronan, to każdą scenę kradnie mierząca się z rolą Elżbiety
                                I Robbie. Jej bohaterka, tonąca w ciężkich sukniach i ufryzowanych perukach, ukrywająca
                                blizny po przebytej ospie pod grubą warstwą białego pudru, dla zachowania władzy zrzeka
                                się nie tyle kobiecości, co wręcz cielesności. Oto wyzwanie, rola o wiele trudniejsza
                                niż postać tytułowej bohaterki, z której Robbie tworzy postać złożoną i zniuansowaną.
                                Zaskoczeniem jest więc brak nominacji do Oscara. Dziwi to tym bardziej, że Akademia lubi
                                doceniać kreacje wymagające od aktorek zakamuflowania ich urody.
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