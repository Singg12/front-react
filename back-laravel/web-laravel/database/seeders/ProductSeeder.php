<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            ['name' => 'T-Shirt', 'price' => 19.99],
            ['name' => 'Jeans', 'price' => 29.99],
            ['name' => 'Sneakers', 'price' => 49.99],
        ]);
    }
}
