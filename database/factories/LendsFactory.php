<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

class LendsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'student_id' => rand(1,10),
            'book_id' => rand(1,10),
            'end_date' => Carbon::now()->addDay(4),
        ];
    }
}
