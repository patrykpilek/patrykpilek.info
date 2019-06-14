@extends('komunikator.index')

@section('title', 'Following')

@section('komunikator')
    @if(Auth::user()->following->count())
        <h4>Podążający</h4>
    @else
        <h4>Nie masz podążających</h4>
    @endif
    <hr>
    @foreach($following as $user)
        <span><a href="{{ route('users.view', $user) }}" class="btn btn-sm btn-outline-primary">{{ $user->username }}</a></span>
    @endforeach
@endsection