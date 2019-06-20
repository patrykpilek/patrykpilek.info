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
                                    <img src="{{ $user->image }}" alt="{{ $user->username }}">
                                </div>
                                <div class="fileinput-preview fileinput-exists img-thumbnail user-avatar"></div>
                                <div>
                                    <span class="btn btn-outline btn-success btn-file">
                                        <span class="fileinput-new">Wybierz zdjecie</span>
                                        <span class="fileinput-exists">Zmien</span>
                                        <input type="file" name="avatar">
                                    </span>
                                    <a href="#" class="btn btn-outline btn-danger fileinput-exists" data-dismiss="fileinput">Usun</a>
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
                            <h4 class="alert-heading">Super!!!</h4>
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
                                <label for="username">Nazwa Uzytkownika</label>

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
                                <label for="email">Adres e-mail</label>

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
                                <label for="password">Haslo</label>

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
                                <label for="password-confirm">Powtorz haslo</label>
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" autocomplete="new-password">
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-block">Zapisz Zmiany</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form action="{{ route('users.destroy', $user) }}" method="post">
            @method('DELETE')
            @csrf

            <div class="row mt-3">
                <div class="col-md-6 offset-md-6">
                    <div class="card mb-2 text-center">
                        <div class="card-body">
                            <p><strong class="text-danger">Usuń konto</strong></p>
                            <p>Po usunięciu konta nie ma powrotu.
                                <br>Wszystkie twoje wiadomości zostaną usunięte.
                                <br>Proszę się upewnić.</p>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-outline-danger">Usuń swoje konto</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection