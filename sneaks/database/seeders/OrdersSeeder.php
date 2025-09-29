<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        
        DB::table('orders')->insert([
            [
                'user_id' => 2, // John Doe
                'cart_id' => 1,
                'total_amount' => 249.97, // 129.99 + (59.99 * 2)
                'price' => 249.97,
                'status' => 'completed',
                'created_at' => $now->subDays(5),
                'updated_at' => $now->subDays(4),
            ],
            [
                'user_id' => 3, // Jane Smith
                'cart_id' => 2,
                'total_amount' => 364.97, // 189.99 + 64.99 + 109.99
                'price' => 364.97,
                'status' => 'shipped',
                'created_at' => $now->subDays(3),
                'updated_at' => $now->subDays(2),
            ],
            [
                'user_id' => 4, // Mike Johnson
                'cart_id' => 3,
                'total_amount' => 229.99,
                'price' => 229.99,
                'status' => 'pending',
                'created_at' => $now->subDays(1),
                'updated_at' => $now->subDays(1),
            ],
        ]);
    }
}