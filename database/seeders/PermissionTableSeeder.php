<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;


class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',

            'user-list',
            'user-create',
            'user-edit',
            'user-delete',

            'admin-list',
            'admin-create',
            'admin-edit',
            'admin-delete',

            'payment-method-list',
            'payment-method-create',
            'payment-method-edit',
            'payment-method-delete',

            'country-list',
            'country-create',
            'country-edit',
            'country-delete',

            'city-list',
            'city-create',
            'city-edit',
            'city-delete',

            'product-list',
            'product-create',
            'product-edit',
            'product-delete',

            'category-method-list',
            'category-method-create',
            'category-method-edit',
            'category-method-delete',
        ];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
