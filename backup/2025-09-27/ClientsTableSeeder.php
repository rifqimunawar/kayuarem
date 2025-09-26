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
                'deleted_at' => '2025-09-23 09:39:51',
                'created_at' => '2025-09-23 02:31:45',
                'updated_at' => '2025-09-23 09:39:51',
            ),
            1 => 
            array (
                'id' => 2,
                'img' => 'home_20250923023523.jpg',
                'deleted_at' => '2025-09-23 09:39:47',
                'created_at' => '2025-09-23 02:35:23',
                'updated_at' => '2025-09-23 09:39:47',
            ),
            2 => 
            array (
                'id' => 3,
                'img' => 'client_20250923023817.jpg',
                'deleted_at' => '2025-09-23 09:39:43',
                'created_at' => '2025-09-23 02:38:17',
                'updated_at' => '2025-09-23 09:39:43',
            ),
            3 => 
            array (
                'id' => 4,
                'img' => 'client_20250923033455.jpg',
                'deleted_at' => '2025-09-23 09:39:40',
                'created_at' => '2025-09-23 03:34:55',
                'updated_at' => '2025-09-23 09:39:40',
            ),
            4 => 
            array (
                'id' => 5,
                'img' => 'client_20250923033507.png',
                'deleted_at' => '2025-09-23 09:39:36',
                'created_at' => '2025-09-23 03:35:07',
                'updated_at' => '2025-09-23 09:39:36',
            ),
            5 => 
            array (
                'id' => 6,
                'img' => 'client_20250924082337.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-09-23 09:40:03',
                'updated_at' => '2025-09-24 08:23:37',
            ),
            6 => 
            array (
                'id' => 7,
                'img' => 'client_20250924082328.png',
                'deleted_at' => NULL,
                'created_at' => '2025-09-23 09:40:12',
                'updated_at' => '2025-09-24 08:23:28',
            ),
            7 => 
            array (
                'id' => 8,
                'img' => 'client_20250924082318.png',
                'deleted_at' => NULL,
                'created_at' => '2025-09-23 09:40:22',
                'updated_at' => '2025-09-24 08:23:18',
            ),
            8 => 
            array (
                'id' => 9,
                'img' => 'client_20250924082309.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-09-23 09:40:32',
                'updated_at' => '2025-09-24 08:23:09',
            ),
            9 => 
            array (
                'id' => 10,
                'img' => 'client_20250924082258.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-09-23 09:40:50',
                'updated_at' => '2025-09-24 08:22:58',
            ),
            10 => 
            array (
                'id' => 11,
                'img' => 'client_20250924082250.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-09-23 09:40:59',
                'updated_at' => '2025-09-24 08:22:50',
            ),
            11 => 
            array (
                'id' => 12,
                'img' => 'client_20250924082237.png',
                'deleted_at' => NULL,
                'created_at' => '2025-09-23 09:41:08',
                'updated_at' => '2025-09-24 08:22:37',
            ),
        ));
        
        
    }
}