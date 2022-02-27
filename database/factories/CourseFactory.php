<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'CU_code' => 'CU_'.$this->faker->randomNumber(5, true),
            'name' => $this->faker->word(),
            'credits' => $this->faker->numberBetween(2, 5),
            'passed_at' => now(),
        ];
    }
}
