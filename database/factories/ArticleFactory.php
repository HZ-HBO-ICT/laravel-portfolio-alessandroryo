<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'title'=> $this->faker->sentence(mt_rand(2, 4)),
            'excerpt'=> $this->faker->sentence(mt_rand(4, 10)),
            'image_path' => 'https://picsum.photos/seed/picsum/300',
            'image_alt' => $this->faker->word(),
            'slug' => $this->faker->sentence(1)
        ];
    }
}
