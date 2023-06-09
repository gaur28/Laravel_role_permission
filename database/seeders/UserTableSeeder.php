<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;



class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // creating superAdmin
        $superAdmin =User::create([
    		'name' => 'Arpit',
    		'email' => 'arpit@getgrahak.com',
            'role_id' => 1,
    		'password' => Hash::make('IamArpit')
        ]);

        // assigning role to super admin
         $superAdmin->assignRole('super-admin');

        // giving direct permission to super admin
        $superAdmin->givePermissionTo(['product-read', 'product-create', 'product-update' ,'product-delete']);

        // creating admin
        $admin = User::create([
    		'name' => 'Tushar',
    		'email' => 'tushar@getgrahak.com',
            'role_id' => 2,
    		'password' => Hash::make('IamTushar')
        ]);

        // assigning role to admin
        $admin->assignRole('admin');

        // giving direct permission to super admin
        $admin->givePermissionTo(['product-read', 'product-create', 'product-update']);

        //creating user for tenent and user role
        User::factory()->count(3)->create();

        //fetching user with role_id 3
        $tenent = User::where('role_id','=', 3)->first();

        //assigning role to tenent
        $tenent->assignRole('tenent');

        //giving direct permission to tenent
        $tenent->givePermissionTo(['product-create', 'product-update' ,'product-delete']);

        //fetching user with role_id 4
        $user = User::where('role_id','=', 4)->first();

        //assigning role to user
        $user->assignRole('user');

        //giving direct permission to user
        $user->givePermissionTo('product-read');


    }
}
