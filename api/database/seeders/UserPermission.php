<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserPermission extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Permissions for User
        Permission::create(['name' => 'list-user']);
        Permission::create(['name' => 'create-user']);
        Permission::create(['name' => 'store-user']);
        Permission::create(['name' => 'show-user']);
        Permission::create(['name' => 'edit-user']);
        Permission::create(['name' => 'update-user']);
        Permission::create(['name' => 'destroy-user']);

        // Permissions for Role
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user']);

        // Role for User
        $roleAdmin = Role::findByName('admin');
        $roleAdmin->givePermissionTo('list-user');
        $roleAdmin->givePermissionTo('create-user');
        $roleAdmin->givePermissionTo('store-user');
        $roleAdmin->givePermissionTo('show-user');
        $roleAdmin->givePermissionTo('edit-user');
        $roleAdmin->givePermissionTo('update-user');
        $roleAdmin->givePermissionTo('destroy-user');


        $roleUser = Role::findByName('user');
        $roleUser->givePermissionTo('show-user');
        $roleUser->givePermissionTo('edit-user');
        $roleUser->givePermissionTo('update-user');
    }
}
