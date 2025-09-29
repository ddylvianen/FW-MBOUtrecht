<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        
        DB::table('product_categories')->insert([
            // Nike Air Max 270 - Running Shoes
            [
                'product_id' => 1,
                'category_id' => 1, // Running Shoes
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // Adidas Ultraboost 22 - Running Shoes
            [
                'product_id' => 2,
                'category_id' => 1, // Running Shoes
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // Jordan Air Jordan 1 - Basketball Shoes
            [
                'product_id' => 3,
                'category_id' => 2, // Basketball Shoes
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // Converse Chuck Taylor - Casual Sneakers
            [
                'product_id' => 4,
                'category_id' => 3, // Casual Sneakers
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // Vans Old Skool - Skate Shoes
            [
                'product_id' => 5,
                'category_id' => 5, // Skate Shoes
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // Vans Old Skool - Also Casual
            [
                'product_id' => 5,
                'category_id' => 3, // Casual Sneakers
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // New Balance 990v5 - Running Shoes
            [
                'product_id' => 6,
                'category_id' => 1, // Running Shoes
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // Puma RS-X - Casual Sneakers
            [
                'product_id' => 7,
                'category_id' => 3, // Casual Sneakers
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // Puma RS-X - Training Shoes
            [
                'product_id' => 7,
                'category_id' => 4, // Training Shoes
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // Yeezy Boost 350 V2 - Limited Edition
            [
                'product_id' => 8,
                'category_id' => 6, // Limited Edition
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // Yeezy Boost 350 V2 - Also Casual
            [
                'product_id' => 8,
                'category_id' => 3, // Casual Sneakers
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}