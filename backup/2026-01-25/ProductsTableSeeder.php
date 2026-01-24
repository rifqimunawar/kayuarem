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
                'deleted_at' => '2025-09-25 22:01:07',
                'created_at' => '2025-09-22 11:49:02',
                'updated_at' => '2025-09-25 22:01:07',
            ),
            1 => 
            array (
                'id' => '690c79de-34b1-4279-b46f-36dd0cfc2e39',
                'img' => 'product_20250922115035.jpg',
                'nama_produk' => 'Ranjang',
                'nominal' => 1200000,
                'categori_id' => 'b4bd8a94-8441-4fb0-b851-018557d75f45',
                'deskripsi' => 'Ranjang dengan bahan kayu paling bagus',
                'deleted_at' => '2025-09-25 22:01:04',
                'created_at' => '2025-09-22 11:50:35',
                'updated_at' => '2025-09-25 22:01:04',
            ),
            2 => 
            array (
                'id' => '28cf1e6a-5a39-4774-be4d-5ce864af3968',
                'img' => 'product_20250922115217.jpg',
                'nama_produk' => 'Meja Ruang Tamu',
                'nominal' => 1000000,
                'categori_id' => '225d4e98-0abd-41e7-9100-ce42e3e7c12f',
                'deskripsi' => 'meja ini coock sekali untuk ruangan utama anda yang masih rumah subsidi wkkw',
                'deleted_at' => '2025-09-25 22:01:01',
                'created_at' => '2025-09-22 11:52:17',
                'updated_at' => '2025-09-25 22:01:01',
            ),
            3 => 
            array (
                'id' => 'd0ba5a33-27b8-4a07-b958-4cae5bd9b4a9',
                'img' => 'product_20251019100159.jpg',
                'nama_produk' => '{"id":"Nomor Meja ACP Silver 13x6cm","en":"ACP Silver Table Numbers 13x6cm"}',
                'nominal' => 16500,
                'categori_id' => 'b4bd8a94-8441-4fb0-b851-018557d75f45',
                'deskripsi' => '{"id":"Nomor Meja ACP Silver ukuran 13x6cm bisa custom grafir logo","en":"ACP Silver Table Number measuring 13x6cm can have a custom logo engraved"}',
                'deleted_at' => NULL,
                'created_at' => '2025-09-25 22:02:29',
                'updated_at' => '2025-10-19 10:02:01',
            ),
            4 => 
            array (
                'id' => 'c41efd3d-3876-431d-9077-23513993ed14',
                'img' => 'product_20251019101437.jpg',
                'nama_produk' => '{"id":"Nomor Meja Kayu Plywood 13x6cm","en":"Plywood Table Numbers 13x6cm"}',
                'nominal' => 9900,
                'categori_id' => 'b4bd8a94-8441-4fb0-b851-018557d75f45',
                'deskripsi' => '{"id":"Nomor Meja Kayu Plywood Ukuran 13x6cm bisa custom logo","en":"Plywood Table Numbers Size 13x6cm can custom logo"}',
                'deleted_at' => NULL,
                'created_at' => '2025-10-19 10:14:38',
                'updated_at' => '2025-10-19 10:14:38',
            ),
            5 => 
            array (
                'id' => 'b83c2312-0784-42d8-ae7a-add433df0ee0',
                'img' => 'product_20251019101645.jpg',
                'nama_produk' => '{"id":"Custom Logo Wooden Reserved Sign","en":"Custom Logo Wooden Reserved Sign"}',
                'nominal' => 24500,
                'categori_id' => 'b4bd8a94-8441-4fb0-b851-018557d75f45',
                'deskripsi' => '{"en":null}',
                'deleted_at' => NULL,
                'created_at' => '2025-10-19 10:16:14',
                'updated_at' => '2025-10-19 10:16:45',
            ),
            6 => 
            array (
                'id' => 'e5c6d519-d4d8-4269-bfe3-a873c65c5bbd',
                'img' => 'product_20251019101920.jpg',
                'nama_produk' => '{"id":"Nomor Meja Akrilik Hitam / Putih 12x6cm","en":"Black / White Acrylic Table Numbers 12x6cm"}',
                'nominal' => 9900,
                'categori_id' => 'b4bd8a94-8441-4fb0-b851-018557d75f45',
                'deskripsi' => '{"en":null}',
                'deleted_at' => NULL,
                'created_at' => '2025-10-19 10:19:20',
                'updated_at' => '2025-10-19 10:19:20',
            ),
            7 => 
            array (
                'id' => '1e25ba14-d77a-4e63-a2b8-7568754b0a5a',
                'img' => 'product_20251019102432.jpg',
                'nama_produk' => '{"id":"Nomor Meja ACP Hitam 20x6cm","en":"ACP Table Numbers Black 20x6cm"}',
                'nominal' => 21500,
                'categori_id' => 'b4bd8a94-8441-4fb0-b851-018557d75f45',
                'deskripsi' => '{"en":null}',
                'deleted_at' => NULL,
                'created_at' => '2025-10-19 10:24:33',
                'updated_at' => '2025-10-19 10:24:33',
            ),
            8 => 
            array (
                'id' => 'df8afcab-27d6-413e-bacb-ade138f04e77',
                'img' => 'product_20251019102648.jpg',
                'nama_produk' => '{"id":"Papan Menu Kayu Jati Belanda Custom Grafir","en":"Custom Engraved Dutch Teak Wood Menu Board"}',
                'nominal' => 75000,
                'categori_id' => 'b4bd8a94-8441-4fb0-b851-018557d75f45',
                'deskripsi' => '{"id":"Papan Menu Kayu Jati Belanda Custom Grafir  bisa request penambahan logo","en":"Custom Engraved Dutch Teak Wood Menu Board, you can request to add a logo"}',
                'deleted_at' => NULL,
                'created_at' => '2025-10-19 10:26:51',
                'updated_at' => '2025-10-19 10:26:51',
            ),
            9 => 
            array (
                'id' => '4b9290ab-3d22-4019-bc97-a175616507a1',
                'img' => 'product_20251019102817.jpg',
                'nama_produk' => '{"id":"Sign Tulisan Kayu Cuci Tangan","en":"Washing Hands Wooden Sign"}',
                'nominal' => 55000,
                'categori_id' => 'b4bd8a94-8441-4fb0-b851-018557d75f45',
                'deskripsi' => '{"id":"Tersedia 2 ukuran 20cm dan 30cm","en":"Available in 2 sizes 20cm and 30cm"}',
                'deleted_at' => NULL,
                'created_at' => '2025-10-19 10:28:18',
                'updated_at' => '2025-10-19 10:28:18',
            ),
            10 => 
            array (
                'id' => 'b4368ec0-d57a-471b-9eb1-1446addb463d',
                'img' => 'product_20251108151747.png',
                'nama_produk' => '{"id":"Standing HP","en":"Standing HP"}',
                'nominal' => 0,
                'categori_id' => 'a825ab3d-0faf-4877-9da6-517c9014b972',
                'deskripsi' => '{"id":"Terbuat dari bahan kayu jati belanda pilihan di proses menggunakan mesin laser","en":"Made from selected Dutch teak wood processed using a laser machine"}',
                'deleted_at' => NULL,
                'created_at' => '2025-11-08 15:17:48',
                'updated_at' => '2025-11-08 15:17:48',
            ),
        ));
        
        
    }
}