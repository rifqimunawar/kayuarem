<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('clients')->delete();
        
        \DB::table('clients')->insert(array (
            0 => 
            array (
                'id' => 1,
                'img' => 'home_20250923023145.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-09-23 02:31:45',
                'updated_at' => '2025-09-23 02:31:45',
            ),
            1 => 
            array (
                'id' => 2,
                'img' => 'home_20250923023523.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-09-23 02:35:23',
                'updated_at' => '2025-09-23 02:35:23',
            ),
            2 => 
            array (
                'id' => 3,
                'img' => 'client_20250923023817.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-09-23 02:38:17',
                'updated_at' => '2025-09-23 02:38:17',
            ),
            3 => 
            array (
                'id' => 4,
                'img' => 'client_20250923033455.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-09-23 03:34:55',
                'updated_at' => '2025-09-23 03:34:55',
            ),
            4 => 
            array (
                'id' => 5,
                'img' => 'client_20250923033507.png',
                'deleted_at' => NULL,
                'created_at' => '2025-09-23 03:35:07',
                'updated_at' => '2025-09-23 03:35:07',
            ),
        ));
        
        
    }
}