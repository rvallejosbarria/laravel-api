<?php

namespace Database\Factories;

use Illuminate\Support\Str;
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
            'title' => $title = $this->faker->word(),
            'slug' => Str::slug($title),
            'likes' => $this->faker->numberBetween(0, 10),
            'content' => $this->faker->sentence(),
        ];
    }
}
