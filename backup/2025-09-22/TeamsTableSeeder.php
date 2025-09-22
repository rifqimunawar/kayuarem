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
                'img' => 'team_20250921221309.jpg',
                'nama' => 'Maya Indriyani',
                'posisi' => 'Direktur',
                'deskripsi' => NULL,
                'link_ig' => 'https://www.instagram.com/dinagricella/',
                'deleted_at' => NULL,
                'created_at' => '2025-09-21 22:13:09',
                'updated_at' => '2025-09-21 22:27:17',
            ),
            2 => 
            array (
                'id' => 3,
                'img' => 'team_20250921221323.jpg',
                'nama' => 'Elisna',
                'posisi' => 'Admin',
                'deskripsi' => NULL,
                'link_ig' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-09-21 22:13:23',
                'updated_at' => '2025-09-21 22:13:23',
            ),
            3 => 
            array (
                'id' => 4,
                'img' => 'team_20250921221339.jpg',
                'nama' => 'Endi Setiawan',
                'posisi' => 'Seniman',
                'deskripsi' => NULL,
                'link_ig' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-09-21 22:13:39',
                'updated_at' => '2025-09-21 22:13:39',
            ),
            4 => 
            array (
                'id' => 5,
                'img' => 'team_20250921221410.png',
                'nama' => 'Agil Cabul',
                'posisi' => 'Sound Sistem',
                'deskripsi' => NULL,
                'link_ig' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-09-21 22:14:10',
                'updated_at' => '2025-09-21 22:14:10',
            ),
            5 => 
            array (
                'id' => 6,
                'img' => 'team_20250921221444.jpg',
                'nama' => 'Aziz Maul',
                'posisi' => 'Seniman',
                'deskripsi' => NULL,
                'link_ig' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-09-21 22:14:44',
                'updated_at' => '2025-09-21 22:14:44',
            ),
        ));
        
        
    }
}