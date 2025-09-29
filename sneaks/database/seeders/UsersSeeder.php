<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'email' => 'admin@sneaks.com',
                'first_name' => 'Admin',
                'last_name' => 'User',

                'email_verified_at' => $now,
                'password' => Hash::make('password'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email_verified_at' => $now,
                'password' => Hash::make('password'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'first_name' => 'Jane',
                'last_name' => 'Smith',
                'email_verified_at' => $now,
                'password' => Hash::make('password'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Mike Johnson',
                'email' => 'mike@example.com',
                'first_name' => 'Mike',
                'last_name' => 'Johnson',
                'email_verified_at' => $now,
                'password' => Hash::make('password'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Sarah Wilson',
                'email' => 'sarah@example.com',
                'first_name' => 'Sarah',
                'last_name' => 'Wilson',
                'email_verified_at' => $now,
                'password' => Hash::make('password'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}