<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence();

        return [
            'title'         => $title,
            'slug'          => Str::slug($title, '-'),
            'image'         => 'lorem-ipsum-dolor-sit-amet-Image.jpg',
            'description'   => $this->faker->paragraph(),
            'paper'         => 'lorem-ipsum-dolor-sit-amet.pdf',
            'reader'        => 0,
            'published_at'  => $this->faker->date() . ' ' . $this->faker->time()
        ];
    }
}
