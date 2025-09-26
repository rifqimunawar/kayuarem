<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('projects')->delete();
        
        \DB::table('projects')->insert(array (
            0 => 
            array (
                'id' => 'dc5103d3-d49f-41d0-acc3-0b50a5b67ae8',
                'img' => 'project_20250922124926.jpeg',
                'judul' => 'Pembuatan Patung Jokowi',
                'deskripsi' => 'Membuat patung pa jokowi sebagai bentuk kemajuan bangsa indonesia',
                'categori_id' => '010eddf0-4c31-4f38-b4f0-c893d4e9eff8',
                'deleted_at' => NULL,
                'created_at' => '2025-09-22 12:49:26',
                'updated_at' => '2025-09-22 12:49:26',
            ),
            1 => 
            array (
                'id' => 'e86d01b8-797a-461c-85c8-4beca429cb17',
                'img' => 'project_20250922125116.jpg',
                'judul' => 'Project dengan PIK 2',
                'deskripsi' => 'Quos consectetur in',
                'categori_id' => 'ad91397b-f02c-4806-a31f-8ffeedb51fff',
                'deleted_at' => NULL,
                'created_at' => '2025-09-22 12:51:16',
                'updated_at' => '2025-09-22 12:51:16',
            ),
        ));
        
        
    }
}