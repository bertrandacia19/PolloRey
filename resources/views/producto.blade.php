@extends('plantilla')
@php
$cont = 0;
@endphp
@section('Contenido')
    <div class="container">
        <div class="row">
            <!-- Insert/Drop Grid Column codes below-->
            <div class="col-md-12">
                <div id="carousel-1" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carousel-1" data-bs-slide-to="0" aria-label="Slide 1"></li>
                        <li data-bs-target="#carousel-1" data-bs-slide-to="1" aria-label="Slide 2"></li>
                        <li data-bs-target="#carousel-1" data-bs-slide-to="2" aria-label="Slide 3"></li>
                        <li data-bs-target="#carousel-1" data-bs-slide-to="3" aria-label="Slide 4" class="active"></li>
                        <li data-bs-target="#carousel-1" data-bs-slide-to="4" aria-label="Slide 5"></li>
                        <li data-bs-target="#carousel-1" data-bs-slide-to="5" aria-label="Slide 6"></li>
                        <li data-bs-target="#carousel-1" data-bs-slide-to="6" aria-label="Slide 7"></li>
                    </ol>
                    <div class="carousel-inner">
                        @foreach ($carrusel as $key => $item)
                            <div style="display: none">{{ $cont = $cont + 1 }}</div>
                            @if ($cont != 4)
                                <div class="carousel-item">
                            @else
                                <div class="carousel-item active">
                            @endif
                            <img src="{{ URL::asset($item['imagen']) }}" class="d-block w-100 carouselImg"
                                alt="Carousel Image">
                            <div class="carousel-caption d-none d-md-block label_carousel">
                                <h3>{{ $carruselTitulo[$key] }}</h3>
                                <p>{{ $carruselMensaje[$key] }}</p>
                            </div>
                    </div>

                    @endforeach
                </div>
                <!-- Controls -->
                <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </div>

    </div>
    </div>
    <div class="container">
        <div class="row">
            <!-- Card 2 -->
            <div class="col-md-4 card-container">
                <div class="card-flip">
                    <!-- Card 2 Front -->
                    <div class="card front">
                        <img src="{{ URL::asset('assets/imagenes/producto_fresco_10.PNG') }}" }}
                            class="card-img-top img-fluid">
                        <div class="card-block">
                            <h4 class="card-title">Chicken fingers</h4>
                            <p class="card-text">Nuestros delicios chicken fingers son pechugas de pollo pre preparadas en
                                forma de deditos de pollos para tu conveniencia.</p>
                        </div>
                    </div>
                    <!-- End Card 2 Front -->

                    <!-- Card 2 Back -->
                    <div class="card back">
                        <div class="card-header">
                            Acerca del producto
                        </div>
                        <div class="card-block">
                            <h4 class="card-title">Chicken Fingers</h4>
                            <p class="card-text">Estos deditos de pollo son faciles de condimentar y rapidos de cocinar. Ve
                                algunas de nuestras recetas para ver como puede prepararar este producto y dejar a todos
                                asombrados.</p>
                            <a href="#" class="btn btn-primary">Recetas</a>
                        </div>
                    </div>
                    <!-- End Card 2 Back -->
                </div>
            </div>
            <!-- End Card 2 -->
            <!-- Card 5 -->
            <div class="col-md-4 card-container">
                <div class="card-flip">
                    <!-- Card 2 Front -->
                    <div class="card front">
                        <img src="{{ URL::asset('assets/imagenes/producto_fresco_9.PNG ') }}" }}
                            class="card-img-top img-fluid">
                        <div class="card-block">
                            <h4 class="card-title">Nuggets</h4>
                            <p class="card-text">Estos nuggets son deliciosos trocitos de pollo que son ideales para
                                aperitivos y platos fuertes por igual.</p>
                        </div>
                    </div>
                    <!-- End Card 2 Front -->

                    <!-- Card 2 Back -->
                    <div class="card back">
                        <div class="card-header">
                            Acerca del producto
                        </div>
                        <div class="card-block">
                            <h4 class="card-title">Nuggets</h4>
                            <p class="card-text">Los nuggets vienen listo para poder condimentarlos a tu gusto. Ve algunas
                                de nuestras recetas para ver como puede prepararar este producto y dejar a todos asombrados.
                            </p>
                            <a href="#" class="btn btn-primary">Recetas</a>
                        </div>
                    </div>
                    <!-- End Card 2 Back -->
                </div>
            </div>
            <!-- End Card 5 -->
            <div class="col-md-4 card-container">
                <div class="card-flip">
                    <!-- Card 2 Front -->
                    <div class="card front">
                        <img src="{{ URL::asset('assets/imagenes/producto_fresco_8.PNG') }}" }}
                            class="card-img-top img-fluid">
                        <div class="card-block">
                            <h4 class="card-title">Piernitas</h4>
                            <p class="card-text">Deliciosas piernitas de pollo, tu parte favorita del pollo lista para que
                                lo cocines como tu prefieras.</p>
                        </div>
                    </div>
                    <!-- End Card 2 Front -->

                    <!-- Card 2 Back -->
                    <div class="card back">
                        <div class="card-header">
                            Acerca del producto
                        </div>
                        <div class="card-block">
                            <h4 class="card-title">Piernitas</h4>
                            <p class="card-text">Deliciosas piernitas de pollo listas para ser condimentadas. Ve algunas de
                                nuestras recetas para ver como puede prepararar este producto y dejar a todos asombrados.
                            </p>
                            <a href="#" class="btn btn-primary">Recetas</a>
                        </div>
                    </div>
                    <!-- End Card 2 Back -->
                </div>
            </div>
            <div class="col-md-4 card-container">
                <div class="card-flip">
                    <!-- Card 2 Front -->
                    <div class="card front">
                        <img src="{{ URL::asset('assets/imagenes/producto_fresco_7.PNG') }}" }}
                            class="card-img-top img-fluid">
                        <div class="card-block">
                            <h4 class="card-title">Bistec de pollo</h4>
                            <p class="card-text">Delicioso bistec de pollo listo para preparar como un aperitivo o un plato
                                fuerte.</p>
                        </div>
                    </div>
                    <!-- End Card 2 Front -->

                    <!-- Card 2 Back -->
                    <div class="card back">
                        <div class="card-header">
                            Acerca del producto
                        </div>
                        <div class="card-block">
                            <h4 class="card-title">Bistec de pollo</h4>
                            <p class="card-text">El delicioso bistec de pollo que son pedasos de pollos listos para
                                condimentar y servir en el instante. Ve algunas de nuestras recetas para ver como puede
                                prepararar este producto y dejar a todos asombrados.</p>
                            <a href="#" class="btn btn-primary">Recetas</a>
                        </div>
                    </div>
                    <!-- End Card 2 Back -->
                </div>
            </div>
            <div class="col-md-4 card-container">
                <div class="card-flip">
                    <!-- Card 2 Front -->
                    <div class="card front">
                        <img src="{{ URL::asset('assets/imagenes/producto_fresco_6.PNG') }}" }}
                            class="card-img-top img-fluid">
                        <div class="card-block">
                            <h4 class="card-title">Alas</h4>
                            <p class="card-text">Deliciosas alas de pollo, llevate tu parte favorita del pollo lista para su
                                preparacion.</p>
                        </div>
                    </div>
                    <!-- End Card 2 Front -->

                    <!-- Card 2 Back -->
                    <div class="card back">
                        <div class="card-header">
                            Acerca del producto
                        </div>
                        <div class="card-block">
                            <h4 class="card-title">Alas</h4>
                            <p class="card-text">Alas que son sencillas de preparar y de cocinar, llevate estas alas listas
                                para preparar. Ve algunas de nuestras recetas para ver como puede prepararar este producto y
                                dejar a todos asombrados.</p>
                            <a href="#" class="btn btn-primary">Recetas</a>
                        </div>
                    </div>
                    <!-- End Card 2 Back -->
                </div>
            </div>
            <div class="col-md-4 card-container">
                <div class="card-flip">
                    <!-- Card 2 Front -->
                    <div class="card front">
                        <img src="{{ URL::asset('assets/imagenes/producto_fresco_5.PNG') }}" }}
                            class="card-img-top img-fluid">
                        <div class="card-block">
                            <h4 class="card-title">Pierna y muslo</h4>
                            <p class="card-text">Deliciosas piernas de pollo listas para conseguir tu parte favorita de
                                pollo sin gastar mas.</p>
                        </div>
                    </div>
                    <!-- End Card 2 Front -->

                    <!-- Card 2 Back -->
                    <div class="card back">
                        <div class="card-header">
                            Acerca del producto
                        </div>
                        <div class="card-block">
                            <h4 class="card-title">Pierna y muslo</h4>
                            <p class="card-text">La pierna viene junta del muslo, facil de preparar a tu gusto. Ve algunas
                                de nuestras recetas para ver como puede prepararar este producto y dejar a todos asombrados.
                            </p>
                            <a href="#" class="btn btn-primary">Recetas</a>
                        </div>
                    </div>
                    <!-- End Card 2 Back -->
                </div>
            </div>
        </div>
    </div>
