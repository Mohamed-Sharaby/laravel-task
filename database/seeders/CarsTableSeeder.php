<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cars')->delete();
        
        \DB::table('cars')->insert(array (
            0 => 
            array (
                'id' => 1,
                'model' => 'Nissan',
                'color' => 'Red',
                'year' => '2014',
                'mileage' => '10000',
                'image' => '/storage/uploads/4uXZunzrYcMU7rZ3wTgjvg1NriDcbf6ddkRGFk3h.jpg',
                'location' => NULL,
                'lat' => '25.1799325',
                'lng' => '55.3017855',
                'created_at' => '2022-10-30 00:29:46',
                'updated_at' => '2022-10-30 00:30:45',
            ),
            1 => 
            array (
                'id' => 2,
                'model' => 'Toyota',
                'color' => 'Black',
                'year' => '2008',
                'mileage' => '15000',
                'image' => '/storage/uploads/Bn0KREPWGZaxlVPgTQwZlIQY36811F7yXVNB7A50.jpg',
                'location' => NULL,
                'lat' => '25.1974080',
                'lng' => '55.2759933',
                'created_at' => '2022-10-30 00:30:20',
                'updated_at' => '2022-10-30 00:31:01',
            ),
            2 => 
            array (
                'id' => 3,
                'model' => 'BMW',
                'color' => 'White',
                'year' => '2015',
                'mileage' => '30000',
                'image' => '/storage/uploads/HY447BtzUF5btKV7jNcUgRw5wTgHc4ptvETH2ujr.jpg',
                'location' => NULL,
                'lat' => '25.1945084',
                'lng' => '55.2309883',
                'created_at' => '2022-10-30 00:31:44',
                'updated_at' => '2022-10-30 00:32:06',
            ),
            3 => 
            array (
                'id' => 4,
                'model' => 'Honda',
                'color' => 'Green',
                'year' => '2000',
                'mileage' => '60500',
                'image' => NULL,
                'location' => NULL,
                'lat' => '25.1225173',
                'lng' => '55.2227783',
                'created_at' => '2022-10-30 00:33:07',
                'updated_at' => '2022-10-30 00:33:07',
            ),
            4 => 
            array (
                'id' => 5,
                'model' => 'Skoda',
                'color' => 'Brown',
                'year' => '2020',
                'mileage' => '89000',
                'image' => '/storage/uploads/yrelkmXXIbqD8mVw6MBjlvxIBkV7kx5ryCPtFYv9.jpg',
                'location' => NULL,
                'lat' => NULL,
                'lng' => NULL,
                'created_at' => '2022-10-30 00:34:02',
                'updated_at' => '2022-10-30 00:34:02',
            ),
        ));
        
        
    }
}