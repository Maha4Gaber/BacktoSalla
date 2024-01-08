<?php

namespace Database\Factories;

use App\Models\Categories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => fake()->word(),
            'decs' => fake()->sentence(),
            'img' => fake()->numberBetween(1,6),
            'price' => fake()->numberBetween(30,2000),
            'star' => fake()->numberBetween(0,5),
            'quantity'=>fake()->numberBetween(0,1000),
            'paragraph'=>fake()->paragraph(),
            'color'=>fake()->word(),
            'wire'=>fake()->numberBetween(1,2),
            'brand'=>fake()->word(),
            'model'=>fake()->word(),
            'dimn'=>fake()->sentence(),
            'sim'=>fake()->numberBetween(1,2),
            'metal'=>fake()->word(),
            'weight'=>fake()->numberBetween(0,100),
            
            'cat_id'=>function(){
                return Categories::all()->random();
            }
        ];
        
    }
}
