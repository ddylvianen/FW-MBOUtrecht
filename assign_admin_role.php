<?php

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

use Spatie\Permission\Models\Role;
use App\Models\User;

// Find admin user
$admin = User::where('email', 'admin@admin.com')->first();

if (!$admin) {
    echo "Admin user not found!\n";
    exit(1);
}

// Create or get admin role
$role = Role::firstOrCreate(['name' => 'admin']);

// Assign role to admin user
if ($admin->hasRole('admin')) {
    echo "User {$admin->email} already has admin role.\n";
} else {
    $admin->assignRole('admin');
    echo "Admin role assigned to {$admin->email}\n";
}

echo "Done!\n";
