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
            'place' => $this->faker->sentence,
            'serialnumber' => rand(1,900),
            'capitulo_1' => $this->faker->sentence,
            'capitulo_2' => $this->faker->sentence,
            'capitulo_3' => $this->faker->sentence,
            'capitulo_4' => $this->faker->sentence,
            'capitulo_5' => $this->faker->sentence,
            'capitulo_6' => $this->faker->sentence,
            'capitulo_7' => $this->faker->sentence,
            'capitulo_8' => $this->faker->sentence,
            'capitulo_9' => $this->faker->sentence,
            'capitulo_10' => $this->faker->sentence
        ];
    }
}
