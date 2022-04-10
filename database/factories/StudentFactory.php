<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_school' => rand(100,99999),
            'enrollment' => rand(100, 99999),
            'name' => $this->faker->sentence,
            'last_name' => $this->faker->sentence,
            'career' => $this->faker->sentence,
            'grade' => rand(1,4),
            'group' => rand(1,5),
            'CURP' => $this->faker->text(15),
        ];
    }
}
