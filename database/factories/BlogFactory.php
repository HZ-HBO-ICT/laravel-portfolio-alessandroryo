<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
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
            'image_path' => 'ict-fow',
            'image_alt' => $this->faker->sentence(3)
        ];
    }
}
