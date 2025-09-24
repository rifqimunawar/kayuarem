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
                'img' => 'service_20250921224309.jpg',
                'title' => 'Custom Jendela Sesuai Keinginan',
                'deskripsi' => 'Melayani Pembuatan Jendela dari bahan kayu berkualitas dan daya tahan tinggi',
                'deleted_at' => NULL,
                'created_at' => '2025-09-21 22:43:09',
                'updated_at' => '2025-09-21 22:43:49',
            ),
            1 => 
            array (
                'id' => 'fe48d8e6-1654-4907-b3d5-68b8c3b39bec',
                'img' => 'service_20250921224437.jpg',
                'title' => 'Furniture Remodeling',
                'deskripsi' => 'Memodelkan ulang berbagai bentuk furniture',
                'deleted_at' => NULL,
                'created_at' => '2025-09-21 22:44:38',
                'updated_at' => '2025-09-21 22:44:38',
            ),
        ));
        
        
    }
}