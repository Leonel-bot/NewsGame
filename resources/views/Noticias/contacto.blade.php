@extends('layouts.app')

@section('content')
 
<div class="container">
    <div class="contacto">
        <h1>Contacto</h1>
    </div>
    <div class="container">
        <form action="" method="post" class="formContacto">
            <div class="form-group">
                <label for="">Ingrese su nombre</label>
                <input type="text" class="form-control" id="nombreContacto" placeholder="" name="nombreContacto">
              </div>
            <div class="form-group">
                <label for="">Correo electronico</label>
                <input type="email" class="form-control" id="emailContacto" placeholder="" name="emailContacto">
              </div>
              <div class="form-group">
                <label for="">Mensaje</label>
                <textarea class="form-control" id="mensajeContacto" rows="3" name="mensajeContacto"></textarea>
              </div>
              <!-- <div class="container"> -->
                <input class="boton" type="submit" value="Enviar">

              <!-- </div> -->
        </form>
    </div>
</div>

@endsection 