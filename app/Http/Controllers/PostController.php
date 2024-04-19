<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; //Hay que incluirlo para poder usarlo

class PostController extends Controller
{
    public function index()
    { //Para poder hacer una correcta lectura de los datos de los post, lo adecuado es hacer una función
        $posts = Post::where('status', 2)->latest('id')->paginate(8); 
        //status=2, es PUBLICADO, Paginado de 8 Post nada más
        return view('post.index', compact('posts'));
    }

    //Para el acceso a la ruta de contenido de un post
    public function show(Post $post){

        //Se añade variable, para extraer Post similares al que se está mostrando
        $pSimilares = Post::where('category_id', $post->category_id)
            ->where('status', 2)
            ->where('id', '!=', $post->id)
            ->latest('id')->take(4)->get();
        
        //return $post;
        return view('post.show', compact('post', 'pSimilares'));
    }
}
