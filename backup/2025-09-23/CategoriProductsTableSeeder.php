<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categori_products')->delete();
        
        \DB::table('categori_products')->insert(array (
            0 => 
            array (
                'id' => '225d4e98-0abd-41e7-9100-ce42e3e7c12f',
                'categori' => 'Interior Rumah',
                'deleted_at' => NULL,
                'created_at' => '2025-09-22 01:17:41',
                'updated_at' => '2025-09-22 11:35:08',
            ),
            1 => 
            array (
                'id' => '80b82256-7574-4eea-8341-9f243aa0cecf',
                'categori' => 'Busana Lebaran Update',
                'deleted_at' => '2025-09-22 01:28:22',
                'created_at' => '2025-09-22 01:28:12',
                'updated_at' => '2025-09-22 01:28:22',
            ),
            2 => 
            array (
                'id' => 'b4bd8a94-8441-4fb0-b851-018557d75f45',
                'categori' => 'Furniture',
                'deleted_at' => NULL,
                'created_at' => '2025-09-22 11:34:56',
                'updated_at' => '2025-09-22 11:34:56',
            ),
        ));
        
        
    }
}