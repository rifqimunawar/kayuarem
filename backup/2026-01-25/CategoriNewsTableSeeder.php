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
                'categori' => '{"id":"Kegiatan & Event","en":"Activities and events"}',
                'deleted_at' => NULL,
                'created_at' => '2025-09-22 01:05:19',
                'updated_at' => '2025-09-27 15:42:22',
            ),
            2 => 
            array (
                'id' => '7c6976c1-df35-401e-95be-aa910ee98190',
                'categori' => 'ddd',
                'deleted_at' => '2025-09-22 01:06:15',
                'created_at' => '2025-09-22 01:06:04',
                'updated_at' => '2025-09-22 01:06:15',
            ),
            3 => 
            array (
                'id' => '5dedce96-f089-47b6-bcae-4ec405c68611',
                'categori' => '{"id":"Kegiatan Sosial / CSR","en":"Social Activities / CSR"}',
                'deleted_at' => NULL,
                'created_at' => '2025-09-23 09:58:59',
                'updated_at' => '2025-09-27 15:42:14',
            ),
            4 => 
            array (
                'id' => 'b712b24d-2840-4d2f-9e5e-4de59b393053',
                'categori' => '{"id":"Produk & Inovasi","en":"Products & Innovations"}',
                'deleted_at' => NULL,
                'created_at' => '2025-09-23 09:59:38',
                'updated_at' => '2025-09-27 15:42:06',
            ),
            5 => 
            array (
                'id' => 'ff1485f4-4fe4-45ec-9da9-a34ce1eb4732',
                'categori' => '{"id":"Tips & Inspirasi Interior","en":"Interior Tips & Inspiration"}',
                'deleted_at' => NULL,
                'created_at' => '2025-09-23 10:00:00',
                'updated_at' => '2025-09-27 15:41:58',
            ),
            6 => 
            array (
                'id' => '150dde1d-5540-4b3d-983c-f491f2b07cd0',
                'categori' => 'test',
                'deleted_at' => '2025-09-25 22:11:54',
                'created_at' => '2025-09-25 22:06:43',
                'updated_at' => '2025-09-25 22:11:54',
            ),
        ));
        
        
    }
}