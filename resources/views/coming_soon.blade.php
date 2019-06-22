<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Patryk Pilek">

        <title>Coming Soon | patrykpilek.info</title>

        <!-- Bootstrap core CSS -->
        <link href="coming_soon/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
        <link href="coming_soon/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

        <!-- Custom styles for this template -->
        <link href="coming_soon/css/coming-soon.css" rel="stylesheet">

    </head>

    <body>

        <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="coming_soon/mp4/fado.mp4" type="video/mp4">
        </video>

        <div class="masthead">
            <div class="masthead-bg"></div>
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 my-auto">
                        <div class="masthead-content text-white py-5 py-md-0">
                            <h1 class="mb-3">Coming Soon!</h1>
                            <p class="mb-5">I am working hard to finish the development of this site. Target launch date is
                                <strong>January 2020</strong>! Sign up for updates using the form below!</p>
                            <div class="input-group input-group-newsletter">
                                <input type="email" class="form-control" placeholder="Enter email..." aria-label="Enter email..." aria-describedby="basic-addon">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary" type="button">Notify Me!</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="social-icons">
            <ul class="list-unstyled text-center mb-0">
                <li class="list-unstyled-item">
                    <a href="{{ route('movies') }}">
                        <i class="fas fa-film"></i>
                    </a>
                </li>
                <li class="list-unstyled-item">
                    <a href="{{ route('messenger') }}">
                        <i class="far fa-comments"></i>
                    </a>
                </li>
                <li class="list-unstyled-item">
                    <a href="https://twitter.com/PatrykPilek">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li class="list-unstyled-item">
                    <a href="https://www.youtube.com/channel/UCVZykydwdOKQZigRrV4aaEA/videos">
                        <i class="fab fa-youtube"></i>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Bootstrap core JavaScript -->
        <script src="coming_soon/vendor/jquery/jquery.min.js"></script>
        <script src="coming_soon/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Custom scripts for this template -->
        <script src="coming_soon/js/coming-soon.js"></script>

    </body>

</html>
