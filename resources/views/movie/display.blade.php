@extends('layouts.app')

@section('title', $movie->title)

@section('content')
    @if($videos->count() == 0)
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        <h4 class="alert-heading">This movie has no video file yet.</h4>
                        <hr>
                        <p class="mb-0">Please be patient. I'm working on adding a file.</p>
                    </div>
                </div>
            </div>
        </div>
    @elseif($videos->count() == 1)
        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="display-6">{{ Str::title($movie->title) }}</h1>
                <hr class="my-4">
            </div>
        </section>
        <div class="py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-8 offset-2">
                        <video poster="{{ url('storage/movie_posters/' . $movie->poster_horizontal) }}" controls controlsList="nodownload" preload="none">
                            <source id="theVideo" src="{{ url('storage/movies/'. Str::slug($movie->title, '_') . '/' . $videos->first()->video_filename ) }}" type="video/mp4">
                            {{--                                <source src="{{ $videos->first()->getS3Video() }}" type="video/mp4">--}}
                            Your browser does not support the video tag.
                        </video>
                        <p>{{ $videos->first()->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    @elseif($videos->count() > 1)
        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="display-6">{{ Str::title($movie->title) }}</h1>
                <hr class="my-4">
            </div>
        </section>
        <div class="py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-4">
                        <p class="text-center">Odcinki</p>
                        <div class="list-group" id="list-tab" role="tablist">
                            @foreach($videos as $video)
                                <a class="list-group-item list-group-item-action @if ($loop->first) active @endif" id="list-odc{{$loop->iteration}}-list"
                                   data-toggle="list" href="#list-odc{{$loop->iteration}}" role="tab" aria-controls="odc{{$loop->iteration}}">
                                    {{ $loop->iteration }}. {{ $video->title }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                        <div class="tab-content" id="nav-tabContent">
                            @foreach($videos as $video)
                                <div class="tab-pane fade show @if ($loop->first) active @endif" id="list-odc{{$loop->iteration}}" role="tabpanel"
                                     aria-labelledby="list-odc{{$loop->iteration}}-list">
                                    <p class="text-center">{{ $loop->iteration }}. {{ Str::title($video->title) }}</p>
                                    <video class="embed-responsive-item" poster="{{ url('storage/movie_posters/' . $movie->poster_horizontal) }}" controls controlsList="nodownload" preload="none">
                                        <source src="{{ url('storage/movies/'. Str::slug($movie->title, '_') . '/' . $video->video_filename ) }}" type="video/mp4">
                                        {{--                                            <source src="{{ $video->getS3Video() }}" type="video/mp4">--}}
                                        Your browser does not support the video tag.
                                    </video>
                                    <p>{{ $video->description }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection

@include('movie.play')
