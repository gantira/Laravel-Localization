<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'desc' => $this->faker->paragraph(2),
            'lang' => $this->faker->randomElement(['id', 'en']),
        ];
    }
}
