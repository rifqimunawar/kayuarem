<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('teams')->delete();
        
        \DB::table('teams')->insert(array (
            0 => 
            array (
                'id' => 1,
                'img' => 'team_20250921221209.jpeg',
                'nama' => 'Hanifah Aulia',
                'posisi' => 'Manager',
                'deskripsi' => NULL,
                'link_ig' => NULL,
                'deleted_at' => '2025-09-21 22:14:26',
                'created_at' => '2025-09-21 22:12:09',
                'updated_at' => '2025-09-21 22:14:26',
            ),
            1 => 
            array (
                'id' => 2,
                'img' => 'team_20250930231018.jpg',
                'nama' => 'Agus Aryadi',
                'posisi' => '{"id":"CEO / Owner","en":"CEO / Owner"}',
                'deskripsi' => NULL,
                'link_ig' => '-',
                'deleted_at' => NULL,
                'created_at' => '2025-09-21 22:13:09',
                'updated_at' => '2025-09-30 23:10:19',
            ),
            2 => 
            array (
                'id' => 3,
                'img' => 'team_20250930231213.jpg',
                'nama' => 'Rosiah',
                'posisi' => '{"id":"Directur / Marketing","en":"Director / Marketing"}',
                'deskripsi' => NULL,
                'link_ig' => '-',
                'deleted_at' => NULL,
                'created_at' => '2025-09-21 22:13:23',
                'updated_at' => '2025-09-30 23:12:14',
            ),
            3 => 
            array (
                'id' => 4,
                'img' => 'team_20250930231328.jpg',
                'nama' => 'Bue',
                'posisi' => '{"id":"Leader Operational","en":"Operational Leader"}',
                'deskripsi' => NULL,
                'link_ig' => '-',
                'deleted_at' => NULL,
                'created_at' => '2025-09-21 22:13:39',
                'updated_at' => '2025-09-30 23:13:30',
            ),
            4 => 
            array (
                'id' => 5,
                'img' => 'team_20250930231421.jpg',
                'nama' => 'Yayo',
                'posisi' => '{"id":"Production Leader","en":"Production Leader"}',
                'deskripsi' => NULL,
                'link_ig' => '-',
                'deleted_at' => NULL,
                'created_at' => '2025-09-21 22:14:10',
                'updated_at' => '2025-10-19 09:34:28',
            ),
            5 => 
            array (
                'id' => 6,
                'img' => 'team_20251019092210.jpg',
                'nama' => 'Lia',
                'posisi' => '{"id":"Operational production","en":"Operational production"}',
                'deskripsi' => NULL,
                'link_ig' => '-',
                'deleted_at' => NULL,
                'created_at' => '2025-09-21 22:14:44',
                'updated_at' => '2025-10-19 09:22:10',
            ),
            6 => 
            array (
                'id' => 7,
                'img' => 'team_20250930231623.jpg',
                'nama' => 'Zahra',
                'posisi' => '{"id":"Operational production","en":"Operational production"}',
                'deskripsi' => NULL,
                'link_ig' => '-',
                'deleted_at' => NULL,
                'created_at' => '2025-09-30 23:16:24',
                'updated_at' => '2025-10-19 09:33:43',
            ),
            7 => 
            array (
                'id' => 8,
                'img' => 'team_20250930231703.jpg',
                'nama' => 'Cherry',
                'posisi' => '{"id":"Team Kreatif","en":"Creative team"}',
                'deskripsi' => NULL,
                'link_ig' => '-',
                'deleted_at' => NULL,
                'created_at' => '2025-09-30 23:17:03',
                'updated_at' => '2025-09-30 23:17:03',
            ),
            8 => 
            array (
                'id' => 9,
                'img' => 'team_20251019092340.jpg',
                'nama' => 'Rohma',
                'posisi' => '{"id":"Operational production","en":"Operational production"}',
                'deskripsi' => NULL,
                'link_ig' => '-',
                'deleted_at' => NULL,
                'created_at' => '2025-09-30 23:18:03',
                'updated_at' => '2025-10-19 09:23:40',
            ),
            9 => 
            array (
                'id' => 10,
                'img' => 'team_20251019092525.jpg',
                'nama' => 'Aura',
                'posisi' => '{"id":"Operational production","en":"Operational production"}',
                'deskripsi' => NULL,
                'link_ig' => '-',
                'deleted_at' => NULL,
                'created_at' => '2025-09-30 23:18:58',
                'updated_at' => '2025-10-19 09:25:25',
            ),
            10 => 
            array (
                'id' => 11,
                'img' => 'team_20251019075217.jpg',
                'nama' => 'Ari',
                'posisi' => '{"id":"Operational production","en":"Operational production"}',
                'deskripsi' => NULL,
                'link_ig' => '-',
                'deleted_at' => NULL,
                'created_at' => '2025-09-30 23:20:10',
                'updated_at' => '2025-10-19 07:52:18',
            ),
            11 => 
            array (
                'id' => 12,
                'img' => 'team_20251019093034.jpg',
                'nama' => 'Dzikron',
                'posisi' => '{"id":"Operational production","en":"Operational production"}',
                'deskripsi' => NULL,
                'link_ig' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-10-19 09:30:34',
                'updated_at' => '2025-10-19 09:30:34',
            ),
        ));
        
        
    }
}