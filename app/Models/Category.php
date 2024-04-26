<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //Esto es para que se puedan ingresar los datos al guardar los formularios
    protected $fillable = ['name','slug'];

    //Se añade metodo MOSTRAR el nombre de la categoria en la barra superior
    public function getRouteKeyName(){ 
        return "slug";
    }

    //Relación 1:N, con Post
    public function posts(){
        return $this->hasMany(Post::class);
    }

}
