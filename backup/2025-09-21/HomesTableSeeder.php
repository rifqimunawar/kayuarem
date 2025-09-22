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
                'img' => 'home_20250921180548.jpg',
                'judul' => 'Dolor odit consectet',
                'slogan' => 'Quia ea omnis nobis',
                'deskripsi' => 'Deleniti amet quae',
                'deleted_at' => NULL,
                'created_at' => '2025-09-21 18:05:48',
                'updated_at' => '2025-09-21 18:05:48',
            ),
            4 => 
            array (
                'id' => 5,
                'img' => 'home_20250921181146.png',
                'judul' => 'Rerum eius deleniti',
                'slogan' => 'Officiis aperiam ex',
                'deskripsi' => 'Tempor qui atque opt',
                'deleted_at' => NULL,
                'created_at' => '2025-09-21 18:11:46',
                'updated_at' => '2025-09-21 18:11:46',
            ),
            5 => 
            array (
                'id' => 6,
                'img' => 'home_20250921181157.jpg',
                'judul' => 'Odio rem excepteur q',
                'slogan' => 'Nulla ut nihil proid',
                'deskripsi' => 'Dolore numquam omnis',
                'deleted_at' => NULL,
                'created_at' => '2025-09-21 18:11:57',
                'updated_at' => '2025-09-21 18:11:57',
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
                'img' => 'home_20250921184915.jpg',
                'judul' => 'Bahan Baku Berkualitas',
                'slogan' => 'Furniture Berkualitas',
                'deskripsi' => 'Harga Murah Kualitas Tidak Murahan wkkwk',
                'deleted_at' => NULL,
                'created_at' => '2025-09-21 18:49:15',
                'updated_at' => '2025-09-21 18:49:15',
            ),
        ));
        
        
    }
}