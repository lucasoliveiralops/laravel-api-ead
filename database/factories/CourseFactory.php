<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\Course;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model  = Course::class;

    public function definition()
    {
        return [
            'name' => $this->faker->unique()->name(),
            'description' => $this->faker->sentence(50),
        ];
    }
}
