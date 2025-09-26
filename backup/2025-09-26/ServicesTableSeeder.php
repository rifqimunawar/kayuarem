<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('services')->delete();
        
        \DB::table('services')->insert(array (
            0 => 
            array (
                'id' => 'a24e802f-0f7d-45bf-a704-660fa3055bcb',
                'img' => 'service_20250925212320.jpeg',
                'title' => 'Custom Jendela Sesuai Keinginan',
                'deskripsi' => 'Melayani Pembuatan Jendela dari bahan kayu berkualitas dan daya tahan tinggi',
                'deleted_at' => NULL,
                'created_at' => '2025-09-21 22:43:09',
                'updated_at' => '2025-09-25 21:23:20',
            ),
            1 => 
            array (
                'id' => 'fe48d8e6-1654-4907-b3d5-68b8c3b39bec',
                'img' => 'service_20250925212310.jpeg',
                'title' => 'Furniture Remodeling',
                'deskripsi' => 'Memodelkan ulang berbagai bentuk furniture',
                'deleted_at' => NULL,
                'created_at' => '2025-09-21 22:44:38',
                'updated_at' => '2025-09-25 21:23:10',
            ),
            2 => 
            array (
                'id' => '045655b8-9cec-4699-8174-54308d6f0f60',
                'img' => 'service_20250925212328.jpeg',
                'title' => NULL,
                'deskripsi' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-09-25 21:23:28',
                'updated_at' => '2025-09-25 21:23:28',
            ),
            3 => 
            array (
                'id' => '19b15e33-12d4-4bdf-925d-0cba4829e432',
                'img' => 'service_20250925212336.jpeg',
                'title' => NULL,
                'deskripsi' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-09-25 21:23:36',
                'updated_at' => '2025-09-25 21:23:36',
            ),
            4 => 
            array (
                'id' => 'bc5ac887-74c8-49a7-806f-6739a6a419f7',
                'img' => 'service_20250925212347.jpeg',
                'title' => NULL,
                'deskripsi' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-09-25 21:23:47',
                'updated_at' => '2025-09-25 21:23:47',
            ),
            5 => 
            array (
                'id' => 'f69282a2-af1f-4532-83d7-062fbff221d8',
                'img' => 'service_20250925212401.jpeg',
                'title' => NULL,
                'deskripsi' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-09-25 21:24:01',
                'updated_at' => '2025-09-25 21:24:01',
            ),
        ));
        
        
    }
}