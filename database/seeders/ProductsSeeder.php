<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();

        // Using placeholder image for all products
        $placeholderImage = 'images/image.png';

        // Product name variations
        $nameVariations = [
            'Air Max', 'Boost Runner', 'High Top Elite', 'Canvas Classic', 'Skate Pro',
            'Heritage Runner', 'Thunder Spec', 'Cloud Walker', 'Street Fighter', 'Urban Legend',
            'Night Runner', 'Day Walker', 'Speed Demon', 'Comfort Zone', 'Style Master',
            'Retro Vibes', 'Modern Classic', 'Future Tech', 'Old School', 'New Wave',
            'Sport Elite', 'Casual King', 'Premium Choice', 'Budget Friendly', 'Limited Drop',
            'Classic Flow', 'Dynamic Force', 'Power Step', 'Smooth Glide', 'Peak Performance',
            'Elite Series', 'Urban Explorer', 'Street Ready', 'Active Life', 'Motion Control',
            'Flex Zone', 'Impact Pro', 'Velocity Max', 'Comfort Plus', 'Style Icon',
            'Performance Edge', 'City Walker', 'Sport Fusion', 'Trend Setter', 'Active Wear',
            'Premium Line', 'Street Style', 'Dynamic Step', 'Comfort First', 'Urban Style'
        ];

        // Description variations
        $descriptions = [
            'Premium athletic footwear designed for maximum comfort and style.',
            'Lightweight construction with advanced cushioning technology.',
            'Durable materials combined with modern design aesthetics.',
            'Classic silhouette updated with contemporary features.',
            'Perfect blend of performance and street-ready style.',
            'Breathable upper with responsive midsole technology.',
            'Versatile sneaker suitable for various activities.',
            'Engineered for comfort during extended wear.',
            'Bold design statement with functional performance.',
            'Minimalist approach to maximum comfort delivery.',
            'Innovative materials meet timeless design principles.',
            'Street-inspired aesthetics with athletic performance.',
            'Comfort-first design without compromising on style.',
            'Advanced technology wrapped in sleek packaging.',
            'Classic comfort redefined for modern lifestyle.',
            'Performance-driven design with casual appeal.',
            'Sustainable materials meet cutting-edge design.',
            'Retro-inspired with contemporary comfort features.',
            'Engineered for the urban explorer and athlete.',
            'Premium craftsmanship in every detail and stitch.',
            'Dynamic support system for all-day comfort.',
            'Innovative sole technology for superior grip.',
            'Breathable mesh construction for optimal airflow.',
            'Cushioned heel and arch support for stability.',
            'Weather-resistant materials for durability.',
            'Flexible outsole design for natural movement.',
            'Memory foam insole for personalized comfort.',
            'Anti-slip technology for confident steps.',
            'Shock-absorbing midsole for impact protection.',
            'Stylish design meets functional performance.',
            'Ergonomic fit for all-day wearing comfort.',
            'High-quality materials ensure long-lasting wear.',
            'Versatile style suitable for any occasion.',
            'Advanced ventilation system keeps feet cool.',
            'Precision-engineered for optimal performance.',
            'Contemporary design with classic appeal.',
            'Lightweight yet durable construction quality.',
            'Enhanced traction for superior ground contact.',
            'Comfortable padding throughout the interior.',
            'Modern aesthetics with timeless functionality.',
            'Professional design meets casual comfort.',
            'Superior arch support for foot health.',
            'Quick-dry materials for active lifestyles.',
            'Reinforced construction for extended durability.',
            'Seamless design reduces pressure points.',
            'Advanced heel stabilization technology.',
            'Moisture-wicking interior for dry comfort.',
            'Flexible design adapts to foot movement.',
            'Premium leather construction with modern touches.',
            'Athletic performance in a stylish package.'
        ];

        $products = [];
        for ($i = 1; $i <= 50; $i++) {
            $nameIndex = ($i - 1) % count($nameVariations);
            $descIndex = ($i - 1) % count($descriptions);

            $products[] = [
                'name' => $nameVariations[$nameIndex] . ' ' . ($i <= 25 ? 'v' . ($i % 5 + 1) : 'Pro ' . ($i % 10 + 1)),
                'description' => $descriptions[$descIndex],
                'price' => rand(3999, 29999) / 100, // Random price between $39.99 and $299.99
                'stock' => rand(5, 150),
                'image_path' => $placeholderImage,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        DB::table('products')->insert($products);
    }
}
