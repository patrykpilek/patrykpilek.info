@extends('layouts.app')

@section('title', 'Create Video')

@section('content')

    <div class="container">
        <div class="card">
            <form action="{{ route('videos.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="card-header bg-white">
                    Add Video
                    <div class="float-right">
                        <a href="{{ route('movies.index') }}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-backward"></i>&nbsp;Back</a>
                    </div>
                </div>
                <div class="card-body">

                    @include('video._form')

                </div>
                <div class="card-footer bg-white">
                    <div class="col-6 offset-3">
                        <button type="submit" class="btn btn-outline-success btn-block">Save Video</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
