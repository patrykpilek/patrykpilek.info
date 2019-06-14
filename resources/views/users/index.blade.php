@extends('komunikator.index')

@section('title', 'Users')

@section('komunikator')
    <div class="row">
        @foreach($users as $user)
            @if(Auth::user()->isNotTheUser($user))
                <div class="col-md-3 pb-2">
                    <div class="card">
                        <img src="{{ $user->avatar }}" class="card-img-top" alt="{{ $user->username }}">
                        <div class="card-body">
                            <p>{{ $user->username }}</p>
                            @if(Auth::user()->isFollowing($user))
                                <a href="{{ route('users.unfollow', $user) }}" class="btn btn-primary">Nie obserwuj</a>
                            @else
                                <a href="{{ route('users.follow', $user) }}" class="btn btn-success">Obserwuj</a>
                            @endif
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
@endsection