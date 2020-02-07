<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    public $guarder= [];






    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }
    /* public function categorias(){
        return $this->belongsTo(Categoria::class, 'categoria_id');
    } */


    public function comentarios(){
        return $this->hasMany(Comentario::class, 'noticia_id');
    }
}
