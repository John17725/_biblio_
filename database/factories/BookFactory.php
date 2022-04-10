<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'author' => $this->faker->slug,
            'pages' => rand(1,100),
            'ISBN' => rand(1,100),
            'edition' => $this->faker->text(35),
            'pieces' => rand(1,20),
            'clasification' => $this->faker->sentence,
            'editorial' => $this->faker->sentence,
            'place' => $this->faker->sentence
        ];
    }
}
