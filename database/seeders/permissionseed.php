<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;

class permissionseed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions

        Permission::create(['name' => 'edit']);
        Permission::create(['name' => 'delete']);
        Permission::create(['name' => 'publish']);
        Permission::create(['name' => 'unpublish']);

        // Permission::create(['name' => 'buy']);
//
        $adminrole = Role::create(['name' => 'admin']);
        // $adminrole->givePermissionTo(Permission::all());

        $workerrole = Role::create(['name' => 'worker']);
        $workerrole->givePermissionTo(['edit', 'publish', 'unpublish']);

        $userrole = Role::create(['name' => 'user']);
        // $userrole->givePermissionTo(['view']);

        // $guestrole = Role::create(['name' => 'guest']);

         $user = \App\Models\User::factory()->create([
            'name' => 'Example User',
            'email' => 'tester@example.com',
        ]);
        $user->assignRole($userrole);

        $admin = \App\Models\User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
        ]);
        $admin->assignRole($adminrole);

        $worker = \App\Models\User::factory()->create([
            'name' => 'Worker User',
            'email' => 'worker@example.com',
        ]);
        $worker->assignRole($workerrole);

    }
}
