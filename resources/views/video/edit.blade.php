@extends('layouts.app')

@section('title', __('app.edit_video'))

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header bg-white">
                @lang('app.edit_video')
                <div class="float-right">
                    <a href="{{ route('videos.index') }}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-backward"></i>&nbsp;@lang('app.back')</a>
                </div>
            </div>
            <form action="{{ route('videos.update', $video) }}" method="POST">
                @method('PUT')
                @csrf

                @include('video._form')

                <div class="card-footer bg-white">
                    <div class="col-6 offset-3">
                        <button type="submit" class="btn btn-outline-success btn-block">@lang('app.update_video')</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
