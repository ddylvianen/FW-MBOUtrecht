<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        
        DB::table('cart_products')->insert([
            // John Doe's cart
            [
                'cart_id' => 1,
                'product_id' => 1, // Nike Air Max 270
                'quantity' => 1,
                'price' => 129.99,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'cart_id' => 1,
                'product_id' => 4, // Converse Chuck Taylor
                'quantity' => 2,
                'price' => 59.99,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            
            // Jane Smith's cart
            [
                'cart_id' => 2,
                'product_id' => 2, // Adidas Ultraboost 22
                'quantity' => 1,
                'price' => 189.99,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'cart_id' => 2,
                'product_id' => 5, // Vans Old Skool
                'quantity' => 1,
                'price' => 64.99,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'cart_id' => 2,
                'product_id' => 7, // Puma RS-X
                'quantity' => 1,
                'price' => 109.99,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            
            // Mike Johnson's cart
            [
                'cart_id' => 3,
                'product_id' => 8, // Yeezy Boost 350 V2
                'quantity' => 1,
                'price' => 229.99,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}