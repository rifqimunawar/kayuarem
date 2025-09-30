<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LogPengunjungsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('log_pengunjungs')->delete();
        
        \DB::table('log_pengunjungs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36',
                'url' => 'http://127.0.0.1:8000',
                'halaman' => 'Home Page',
                'user_id' => NULL,
                'visited_at' => '2025-09-30 18:28:35',
                'deleted_at' => NULL,
                'created_at' => '2025-09-30 18:28:35',
                'updated_at' => '2025-09-30 18:28:35',
            ),
            1 => 
            array (
                'id' => 2,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/about',
                'halaman' => 'About Page',
                'user_id' => NULL,
                'visited_at' => '2025-09-30 18:28:38',
                'deleted_at' => NULL,
                'created_at' => '2025-09-30 18:28:38',
                'updated_at' => '2025-09-30 18:28:38',
            ),
            2 => 
            array (
                'id' => 3,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36',
                'url' => 'http://127.0.0.1:8000',
                'halaman' => 'Home Page',
                'user_id' => NULL,
                'visited_at' => '2025-09-30 18:28:40',
                'deleted_at' => NULL,
                'created_at' => '2025-09-30 18:28:40',
                'updated_at' => '2025-09-30 18:28:40',
            ),
            3 => 
            array (
                'id' => 4,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/about',
                'halaman' => 'About Page',
                'user_id' => NULL,
                'visited_at' => '2025-09-30 18:28:43',
                'deleted_at' => NULL,
                'created_at' => '2025-09-30 18:28:43',
                'updated_at' => '2025-09-30 18:28:43',
            ),
            4 => 
            array (
                'id' => 5,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36',
                'url' => 'http://127.0.0.1:8000',
                'halaman' => 'Home Page',
                'user_id' => NULL,
                'visited_at' => '2025-09-30 18:28:44',
                'deleted_at' => NULL,
                'created_at' => '2025-09-30 18:28:44',
                'updated_at' => '2025-09-30 18:28:44',
            ),
            5 => 
            array (
                'id' => 6,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/about',
                'halaman' => 'About Page',
                'user_id' => NULL,
                'visited_at' => '2025-09-30 18:28:50',
                'deleted_at' => NULL,
                'created_at' => '2025-09-30 18:28:50',
                'updated_at' => '2025-09-30 18:28:50',
            ),
            6 => 
            array (
                'id' => 7,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36',
                'url' => 'http://127.0.0.1:8000',
                'halaman' => 'Home Page',
                'user_id' => NULL,
                'visited_at' => '2025-09-30 18:28:52',
                'deleted_at' => NULL,
                'created_at' => '2025-09-30 18:28:52',
                'updated_at' => '2025-09-30 18:28:52',
            ),
            7 => 
            array (
                'id' => 8,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/news/category/ff1485f4-4fe4-45ec-9da9-a34ce1eb4732',
                'halaman' => 'Artile by category page',
                'user_id' => 1,
                'visited_at' => '2025-09-30 18:30:20',
                'deleted_at' => NULL,
                'created_at' => '2025-09-30 18:30:20',
                'updated_at' => '2025-09-30 18:30:20',
            ),
            8 => 
            array (
                'id' => 9,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/news/f018790a-9390-44eb-8ede-284742b117f4',
                'halaman' => 'Artikel detail page',
                'user_id' => 1,
                'visited_at' => '2025-09-30 18:30:25',
                'deleted_at' => NULL,
                'created_at' => '2025-09-30 18:30:25',
                'updated_at' => '2025-09-30 18:30:25',
            ),
            9 => 
            array (
                'id' => 10,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/news/f018790a-9390-44eb-8ede-284742b117f4',
                'halaman' => 'Artikel detail page',
                'user_id' => 1,
                'visited_at' => '2025-09-30 18:35:07',
                'deleted_at' => NULL,
                'created_at' => '2025-09-30 18:35:07',
                'updated_at' => '2025-09-30 18:35:07',
            ),
        ));
        
        
    }
}