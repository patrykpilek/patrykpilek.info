@extends('chat.index')

@section('title', __('app.followers'))

@section('messenger')
    <section id="authors" class="my-5 text-center">
        <div class="row">
            <div class="col">
                <div class="info-header mb-5">
                    <h1 class="text-black-50 pb-3">
                        @if(Auth::user()->followers->count())
                            @lang('app.followers') <span class="badge badge-secondary">{{ Auth::user()->followers->count() }}</span>
                        @else
                            @lang('app.you_dont_have_followers')
                        @endif
                    </h1>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach(Auth::user()->followers as $user)
                <div class="col-6 col-sm-4 col-md-4 mb-4">
                    <div class="card">
                        <a href="{{ route('users.show', $user) }}" class="btn">
                            <div class="card-body">
                                <div class="avatar-status">
                                    <img src="{{ $user->image }}" alt="avatar" class="img-circle-small">
                                    @if($user->isOnline())
                                        <span class="status-online bottomRight">&nbsp</span>
                                    @else
                                        <span class="status-offline bottomRight">&nbsp</span>
                                    @endif
                                </div>
                                <h6 class="text-muted">{{ $user->username }}</h6>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
