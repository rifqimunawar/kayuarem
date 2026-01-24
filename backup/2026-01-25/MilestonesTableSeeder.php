<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MilestonesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('milestones')->delete();
        
        \DB::table('milestones')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => '2017',
                'deskripsi' => '{"id":"Kayu Arem mulai berdiri pada tahun 2017, berawal dari sekadar hobi terhadap kayu.","en":"Arem wood began to stand in 2017, starting from just a hobby of wood."}',
                'deleted_at' => NULL,
                'created_at' => '2025-09-27 01:58:24',
                'updated_at' => '2025-09-30 22:27:27',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => '2018 - 2019',
                'deskripsi' => '{"id":"Kayu Arem mulai merancang dan memproduksi berbagai produk kayu, yang kemudian dipasarkan secara terbatas kepada kerabat dan teman terdekat dan membuat konten youtube.","en":"Arem wood began to design and produce a variety of wood products, which are then marketed limited to relatives and closest friends and create YouTube content."}',
                'deleted_at' => NULL,
                'created_at' => '2025-09-27 01:59:24',
                'updated_at' => '2025-09-30 22:35:08',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => '2020 - 2021',
                'deskripsi' => '{"id":"Kayu Arem mulai mengeksplorasi teknologi produksi modern dengan mempelajari penggunaan mesin CNC Router dan CNC Laser. Ketertarikan ini berkembang menjadi keahlian, hingga akhirnya Kayu Arem dipercaya sebagai trainer untuk mesin-mesin CNC, membantu para pelaku usaha dan pengrajin lainnya memahami serta mengoperasikan teknologi ini dengan lebih efektif.","en":"Arem wood starts exploring modern production technology by studying the use of CNC Router and CNC Laser machines. This interest developed into expertise, until finally Arem wood was believed to be a trainer for CNC machines, helping business people and other craftsmen understand and operate this technology more effectively."}',
                'deleted_at' => NULL,
                'created_at' => '2025-09-27 02:01:02',
                'updated_at' => '2025-09-30 22:32:45',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => '2022',
                'deskripsi' => '{"id":"Seiring berkembangnya usaha, Kayu Arem mulai membangun kehadiran di marketplace digital seperti Tokopedia dan Shopee sebagai langkah awal memperluas jangkauan pasar. Untuk mendukung operasional yang semakin meningkat, Kayu Arem juga mulai merekrut karyawan guna membantu proses produksi dan pengelolaan penjualan secara profesional.","en":"As the business develops, arem wood began to build attendance in digital marketplaces such as Tokopedia and Shopee as a first step to expand market reach. To support increasing operations, Arem wood also began to recruit employees to help the production process and managing sales professionally."}',
                'deleted_at' => NULL,
                'created_at' => '2025-09-27 02:24:00',
                'updated_at' => '2025-09-30 22:39:06',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => '2023',
                'deskripsi' => '{"id":"Kayu  Arem mulai bergabung bersama forum UMKM serang baru kabupaten bekasi","en":"Arem wood starts joining with the Serang Baru UMKM Forum in Bekasi Regency"}',
                'deleted_at' => NULL,
                'created_at' => '2025-09-27 02:24:19',
                'updated_at' => '2025-09-30 22:55:26',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => '2024',
                'deskripsi' => '{"id":"Kayu Arem menjadi juara 1 UMKM competition kategori craft, serta brand kayu arem lolos sertfikasi HAKI, Pameran expo to batam","en":"Arem wood won 1st place in the craft category MSME COMPETITION, as well as the Arem wood brand passed the IPR certification, the Expo to Batam exhibition"}',
                'deleted_at' => NULL,
                'created_at' => '2025-09-30 22:58:10',
                'updated_at' => '2025-09-30 22:58:10',
            ),
            6 => 
            array (
                'id' => 7,
                'title' => '2025',
            'deskripsi' => '{"id":"Kayu Arem mengikuti Pameran inacraft , Pameran Mall Lippo Cikarang, Pameran Mall ambasador jakarta, Pameran Trade Export Indonesia (TEI)","en":"Arem Kayu attended the Inacraft exhibition, Lippo Cikarang Mall exhibition, Jakarta Ambasador Mall exhibition, Indonesian Trade Export Exhibition (TEI)"}',
                'deleted_at' => NULL,
                'created_at' => '2025-09-30 22:59:48',
                'updated_at' => '2025-09-30 22:59:48',
            ),
        ));
        
        
    }
}