@extends('layouts.app')

@section('title', 'Filmy')

@section('content')
    <div class="container">
        @if ($message = Session::get('success'))
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <h4 class="alert-heading">Super!!!</h4>
                        <hr>
                        <p class="mb-0">{{ $message }}</p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-4 col-sm-4 col-md-3 pb-2">
                <div class="card bg-dark text-white">
                    <a href="{{ route('koronajeden') }}" class="text-decoration-none">
                        <img src="{{ url('storage/movie_posters/crown_season_one_poster_vertical.jpg') }}" class="card-img"
                             alt="The Crown Season One">
                        <div class="card-footer bg-dark text-white">
                            <small>Korona - sezon 1</small>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-3 pb-2">
                <div class="card bg-dark text-white">
                    <a href="{{ route('koronadwa') }}" class="text-decoration-none">
                        <img src="{{ url('storage/movie_posters/crown_season_two_poster_vertical.jpg') }}" class="card-img"
                             alt="The Crown Season Two">
                        <div class="card-footer bg-dark text-white">
                            <small>Korona - sezon 2</small>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-3 pb-2">
                <div class="card">
                    <a href="{{ route('chernobyl') }}" class="text-decoration-none">
                        <img src="{{ url('storage/movie_posters/chernobyl_poster_vertical.jpg') }}" class="card-img" alt="Chernobyl">
                        <div class="card-footer bg-dark text-white">
                            <small>Chernobyl</small>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-3 pb-2">
                <div class="card">
                    <a href="{{ route('kursk') }}" class="text-decoration-none">
                        <img src="{{ url('storage/movie_posters/kursk_poster_vertical.jpg') }}" class="card-img" alt="Kursk">
                        <div class="card-footer bg-dark text-white">
                            <small>Kursk</small>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-3 pb-2">
                <div class="card">
                    <a href="{{ route('brexit') }}" class="text-decoration-none">
                        <img src="{{ url('storage/movie_posters/brexit_poster_vertical.jpg') }}" class="card-img" alt="Brexit">
                        <div class="card-footer bg-dark text-white">
                            <small>Brexit</small>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-3 pb-2">
                <div class="card">
                    <a href="{{ route('agora') }}" class="text-decoration-none">
                        <img src="{{ url('storage/movie_posters/agora_poster_vertical.jpg') }}" class="card-img" alt="Agora">
                        <div class="card-footer bg-dark text-white">
                            <small>Agora</small>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-3 pb-2">
                <div class="card">
                    <a href="{{ route('albert_einstein') }}" class="text-decoration-none">
                        <img src="{{ url('storage/movie_posters/albert_einstein_poster_vertical.jpg') }}" class="card-img" alt="Albert Einstein">
                        <div class="card-footer bg-dark text-white">
                            <small>Albert Einstein</small>
                        </div>
                    </a>
                </div>
            </div>
{{--            <div class="col-md-2 pb-2">--}}
{{--                <div class="card">--}}
{{--                    <a href="{{ route('picasso') }}" class="text-decoration-none">--}}
{{--                        <img src="{{ url('storage/movie_posters/picasso_poster_vertical.jpg') }}" class="card-img" alt="Picasso">--}}
{{--                        <div class="card-footer bg-dark text-white">--}}
{{--                            <small>Picasso</small>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
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
