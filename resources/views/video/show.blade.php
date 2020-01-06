@extends('layouts.app')

@section('title', 'All Videos')

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header bg-white">
                All video files
                <div class="float-right">
                    <a href="{{ route('movies.index') }}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-backward"></i>&nbsp;Back</a>
                </div>
            </div>
            @if( ! $videos->count() )
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
                                <th scope="col" class="d-none d-sm-none d-md-none d-lg-table-cell">Movie Title</th>
                                <th scope="col">Video Title</th>
                                <th scope="col" class="d-none d-sm-none d-md-table-cell">Duration</th>
                                <th scope="col" class="d-none d-sm-none d-md-none d-lg-table-cell">Description</th>
                                <th scope="col">Video Filename</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($videos as $video)
                                <tr>
                                    <th scope="row">#{{ $video->id }}</th>
                                    <td class="d-none d-sm-none d-md-none d-lg-table-cell">{{ Str::title($video->movie->title) }}</td>
                                    <td>{{ Str::title($video->title) }}</td>
                                    <td class="d-none d-sm-none d-md-table-cell">{{ $video->hours }}</td>
                                    <td class="d-none d-sm-none d-md-none d-lg-table-cell">{{ Str::limit($video->description, 30, ' (...)') }}</td>
                                    <td>{{ $video->video_filename }}</td>
                                    <td>
                                        <div class="btn-toolbar justify-content-center">
                                            <div class="btn-group mr-2" role="group" aria-label="First group">
                                                <a href="{{ route('movies.display', $video->movie) }}" class="btn btn-sm btn-light">
                                                <span style="color: Dodgerblue;">
                                                    <i class="far fa-eye fa-lg"></i>
                                                </span>
                                                </a>
                                            </div>
                                            <div class="btn-group mr-2">
                                                <a href="{{ route('videos.edit', $video) }}" class="btn btn-sm btn-light">
                                                <span style="color: LimeGreen;">
                                                    <i class="far fa-edit fa-lg"></i>
                                                </span>
                                                </a>
                                            </div>
                                            <form action="{{ route('videos.destroy', $video) }}" method="post">
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
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
