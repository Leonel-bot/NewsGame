@extends('layouts.app')


@section('content')
<div class="container">

  <div class="tags">
    <ul>
      <a href="/Noticia/Pc"><li>PC</li></a>
      <a href="/Noticia/PlayStation"><li>Play Station</li></a>
      <a href="/Noticia/Xbox"><li>Xbox</li></a>
      <a href="/Noticia/Nintendo"><li>Nintendo</li></a>
      <a href="/Noticia/Tecnologia"><li>Tecnologia</li></a>
      <a href="/Noticia/Reviews"><li>Reviews</li></a>
    </ul>
  </div><hr>


    <div class="relevante">
        <h3 class="fuente">
            Noticias mas relevantes
        </h3><hr style="height: 1px;background: #833471;">
    </div>

    <div id="etiqueta-destacado">
        <h4>
            Destacadas
        </h4>
    </div>
        <!-- NOTICIA MAS DESTACADA -->
        @foreach($topUno as $top1)
        <div class="destacadas row">
          <div class="card text-white">
                <img class="card-img" src="{{$top1->foto}}" alt="Card image">
                <div class="card-img-overlay">
                  <h5 class="top card-title">{{$top1->titulo}}</h5>
                  <p class=" top card-text">{{$top1->subtitulo}}</p>
                  <p class="top card-text">{{$top1->created_at->diffForHumans()}}</p>
                </div>
              </div>
        </div>
        @endforeach
             
        <!-- <div class="destacadas row">
            <div class="card text-white">
                <img class="card-img" src="https://cdn.atomix.vg/wp-content/uploads/2019/09/athem.jpg" alt="Card image">
                <div class="card-img-overlay">
                  <h5 class="top card-title">Según una nueva filtración, BioWare y EA trabajan ya en un nuevo Mass Effect</h5>
                  <p class=" top card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="top card-text">Last updated 3 mins ago</p>
                </div>
              </div>
        </div> -->
        @foreach($topDos as $top2)
        <div class="card-group row">
            <div class="destacadas card">
                <div class="card text-white">
                    <img class="card-img" src="{{$top2->foto}}" alt="Card image">
                    <div class="card-img-overlay">
                      <h5 class="duoTop card-title">{{$top2->titulo}}</h5>
                      <p class="duoTop card-text">{{$top2->subtitulo}}</p>
                      <p class="duoTop card-text">{{$top2->created_at->diffForHumans()}}</p>
                    </div>
                  </div>
            </div>
            @endforeach

            @foreach($topTres as $top3)
            <div class="destacadas card">
                <div class="card text-white">
                    <img class="card-img" src="{{$top3->foto}}" alt="Card image">
                    <div class="card-img-overlay">
                      <h5 class="duoTop card-title">{{$top3->titulo}}</h5>
                      <p class="duoTop card-text">{{$top3->subtitulo}}</p>
                      <p class="duoTop card-text">{{$top3->created_at->diffForHumans()}}</p>
                    </div>
                  </div>
            </div>
        </div><hr>
        @endforeach


    <div id="etiqueta">
        <h4>
            Redes Sociales
        </h4>
    </div>
    <div class="social">
        <ul>
            <li><a href=""><img src="iconos/facebook.png" alt=""></a> </li>
            <li><a href=""><img src="iconos/google-plus.png" alt=""></a> </li>
            <li><a href=""><img src="iconos/instagram.png" alt=""></a> </li>
            <li><a href=""><img src="iconos/twitter.png" alt=""></a> </li>
            <li><a href=""><img src="iconos/whatsapp.png" alt=""></a> </li>
            <li><a href=""><img src="iconos/youtube.png" alt=""></a> </li>
        </ul>
    </div><hr>
    <div>
        <h3 class="fuente">
            Ultimas noticias agregadas
        </h3>
    </div><hr style="height: 1px;background: #833471;">

    <div id="etiqueta">
        <h4>
            Novedad
        </h4>
    </div>

    <div class="col-12">
      <div class="card-deck row">
      @foreach($noticias as $noticia)
        <div id="tarjeta" class="col-12 col-lg-4">
          <img class="card-img-top" src="{{$noticia->foto}}" alt="Card image cap">
          <div class="card-body">
            <a href="/Noticias/{{$noticia->id}}"><button id="leerMas">
              <h5 id="titulo" class="card-title"><strong>{{$noticia->titulo}}</strong></h5>
            </button></a><hr>
            <p class="card-text">{{$noticia->subtitulo}}</p>
          </div>
          <div class="card-footer">
            <small class="">{{$noticia->created_at->diffForHumans()}}</small> <img src="iconos/reloj.png" alt="" style="height:18px;width: 18px;margin-right: 20px;">
            <img src="iconos/comentarios.png" alt="" style="height:18px;width: 18px;"> <small class="">{{count($noticia->comentarios)}} comentarios</small>
          </div>
        <div>
      </div>
    </div>
   @endforeach
  </div>
</div> 





</div>

@endsection