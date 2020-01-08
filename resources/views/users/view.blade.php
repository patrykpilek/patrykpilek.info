@extends('layouts.app')

@section('title', __('app.your_profile'))

@section('content')
    <div class="container">
        <form action="{{ route('users.update', $user) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="fileinput fileinput-new {{ $errors->has('image') ? ' is-invalid' : '' }}" data-provides="fileinput">
                                <div class="fileinput-new img-thumbnail user-avatar">
                                    <img class="user-avatar" src="{{ $user->image }}" alt="{{ $user->username }}">
                                </div>
                                <div class="fileinput-preview fileinput-exists img-thumbnail user-avatar"></div>
                                <div class="mt-2">
                                    <span class="btn btn-sm btn-outline btn-outline-success btn-file">
                                        <span class="fileinput-new">@lang('app.select_image')</span>
                                        <span class="fileinput-exists">@lang('app.change')</span>
                                        <input type="file" name="avatar">
                                    </span>
                                    <a href="#" class="btn btn-sm btn-outline btn-outline-danger fileinput-exists" data-dismiss="fileinput">@lang('app.remove')</a>
                                </div>
                            </div>
                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <h4 class="alert-heading">@lang('app.error')!</h4>
                            <hr>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group ">
                                <label for="username">@lang('app.username')</label>

                                <input id="username" type="text"
                                       class="form-control @error('username') is-invalid @enderror" name="username"
                                       value="{{ $user->username ?: old('username') }}" autofocus>

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
                                       value="{{ $user->email ?: old('email') }}" >

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
                                <small id="passwordHelp" class="form-text text-muted">@lang('app.use_at_least_8_characters')</small>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm">@lang('app.confirm_password')</label>
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" >
                            </div>
                        </div>

                        <div class="card-footer bg-white">
                            <button type="submit" class=" btn btn-outline-success btn-block">@lang('app.update')</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form action="{{ route('users.destroy', $user) }}" method="post">
            @method('DELETE')
            @csrf
            <div class="row">
                <div class="col-md-6 offset-md-6">
                    <div class="card mb-2 text-center">
                        <div class="card-body">
                            <p><strong class="text-danger">@lang('app.delete_your_account')</strong></p>
                            <p>@lang('app.there_is_no_return_after_deleting_the_account')
                                <br>@lang('app.all_your_messages_will_be_deleted')
                                <br>@lang('app.please_make_sure')
                            </p>
                        </div>
                        <div class="card-footer bg-white">
                            <button type="submit" class="btn btn-outline-danger">@lang('app.delete_account')</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
