<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create user
        $user = User::create([
            'name'      => 'Administrator',
            'email'     => 'admin@gmail.com',
            'password'  => bcrypt('password'),
        ]);

        // Get all permissions
        $permissions = Permission::all();

        // Get role admin
        $role = Role::find(1);

        // Assign permission to role
        $role->syncPermissions($permissions);

        // Assign role to user
        $user->assignRole($role);
    }
}
