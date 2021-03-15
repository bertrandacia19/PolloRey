<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.5.3/united/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="/assets/css/styles.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style>
    @yield('estilo')
</style>
    <style>
        @import '~bootstrap/dist/css/bootstrap.min.css';
        .footer-dark {
            width: 100%;
            padding: 25px;
            color: #f0f9ff;
            background-color: #282d32;
            text-align: center;
        }

        html {
            min-height: 100%;
            position: relative;
        }

        body {
            max-height: 100%;
            height: 100%;
        }

    </style>
    <title>@yield('titulo')</title>
</head>

<body>
    <div class="container">
        <header>
            <!-- Start: Navigation Clean -->
            <nav class="navbar navbar-light navbar-expand-md navigation-clean">
                <div class="container"><a class="navbar-brand" href="/"
                        style="height: 38px;font-size: 30px;">Inicio</a><button data-toggle="collapse"
                        class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle
                            navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item"><a class="nav-link" data-bs-hover-animate="swing" href="/recetas"
                                    style="font-size: 20px;font-family: 'Source Sans Pro', sans-serif;">Recetas</a></li>

                            <li class="nav-item dropdown" data-bs-hover-animate="swing"><a
                                    class="dropdown-toggle nav-link" aria-expanded="false" data-bs-hover-animate="swing"
                                    href="/producto" style="font-size: 20px;">Productos</a>
                                <div class="dropdown-menu"><a class="dropdown-item" href="/producto">Frescos</a><a
                                        class="dropdown-item" href="/producto">Second
                                        Item</a><a class="dropdown-item" href="/producto">Third Item</a></div>
                            </li>
                        </ul>
                    </div><a data-bs-hover-animate="bounce" href="/contacto" style="font-size: 20px;">Contacto</a>
                    <a href="https://www.facebook.com/polloreyca"><i class="fab fa-facebook-square"
                            style="margin: 8px"></i></a>
                    <a href="https://www.instagram.com/polloreyca/"><i class="fab fa-instagram-square"
                            style="margin: 8px"></i></a>
                    <a href="#"><i class="fas fa-envelope" style="margin: 8px"></i></a>
                </div>
            </nav><!-- End: Navigation Clean -->
        </header><!-- Start: Projects Horizontal -->
        @yield('Contenido')
    </div>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <text>Desarrollo de Portales Web II &COPY;COMEDERA TECHNOLOGY</text>
            </div>
        </footer>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>
