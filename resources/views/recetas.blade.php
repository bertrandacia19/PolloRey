@extends('plantilla')

@section('Contenido')
    <div class="projects-horizontal">
        <div class="container">
            <!-- Start: Intro -->
            <div class="intro">
                <h2 class="text-center">Las Mejores Recetas Pollo Rey</h2>
                <p class="text-center"><br>Las recetas no funcionan a menos que utilices tu corazón. Dylan Jones<br><br></p>
            </div><!-- End: Intro -->
            <!-- Start: Projects -->
            <div class="row projects">
                <div class="col-sm-6 item">
                    <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid"
                                src="{{ URL::asset('assets/img/Wrap-de-pollo.png') }}" width="200" height="200"></a></div>
                    <div class="row">
                        <div class="col">
                            <h3 class="name"><a>Receta de Wrap de Pollo</a><br><br></h3>
                            <p class="description">Te presentamos una deliciosa receta con la que podrás disfrutar el pollo
                                desmenuzado en agua de Pollo Rey. <br><br></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid"
                                src="{{URL::asset('assets/img/tostadas-de-pollo-con-barbacoa.png')}}" width="200" height="200"></a></div>
                    <div class="row">
                        <div class="col">
                            <h3 class="name"><a>Receta de Mini Tostadas de Pollo en Barbacoa</a><br><br></h3>
                            <p class="description">Cuando pensamos en tostadas de inmediato imaginamos las recetas típicas
                                de guacamol, salsa o frijoles y si bien son deliciosas<br><br></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid"
                                src="{{ URL::asset('assets/img/Nachos.png') }}" width="200" height="200"></a></div>
                    <div class="row">
                        <div class="col">
                            <h3 class="name"><a>Nachos con Pollo en Barbacoa</a><br><br></h3>
                            <p class="description">Nada como unos nachos cuando tienes antojo de picar algo rico o no tienes
                                ganas de cocinar algo complicado.<br><br></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid"
                                src="{{ URL::asset('assets/img/Huevos-rellenos.png') }}" width="200" height="200"></a></div>
                    <div class="row">
                        <div class="col">
                            <h3 class="name"><a>Huevos rellenos con Ensalada de Pollo</a><br><br></h3>
                            <p class="description">Te traemos una receta ideal para unos bocadillos o una refacción con la
                                que quedarás bien con tus visitas <br><br></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('estilo', 
'
html {
    font-family: sans-serif;
    line-height: 1.15;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: transparent;
  }
  
  img {
    width: 100%;
    height: 320px;
  }
  
  .projects-horizontal {
    color: #313437;
    background-color: #fff;
  }
  
  .projects-horizontal p {
    color: #7d8285;
  }
  
  .projects-horizontal h2 {
    font-weight: bold;
    margin-bottom: 40px;
    padding-top: 40px;
    color: inherit;
  }
  
  
  @media (max-width:767px) {
    .projects-horizontal h2 {
      margin-bottom: 25px;
      padding-top: 25px;
      font-size: 24px;
    }
  }
  
  .projects-horizontal .intro {
    font-size: 16px;
    max-width: 500px;
    margin: 0 auto 10px;
  }
  
  .projects-horizontal .projects {
    padding-bottom: 40px;
  }
  
  .projects-horizontal .item {
    padding-top: 60px;
    min-height: 160px;
  }
  
  @media (max-width:767px) {
    .projects-horizontal .item {
      padding-top: 40px;
      min-height: 160px;
    }
  }
  
  .projects-horizontal .item .name {
    font-size: 18px;
    font-weight: bold;
    margin-top: 10px;
    margin-bottom: 15px;
    color: inherit;
  }
  
  @media (max-width:991px) {
    .projects-horizontal .item .name {
      margin-top: 22px;
    }
  }
  
  .projects-horizontal .item .description {
    font-size: 15px;
    margin-bottom: 0;
  }
  
  .navigation-clean {
    background: #fff;
    padding-top: .75rem;
    padding-bottom: .75rem;
    color: #333;
    border-radius: 0;
    box-shadow: none;
    border: none;
    margin-bottom: 0;
  }
  
  @media (min-width:768px) {
    .navigation-clean {
      padding-top: 1rem;
      padding-bottom: 1rem;
    }
  }
  
  .navigation-clean .navbar-brand {
    font-weight: bold;
    color: inherit;
  }
  
  .navigation-clean .navbar-brand:hover {
    color: #222;
  }
  
  .navigation-clean.navbar-dark .navbar-brand:hover {
    color: #f0f0f0;
  }
  
  .navigation-clean .navbar-brand img {
    height: 100%;
    display: inline-block;
    margin-right: 10px;
    width: auto;
  }
  
  .navigation-clean .navbar-toggler {
    border-color: #ddd;
  }
  
  .navigation-clean .navbar-toggler:hover, .navigation-clean .navbar-toggler:focus {
    background: none;
  }
  
  .navigation-clean.navbar-dark .navbar-toggler {
    border-color: #555;
  }
  
  .navigation-clean .navbar-toggler {
    color: #888;
  }
  
  .navigation-clean.navbar-dark .navbar-toggler {
    color: #eee;
  }
  
  .navigation-clean .navbar-collapse, .navigation-clean .form-inline {
    border-top-color: #ddd;
  }
  
  .navigation-clean.navbar-dark .navbar-collapse, .navigation-clean.navbar-dark .form-inline {
    border-top-color: #333;
  }
  
  .navigation-clean .navbar-nav > .active > a, .navigation-clean .navbar-nav > .show > a {
    background: none;
    box-shadow: none;
  }
  
  .navigation-clean.navbar-light .navbar-nav .nav-link.active, .navigation-clean.navbar-light .navbar-nav .nav-link.active:focus, .navigation-clean.navbar-light .navbar-nav .nav-link.active:hover {
    color: #8f8f8f;
    box-shadow: none;
    background: none;
    pointer-events: none;
  }
  
  .navigation-clean.navbar .navbar-nav .nav-link {
    padding-left: 18px;
    padding-right: 18px;
  }
  
  .navigation-clean.navbar-light .navbar-nav .nav-link {
    color: #465765;
  }
  
  .navigation-clean.navbar-light .navbar-nav .nav-link:focus, .navigation-clean.navbar-light .navbar-nav .nav-link:hover {
    color: #37434d !important;
    background-color: transparent;
  }
  
  .navigation-clean .navbar-nav > li > .dropdown-menu {
    margin-top: -5px;
    box-shadow: none;
    background-color: #fff;
    border-radius: 2px;
  }
  
  @media (min-width:768px) {
    .navigation-clean .navbar-nav .show .dropdown-menu {
      box-shadow: 0 4px 8px rgba(0,0,0,.1);
    }
  }
  
  @media (max-width:767px) {
    .navigation-clean .navbar-nav .show .dropdown-menu .dropdown-item {
      color: #37434d;
      padding-top: .8rem;
      padding-bottom: .8rem;
      line-height: 1;
    }
  }
  
  .navigation-clean .dropdown-menu .dropdown-item:focus, .navigation-clean .dropdown-menu .dropdown-item {
    line-height: 2;
    color: #37434d;
  }
  
  .navigation-clean .dropdown-menu .dropdown-item:focus, .navigation-clean .dropdown-menu .dropdown-item:hover {
    background: #eee;
    color: inherit;
  }
  
  .navigation-clean.navbar-dark {
    background-color: #1f2021;
    color: #fff;
  }
  
  .navigation-clean.navbar-dark .navbar-nav a.active, .navigation-clean.navbar-dark .navbar-nav a.active:focus, .navigation-clean.navbar-dark .navbar-nav a.active:hover {
    color: #8f8f8f;
    box-shadow: none;
    background: none;
    pointer-events: none;
  }
  
  .navigation-clean.navbar-dark .navbar-nav .nav-link {
    color: #dfe8ee;
  }
  
  .navigation-clean.navbar-dark .navbar-nav .nav-link:focus, .navigation-clean.navbar-dark .navbar-nav .nav-link:hover {
    color: #fff;
    background-color: transparent;
  }
  
  .navigation-clean.navbar-dark .navbar-nav > li > .dropdown-menu {
    background-color: #1f2021;
  }
  
  .navigation-clean.navbar-dark .dropdown-menu .dropdown-item:focus, .navigation-clean.navbar-dark .dropdown-menu .dropdown-item {
    color: #f2f5f8;
  }
  
  .navigation-clean.navbar-dark .dropdown-menu .dropdown-item:focus, .navigation-clean.navbar-dark .dropdown-menu .dropdown-item:hover {
    background: #363739;
  }
  
  @media (max-width:767px) {
    .navigation-clean.navbar-dark .navbar-nav .show .dropdown-menu .dropdown-item {
      color: #fff;
    }
  }
  
  .navigation-clean-button {
    background: #fff;
    padding-top: .75rem;
    padding-bottom: .75rem;
    color: #333;
    border-radius: 0;
    box-shadow: none;
    border: none;
    margin-bottom: 0;
  }
  
  @media (min-width:768px) {
    .navigation-clean-button {
      padding-top: 1rem;
      padding-bottom: 1rem;
    }
  }
  
  .navigation-clean-button .navbar-brand {
    font-weight: bold;
    color: inherit;
  }
  
  .navigation-clean-button .navbar-brand:hover {
    color: #222;
  }
  
  .navigation-clean-button.navbar-dark .navbar-brand:hover {
    color: #f0f0f0;
  }
  
  .navigation-clean-button .navbar-brand img {
    height: 100%;
    display: inline-block;
    margin-right: 10px;
    width: auto;
  }
  
  .navigation-clean-button .navbar-toggler {
    border-color: #ddd;
  }
  
  .navigation-clean-button .navbar-toggler:hover, .navigation-clean-button .navbar-toggler:focus {
    background: none;
  }
  
  .navigation-clean-button.navbar-dark .navbar-toggler {
    border-color: #555;
  }
  
  .navigation-clean-button .navbar-toggler {
    color: #888;
  }
  
  .navigation-clean-button.navbar-dark .navbar-toggler {
    color: #eee;
  }
  
  .navigation-clean-button .navbar-collapse, .navigation-clean-button .form-inline {
    border-top-color: #ddd;
  }
  
  .navigation-clean-button.navbar-dark .navbar-collapse, .navigation-clean-button.navbar-dark .form-inline {
    border-top-color: #333;
  }
  
  .navigation-clean-button .navbar-nav a.active, .navigation-clean-button .navbar-nav > .show > a {
    background: none;
    box-shadow: none;
  }
  
  .navigation-clean-button.navbar-light .navbar-nav a.active, .navigation-clean-button.navbar-light .navbar-nav a.active:focus, .navigation-clean-button.navbar-light .navbar-nav a.active:hover {
    color: #8f8f8f;
    box-shadow: none;
    background: none;
    pointer-events: none;
  }
  
  .navigation-clean-button.navbar .navbar-nav .nav-link {
    padding-left: 18px;
    padding-right: 18px;
  }
  
  .navigation-clean-button.navbar-light .navbar-nav .nav-link {
    color: #465765;
  }
  
  .navigation-clean-button.navbar-light .navbar-nav .nav-link:focus, .navigation-clean-button.navbar-light .navbar-nav .nav-link:hover {
    color: #37434d !important;
    background-color: transparent;
  }
  
  .navigation-clean-button .navbar-nav > li > .dropdown-menu {
    margin-top: -5px;
    box-shadow: 0 4px 8px rgba(0,0,0,.1);
    background-color: #fff;
    border-radius: 2px;
  }
  
  .navigation-clean-button .dropdown-menu .dropdown-item:focus, .navigation-clean-button .dropdown-menu .dropdown-item {
    line-height: 2;
    font-size: 14px;
    color: #37434d;
  }
  
  .navigation-clean-button .dropdown-menu .dropdown-item:focus, .navigation-clean-button .dropdown-menu .dropdown-item:hover {
    background: #eee;
    color: inherit;
  }
  
  @media (max-width:767px) {
    .navigation-clean-button .navbar-nav .show .dropdown-menu {
      box-shadow: none;
    }
  }
  
  @media (max-width:767px) {
    .navigation-clean-button .navbar-nav .show .dropdown-menu .dropdown-item {
      color: #37434d;
      padding-top: 12px;
      padding-bottom: 12px;
      line-height: 1;
    }
  }
  
  .navigation-clean-button.navbar-dark {
    background-color: #1f2021;
    color: #fff;
  }
  
  .navigation-clean-button.navbar-dark .navbar-nav a.active, .navigation-clean-button.navbar-dark .navbar-nav a.active:focus, .navigation-clean-button.navbar-dark .navbar-nav a.active:hover {
    color: #8f8f8f;
    box-shadow: none;
    background: none;
    pointer-events: none;
  }
  
  .navigation-clean-button.navbar-dark .navbar-nav .nav-link {
    color: #dfe8ee;
  }
  
  .navigation-clean-button.navbar-dark .navbar-nav .nav-link:focus, .navigation-clean-button.navbar-dark .navbar-nav .nav-link:hover {
    color: #fff !important;
    background-color: transparent;
  }
  
  .navigation-clean-button.navbar-dark .navbar-nav > li > .dropdown-menu {
    background-color: #1f2021;
  }
  
  .navigation-clean-button.navbar-dark .dropdown-menu .dropdown-item:focus, .navigation-clean-button.navbar-dark .dropdown-menu .dropdown-item {
    color: #f2f5f8;
  }
  
  .navigation-clean-button.navbar-dark .dropdown-menu .dropdown-item:focus, .navigation-clean-button.navbar-dark .dropdown-menu .dropdown-item:hover {
    background: #363739;
  }
  
  @media (max-width:767px) {
    .navigation-clean-button.navbar-dark .navbar-nav .show .dropdown-menu .dropdown-item {
      color: #fff;
    }
  }
  
  .navigation-clean-button .actions .login {
    margin-right: 1rem;
    text-decoration: none;
    color: #465765;
  }
  
  .navigation-clean-button.navbar-dark .actions .login {
    color: #dfe8ee;
  }
  
  .navigation-clean-button.navbar-dark .actions .login:hover {
    color: #fff;
  }
  
  .navigation-clean-button .navbar-text .action-button, .navigation-clean-button .navbar-text .action-button:active, .navigation-clean-button .navbar-text .action-button:hover {
    background: #56c6c6;
    border-radius: 20px;
    font-size: inherit;
    color: #fff;
    box-shadow: none;
    border: none;
    text-shadow: none;
    padding: .5rem 1rem;
    transition: background-color 0.25s;
    font-size: inherit;
  }
  
  .navigation-clean-button .navbar-text .action-button:hover {
    background: #66d7d7;
  }
  
  .navigation-clean-button.navbar-dark .action-button, .navigation-clean-button.navbar-dark .action-button:active {
    background: #208f8f;
  }
  
  .navigation-clean-button.navbar-dark .action-button:hover {
    background: #269d9d;
  }
  
  .header-blue {
    background: linear-gradient(135deg, #172a74, #21a9af);
    background-color: #184e8e;
    padding-bottom: 80px;
    font-family: sans-serif;
  }
  
  @media (min-width:768px) {
    .header-blue {
      padding-bottom: 120px;
    }
  }
  
  .header-blue .navbar {
    background: transparent;
    padding-top: .75rem;
    padding-bottom: .75rem;
    color: #fff;
    border-radius: 0;
    box-shadow: none;
    border: none;
  }
  
  @media (min-width:768px) {
    .header-blue .navbar {
      padding-top: 1rem;
      padding-bottom: 1rem;
    }
  }
  
  .header-blue .navbar .navbar-brand {
    font-weight: bold;
    color: inherit;
  }
  
  .header-blue .navbar .navbar-brand:hover {
    color: #f0f0f0;
  }
  
  .header-blue .navbar .navbar-collapse {
    border-top: 1px solid rgba(255,255,255,0.3);
    margin-top: .5rem;
  }
  
  @media (min-width:768px) {
    .header-blue .navbar .navbar-collapse {
      border-color: transparent;
      margin: 0;
    }
  }
  
  .header-blue .navbar .navbar-collapse span .login {
    color: #d9d9d9;
    margin-right: .5rem;
    text-decoration: none;
  }
  
  .header-blue .navbar .navbar-collapse span .login:hover {
    color: #fff;
  }
  
  .header-blue .navbar .navbar-toggler {
    border-color: rgba(255,255,255,0.3);
  }
  
  .header-blue .navbar .navbar-toggler:hover, .header-blue .navbar-toggler:focus {
    background: none;
  }
  
  @media (min-width: 768px) {
    .header-blue .navbar-nav .nav-link {
      padding-left: .7rem;
      padding-right: .7rem;
    }
  }
  
  @media (min-width: 992px) {
    .header-blue .navbar-nav .nav-link {
      padding-left: 1.2rem;
      padding-right: 1.2rem;
    }
  }
  
  .header-blue .navbar.navbar-light .navbar-nav .nav-link {
    color: #d9d9d9;
  }
  
  .header-blue .navbar.navbar-light .navbar-nav .nav-link:focus, .header-blue .navbar.navbar-light .navbar-nav .nav-link:hover {
    color: #fcfeff !important;
    background-color: transparent;
  }
  
  .header-blue .navbar .navbar-nav > li > .dropdown-menu {
    margin-top: -5px;
    box-shadow: 0 4px 8px rgba(0,0,0,.1);
    background-color: #fff;
    border-radius: 2px;
  }
  
  .header-blue .navbar .dropdown-menu .dropdown-item:focus, .header-blue .navbar .dropdown-menu .dropdown-item {
    line-height: 2;
    color: #37434d;
  }
  
  .header-blue .navbar .dropdown-menu .dropdown-item:focus, .header-blue .navbar .dropdown-menu .dropdown-item:hover {
    background: #ebeff1;
  }
  
  .header-blue .action-button, .header-blue .action-button:not(.disabled):active {
    border: 1px solid rgba(255,255,255,0.7);
    border-radius: 40px;
    color: #ebeff1;
    box-shadow: none;
    text-shadow: none;
    padding: .3rem .8rem;
    background: transparent;
    transition: background-color 0.25s;
    outline: none;
  }
  
  .header-blue .action-button:hover {
    color: #fff;
  }
  
  .header-blue .navbar .form-inline label {
    color: #d9d9d9;
  }
  
  .header-blue .navbar .form-inline .search-field {
    display: inline-block;
    width: 80%;
    background: none;
    border: none;
    border-bottom: 1px solid transparent;
    border-radius: 0;
    color: #ccc;
    box-shadow: none;
    color: inherit;
    transition: border-bottom-color 0.3s;
  }
  
  .header-blue .navbar .form-inline .search-field:focus {
    border-bottom: 1px solid #ccc;
  }
  
  .header-blue .hero {
    margin-top: 20px;
    text-align: center;
  }
  
  @media (min-width:768px) {
    .header-blue .hero {
      margin-top: 60px;
      text-align: left;
    }
  }
  
  .header-blue .hero h1 {
    color: #fff;
    font-size: 40px;
    margin-top: 0;
    margin-bottom: 15px;
    font-weight: 300;
    line-height: 1.4;
  }
  
  @media (min-width:992px) {
    .header-blue .hero h1 {
      margin-top: 190px;
      margin-bottom: 24px;
      line-height: 1.2;
    }
  }
  
  .header-blue .hero p {
    color: rgba(255,255,255,0.8);
    font-size: 20px;
    margin-bottom: 30px;
    font-weight: 300;
  }
  
  .header-blue .phone-holder {
    text-align: right;
  }
  
  .header-blue div.phone-mockup {
    position: relative;
    max-width: 300px;
    margin: 20px;
    display: inline-block;
    z-index: 1;
  }
  
  .header-blue .phone-mockup img.device {
    width: 100%;
    height: auto;
  }
  
  .header-blue .phone-mockup .screen {
    position: absolute;
    width: 94%;
    height: 98%;
    top: 1%;
    left: 3%;
    border: 1px solid #444;
    border-radius: 20px;
    background-color: #aaa;
    overflow: hidden;
    background: url(screen-content-phone.jpg);
    background-size: cover;
    background-position: center;
    z-index: -1;
  }
  
  .header-blue .phone-mockup .screen:before {
    background-color: #fff;
    position: absolute;
    width: 70%;
    height: 140%;
    top: -12%;
    right: -60%;
    transform: rotate(-19deg);
    opacity: 0.2;
  }')
@section('titulo', 'Recetas')