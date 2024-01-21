<?php

namespace Database\Factories;

use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comments>
 */
class CommentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'comment' => fake()->sentence(),
            'name' => fake()->name(),
            'email' => fake()->email(),
            'desc' => fake()->sentence(),
            'img' => fake()->numberBetween(1,3),
            'star' => fake()->numberBetween(1,5),
            'product_id' => function () {
                return Products::all()->random();
            }
        ];
    }
}
