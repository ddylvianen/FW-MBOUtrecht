<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        
        DB::table('cart')->insert([
            [
                'user_id' => 2, // John Doe
                'comment' => 'Active shopping cart',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 3, // Jane Smith
                'comment' => 'Cart with multiple items',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 4, // Mike Johnson
                'comment' => 'Single item cart',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}