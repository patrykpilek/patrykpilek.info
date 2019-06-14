@extends('komunikator.index')

@section('title', 'Followers')

@section('komunikator')
    @if(Auth::user()->followers->count())
        <h4>Obserwujący</h4>
    @else
        <h4>Nie masz obserwujący</h4>
    @endif
    <hr>
    @foreach($followers as $user)
        <span><a href="{{ route('users.view', $user) }}" class="btn btn-sm btn-outline-success">{{ $user->username }}</a></span>
    @endforeach
@endsection