<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class FoodStuffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('food_stuffs')->insert([
            [
                'id' => 1,
                'name' => 'Cabohydrate',
                'category_id' => 'Cabohydrate',
                'name' => 'Cabohydrate',

                 'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Protein',
                 'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'Vitamin',
                 'created_at' => now(),
                'updated_at' => now(),
            ],


        ]);
    }
}
