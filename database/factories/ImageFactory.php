<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            /*image(), tiene 5 parametros:
                ruta, 'public/storage/posts'
                ancho, 640
                alto, 480
                categoria, null //Al parecer está descontinuado
                formato de 'ruta':
                    true, "/public/storage/posts/image.jpg"
                    false, "image.jpg"

                [Nota]: Para este caso usaremos el formato...
                    post/image.jpg
            */
            'url' => 'posts/'.$this->faker->image('public/storage/posts', 640, 480, null, false)
        ];
    }
}
