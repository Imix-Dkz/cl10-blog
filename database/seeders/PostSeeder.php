<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Post;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    // Run the database seeds.
    public function run(): void{

        //Como queremos que se añada una imagen para cada post, se hará lo siguiente
        $posts = Post::factory(100)->create();
        
        foreach( $posts as $post ){ //Por cada post, se mandará a descargaruna imágen correspondiente
            Image::factory(1)->create([
                //Como es una tabla compuesta que contiene datos de otras tablas, se hace lo siguiente
                'imageable_id' => $post->id,
                'imageable_type' => Post::class
            ]);

            //Ya que se crearon las imagenes para el post, hay que asignar las tags
            $post->tags()->attach([ //Le asignará al menos 2 etiquetas de los siguientes grupos
                rand(1,4),
                rand(5,8)
            ]);
        }
    }
}
