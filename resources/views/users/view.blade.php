@extends('layouts.app')

@section('title', $user->username)

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-2">
                <div class="card">
                    <img src="{{ $user->image }}" class="card-img-top" alt="{{ $user->username }}">
                    <div class="card-body">
                        <h4 class="card-title">{{ $user->username }}</h4>
                        <p class="card-text">{{ $user->email }}</p>
                        @if(Auth::user()->isNotTheUser($user))
                            @if(Auth::user()->isFollowing($user))
                                <a href="{{ route('users.unfollow', $user) }}" class="btn btn-primary">Nie obserwuj</a>
                            @else
                                <a href="{{ route('users.follow', $user) }}" class="btn btn-success">Obserwuj</a>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <h3>Wszystkie wiadomosci:</h3>
                <hr>
                @foreach($user->posts as $post)
                    <div>
                        <div class="lead">{{ $post->body }}</div>
                        <div class="text-muted">{{ $post->created_at }}</div>
                        <hr>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
