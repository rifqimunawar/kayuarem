<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HomesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('homes')->delete();
        
        \DB::table('homes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'img' => 'home_20250921173550.jpg',
                'judul' => 'Dolor odit consectet',
                'slogan' => 'Quia ea omnis nobis',
                'deskripsi' => 'Deleniti amet quae',
                'deleted_at' => '2025-09-21 18:47:04',
                'created_at' => '2025-09-21 17:35:50',
                'updated_at' => '2025-09-21 18:47:04',
            ),
            1 => 
            array (
                'id' => 2,
                'img' => 'home_20250921175152.jpg',
                'judul' => 'Repellendus Atque u',
                'slogan' => 'Voluptas voluptas ap',
                'deskripsi' => 'Rem aut tempora hic',
                'deleted_at' => '2025-09-21 18:46:34',
                'created_at' => '2025-09-21 17:51:52',
                'updated_at' => '2025-09-21 18:46:34',
            ),
            2 => 
            array (
                'id' => 3,
                'img' => 'home_20250921175734.jpeg',
                'judul' => 'Aliquam explicabo Q',
                'slogan' => 'Sit dolores fugit',
                'deskripsi' => 'Accusantium corporis',
                'deleted_at' => '2025-09-21 18:47:13',
                'created_at' => '2025-09-21 17:57:34',
                'updated_at' => '2025-09-21 18:47:13',
            ),
            3 => 
            array (
                'id' => 4,
                'img' => 'home_20250923093344.jpg',
                'judul' => '{"id":"Komitmen pada Kualitas & Keberlanjutan","en":"Commitment to quality and sustainability"}',
                'slogan' => '{"id":"-","en":"-"}',
                'deskripsi' => '{"id":"Kami tidak hanya menghasilkan produk kayu berkualitas, tetapi juga berkomitmen pada praktik ramah lingkungan. Setiap produk adalah wujud tanggung jawab terhadap alam dan kepuasan pelanggan.","en":"We not only produce quality wood products, but also committed to environmentally friendly practices. Each product is a form of responsibility for nature and customer satisfaction."}',
                'deleted_at' => NULL,
                'created_at' => '2025-09-21 18:05:48',
                'updated_at' => '2025-09-29 13:37:50',
            ),
            4 => 
            array (
                'id' => 5,
                'img' => 'home_20250923093251.jpg',
                'judul' => '{"id":"Dari Alam untuk Kehidupan yang Lebih Indah","en":"From nature to a more beautiful life"}',
                'slogan' => '{"id":"-","en":"-"}',
                'deskripsi' => '{"id":"Kayu adalah sumber inspirasi kami. Dengan teknik pengerjaan presisi, kami menjadikannya karya yang mempercantik hunian, ruang kerja, dan lingkungan sekitar Anda.","en":"Wood is a source of our inspiration. With precision workmanship techniques, we make it a work that beautifies your residence, workspace, and the environment around you."}',
                'deleted_at' => NULL,
                'created_at' => '2025-09-21 18:11:46',
                'updated_at' => '2025-09-29 13:37:22',
            ),
            5 => 
            array (
                'id' => 6,
                'img' => 'home_20250923093048.jpg',
                'judul' => '{"id":"Solusi Kayu untuk Berbagai Kebutuhan","en":"Wood solutions for various needs"}',
                'slogan' => '{"id":"-","en":"-"}',
                'deskripsi' => '{"id":"Mulai dari furnitur, interior, hingga konstruksi, kami menyediakan produk kayu yang kokoh dan elegan. Semua dirancang untuk mendukung gaya hidup modern tanpa melupakan sentuhan alami.","en":"Starting from furniture, interior, to construction, we provide sturdy and elegant wood products. All are designed to support a modern lifestyle without forgetting a natural touch."}',
                'deleted_at' => NULL,
                'created_at' => '2025-09-21 18:11:57',
                'updated_at' => '2025-09-29 13:36:47',
            ),
            6 => 
            array (
                'id' => 7,
                'img' => 'home_20250921181209.jpg',
                'judul' => 'Rerum quia nulla dol',
                'slogan' => 'Ut nulla nisi qui am',
                'deskripsi' => 'Eum est nihil irure',
                'deleted_at' => '2025-09-21 18:47:30',
                'created_at' => '2025-09-21 18:12:09',
                'updated_at' => '2025-09-21 18:47:30',
            ),
            7 => 
            array (
                'id' => 8,
                'img' => 'home_20250921181222.png',
                'judul' => 'Reprehenderit sed in',
                'slogan' => 'Magna consequat Com',
                'deskripsi' => 'Excepteur voluptatum',
                'deleted_at' => '2025-09-21 18:47:26',
                'created_at' => '2025-09-21 18:12:22',
                'updated_at' => '2025-09-21 18:47:26',
            ),
            8 => 
            array (
                'id' => 9,
                'img' => 'home_20250921181235.png',
                'judul' => 'Sit ut libero quasi',
                'slogan' => 'Qui molestiae in lab',
                'deskripsi' => 'Temporibus ab except',
                'deleted_at' => '2025-09-21 18:47:22',
                'created_at' => '2025-09-21 18:12:35',
                'updated_at' => '2025-09-21 18:47:22',
            ),
            9 => 
            array (
                'id' => 10,
                'img' => 'home_20250921181245.jpg',
                'judul' => 'Minim voluptate inve',
                'slogan' => 'Omnis cupiditate Nam',
                'deskripsi' => 'Porro excepturi mole',
                'deleted_at' => '2025-09-21 18:47:19',
                'created_at' => '2025-09-21 18:12:45',
                'updated_at' => '2025-09-21 18:47:19',
            ),
            10 => 
            array (
                'id' => 11,
                'img' => 'home_20250921181300.jpg',
                'judul' => 'Esse dolor odio nihi',
                'slogan' => 'Sed in nisi mollitia',
                'deskripsi' => 'Esse libero id nobi',
                'deleted_at' => '2025-09-21 18:47:17',
                'created_at' => '2025-09-21 18:13:00',
                'updated_at' => '2025-09-21 18:47:17',
            ),
            11 => 
            array (
                'id' => 12,
                'img' => 'home_20250929093304.jpg',
                'judul' => '{"id":"Mewujudkan Karya Kayu Bernilai Tinggi","en":"Realizing high -value wood work"}',
                'slogan' => '{"id":"-","en":"-"}',
                'deskripsi' => '{"id":"Dari bahan kayu pilihan, kami menghadirkan produk dengan kualitas, keindahan, dan daya tahan terbaik. Setiap karya adalah perpaduan antara inovasi dan kearifan lokal.","en":"From selected wood, we present products with the best quality, beauty, and durability. Each work is a combination of local innovation and wisdom."}',
                'deleted_at' => NULL,
                'created_at' => '2025-09-21 18:49:15',
                'updated_at' => '2025-09-29 13:25:17',
            ),
        ));
        
        
    }
}