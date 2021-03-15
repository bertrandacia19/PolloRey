@extends('plantilla')

@section('Contenido')
    <main>
        <div class="row">
            <div class="col-md-4">
                <article class="Oficinas">
                    <h4>Contacto Guatemala</h4>
                    <br>
                    <b>Avícola Villalobos, S.A</b>
                    <br>
                    <br>
                    <b>Dirección:</b>
                    <text>46 Calle 21-89 zona 12, Ciudad de Guatemala, Centro América.</text>
                    <br>
                    <b>Télefono:</b>
                    <text>+502 24775580</text>
                </article>
            </div>
            <div class="col-md-4">
                <article class="Oficinas">
                    <h4>Contacto Honduras</h4>
                    <br>
                    <b>Oficinas Administrativas</b>
                    <br>
                    <br>
                    <b>Dirección Tegucigalpa:</b>
                    <text>Colonia Tiloarque Edificio Hasbun, contigo a Plaza Milenium sobre el boulevard de las Fuerzas
                        Armadas.</text>
                    <br>
                    <b>Télefono:</b>
                    <text>+504 22753000</text>
                    <br>
                    <br>
                    <b>Dirección San Pedro Sula:</b>
                    <text> Blvd. del Sur Frente a Canasa, salida a Tegucigalpa</text>
                    <br>
                    <b>Télefono:</b>
                    <text>+504 25093300</text>
                </article>
            </div>
            <div class="col-md-4">
                <article class="Oficinas">
                    <h4>Contacto Costa Rica</h4>
                    <br>
                    <b>Oficinas Administrativas</b>
                    <br>
                    <br>
                    <b>Dirección:</b>
                    <text> Alajuela, Río Segundo, Oficentro Santamaría, Boulevard del Aeropuerto, del Casino Fiesta 400 mts
                        norte Edificio A segundo nivel.</text>
                    <br>
                    <b>Télefono:</b>
                    <text>+506 41061000</text>
                </article>
            </div>
        </div>
        <br>
        <br>
        <br>

        <form class="form-horizontal" method="POST" action={{route('Contacto')}}>
            <div class="form-group">
                <h5>Nombre</h5>
                <div class="row">
                    <div class="col-md-5">
                        @csrf
                        <input name="first_name" type="text" class="form-control" id="Nombres" placeholder="Juan Carlos" value='{{old('first_name')}}'>
                        {!!$errors->first('first_name', '<small>:message</small><br>')!!}
                        <label for="Nombres" class="col-sm-2 control-label">Nombres</label>
                    </div>
                    <div class="col-md-5">
                        <input name='last_name' type="text" class="form-control" id="Apellidos" placeholder="Flores Rodriguez" value='{{old('last_name')}}'>
                        {!!$errors->first('last_name', '<small>:message</small><br>')!!}
                        <label for="Apellidos" class="col-sm-2 control-label">Apellidos</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <h5>Información</h5>
                <div class="row">
                    <div class="col-md-4">
                        <input name='email' type="email" class="form-control" id="Email" placeholder="ejemplo123@domain.com" value='{{old('email')}}'>
                        {!!$errors->first('email', '<small>:message</small><br>')!!}
                        <label for="Email" class="col-sm-8 control-label">Correo Electrónico</label>
                    </div>
                    <div class="col-md-3">
                        <input name="phone" type="number" class="form-control" id="Telefono" placeholder="+504 9967-3256" value='{{old('phone')}}'>
                        {!!$errors->first('phone', '<small>:message</small><br>')!!}
                        <label for="Telefono" class="col-sm-7 control-label">Télefono</label>
                    </div>
                    <div class="col-md-4">
                        <select name="País" id="Pais" style="width: 250px; height: 38px">
                            <option>Guatemala</option>
                            <option>Honduras</option>
                            <option>Costa Rica</option>
                            <option>Otro</option>
                        </select>
                        <label for="Pais" class="col-sm-7 control-label">País</label>
                    </div>
                </div>

            </div>
            <div class="form-group">
                <h5>Mensaje</h5>
                <div class="row">
                    <div class="col-sm-10">
                        <input name="message" type="text" class="form-control" id="note3" placeholder="Tu Mensaje" value='{{old('message')}}'>
                        {!!$errors->first('message', '<small>:message</small><br>')!!}
                    </div>
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button class="btn btn-lg btn-danger">Enviar</button>
                    </div>
                </div>
            </div>
        </form>
    </main>
@endsection

@section('titulo', 'Contaco')
