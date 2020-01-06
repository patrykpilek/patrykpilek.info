<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/jasnyBootstrap/jasny-bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/css/tempusdominus-bootstrap-4.min.css" />
</head>
<body>
    <button id="backToTop" title="Go to top"></button>

    <div class="container">
        <header class="logo-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                @guest
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 pt-1">
                        <a class="btn btn-sm btn-outline-secondary" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 text-center">
                        <a class="logo-header-logo text-dark" href="{{ url('/') }}">{{ config('app.name') }}</a>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 d-flex justify-content-end align-items-center">
                        <a class="btn btn-sm btn-outline-secondary" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </div>
                @else
                    <div class="col-6 text-left">
                        <a class="logo-header-logo text-dark" href="{{ url('/')  }}">{{ config('app.name') }}</a>
                    </div>
                    <div class="col-6 d-flex justify-content-end align-items-center">
                        <div class="dropdown">
                            <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->username }} <span class="caret"></span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{ route('users.view', Auth::user()) }}">
                                    Profile
                                </a>
                                <a class="dropdown-item" href="{{ route('movies.index') }}">
                                    Movies
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                @endguest
            </div>
        </header>
        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
                <a class="p-2 text-muted" href="{{ url('/') }}">Movies</a>
                <a class="p-2 text-muted" href="{{ route('messenger') }}">Messenger</a>
            </nav>
        </div>

        @include('partials.alert')

    </div>

    <main class="py-4">
        @yield('content')
    </main>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ asset('js/plugins/jasnyBootstrap/jasny-bootstrap.min.js') }}" ></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js" integrity="sha256-2Pjr1OlpZMY6qesJM68t2v39t+lMLvxwpa8QlRjJroA=" crossorigin="anonymous"></script>

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
            'user' => [
                'id' => Auth::check() ? Auth::user()->id : null,
                'following' => Auth::check() ? Auth::user()->following()->pluck('users.id') : null,
            ],
        ]);
        ?>
    </script>
    @stack('scripts')
</body>
</html>
