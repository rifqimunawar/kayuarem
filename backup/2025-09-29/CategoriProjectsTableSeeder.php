<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriProjectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categori_projects')->delete();
        
        \DB::table('categori_projects')->insert(array (
            0 => 
            array (
                'id' => '010eddf0-4c31-4f38-b4f0-c893d4e9eff8',
                'categori' => 'Project IKN',
                'deleted_at' => NULL,
                'created_at' => '2025-09-22 11:29:35',
                'updated_at' => '2025-09-22 11:29:35',
            ),
            1 => 
            array (
                'id' => 'ad91397b-f02c-4806-a31f-8ffeedb51fff',
                'categori' => 'Project PIK 2',
                'deleted_at' => NULL,
                'created_at' => '2025-09-22 11:29:46',
                'updated_at' => '2025-09-22 11:29:46',
            ),
        ));
        
        
    }
}