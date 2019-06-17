@extends('layouts.app')

@section('title', 'Update User Avatar')

@section('content')
    <div class="container">

            <div class="row justify-content-center">
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
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="{{ route('update.avatar') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="fileinput fileinput-new {{ $errors->has('image') ? ' is-invalid' : '' }}" data-provides="fileinput">
                                    <div class="fileinput-new img-thumbnail" style="width: 350px; height: 300px;">
                                        <img src="{{ $user->image }}"  alt="{{ $user->username }}">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 350px; max-height: 300px;"></div>
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
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-block">Zapisz</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

@endsection