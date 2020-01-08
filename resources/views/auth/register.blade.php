@extends('layouts.app')

@section('title', __('app.register'))

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6">
                <div class="card">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="card-body">
                            <h4 class="text-center mb-3">@lang('app.register')</h4>
                            <div class="form-group ">
                                <label for="username">@lang('app.username')</label>

                                <input id="username" type="text"
                                       class="form-control @error('username') is-invalid @enderror" name="username"
                                       value="{{ old('username') }}" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">@lang('app.email_address')</label>

                                <input id="email" type="email"
                                       class="form-control @error('email') is-invalid @enderror" name="email"
                                       value="{{ old('email') }}">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group ">
                                <label for="password">@lang('app.password')</label>

                                <input id="password" type="password"
                                       aria-describedby="passwordHelp"
                                       class="form-control @error('password') is-invalid @enderror" name="password" >

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <small id="passwordHelp" class="form-text text-muted">@lang('app.use_at_least_8_characters').</small>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm">@lang('app.confirm_password')</label>

                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" >
                            </div>
                        </div>

                        <div class="card-footer bg-white">
                            <button type="submit" class="btn btn-outline-secondary btn-block">
                                @lang('app.register')
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
