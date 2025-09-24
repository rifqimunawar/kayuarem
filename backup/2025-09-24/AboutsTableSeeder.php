<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AboutsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('abouts')->delete();
        
        \DB::table('abouts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'img' => 'about_20250921215719.jpg',
                'jumlah_client' => '100',
                'jumlah_project' => '900',
                'deskripsi' => 'Selamat datang di Kayu Arem - karya tangan lokal dari kayu & akrilik, dibuat dengan cinta di Bekasi. Kami percaya setiap karya punya cerita, setiap goresan punya makna.',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2025-09-23 09:35:03',
            ),
        ));
        
        
    }
}