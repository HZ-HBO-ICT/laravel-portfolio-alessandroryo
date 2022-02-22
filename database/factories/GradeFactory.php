<?php

namespace Database\Factories;

use App\Models\Grade;
use Illuminate\Database\Eloquent\Factories\Factory;

class GradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'quartile' => $this->faker->numberBetween(1, 4),
            'course_name' => $this->faker->word(),
            'ec' => $this->faker->numberBetween(1, 5),
            'test_name' => $this->faker->word(),
            'lowest_passing_grade' => $this->faker->numberBetween(1, 10),
            'best_grade' => $this->faker->numberBetween(1, 10),
            'passed_at' => now()
        ];
    }
}
