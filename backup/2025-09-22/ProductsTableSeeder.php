<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => '027e5a15-2e28-4844-9020-05515121748b',
                'img' => 'product_20250922114902.jpg',
                'nama_produk' => 'Kursi Kayu',
                'nominal' => 200000,
                'categori_id' => '225d4e98-0abd-41e7-9100-ce42e3e7c12f',
                'deskripsi' => 'Kursi kayu cocok untuk santai depan rumah',
                'deleted_at' => NULL,
                'created_at' => '2025-09-22 11:49:02',
                'updated_at' => '2025-09-22 11:49:02',
            ),
            1 => 
            array (
                'id' => '690c79de-34b1-4279-b46f-36dd0cfc2e39',
                'img' => 'product_20250922115035.jpg',
                'nama_produk' => 'Ranjang',
                'nominal' => 1200000,
                'categori_id' => 'b4bd8a94-8441-4fb0-b851-018557d75f45',
                'deskripsi' => 'Ranjang dengan bahan kayu paling bagus',
                'deleted_at' => NULL,
                'created_at' => '2025-09-22 11:50:35',
                'updated_at' => '2025-09-22 11:50:35',
            ),
            2 => 
            array (
                'id' => '28cf1e6a-5a39-4774-be4d-5ce864af3968',
                'img' => 'product_20250922115217.jpg',
                'nama_produk' => 'Meja Ruang Tamu',
                'nominal' => 1000000,
                'categori_id' => '225d4e98-0abd-41e7-9100-ce42e3e7c12f',
                'deskripsi' => 'meja ini coock sekali untuk ruangan utama anda yang masih rumah subsidi wkkw',
                'deleted_at' => NULL,
                'created_at' => '2025-09-22 11:52:17',
                'updated_at' => '2025-09-22 11:52:17',
            ),
        ));
        
        
    }
}