<?php

namespace Database\Factories;

use App\Models\Orders;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class OrderFactory extends Factory
{
    protected $model = Orders::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(), // Create a related user
            'order_number' => Str::uuid()->toString(),
            'status' => $this->faker->randomElement(['pending', 'completed', 'canceled']),
            'total_amount' => $this->faker->randomFloat(2, 10, 1000),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
