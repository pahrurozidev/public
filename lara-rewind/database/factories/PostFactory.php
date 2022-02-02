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
            "title" => $this->faker->sentence(mt_rand(5, 8)),
            "slug" => $this->faker->unique()->slug(),
            "excerpt" => $this->faker->paragraph(),
            // "body" => $this->faker->paragraph(mt_rand(8, 11)),
            'body' => collect($this->faker->paragraphs(mt_rand(5, 10)))->map(function ($p) {
                return '<p>' . $p . '</p>';
            })->implode(''),
            "user_id" => mt_rand(1, 5),
            "category_id" => mt_rand(1, 3)
        ];
    }
}
