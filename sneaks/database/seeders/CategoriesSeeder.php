<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        
        DB::table('categories')->insert([
            [
                'name' => 'Running Shoes',
                'description' => 'High-performance sneakers designed for running and athletic activities',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Basketball Shoes',
                'description' => 'Specialized footwear for basketball players with ankle support and grip',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Casual Sneakers',
                'description' => 'Everyday comfortable sneakers for casual wear and lifestyle',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Training Shoes',
                'description' => 'Cross-training shoes suitable for gym workouts and fitness activities',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Skate Shoes',
                'description' => 'Durable sneakers designed for skateboarding with enhanced grip and protection',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Limited Edition',
                'description' => 'Exclusive and rare sneaker releases with limited availability',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}