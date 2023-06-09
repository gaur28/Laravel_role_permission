<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // defining roles for Role Table.
        $roles = [
            'super-admin',
            'admin',
            'tenent',
            'user'

        ];

        // creating roles and providing permission to roles.
        $role = Role::create(['name'=> $roles[0]]);
        $role->givePermissionTo(['product-read', 'product-create', 'product-update' ,'product-delete' ]);

        $role = Role::create(['name'=> $roles[1]]);
        $role->givePermissionTo(['product-read', 'product-create', 'product-update']);

        $role = Role::create(['name'=> $roles[2]]);
        $role->givePermissionTo(['product-create', 'product-update' ,'product-delete' ]);

        $role = Role::create(['name'=> $roles[3]]);
        $role->givePermissionTo(['product-read',]);


    }
}
