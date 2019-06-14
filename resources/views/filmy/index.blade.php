@extends('layouts.app')

@section('title', 'Filmy')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2 pb-2">
                <div class="card bg-dark text-white">
                    <a href="{{ route('koronajeden') }}" class="text-decoration-none">
                        <img src="{{ asset('img/crown_season_one_poster_vertical.jpg') }}" class="card-img"
                             alt="The Crown Season One">
                        <div class="card-footer bg-dark text-white">
                            <small>Korona - sezon 1</small>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2 pb-2">
                <div class="card bg-dark text-white">
                    <a href="{{ route('koronadwa') }}" class="text-decoration-none">
                        <img src="{{ asset('img/crown_season_two_poster_vertical.jpg') }}" class="card-img"
                             alt="The Crown Season Two">
                        <div class="card-footer bg-dark text-white">
                            <small>Korona - sezon 2</small>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2 pb-2">
                <div class="card">
                    <a href="{{ route('people_vs_oj_simpson') }}" class="text-decoration-none">
                        <img src="{{ asset('img/people_vs_oj_simpson_vertical.jpg') }}" class="card-img"
                             alt="One Of Us">
                        <div class="card-footer bg-dark text-white">
                            <small>O.J Simpson</small>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2 pb-2">
                <div class="card">
                    <a href="{{ route('chernobyl') }}" class="text-decoration-none">
                        <img src="{{ asset('img/chernobyl_poster_vertical.jpg') }}" class="card-img" alt="Chernobyl">
                        <div class="card-footer bg-dark text-white">
                            <small>Chernobyl</small>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2 pb-2">
                <div class="card">
                    <a href="{{ route('mary_queen_of_scots') }}" class="text-decoration-none">
                        <img src="{{ asset('img/mary_queen_of_scots_poster_vertical.jpg') }}" class="card-img"
                             alt="Mary Queen of Scots">
                        <div class="card-footer bg-dark text-white">
                            <small>Queen of Scots</small>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2 pb-2">
                <div class="card">
                    <a href="{{ route('kursk') }}" class="text-decoration-none">
                        <img src="{{ asset('img/kursk_poster_vertical.jpg') }}" class="card-img" alt="Kursk">
                        <div class="card-footer bg-dark text-white">
                            <small>Kursk</small>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2 pb-2">
                <div class="card">
                    <a href="{{ route('brexit') }}" class="text-decoration-none">
                        <img src="{{ asset('img/brexit_poster_vertical.jpg') }}" class="card-img" alt="Brexit">
                        <div class="card-footer bg-dark text-white">
                            <small>Brexit</small>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2 pb-2">
                <div class="card">
                    <a href="{{ route('agora') }}" class="text-decoration-none">
                        <img src="{{ asset('img/agora_poster_vertical.jpg') }}" class="card-img" alt="Agora">
                        <div class="card-footer bg-dark text-white">
                            <small>Agora</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-muted">
        <div class="container">
            <p class="float-right">
                <a href="#" class="btn">Back to top</a>
            </p>
        </div>
    </footer>
@endsection
