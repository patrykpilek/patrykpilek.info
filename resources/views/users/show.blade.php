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
                <h3>Wiadomość:</h3>
                <hr>
                @foreach($user->posts as $post)
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <h5 class="mt-0"><strong>{{ $post->body }}</strong></h5>
                                    <p class="mb-0">{{ $post->created_at }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </div>
@endsection
