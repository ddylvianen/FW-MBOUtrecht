<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call seeders in correct order to respect foreign key constraints
        $this->call([
            UsersSeeder::class,
            CategoriesSeeder::class,
            ProductsSeeder::class,
            ProductCategoriesSeeder::class,
            CartSeeder::class,
            CartProductsSeeder::class,
            OrdersSeeder::class,
            ShippingAddressesSeeder::class,
            InvoicesSeeder::class,
        ]);
    }
}
