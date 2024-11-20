<?php

namespace Database\Factories;

use App\Models\inventory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\inventory>
 */
class InventoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = inventory::class;
    public function definition(): array
    {
        return [
            'item_name' => $this->faker->words(3, true), 
            'description' => $this->faker->sentence(10), 
            'quantity' => $this->faker->numberBetween(10, 100),
            'price' => $this->faker->randomFloat(2, 5, 500),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
