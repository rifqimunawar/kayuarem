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
                'img' => 'project_20250927154421.jpg',
                'judul' => '{"id":"Kusen untuk perumahan PIK 2","en":"Frame for pik housing 2"}',
                'deskripsi' => '{"id":"Membuat semua kebutuhan kontruksi untuk perumahan elite di PIK 2","en":"Make all construction needs for elite housing in PIK 2"}',
                'categori_id' => '010eddf0-4c31-4f38-b4f0-c893d4e9eff8',
                'deleted_at' => NULL,
                'created_at' => '2025-09-22 12:49:26',
                'updated_at' => '2025-09-27 15:44:23',
            ),
            1 => 
            array (
                'id' => 'e86d01b8-797a-461c-85c8-4beca429cb17',
                'img' => 'project_20250922125116.jpg',
                'judul' => '{"id":"Pembuatan Patung Jokowi","en":"Making Jokowi\'s Statue"}',
                'deskripsi' => '{"id":"Membuat patung pa jokowi sebagai bentuk kemajuan bangsa indonesia","en":"Making a statue of Mr. Jokowi as a form of progress of the Indonesian people"}',
                'categori_id' => 'ad91397b-f02c-4806-a31f-8ffeedb51fff',
                'deleted_at' => NULL,
                'created_at' => '2025-09-22 12:51:16',
                'updated_at' => '2025-09-27 15:43:04',
            ),
        ));
        
        
    }
}