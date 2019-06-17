@extends('layouts.app')

@section('title', 'Wiadomosci')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 mb-2">
                <div class="card">
                    <img src="{{ $user->image }}" class="card-img-top" alt="{{ $user->username }}">
                    <div class="card-body">
                        <h4 class="card-title">{{ $user->username }}</h4>
                        <p class="card-text">{{ $user->email }}</p>
                        <div class="text-center">
                            <div class="list-group" id="list-tab" role="tablist">
                                <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center active" id="list-wiadomosci-list" data-toggle="list" href="#list-wiadomosci" role="tab" aria-controls="wiadomosci">
                                    Wiadomosci
                                </a>
                                <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" id="list-podazajacy-list" data-toggle="list" href="#list-podazajacy" role="tab" aria-controls="podazajacy">
                                    Podążający
                                    <span class="badge badge-dark badge-pill">{{ $following->count() }}</span>
                                </a>
                                <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" id="list-obserwujacy-list" data-toggle="list" href="#list-obserwujacy" role="tab" aria-controls="obserwujacy">
                                    Obserwujący
                                    <span class="badge badge-dark badge-pill">{{ $followers->count() }}</span>
                                </a>
                                <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" id="list-wszyscy_uzytkownicy-list" data-toggle="list" href="#list-wszyscy_uzytkownicy" role="tab" aria-controls="wszyscy_uzytkownicy">
                                    Wszyscy użytkownicy
                                    <span class="badge badge-dark badge-pill">{{ $users->count() }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-wiadomosci" role="tabpanel" aria-labelledby="list-wiadomosci-list">
                        <div id="root"></div>
                    </div>
                    <div class="tab-pane fade" id="list-podazajacy" role="tabpanel" aria-labelledby="list-podazajacy-list">
                        <section id="authors" class="my-5 text-center">
                            <div class="row">
                                <div class="col">
                                    <div class="info-header mb-5">
                                        <h1 class="text-black-50 pb-3">
                                            @if($following->count())
                                                Podążający <span class="badge badge-secondary">{{ $following->count() }}</span>
                                            @else
                                                Nie masz podążających
                                            @endif
                                        </h1>
                                        <hr>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                @foreach($following as $user)
                                    <div class="col-lg-3 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <a href="{{ route('users.view', $user) }}" class="btn">
                                                    <img src="{{ $user->image }}" alt="" class="img-fluid rounded-circle wszyscy_urzytkownicy mb-3">
                                                    <h6 class="text-muted">{{ $user->username }}</h6>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </section>
                    </div>
                    <div class="tab-pane fade" id="list-obserwujacy" role="tabpanel" aria-labelledby="list-obserwujacy-list">
                        <section id="authors" class="my-5 text-center">
                            <div class="row">
                                <div class="col">
                                    <div class="info-header mb-5">
                                        <h1 class="text-black-50 pb-3">
                                            @if($followers->count())
                                                Obserwujący <span class="badge badge-secondary">{{ $followers->count() }}</span>
                                            @else
                                                Nie masz obserwujący
                                            @endif
                                        </h1>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                @foreach($followers as $user)
                                    <div class="col-lg-3 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <a href="{{ route('users.view', $user) }}" class="btn">
                                                    <img src="{{ $user->image }}" alt="" class="img-fluid rounded-circle wszyscy_urzytkownicy mb-3">
                                                    <h6 class="text-muted">{{ $user->username }}</h6>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </section>
                    </div>
                    <div class="tab-pane fade" id="list-wszyscy_uzytkownicy" role="tabpanel" aria-labelledby="list-wszyscy_uzytkownicy-list">
                        <section id="staff" class="py-5 text-center">
                            <div class="container">
                                <h1 class="text-black-50 pb-3">
                                    Wszyscy użytkownicy <span class="badge badge-secondary">{{ $users->count() }}</span>
                                </h1>
                                <hr>
                                <div class="row">
                                    @foreach($users as $user)
                                        @if(Auth::user()->isNotTheUser($user))
                                            <div class="col-md-3">
                                                <img src="{{ $user->image }}" alt="{{ $user->username }}" class="img-fluid rounded-circle mb-2 wszyscy_urzytkownicy">
                                                <h4>{{ $user->username }}</h4>
                                                @if(Auth::user()->isFollowing($user))
                                                    <a href="{{ route('users.unfollow', $user) }}" class="btn btn-primary btn-sm">Nie obserwuj</a>
                                                @else
                                                    <a href="{{ route('users.follow', $user) }}" class="btn btn-success btn-sm">Obserwuj</a>
                                                @endif
                                            </div>
                                        @endif
                                    @endforeach

                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <footer class="text-muted">
            <div class="container">
                <p class="float-right">
                    <a href="#" class="btn">Back to top</a>
                </p>
            </div>
        </footer>
    </div>

@endsection
