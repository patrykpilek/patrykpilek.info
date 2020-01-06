@extends('layouts.app')

@section('title', 'Add Movie')

@section('content')
    <div class="container">
        <div class="card">
            <form action="{{ route('movies.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="card-header bg-white">
                    Add Movie
                    <div class="float-right">
                        <a href="{{ route('movies.index') }}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-backward"></i>&nbsp;Back</a>
                    </div>
                </div>

                <div class="card-body">
                    @include('movie._form')
                </div>

                <div class="card-footer bg-white">
                    <div class="col-6 offset-3">
                        <button type="submit" class="btn btn-outline-success btn-block">Create</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection

@include('movie.datetimepicker')
