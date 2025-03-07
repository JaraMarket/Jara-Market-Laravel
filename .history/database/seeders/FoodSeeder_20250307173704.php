<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('foods')->insert([
            [
                'id' => 1,
                'name' => 'Afang',
                'description' => 'nil',
                'price' => '6800',
                'image_url' => '1800',
                'category_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Egusi',
                'description' => 'nil',
                'price' => '9800',
                'image_url' => '1800',
                'category_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'White Soup',
                'description' => '1800',
                'price' => '10800',
                'image_url' => '1800',
                'category_id' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => 4,
                'name' => 'Rice',
                'description' => 'nil',
                'price' => '11800',
                'image_url' => '1800',
                'category_id' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
