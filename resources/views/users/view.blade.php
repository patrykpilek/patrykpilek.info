@extends('layouts.app')

@section('title', 'Your Profile')

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
                                        <span class="fileinput-new">Select Image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="avatar">
                                    </span>
                                    <a href="#" class="btn btn-sm btn-outline btn-outline-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
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
                            <h4 class="alert-heading">Error!</h4>
                            <hr>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group ">
                                <label for="username">{{ __('Username') }}</label>

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
                                <label for="email">{{ __('E-Mail Address') }}</label>

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
                                <label for="password">{{ __('Password') }}</label>

                                <input id="password" type="password"
                                       aria-describedby="passwordHelp"
                                       class="form-control @error('password') is-invalid @enderror" name="password" >

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <small id="passwordHelp" class="form-text text-muted">Use at least 8 characters.</small>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" >
                            </div>
                        </div>

                        <div class="card-footer bg-white">
                            <button type="submit" class=" btn btn-outline-success btn-block">{{ __('Update') }}</button>
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
                            <p><strong class="text-danger">{{ __('Delete your account') }}</strong></p>
                            <p>{{ __('There is no return after deleting the account.') }}
                                <br>{{ __('All your messages will be deleted.') }}
                                <br>{{ __('Please make sure.') }}
                            </p>
                        </div>
                        <div class="card-footer bg-white">
                            <button type="submit" class="btn btn-outline-danger">{{ __('Delete account') }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
