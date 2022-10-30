<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => '$2y$10$3HktjVzt.UuObWnkrnZiIeyLWkElaUORds60x6PMwLim.LGZmla5y',
                'created_at' => '2022-10-30 00:25:24',
                'updated_at' => '2022-10-30 00:25:24',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user',
                'email' => 'user@user.com',
                'password' => '$2y$10$qPMPv1EtuA2jopmHiH5wZOFGs0Iqw4ZRpAf5jOgaWmLYRTNitQD2q',
                'created_at' => '2022-10-30 00:26:19',
                'updated_at' => '2022-10-30 00:35:28',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Member',
                'email' => 'member@member.com',
                'password' => '$2y$10$hE/.aL0dVNC1q7R0GO4Tselw1kaKb9oZMGZzh3A90RPrhkpFhbKxC',
                'created_at' => '2022-10-30 00:36:23',
                'updated_at' => '2022-10-30 00:36:23',
            ),
        ));
        
        
    }
}