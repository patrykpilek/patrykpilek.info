@extends('layouts.app')

@section('title', 'Rejestracja')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group ">
                                <label for="username">{{ __('Nazwa Uzytkownika') }}</label>

                                <input id="username" type="text"
                                       class="form-control @error('username') is-invalid @enderror" name="username"
                                       value="{{ old('username') }}" required autocomplete="name" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">{{ __('Adres e-mail') }}</label>

                                <input id="email" type="email"
                                       aria-describedby="emailHelp"
                                       class="form-control @error('email') is-invalid @enderror" name="email"
                                       value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                                <small id="emailHelp" class="form-text text-muted">Nigdy nie udostępnimy twojego adresu e-maila innym osobom.</small>
                            </div>

                            <div class="form-group ">
                                <label for="password">{{ __('Haslo') }}</label>

                                <input id="password" type="password"
                                       aria-describedby="passwordHelp"
                                       class="form-control @error('password') is-invalid @enderror" name="password"
                                       required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                                <small id="passwordHelp" class="form-text text-muted">Użyj co najmniej 8 znaków.</small>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm">{{ __('Powtorz haslo') }}</label>

                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-outline-secondary btn-block">
                                {{ __('Zaloz Konto') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
