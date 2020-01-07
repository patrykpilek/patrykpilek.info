@extends('layouts.app')

@section('title', 'All Movies')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header bg-white">
                Movies
                <div class="float-right">
                    <a href="{{ route('movies.file.views') }}" class="btn btn-sm btn-outline-secondary"><i class="far fa-eye"></i>&nbsp;Views</a>

                    <a href="{{ route('videos.index') }}" class="btn btn-sm btn-outline-info"><i class="fas fa-video"></i>&nbsp;All Videos</a>
                    <a href="{{ route('movies.create') }}" class="btn btn-sm btn-outline-success"><i class="fas fa-plus"></i>&nbsp;Add Movie</a>
                </div>
            </div>

            @if( ! $movies->count() )
                <div class="card-body">
                    No record found.
                </div>
            @else
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col" class="text-center d-none d-sm-none d-md-none d-lg-table-cell">Poster Vertical</th>
                                <th scope="col" class="text-center d-none d-sm-none d-md-none d-lg-table-cell">Poster Horizontal</th>
                                <th scope="col" class="text-center">Videos</th>
                                <th scope="col" class="text-center">Action Movie</th>
                                <th scope="col" class="text-center">View Video</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($movies as $movie)
                                <tr>
                                    <th scope="row">{{ $movie->id }}</th>
                                    <td >{{ Str::title($movie->title) }}</td>
                                    <td class="text-center d-none d-sm-none d-md-none d-lg-table-cell">
                                        <img src="{{ $movie->movie_poster_vertical_path }}" style="width: 50px; height: 70px;" class="rounded" alt="Poster Vertical">
                                    </td>
                                    <td class="text-center d-none d-sm-none d-md-none d-lg-table-cell">
                                        <img src="{{ $movie->movie_poster_horizontal_path }}" style="width: 95px; height: 65px;" class="rounded" alt="Poster Horizontal">
                                    </td>
                                    <td class="text-center">{{ $movie->videos()->count() }}</td>
                                    <td>
                                        <div class="btn-toolbar justify-content-center">
                                            <div class="btn-group mr-2" role="group" aria-label="First group">
                                                <a href="{{ route('movies.display', $movie) }}" class="btn btn-sm btn-light">
                                                <span style="color: Dodgerblue;">
                                                    <i class="far fa-eye fa-lg"></i>
                                                </span>
                                                </a>
                                            </div>
                                            <div class="btn-group mr-2">
                                                <a href="{{ route('movies.edit', $movie) }}" class="btn btn-sm btn-light">
                                                <span style="color: LimeGreen;">
                                                    <i class="far fa-edit fa-lg"></i>
                                                </span>
                                                </a>
                                            </div>
                                            <div class="btn-group mr-2">
                                                <a href="{{ route('videos.create', ['movieId' => $movie->id]) }}" class="btn btn-sm btn-light">
                                                <span style="color: Gold;">
                                                    <i class="fas fa-plus"></i>
                                                </span>
                                                </a>
                                            </div>
                                            @if($movie->videos->isEmpty())
                                                <form action="{{ route('movies.destroy', $movie) }}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <div class="btn-group">
                                                        <button type="submit" class="btn btn-sm btn-light">
                                                        <span style="color: Tomato;">
                                                            <i class="far fa-trash-alt fa-lg"></i>
                                                        </span>
                                                        </button>
                                                    </div>
                                                </form>
                                            @endif
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-toolbar justify-content-center">
                                            <div class="btn-group mr-2" role="group" aria-label="First group">
                                                <a href="{{ route('videos.view', $movie) }}" class="btn btn-sm btn-light">
                                                <span style="color: Dodgerblue;">
                                                    <i class="far fa-eye fa-lg"></i>
                                                </span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
            <div class="card-footer bg-white">
                {{ $movies->links() }}
            </div>
        </div>
    </div>
@endsection
