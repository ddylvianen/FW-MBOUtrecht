<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InvoicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        
        DB::table('invoices')->insert([
            [
                'order_id' => 1,
                'invoice_number' => 'INV-2025-001',
                'amount' => 249.97,
                'issued_date' => $now->subDays(5)->toDateString(),
                'due_date' => $now->subDays(5)->addDays(30)->toDateString(),
                'status' => 'paid',
                'created_at' => $now->subDays(5),
                'updated_at' => $now->subDays(4),
            ],
            [
                'order_id' => 2,
                'invoice_number' => 'INV-2025-002',
                'amount' => 364.97,
                'issued_date' => $now->subDays(3)->toDateString(),
                'due_date' => $now->subDays(3)->addDays(30)->toDateString(),
                'status' => 'paid',
                'created_at' => $now->subDays(3),
                'updated_at' => $now->subDays(2),
            ],
            [
                'order_id' => 3,
                'invoice_number' => 'INV-2025-003',
                'amount' => 229.99,
                'issued_date' => $now->subDays(1)->toDateString(),
                'due_date' => $now->subDays(1)->addDays(30)->toDateString(),
                'status' => 'unpaid',
                'created_at' => $now->subDays(1),
                'updated_at' => $now->subDays(1),
            ],
        ]);
    }
}