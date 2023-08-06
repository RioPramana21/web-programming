<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PublisherFactory extends Factory
{
    public function definition()
    {
        $random_name = ucwords($this->faker->words(mt_rand(1, 5), true));
        return [
            "name" => $random_name,
            "address" => $this->faker->unique()->address(),
            "phone" => $this->faker->unique()->phoneNumber(),
            "email" => $this->faker->unique()->safeEmail(),
            "image" => "storage/images/publisher_images/Penguin_logo.jpg"
        ];
    }
}
