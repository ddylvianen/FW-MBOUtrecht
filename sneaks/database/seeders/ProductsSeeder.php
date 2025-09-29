<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        
        DB::table('products')->insert([
            [
                'name' => 'Nike Air Max 270',
                'description' => 'The Nike Air Max 270 delivers visible Max Air cushioning underfoot and a sleek, modern silhouette.',
                'price' => 129.99,
                'stock' => 50,
                'image_path' => 'images/nike-air-max-270.svg',
                'comment' => 'Popular running shoe',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Adidas Ultraboost 22',
                'description' => 'Experience endless energy return with the responsive Boost midsole and Primeknit+ upper.',
                'price' => 189.99,
                'stock' => 30,
                'image_path' => 'images/adidas-ultraboost-22.svg',
                'comment' => 'Premium running shoe',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Jordan Air Jordan 1 Retro High',
                'description' => 'The original basketball icon returns with classic styling and premium materials.',
                'price' => 169.99,
                'stock' => 25,
                'image_path' => 'images/jordan-aj1-retro-high.svg',
                'comment' => 'Classic basketball shoe',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Converse Chuck Taylor All Star',
                'description' => 'The timeless canvas sneaker that started it all, perfect for everyday casual wear.',
                'price' => 59.99,
                'stock' => 100,
                'image_path' => 'images/converse-chuck-taylor.svg',
                'comment' => 'Classic casual sneaker',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Vans Old Skool',
                'description' => 'The classic skate shoe with signature side stripe and durable suede and canvas construction.',
                'price' => 64.99,
                'stock' => 75,
                'image_path' => 'images/vans-old-skool.svg',
                'comment' => 'Popular skate shoe',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'New Balance 990v5',
                'description' => 'American-made premium running shoe with superior comfort and craftsmanship.',
                'price' => 199.99,
                'stock' => 20,
                'image_path' => 'images/new-balance-990v5.svg',
                'comment' => 'Premium American-made sneaker',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Puma RS-X',
                'description' => 'Bold, chunky silhouette with modern technology and retro-inspired design.',
                'price' => 109.99,
                'stock' => 40,
                'image_path' => 'images/puma-rs-x.svg',
                'comment' => 'Trendy lifestyle sneaker',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Yeezy Boost 350 V2',
                'description' => 'Limited edition sneaker with Primeknit upper and signature Boost cushioning.',
                'price' => 229.99,
                'stock' => 15,
                'image_path' => 'images/yeezy-boost-350-v2.svg',
                'comment' => 'Limited edition release',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
