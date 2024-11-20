<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Orders;
use App\Models\OrderItems;
use App\Models\inventory;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        User::factory()->count(10)->create();

        inventory::factory()->count(10)->create();

        Orders::factory()->count(10)->create();

        OrderItems::factory()->count(10)->create();
    }
}
