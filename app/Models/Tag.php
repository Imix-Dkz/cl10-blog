<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    //Esto es para que se puedan ingresar los datos al guardar los formularios
    protected $fillable = ['name','slug', 'color'];

    //Se añade metodo MOSTRAR el nombre de la tag en la barra superior
    public function getRouteKeyName(){ 
        return "slug";
    }

    //Relación N:N, con Post
    public function posts(){
        return $this->belongsToMany(Post::class);
    }
}
