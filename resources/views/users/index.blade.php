@extends('layouts.app')

@section('title', 'Twoj profil')

@section('content')
    <div class="container">
        <form action="{{ route('users.update', $user) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-2">
                        <div class="card-body text-center">
                            <div class="fileinput fileinput-new {{ $errors->has('image') ? ' is-invalid' : '' }}" data-provides="fileinput">
                                <div class="fileinput-new img-thumbnail user-avatar">
                                    <img class="user-avatar" src="{{ $user->image }}" alt="{{ $user->username }}">
                                </div>
                                <div class="fileinput-preview fileinput-exists img-thumbnail user-avatar"></div>
                                <div>
                                    <span class="btn btn-outline btn-outline-success btn-file">
                                        <span class="fileinput-new">Wybierz zdjęcie</span>
                                        <span class="fileinput-exists">Zmień</span>
                                        <input type="file" name="avatar">
                                    </span>
                                    <a href="#" class="btn btn-outline btn-outline-danger fileinput-exists" data-dismiss="fileinput">Usuń</a>
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
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <h4 class="alert-heading">Zrobione!!!</h4>
                            <hr>
                            <p class="mb-0">{{ $message }}</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    @if (count($errors) > 0)
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <h4 class="alert-heading">Cos jest nie tak</h4>
                            <hr>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group ">
                                <label for="username">Nazwa Użytkownika</label>

                                <input id="username" type="text"
                                       class="form-control @error('username') is-invalid @enderror" name="username"
                                       value="{{ $user->username ?: old('username') }}" required autocomplete="name" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">Adres E-mail</label>

                                <input id="email" type="email"
                                       aria-describedby="emailHelp"
                                       class="form-control @error('email') is-invalid @enderror" name="email"
                                       value="{{ $user->email ?: old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <small id="emailHelp" class="form-text text-muted">Nigdy nie udostępnimy twojego adresu e-maila innym osobom.</small>
                            </div>

                            <div class="form-group ">
                                <label for="password">Hasło</label>

                                <input id="password" type="password"
                                       aria-describedby="passwordHelp"
                                       class="form-control @error('password') is-invalid @enderror" name="password"
                                       autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <small id="passwordHelp" class="form-text text-muted">Użyj co najmniej 8 znaków.</small>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm">Potwierdź Hasło</label>
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" autocomplete="new-password">
                            </div>
                        </div>

                        <div class="card-footer bg-white">
                            <button type="submit" class=" btn btn-outline-success btn-block">Zapisz zmiany</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form action="{{ route('users.destroy', $user) }}" method="post">
            @method('DELETE')
            @csrf
            <div class="row ">
                <div class="col-md-8 offset-md-2 mt-3">
                    <div class="card mb-2 text-center">
                        <div class="card-body">
                            <p><strong class="text-danger">Usuń konto</strong></p>
                            <p>Po usunięciu konta nie ma powrotu.
                                <br>Wszystkie twoje wiadomości zostaną usunięte.
                                <br>Proszę się upewnić.</p>
                        </div>
                        <div class="card-footer bg-white">
                            <button type="submit" class="btn btn-outline-danger">Usuń swoje konto</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection