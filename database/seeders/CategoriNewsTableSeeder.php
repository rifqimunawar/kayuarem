<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriNewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categori_news')->delete();
        
        \DB::table('categori_news')->insert(array (
            0 => 
            array (
                'id' => 'e7ffe377-27ac-496b-bdad-3435d703851b',
                'categori' => 'Berita Kerjasama Update',
                'deleted_at' => '2025-09-22 01:17:52',
                'created_at' => '2025-09-22 01:03:44',
                'updated_at' => '2025-09-22 01:17:52',
            ),
            1 => 
            array (
                'id' => 'f25ff747-15b2-4e2f-92de-2c7880fce1b1',
                'categori' => 'Berita Karyawan',
                'deleted_at' => NULL,
                'created_at' => '2025-09-22 01:05:19',
                'updated_at' => '2025-09-22 01:05:19',
            ),
            2 => 
            array (
                'id' => '7c6976c1-df35-401e-95be-aa910ee98190',
                'categori' => 'ddd',
                'deleted_at' => '2025-09-22 01:06:15',
                'created_at' => '2025-09-22 01:06:04',
                'updated_at' => '2025-09-22 01:06:15',
            ),
        ));
        
        
    }
}