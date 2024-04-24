<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post; //Hay que incluirlo para poder usarlo
use App\Models\Tag;

class PostController extends Controller
{
    public function index()
    { //Para poder hacer una correcta lectura de los datos de los post, lo adecuado es hacer una función
        $posts = Post::where('status', 2)->latest('id')->paginate(8); 
        //status=2, es PUBLICADO, Paginado de 8 Post nada más
        return view('postv.index', compact('posts'));
    }

    //Para el acceso a la ruta de contenido de un post
    public function show(Post $post){

        //Se añade variable, para extraer Post similares al que se está mostrando
        $pSimilares = Post::where('category_id', $post->category_id)
            ->where('status', 2)
            ->where('id', '!=', $post->id)
            ->latest('id')
            ->take(4)->get(); 
            //Se limita a sólo 4 registros recomendados
        
        //return $post;
        return view('postv.show', compact('post', 'pSimilares'));
    }

    //Metodo para filtrado por categopria
    public function category(Category $category){
        $postCategory = Post::where('category_id', $category->id)
            ->where('status', 2)
            ->latest('id')->paginate(6);

        //return $category;
        return view('postv.category', compact('postCategory', 'category'));
    }

    //Metodo para filtrado por TAG
    public function tag(Tag $tag){
        $postsTag = $tag->posts()
            ->where('status', 2)->latest('id')
            ->paginate(6); 
            //Si se pone get(), jala todos los resultados,
            // pero con paginate, realiza un acomodo automatico de los datos
        
        //return $postsTag;
        return view('postv.tag', compact('postsTag', 'tag'));
    }
}
