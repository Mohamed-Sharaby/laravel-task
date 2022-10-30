<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $adminPermissions = ['View', 'Create', 'Edit', 'Delete'];

        foreach ($adminPermissions as $permission) {
            Permission::updateOrCreate(['name' => $permission],['name' => $permission, 'guard_name' => 'web']);
        }

        $adminRole = Role::updateOrCreate(['name'=> 'Admin'],['name' => 'Admin', 'guard_name' => 'web']);
        $adminRole->syncPermissions(['View', 'Create', 'Edit', 'Delete']);

        $memberRole = Role::updateOrCreate(['name'=> 'Member'],['name' => 'Member', 'guard_name' => 'web']);
        $memberRole->syncPermissions(['View', 'Create']);

        $userRole = Role::updateOrCreate(['name'=> 'User'],['name' => 'User', 'guard_name' => 'web']);
        $userRole->syncPermissions(['View']);


    }
}
