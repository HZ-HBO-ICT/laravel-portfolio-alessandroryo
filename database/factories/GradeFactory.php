<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Grade;
use Illuminate\Database\Eloquent\Factories\Factory;

class GradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'course_id' => Course::factory(),
            'test_name' => $this->faker->word(),
            'lowest_passing_grade' => $this->faker->numberBetween(1, 10),
            'best_grade' => $this->faker->numberBetween(1, 10),
        ];
    }
}
