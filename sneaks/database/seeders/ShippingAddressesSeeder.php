<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShippingAddressesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        
        DB::table('shipping_adresses')->insert([
            [
                'user_id' => 2, // John Doe
                'order_id' => 1,
                'address_line1' => '123 Main Street',
                'address_line2' => 'Apt 4B',
                'city' => 'New York',
                'state' => 'NY',
                'postal_code' => '10001',
                'country' => 'USA',
                'created_at' => $now->subDays(5),
                'updated_at' => $now->subDays(5),
            ],
            [
                'user_id' => 3, // Jane Smith
                'order_id' => 2,
                'address_line1' => '456 Oak Avenue',
                'address_line2' => null,
                'city' => 'Los Angeles',
                'state' => 'CA',
                'postal_code' => '90210',
                'country' => 'USA',
                'created_at' => $now->subDays(3),
                'updated_at' => $now->subDays(3),
            ],
            [
                'user_id' => 4, // Mike Johnson
                'order_id' => 3,
                'address_line1' => '789 Pine Road',
                'address_line2' => 'Suite 200',
                'city' => 'Chicago',
                'state' => 'IL',
                'postal_code' => '60601',
                'country' => 'USA',
                'created_at' => $now->subDays(1),
                'updated_at' => $now->subDays(1),
            ],
        ]);
    }
}