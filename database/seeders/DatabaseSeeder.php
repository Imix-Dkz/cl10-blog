<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Tag;
use Illuminate\Database\Seeder;

//Como se requiere crear la carpeta "post"
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    // Seed the application's database.
    public function run(): void
    {
        //\App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //Para crear la ruta completa "public/storage/posts"
        Storage::deleteDirectory('post');
        Storage::makeDirectory('posts');

        //Se manda a llamar el nuevo seeder "UserSeeder.php"
        $this->call(UserSeeder::class);

        //Datos falsos cada factory generado
        Category::factory(4)->create();
        Tag::factory(8)->create();

        //Se llama el seeder de PostSeeder+Image
        $this->call(PostSeeder::class);
    }
}
