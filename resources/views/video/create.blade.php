@extends('layouts.app')

@section('title', __('app.create_video'))

@section('content')

    <div class="container">
        <div class="card">
            <form action="{{ route('videos.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="card-header bg-white">
                    @lang('app.add_video')
                    <div class="float-right">
                        <a href="{{ route('movies.index') }}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-backward"></i>&nbsp;@lang('app.back')</a>
                    </div>
                </div>
                <div class="card-body">

                    @include('video._form')

                </div>
                <div class="card-footer bg-white">
                    <div class="col-6 offset-3">
                        <button type="submit" class="btn btn-outline-success btn-block">@lang('app.save_video')</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
