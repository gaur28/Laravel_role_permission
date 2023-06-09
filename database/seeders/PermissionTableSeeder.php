<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //enteries for the Permission Table
        $permissions = [
            'product-read',
            'product-create',
            'product-update',
            'product-delete'
        ];

        // Inserting Permission into Permission Table

        foreach($permissions as $permission){
            Permission::create(['name'=> $permission]);
        }
    }
}
