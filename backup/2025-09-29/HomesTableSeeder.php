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
                'judul' => '{"id":"Commitment to Quality & Sustainability","en":"Commitment to Quality & Sustainability"}',
                'slogan' => '{"id":"-","en":"-"}',
                'deskripsi' => '{"id":"We don’t just produce high-quality wood products, we are also committed to sustainable practices. Every piece reflects responsibility toward nature and customer satisfaction.","en":"We don\'t just produce high-quality wood products, we are also committed to sustainable practices. Every piece reflects responsibility toward nature and customer satisfaction."}',
                'deleted_at' => NULL,
                'created_at' => '2025-09-21 18:05:48',
                'updated_at' => '2025-09-29 11:22:06',
            ),
            4 => 
            array (
                'id' => 5,
                'img' => 'home_20250923093251.jpg',
                'judul' => '{"id":"From Nature to a More Beautiful Life","en":"From nature to a more beautiful life"}',
                'slogan' => '{"id":"-","en":"-"}',
                'deskripsi' => '{"id":"Wood is our source of inspiration. With precision craftsmanship, we transform it into creations that enhance homes, workplaces, and living spaces.","en":"Wood is our source of inspiration. With precision craftsmanship, we transform it into creations that enhance homes, workplaces, and living spaces."}',
                'deleted_at' => NULL,
                'created_at' => '2025-09-21 18:11:46',
                'updated_at' => '2025-09-29 11:21:43',
            ),
            5 => 
            array (
                'id' => 6,
                'img' => 'home_20250923093048.jpg',
                'judul' => '{"id":"Wood Solutions for Every Need","en":"Wood Solutions for Every Need"}',
                'slogan' => '{"id":"-","en":"-"}',
                'deskripsi' => '{"id":"From furniture and interiors to construction, we provide strong and elegant wood products designed to support modern lifestyles while preserving a natural touch.","en":"From Furniture and Interiors to Construction, We Provide Strong and Elegant Wood Products Designed to Support Modern Lifestyles While Preserving a Natural Touch."}',
                'deleted_at' => NULL,
                'created_at' => '2025-09-21 18:11:57',
                'updated_at' => '2025-09-29 11:21:18',
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
                'judul' => '{"id":"Crafting High-Value Wood Creations","en":"Crafting High-Value Wood Creations"}',
                'slogan' => '{"id":"-","en":"-"}',
                'deskripsi' => '{"id":"From carefully selected timber, we deliver products with superior quality, beauty, and durability. Each piece is a blend of innovation and local craftsmanship.","en":"From Carefully Selected Timber, We Deliver Products with Superior Quality, Beauty, and Durability. Each piece is a blend of innovation and local craftsmanship."}',
                'deleted_at' => NULL,
                'created_at' => '2025-09-21 18:49:15',
                'updated_at' => '2025-09-29 11:20:53',
            ),
        ));
        
        
    }
}