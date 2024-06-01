<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => 'Jade Gaming Laptop',
            'price' => 12000000,
        ]);

        DB::table('products')->insert([
            'name' => 'Mechanical Keyboard K13',
            'price' => 500000,
        ]);

        DB::table('products')->insert([
            'name' => 'SS Headphones',
            'price' => 200000,
        ]);
    }
}
