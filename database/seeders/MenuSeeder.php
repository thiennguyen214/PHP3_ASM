<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{

    public function run(): void
    {
        for ($i = 0; $i < 20; $i++) {
            DB::table('menus')->insert([
                'name' => fake()->text(30),
                'descrip' => fake()->text(30),
                'subtitle' => fake()->text(30),
                'price' => fake()->randomFloat(2, 1, 999.99),
                'quantity' => random_int(50, 100),
                'quantity_sold' => random_int(1, 50),
                'img' => fake()->imageUrl(),
                'size_id' => rand(1, 3),
                'category_id' => rand(1, 4)
            ]);
        }
    }
}
