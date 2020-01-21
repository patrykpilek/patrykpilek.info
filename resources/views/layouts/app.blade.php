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

</head>
<body>
    <button id="backToTop" title="Go to top"></button>

    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light bg-transparent border-bottom p-0 pt-2">
            <a class="navbar-brand" href="{{ url('/') }}">
                <h2>{{ config('app.name') }}</h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="btn btn-sm btn-outline-secondary" href="{{ route('login') }}">@lang('app.login')</a>
                        </li>

                    @else
                        <li class="nav-item dropdown">

                            <button id="navbarDropdown" class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->username }} <span class="caret"></span>
                            </button>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="{{ route('users.view', Auth::user()) }}">
                                    @lang('app.profile')
                                </a>
                                <a class="dropdown-item" href="{{ route('movies.index') }}">
                                    @lang('app.movies')
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                    @lang('app.logout')
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>

        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
                <a class="p-2 text-muted" href="{{ url('/') }}">@lang('app.movies')</a>
                <a class="p-2 text-muted" href="{{ url('streams') }}">Streams</a>
                <a class="p-2 text-muted" href="{{ route('messenger') }}">@lang('app.messenger')</a>
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link text-muted" href="{{ url('lang/en') }}">EN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-muted" href="{{ url('lang/pl') }}">PL</a>
                    </li>
                </ul>
            </nav>
        </div>

        @include('partials.alert')

    </div>

    <main class="py-4">
        @yield('content')
    </main>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>

    <script type="text/javascript">
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
