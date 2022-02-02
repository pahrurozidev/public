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
            // $table->string('name');
            "name" => $this->faker->name(),
            // $table->string('slug')->unique();
            "slug" => $this->faker->slug(mt_rand(1, 3)),
            // $table->string('image');
            "image" => $this->faker->sentence(mt_rand(1, 2)),
            // $table->foreignId('user_id');
            'user_id' => mt_rand(1, 5),
            // $table->foreignId('category_id');
            'category_id' => mt_rand(1, 5),
            // $table->foreignId('favorite_id');
            'favorite_id' => mt_rand(1, 5),
        ];
    }
}
