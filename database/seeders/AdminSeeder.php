<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::updateOrCreate(['email' => 'admin@admin.com'], [
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => '123456',
        ]);

        $adminRole = Role::whereName('Admin')->first();
        $admin->syncRoles($adminRole);
    }
}
