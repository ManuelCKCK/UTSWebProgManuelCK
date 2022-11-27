<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BooksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'publisher_id' => rand(1,5),
            // 'title' => $this->faker->text(5),
            // 'author' => $this->faker->name(5),
            // 'year' => rand(1999,2022),
            // 'synopsis' => $this->faker->text(5),
            // 'image' => $this->faker->imageUrl($width = 640,$height = 480)
        ];
    }
}
