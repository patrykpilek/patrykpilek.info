@extends('layouts.app')

@section('title', 'Movies')

@section('content')
    <div class="container">
        <div class="row">
            @if( ! $movies->count() )
                <div class="col-12">
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        <p>No record found.</p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            @else
                @foreach($movies as $movie)
                    <div class="col-6 col-sm-6 col-md-4 col-lg-2 col-xl-2 pb-2">
                        <div class="card bg-dark text-white">
                            <a href="{{ route('movies.display', $movie) }}" class="text-decoration-none">
                                <img src="{{ url('storage/movie_posters/' . $movie->poster_vertical) }}" class="card-img poster-img" alt="{{ $movie->title }}">
                                <div class="card-footer bg-dark text-white">
                                    <small>{{ Str::limit(Str::title($movie->title) , 15, ' (...)') }}</small>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
