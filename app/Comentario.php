<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    public $guarder= [];



    public function noticias()
    {
        return $this->belongsTo(Noticia::class, 'noticia_id');
    }


    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