@endsection
@section('estilo',
    '
    body {
    font-size: 18px;
    }
    .carouselImg{
    height:fit-content;
    padding:0;
    margin:0;
    margin-top: 13px;
    margin-left: 15%;
    width:fit-content !important;
    }
    .carousel {
    height: 200px;
    background-color: #fe131a;
    }
    .label_carousel{
    text-align: left;
    padding-left: 20%;
    }
    .card {
    padding:10px;
    margin: 10px 10px;
    height: 390px;
    width: 310px;
    }


    .card-container {
    display: grid;
    perspective: 700px;
    margin: auto;

    }

    .card-flip {
    display: grid;
    grid-template: 1fr / 1fr;
    grid-template-areas: "frontAndBack";
    transform-style: preserve-3d;
    transition: all 0.7s ease;
    }

    .card-flip div {
    backface-visibility: hidden;
    transform-style: preserve-3d;
    }

    .front {
    grid-area: frontAndBack;
    }

    .back {
    padding-top: 40px;
    grid-area: frontAndBack;
    transform: rotateY(-180deg);
    }

    .card-container:hover .card-flip {
    transform: rotateY(180deg);
    }

    .card img {
    height: 180px;
    width: 310px;
    margin: 0 !important;
    }

    .footer-dark {
    padding: 25px;
    color: #f0f9ff;
    background-color: #282d32;
    text-align: center;
    }

    .footer-dark {
    padding: 25px;
    color: #f0f9ff;
    background-color: #282d32;
    text-align: center;
    }',)
@section('titulo', 'Producto')
