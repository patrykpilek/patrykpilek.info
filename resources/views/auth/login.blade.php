@extends('layouts.app')

@section('title', __('app.login'))

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-12 col-md-10 col-lg-8 col-xl-6">
            <div class="card">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="card-body">
                        <h4 class="text-center mb-3">@lang('app.login')</h4>
                        <div class="form-group">
                            <label for="email">@lang('app.email_address')</label>
                            <input id="email" type="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">@lang('app.password')</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group row align-items-center">
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 py-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        @lang('app.remember_me')
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                                <button type="submit" class="btn btn-outline-secondary btn-block">@lang('app.login')</button>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer bg-white">
                        <div class="form-group mb-0">
                            <div class="nav-scroller py-2">
                                <nav class="nav d-flex justify-content-between">
                                    <a class="p-2 text-muted" href="{{ route('password.request') }}">@lang('app.forgot_password')?</a>
                                    <a class="p-2 text-muted" href="{{ route('register') }}">@lang('app.dont_have_account')</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
