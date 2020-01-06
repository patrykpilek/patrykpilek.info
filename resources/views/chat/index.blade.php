@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 mb-2">
                <div class="card">
                    <img src="{{ Auth::user()->image }}" class="card-img-top" alt="{{ Auth::user()->username }}">
                    <div class="card-body">
                        <h4 class="card-title">{{ Auth::user()->username }}</h4>
                        <p class="card-text">{{ Auth::user()->email }}</p>

                        <ul class="list-group list-group-flush">
                            <a href="{{ route('messenger') }}" class="text-muted nounderline" >
                                <li class="list-group-item d-flex justify-content-between align-items-center {{ Request::is('messenger') ? 'active' : '' }}">
                                    Wiadomosci
                                </li>
                            </a>
                            <a href="{{ route('following') }}" class="text-muted nounderline" >
                                <li class="list-group-item d-flex justify-content-between align-items-center {{ Request::is('following') ? 'active' : '' }}">
                                    Podążający
                                    <span class="badge badge-dark badge-pill">{{ Auth::user()->following->count() }}</span>
                                </li>
                            </a>
                            <a href="{{ route('followers') }}" class="text-muted nounderline" >
                                <li class="list-group-item d-flex justify-content-between align-items-center {{ Request::is('followers') ? 'active' : '' }}">
                                    Obserwujący
                                    <span class="badge badge-dark badge-pill">{{ Auth::user()->followers->count() }}</span>
                                </li>
                            </a>
                            <a href="{{ route('users.index') }}" class="text-muted nounderline" >
                                <li class="list-group-item d-flex justify-content-between align-items-center {{ Request::is('users') ? 'active' : '' }}">
                                    Wszyscy użytkownicy
                                    <span class="badge badge-dark badge-pill">{{ $users->count() - 1 }}</span>
                                </li>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                @yield('messenger')
            </div>
        </div>
    </div>

@endsection
