<?php

namespace App\Http\Controllers;

use App\Noticia;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    /* public function TopUno(){
        
        $noticia= Noticia::all();
        dd($noticia);
        return view('Noticias.home',compact('topUno'));
    } */

   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias= Noticia::all();

        $topUno= Noticia::all()->where('top','=','topUno');
        $topDos= Noticia::all()->where('top', '=', 'topDos');
        $topTres= Noticia::all()->where('top','=','topTres');

        
        return view('Noticias.home',compact('noticias','topUno','topDos', 'topTres'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        $noticia= new Noticia();

        //guardo el archivo en la carpeta public
        //$ruta= $req->file('foto')->store('public');
        //recorto la ruta y obtengo solo el nombre del archivo
        //$nombreFoto= basename($ruta);
        //guardo el archivo
        //$noticia->foto= $nombreFoto;


        $noticia->titulo= $req['titulo'];
        $noticia->subtitulo= $req['subtitulo'];
        $noticia->foto= $req['foto'];
        $noticia->cuerpo= $req['cuerpo'];
        $noticia->view= 0;
        $noticia->top= $req['top'];
        $noticia->user_id= \Auth::user()->id;

        $noticia->save();
        return redirect('/Noticias');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $noticia= Noticia::findOrFail($id);
        $noticia->comentarios;
        $noticia->users->name;
        return view('Noticias.detalle',compact('noticia','id',));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $req)
    {
        //buscar que queremos modificar
        $id= $req['id'];
        
        $noticia= Noticia::findOrFail($id);
        

        $noticia->titulo= $req['titulo'];
        $noticia->foto= $req['foto'];
        $noticia->subtitulo= $req['subtitulo'];
        $noticia->cuerpo= $req['cuerpo'];

        $noticia->save();
        return redirect()->route('lista',['id'=>$req['id']]);
        return redirect('Noticias.detalle');
    }




    public function editar($id)
    {
        //buscar que queremos modificar
        $noticia= Noticia::findOrFail($id);
        return view('Noticias.editar',compact('noticia','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Noticia $noticia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req)
    {
        $id= $req['id'];
        $noticiaDelet = Noticia::findOrFail($id);
        //$noticiaDelet = Noticia::findOrFail($req['id']);
        $noticiaDelet->delete();
        return redirect('/Noticias');
    }

    
}
