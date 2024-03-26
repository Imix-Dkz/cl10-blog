<?php

namespace Database\Factories;
//use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        /* [Slug]
            Para fines de prueba en el llenadao de datos, se usará llenado con slgus, un "slug", es una cadena de texto en el que las palabras están unidas con "-" guiones...
            Por ejemplo:
                (Normal)= Hola mundo como estas
                (Slug)  = Hola-mundo-como-estas
        */
        $name = $this->faker->unique()->word(20);

        return [
            'name' => $name,
            'slug' => Str::slug($name)
        ];
    }
}
