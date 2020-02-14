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
  </div>


    <div class="relevante">
        <h3 class="fuente">
           <strong> Noticias mas relevantes</strong>
        </h3>
    </div>

    <div id="etiqueta-destacado">
        <h4>
            Destacadas
        </h4>
    </div>


    @foreach($topUno as $top1)
    <div class="row">
      <div id="topUno"class="card-group"><a href="/Noticias/{{$top1->id}}">
        <div class=" text-white"> 
          <img src="{{$top1->foto}}" alt="" class="card-img">
          <div id="top" class="card-img-overlay">
            <h5 class="top card-title">{{$top1->titulo}}</h5>
            <p class=" top card-text">{{$top1->subtitulo}}</p>
            <p class="top card-text">{{$top1->created_at->diffForHumans()}}</p>
          </div>
      </div>
      </div>
    </div></a>
  @endforeach

  @foreach($topDos as $top2)
        <div class="card-group row" style="justify-content: center;" >
          <div id="topDosyTres" class=" text-white"><a href="/Noticias/{{$top2->id}}">
                    <img class="card-img" src="{{$top2->foto}}" alt="Card image">
                    <div class="card-img-overlay text-white">
                      <h5 class="duoTop card-title text-white">{{$top2->titulo}}</h5>
                      <p class="duoTop card-text">{{$top2->subtitulo}}</p>
                      <p class="duoTop card-text">{{$top2->created_at->diffForHumans()}}</p>
                    </div> 
                </div></a>
            @endforeach

            @foreach($topTres as $top3)
            <div id="topDosyTres" class=" text-white"><a href="/Noticias/{{$top3->id}}">
                    <img class="card-img" src="{{$top3->foto}}" alt="Card image">
                    <div class="card-img-overlay text-white">
                      <h5 class="duoTop card-title">{{$top3->titulo}}</h5>
                      <p class="duoTop card-text">{{$top3->subtitulo}}</p>
                      <p class="duoTop card-text">{{$top3->created_at->diffForHumans()}}</p>
                    </div>
                </div></a>
        </div><br>
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
            <strong> Ultimas noticias agregadas</strong>
        </h3>
    </div>

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