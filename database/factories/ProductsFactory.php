<?php

namespace Database\Factories;

use App\Models\User;
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
            'name'=> $this->faker->name(),
            'discription'=> $this->faker->text(),
            'user_id'=> User::factory(),
            'stock'=> $this->faker->numberBetween(1,10),
            'price'=> $this->faker->numberBetween(1000,10000)
        ];
    }
}
