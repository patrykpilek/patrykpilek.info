@extends('layouts.app')

@section('title', __('app.all_videos'))

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header bg-white">
                @lang('app.all_videos')
                <div class="float-right">
                    <a href="{{ route('movies.index') }}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-backward"></i>&nbsp;@lang('app.back')</a>
                </div>
            </div>
            @if( ! $videos->count() )
                <div class="card-body">
                    @lang('app.no_record_found')
                </div>
            @else
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col" class="d-none d-sm-none d-md-table-cell">@lang('app.movie_id')</th>
                                <th scope="col">@lang('app.title')</th>
                                <th scope="col" class="d-none d-sm-none d-md-none d-lg-table-cell">@lang('app.duration')</th>
                                <th scope="col" class="d-none d-sm-none d-md-none d-lg-table-cell">@lang('app.description')</th>
                                <th scope="col">@lang('app.video_filename')</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($videos as $video)
                                <tr>
                                    <th scope="row">{{ $video->id }}</th>
                                    <td class="d-none d-sm-none d-md-table-cell">{{ $video->movie_id }}</td>
                                    <td>{{ Str::title($video->title) }}</td>
                                    <td class="d-none d-sm-none d-md-none d-lg-table-cell">{{ $video->hours }}</td>
                                    <td class="d-none d-sm-none d-md-none d-lg-table-cell">{{ Str::limit($video->description, 30, ' (...)') }}</td>
                                    <td>{{ $video->video_filename }}</td>
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
