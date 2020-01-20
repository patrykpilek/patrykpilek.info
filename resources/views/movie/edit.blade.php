@extends('layouts.app')

@section('title', __('app.edit') . Str::title($movie->title) )

@section('content')
    <div class="container">
        <div class="card">
            <form action="{{ route('movies.update', $movie) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <div class="card-header bg-white">
                    @lang('app.edit') "{{ Str::title($movie->title) }}"
                    <div class="float-right">
                        <a href="{{ route('movies.index') }}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-backward"></i>&nbsp;@lang('app.back')</a>
                    </div>
                </div>

                <div class="card-body">
                    @include('movie._form')
                </div>

                <div class="card-footer bg-white">
                    <div class="col-6 offset-3">
                        <button type="submit" class="btn btn-outline-success btn-block">@lang('app.update')</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection

@include('movie.datetimepicker')
