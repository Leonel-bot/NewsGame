@extends('layouts.app')


@section('content')
<div class="container" style="margin-top: 40px;padding: 25px; background:white">
    <form action="/Redactar" method="post" enctype="multipart/form-data">{{csrf_field() }} 
        <div>
            <h1>
                Redactar una nueva noticia
            </h1><hr>
        </div>

        <div class="form-group">
                <strong>Titulo de la noticia</strong>
                <input type="text" name="titulo" class="form-control" placeholder="" value="">
            </div>
            
            <div class="form-group">
                <!-- <label><strong>Imagen/foto</strong></label><br>
                <input type="file" name="foto" id="" value=""><br> -->
                <label><strong>Link foto</strong></label><br>
                <input type="text" name="foto" class="form-control" placeholder="" value="">
            </div>
    
            <div class="form-group">
                <label><strong>Subtitulo</strong></label>
                <input type="text" name="subtitulo" class="form-control" placeholder="" value="">
            </div>
    
            <div class="form-group">
                <label><strong>Cuerpo de la noticia</strong></label>
                <textarea class="form-control" name="cuerpo" rows="15"></textarea>
            </div>

            <div class="form-group">
            <label for="">Destacada 1</label>
            <input type="radio" name="top" id="" value="topUno"><br>

            <label for="">Destacada 2</label>
            <input type="radio" name="top" id="" value="topDos"><br>

            <label for="">Destacada 3</label>
            <input type="radio" name="top" id="" value="topTres"><br>
            </div>


        <input class="boton" type="submit" value="Cargar">
        
    </form>
    
</div>
 @endsection   
</body>
</html>