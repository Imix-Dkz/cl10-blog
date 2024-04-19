<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; //Hay que incluirlo para poder usarlo

class PostController extends Controller
{
    public function index()
    { //Para poder hacer una correcta lectura de los datos de los post, lo adecuado es hacer una función
        $post = Post::where('status', 2)->latest('id')->paginate(8); 
        //status=2, es PUBLICADO, Paginado de 8 Post nada más
        return view('post.index', compact('post'));
    }
}
