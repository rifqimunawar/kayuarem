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
                'img' => 'client_20250929140242.png',
                'deleted_at' => NULL,
                'created_at' => '2025-09-23 09:40:03',
                'updated_at' => '2025-09-29 14:02:42',
            ),
            6 => 
            array (
                'id' => 7,
                'img' => 'client_20250929140231.png',
                'deleted_at' => NULL,
                'created_at' => '2025-09-23 09:40:12',
                'updated_at' => '2025-09-29 14:02:31',
            ),
            7 => 
            array (
                'id' => 8,
                'img' => 'client_20250929140221.png',
                'deleted_at' => NULL,
                'created_at' => '2025-09-23 09:40:22',
                'updated_at' => '2025-09-29 14:02:21',
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
                'img' => 'client_20250929140211.png',
                'deleted_at' => NULL,
                'created_at' => '2025-09-23 09:40:50',
                'updated_at' => '2025-09-29 14:02:11',
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
                'img' => 'client_20250929140200.png',
                'deleted_at' => NULL,
                'created_at' => '2025-09-23 09:41:08',
                'updated_at' => '2025-09-29 14:02:00',
            ),
            12 => 
            array (
                'id' => 13,
                'img' => 'client_20250929140443.png',
                'deleted_at' => NULL,
                'created_at' => '2025-09-29 14:04:43',
                'updated_at' => '2025-09-29 14:04:43',
            ),
            13 => 
            array (
                'id' => 14,
                'img' => 'client_20250929140450.png',
                'deleted_at' => NULL,
                'created_at' => '2025-09-29 14:04:50',
                'updated_at' => '2025-09-29 14:04:50',
            ),
            14 => 
            array (
                'id' => 15,
                'img' => 'client_20250929140653.png',
                'deleted_at' => NULL,
                'created_at' => '2025-09-29 14:06:53',
                'updated_at' => '2025-09-29 14:06:53',
            ),
            15 => 
            array (
                'id' => 16,
                'img' => 'client_20250929140958.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-09-29 14:09:58',
                'updated_at' => '2025-09-29 14:09:58',
            ),
            16 => 
            array (
                'id' => 17,
                'img' => 'client_20251019104522.png',
                'deleted_at' => NULL,
                'created_at' => '2025-10-19 10:45:22',
                'updated_at' => '2025-10-19 10:45:22',
            ),
            17 => 
            array (
                'id' => 18,
                'img' => 'client_20251019104630.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-10-19 10:46:30',
                'updated_at' => '2025-10-19 10:46:30',
            ),
            18 => 
            array (
                'id' => 19,
                'img' => 'client_20251019104747.webp',
                'deleted_at' => NULL,
                'created_at' => '2025-10-19 10:47:47',
                'updated_at' => '2025-10-19 10:47:47',
            ),
            19 => 
            array (
                'id' => 20,
                'img' => 'client_20251019105107.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-10-19 10:51:07',
                'updated_at' => '2025-10-19 10:51:07',
            ),
            20 => 
            array (
                'id' => 21,
                'img' => 'client_20251019105751.jpeg',
                'deleted_at' => NULL,
                'created_at' => '2025-10-19 10:57:51',
                'updated_at' => '2025-10-19 10:57:51',
            ),
            21 => 
            array (
                'id' => 22,
                'img' => 'client_20251019105804.jpeg',
                'deleted_at' => NULL,
                'created_at' => '2025-10-19 10:58:04',
                'updated_at' => '2025-10-19 10:58:04',
            ),
            22 => 
            array (
                'id' => 23,
                'img' => 'client_20251019105838.png',
                'deleted_at' => NULL,
                'created_at' => '2025-10-19 10:58:38',
                'updated_at' => '2025-10-19 10:58:38',
            ),
            23 => 
            array (
                'id' => 24,
                'img' => 'client_20251019105909.jpeg',
                'deleted_at' => NULL,
                'created_at' => '2025-10-19 10:59:09',
                'updated_at' => '2025-10-19 10:59:09',
            ),
            24 => 
            array (
                'id' => 25,
                'img' => 'client_20251019110334.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-10-19 11:03:34',
                'updated_at' => '2025-10-19 11:03:34',
            ),
            25 => 
            array (
                'id' => 26,
                'img' => 'client_20251019110347.png',
                'deleted_at' => NULL,
                'created_at' => '2025-10-19 11:03:47',
                'updated_at' => '2025-10-19 11:03:47',
            ),
            26 => 
            array (
                'id' => 27,
                'img' => 'client_20251019110400.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-10-19 11:04:00',
                'updated_at' => '2025-10-19 11:04:00',
            ),
            27 => 
            array (
                'id' => 28,
                'img' => 'client_20251019110627.png',
                'deleted_at' => NULL,
                'created_at' => '2025-10-19 11:06:27',
                'updated_at' => '2025-10-19 11:06:27',
            ),
            28 => 
            array (
                'id' => 29,
                'img' => 'client_20251019110643.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-10-19 11:06:43',
                'updated_at' => '2025-10-19 11:06:43',
            ),
            29 => 
            array (
                'id' => 30,
                'img' => 'client_20251019110653.png',
                'deleted_at' => NULL,
                'created_at' => '2025-10-19 11:06:53',
                'updated_at' => '2025-10-19 11:06:53',
            ),
            30 => 
            array (
                'id' => 31,
                'img' => 'client_20251019110712.png',
                'deleted_at' => NULL,
                'created_at' => '2025-10-19 11:07:12',
                'updated_at' => '2025-10-19 11:07:12',
            ),
            31 => 
            array (
                'id' => 32,
                'img' => 'client_20251019110729.jpeg',
                'deleted_at' => NULL,
                'created_at' => '2025-10-19 11:07:29',
                'updated_at' => '2025-10-19 11:07:29',
            ),
        ));
        
        
    }
}