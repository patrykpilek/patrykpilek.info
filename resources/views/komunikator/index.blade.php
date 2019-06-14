@extends('layouts.app')

@section('title', 'Komunikator')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="{{ route('komunikator') }}" class="btn">Komunikator</a></li>
                    <li class="list-group-item"><a href="{{ route('users') }}" class="btn">Wszyscy uzytkownicy</a></li>
                    <li class="list-group-item"><a href="{{ route('following') }}" class="btn">Podążający</a></li>
                    <li class="list-group-item"><a href="{{ route('followers') }}" class="btn">Obserwujący</a></li>
                </ul>
            </div>
            <div class="col-md-8">
                @yield('komunikator')
            </div>
        </div>
    </div>
@endsection
