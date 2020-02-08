@extends('layouts.app')


@section('content')

<div class="container">
  <div class="tags">
    <ul>
      <li>PC</li>
      <li>Play Station</li>
      <li>Xbox</li>
      <li>Nintendo</li>
      <li>Tecnologia</li>
      <li>Reviews</li>
    </ul>
  </div><hr>

<div class="row" >
  <img class="card-img" src="{{$noticia->foto}}" alt="Card image">
</div><br>

<div class="social">
  <ul>
      <li><a href=""><img src="/iconos/facebook.png" alt=""></a> </li>
      <li><a href=""><img src="/iconos/google-plus.png" alt=""></a> </li>
      <li><a href=""><img src="/iconos/instagram.png" alt=""></a> </li>
      <li><a href=""><img src="/iconos/twitter.png" alt=""></a> </li>
      <li><a href=""><img src="/iconos/whatsapp.png" alt=""></a> </li>
      <li><a href=""><img src="/iconos/youtube.png" alt=""></a> </li>
  </ul>
</div><hr>

<div class="container">
    <!-- <div class="container card text-white" >
        <img class="card-img" src="https://esports.as.com/2017/06/16/cosplay/mejor-cosplay-Horizon-Zero-Dawn_1036106391_6248_1440x600.jpg" alt="Card image">
        <div class="card-img-overlay">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Tis content is a little bit longer.</p>
          <p class="card-text">Last updated 3 mins ago</p>
        </div>
    </div> -->
      <div class="noticia container">
        <div class="titulo">
            <h1>{{$noticia->titulo}}</h1>
        </div><hr>
        <div class="subtitulo">
            <h3>{{$noticia->subtitulo}}</h3>
        </div>

        <div class="cuerpo">
          <p>
          {{$noticia->cuerpo}}
          </p>
        </div><hr>
      </div>

      
      <div class="admin">
        @auth
        @if(Auth::user()->id == 1)
        <a href="/Editar/{{$noticia->id}}"><button id="editar">Editar</button></a>
        <a href="/Borrar/{{$noticia->id}}"><button id="borrar">Borrar</button></a>
        @endif
        @endauth
      </div>


      <div class="comentario">
        <h1>Comentarios</h1>
      </div>



      <ul class="list-unstyled">
        @foreach($noticia->comentarios as $comentario)
        <li class="media">   
          <div class="media-body">
            <strong>{{$comentario->users->name}} </strong>Dijo:
           {{$comentario->coment}}
           <p class=""><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </li>
        @endforeach
      </ul><hr>

      <!-- <ul class="">
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
      </ul> -->

      <form action="/Noticias/{{$noticia->id}}/Comentar" method="post"enctype="multipart/form-data">{{csrf_field() }} 
      <div class="form-group">
          <label for=""><h4>Deja aqui un comentario</h4></label>
          <input type="text" name="coment" class="form-control" id="exampleFormControlInput1" placeholder="">
           <ul class="">
             @foreach($errors->all() as $error)
              <li><strong style="color: rgb(146, 9, 9);">{{$error}}</strong></li>
             @endforeach
           </ul>
          <input type="hidden" name="noticia_id" value="{{$noticia->id}}">
          <input type="hidden" name="user_name" value="{{User::class}}">
        </div>
        <input class="boton" type="submit" value="COMENTAR">
      </form>
</div>
</div>


@endsection