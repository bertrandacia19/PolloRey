@extends('plantilla')

@section('Contenido')
    <div>
        <img src="{{URL::asset('assets/imagenes/pollo.jpeg')}}" width="1150" height="250" class="img-responsive" />
    </div>
    <main>
        <div class="row">
            <div class="col-md-4">
                <article class="Oficinas">
                    <h4>Historia</h4>
                    <br>
                    <text>Durante más de 50 años, POLLO REY ha sido una importante solución alimenticia en la casa de los
                        guatemaltecos que buscan una opción fresca, higiénica, deliciosa y saludable para su familia.</text>
                    <br>
                    <br>
                    <text>La historia de esta tradicional marca inicia en 1964 bajo el impulso de emprendimiento y deseo de
                        servir a la comunidad de su fundador Don Juan Bautista Gutiérrez, quien funda la Granja Villalobos,
                        conocida posteriormente como Avícola Villalobos. Aquí nace la marca y es así, como inicia la
                        trayectoria de la industria avícola más importante de Centroamérica y el Caribe.</text>
                </article>
            </div>
            <div class="col-md-4">
                <article class="Oficinas">
                    <h4>Misión</h4>
                    <br>
                    <text>‘‘Ser líderes en proveer e innovar soluciones alimentarias cárnicas y de alimentos para animales;
                        que generen valor para sus accionistas, consumidores, clientes, proveedores, colaboradores y la
                        comunidad de manera creativa, responsable y sustentable.”</text>
                    <br>
                </article>
            </div>
            <div class="col-md-4">
                <article class="Oficinas">
                    <h4>Visión</h4>
                    <br>
                    <text>‘‘Ampliar en Centro América nuestro liderazgo de participación de mercado y rentabilidad, con
                        productos, procesos y el capital humano de clase mundial; expandiendo nuestra presencia a nuevos
                        mercados donde existan oportunidades estratégicas’’</text>
                    <br>
                </article>
            </div>
        </div>
        <br>

    </main>
@endsection

@section('titulo', 'Pollo Rey')
