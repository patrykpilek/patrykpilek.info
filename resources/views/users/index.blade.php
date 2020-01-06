@extends('chat.index')

@section('title', 'All Users')

@section('messenger')
    <section id="staff" class="py-5 text-center">
        <div class="container">
            <h1 class="text-black-50 pb-3">
                Users <span class="badge badge-secondary">{{ $users->count() - 1 }}</span>
            </h1>
            <hr>
            <div class="row">
                @foreach($users as $user)
                    @if(Auth::user()->isNotTheUser($user))
                        <div class="col-4 col-sm-4 col-md-3 mb-4">
                            <div class="avatar-status">
                                <img src="{{ $user->image }}" alt="avatar" class="img-circle-small">
                                @if($user->isOnline())
                                    <span class="status-online bottomRight">&nbsp</span>
                                @else
                                    <span class="status-offline bottomRight">&nbsp</span>
                                @endif
                            </div>
                            <h6>{{ $user->username }}</h6>
                            @if(Auth::user()->isFollowing($user))
                                <a href="{{ route('users.unfollow', $user) }}" class="btn btn-primary btn-sm">Unfollow</a>
                            @else
                                <a href="{{ route('users.follow', $user) }}" class="btn btn-success btn-sm">Follow</a>
                            @endif
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@endsection
