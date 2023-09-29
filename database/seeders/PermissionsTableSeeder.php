<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Permission dashboard
        Permission::create(['name' => 'dashboard.index', 'guard_name' => 'web']);
        Permission::create(['name' => 'dashboard.sales_chart', 'guard_name' => 'web']);
        Permission::create(['name' => 'dashboard.sales_today', 'guard_name' => 'web']);
        Permission::create(['name' => 'dashboard.profits_today', 'guard_name' => 'web']);
        Permission::create(['name' => 'dashboard.best_selling_product', 'guard_name' => 'web']);
        Permission::create(['name' => 'dashboard.product_stock', 'guard_name' => 'web']);

        // Permission users
        Permission::create(['name' => 'users.index', 'guard_name' => 'web']);
        Permission::create(['name' => 'users.create', 'guard_name' => 'web']);
        Permission::create(['name' => 'users.edit', 'guard_name' => 'web']);
        Permission::create(['name' => 'users.delete', 'guard_name' => 'web']);

        // Permission roles
        Permission::create(['name' => 'roles.index', 'guard_name' => 'web']);
        Permission::create(['name' => 'roles.create', 'guard_name' => 'web']);
        Permission::create(['name' => 'roles.edit', 'guard_name' => 'web']);
        Permission::create(['name' => 'roles.delete', 'guard_name' => 'web']);

        // Permission permissions
        Permission::create(['name' => 'permissions.index', 'guard_name' => 'web']);

        // Permission categories
        Permission::create(['name' => 'categories.index', 'guard_name' => 'web']);
        Permission::create(['name' => 'categories.create', 'guard_name' => 'web']);
        Permission::create(['name' => 'categories.edit', 'guard_name' => 'web']);
        Permission::create(['name' => 'categories.delete', 'guard_name' => 'web']);

        // Permission products
        Permission::create(['name' => 'products.index', 'guard_name' => 'web']);
        Permission::create(['name' => 'products.create', 'guard_name' => 'web']);
        Permission::create(['name' => 'products.edit', 'guard_name' => 'web']);
        Permission::create(['name' => 'products.delete', 'guard_name' => 'web']);

        // Permission customers
        Permission::create(['name' => 'customers.index', 'guard_name' => 'web']);
        Permission::create(['name' => 'customers.create', 'guard_name' => 'web']);
        Permission::create(['name' => 'customers.edit', 'guard_name' => 'web']);
        Permission::create(['name' => 'customers.delete', 'guard_name' => 'web']);

        // Permission transactions
        Permission::create(['name' => 'transactions.index', 'guard_name' => 'web']);

        // Permissions sales
        Permission::create(['name' => 'sales.index', 'guard_name' => 'web']);

        // Permissions profites
        Permission::create(['name' => 'profits.index', 'guard_name' => 'web']);
    }
}
