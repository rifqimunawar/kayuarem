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
                'media_type' => 'image',
                'link_video' => NULL,
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
                'media_type' => 'image',
                'link_video' => NULL,
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
                'media_type' => 'image',
                'link_video' => NULL,
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
                'media_type' => 'image',
                'link_video' => NULL,
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
                'media_type' => 'image',
                'link_video' => NULL,
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
                'media_type' => 'image',
                'link_video' => NULL,
                'deskripsi' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-09-25 21:24:01',
                'updated_at' => '2025-09-26 22:10:09',
            ),
            6 => 
            array (
                'id' => '1008b4f2-9cae-47c5-9824-78f1237097ea',
                'img' => NULL,
                'title' => NULL,
                'media_type' => 'video',
                'link_video' => 'https://youtu.be/hOUrY_QKEl0',
                'deskripsi' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-09-26 22:06:02',
                'updated_at' => '2025-09-29 09:51:21',
            ),
            7 => 
            array (
                'id' => 'e825c7ee-d644-4b25-97d3-b708288923a0',
                'img' => NULL,
                'title' => NULL,
                'media_type' => 'video',
                'link_video' => 'https://www.tiktok.com/@scentplus/video/7413312562172890373?q=fbyana%20eksklusif&t=1755503808059',
                'deskripsi' => NULL,
                'deleted_at' => '2025-09-29 09:50:16',
                'created_at' => '2025-09-29 09:37:36',
                'updated_at' => '2025-09-29 09:50:16',
            ),
            8 => 
            array (
                'id' => 'c38ffc8f-6ed0-4f7c-ac3d-b09c22e2a23a',
                'img' => NULL,
                'title' => NULL,
                'media_type' => 'video',
                'link_video' => 'https://youtu.be/7MCCA2tb3gk?si=2NROyxnAvBiTsyzK',
                'deskripsi' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-09-29 09:52:13',
                'updated_at' => '2025-09-29 09:52:13',
            ),
            9 => 
            array (
                'id' => '81d2856e-7a47-4262-a896-c4d655f0cfe9',
                'img' => NULL,
                'title' => NULL,
                'media_type' => 'video',
                'link_video' => 'https://youtu.be/rcPTevc9bCQ?si=vZgznm-ICMNhHDET',
                'deskripsi' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-09-29 09:53:05',
                'updated_at' => '2025-09-29 09:53:05',
            ),
            10 => 
            array (
                'id' => '8c0aac89-d978-496b-98d1-1b6e69b29f92',
                'img' => 'service_20251019093928.jpg',
                'title' => NULL,
                'media_type' => 'image',
                'link_video' => NULL,
                'deskripsi' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-10-19 09:39:28',
                'updated_at' => '2025-10-19 09:39:28',
            ),
            11 => 
            array (
                'id' => '709432c8-7931-4ca4-b750-9aa7c90e0bc6',
                'img' => 'service_20251019093940.jpg',
                'title' => NULL,
                'media_type' => 'image',
                'link_video' => NULL,
                'deskripsi' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-10-19 09:39:40',
                'updated_at' => '2025-10-19 09:39:40',
            ),
            12 => 
            array (
                'id' => '79c2967d-a4a6-438a-9e26-12afdbd42da0',
                'img' => 'service_20251019094221.jpg',
                'title' => NULL,
                'media_type' => 'image',
                'link_video' => NULL,
                'deskripsi' => NULL,
                'deleted_at' => '2025-10-19 10:30:04',
                'created_at' => '2025-10-19 09:42:21',
                'updated_at' => '2025-10-19 10:30:04',
            ),
            13 => 
            array (
                'id' => '98ffc2f5-51a4-4831-be6b-fb8f2c61fd79',
                'img' => 'service_20251019094230.jpg',
                'title' => NULL,
                'media_type' => 'image',
                'link_video' => NULL,
                'deskripsi' => NULL,
                'deleted_at' => '2025-10-19 10:30:00',
                'created_at' => '2025-10-19 09:42:30',
                'updated_at' => '2025-10-19 10:30:00',
            ),
            14 => 
            array (
                'id' => '12261eaf-0ba5-4a5c-9a7f-92637cb32532',
                'img' => 'service_20251019094238.jpg',
                'title' => NULL,
                'media_type' => 'image',
                'link_video' => NULL,
                'deskripsi' => NULL,
                'deleted_at' => '2025-10-19 10:29:56',
                'created_at' => '2025-10-19 09:42:38',
                'updated_at' => '2025-10-19 10:29:56',
            ),
            15 => 
            array (
                'id' => '27709ba5-fd15-4ba5-9ce4-a53e51ade391',
                'img' => 'service_20251019103036.jpg',
                'title' => NULL,
                'media_type' => 'image',
                'link_video' => NULL,
                'deskripsi' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-10-19 10:30:36',
                'updated_at' => '2025-10-19 10:30:36',
            ),
            16 => 
            array (
                'id' => '36104cb6-93a7-419b-9719-8f971eac1610',
                'img' => 'service_20251108150744.png',
                'title' => NULL,
                'media_type' => 'image',
                'link_video' => NULL,
                'deskripsi' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-11-08 15:07:44',
                'updated_at' => '2025-11-08 15:07:44',
            ),
        ));
        
        
    }
}