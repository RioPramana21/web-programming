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
            "publisher_id" => mt_rand(1, 5),
            "title" => ucwords($this->faker->words(mt_rand(1, 5), true)),
            "author" => $this->faker->name(),
            "year" => $this->faker->year(),
            "synopsis" => $this->faker->paragraph(),
            "image" => "storage/images/book_images/AtomicHabits_Cover_Image.jpg"
        ];
    }
}
