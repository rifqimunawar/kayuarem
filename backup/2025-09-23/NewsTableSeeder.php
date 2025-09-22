<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('news')->delete();
        
        \DB::table('news')->insert(array (
            0 => 
            array (
                'id' => 'f2eb6d00-c77c-4797-b9c2-4d310ee0b059',
                'img' => 'news_20250922120126.jpg',
                'judul' => 'Semua Karyawan PT akan mendapat kenaikan gaji sebesar 10 % dari gaji sekarang',
                'deskripsi' => 'Berita sangat mengejutkan semua kartyawan pt kita, gajinya akan naik 2 kali lipat, ini membuat sebagian karyawan merasa sangat senang dan semakin bersemangat untuk berkerja lebih keras lagi demi kemajuan perusahaan',
                'categori_id' => 'f25ff747-15b2-4e2f-92de-2c7880fce1b1',
                'deleted_at' => NULL,
                'created_at' => '2025-09-22 12:01:26',
                'updated_at' => '2025-09-22 12:01:26',
            ),
            1 => 
            array (
                'id' => '3f1c5bb1-8cbb-4828-a843-cf78fa92afd2',
                'img' => 'news_20250922120237.jpg',
                'judul' => 'Cum enim impedit do',
                'deskripsi' => 'Cum recusandae Volu',
                'categori_id' => 'f25ff747-15b2-4e2f-92de-2c7880fce1b1',
                'deleted_at' => NULL,
                'created_at' => '2025-09-22 12:02:37',
                'updated_at' => '2025-09-22 12:02:37',
            ),
            2 => 
            array (
                'id' => '70570e10-f307-42a9-a006-1a6011cb5980',
                'img' => 'news_20250922124109.jpg',
                'judul' => 'Amet dolore alias q',
            'deskripsi' => '<ol><li><br></li></ol><table class="table table-bordered"><tbody><tr><td>fdfdfd</td><td><br></td></tr><tr><td>fdfd</td><td><br></td></tr></tbody></table><ol><li>hello wordl uhuy<span style="background-color: rgb(255, 255, 0);">&nbsp;testing warna&nbsp;&nbsp;</span><br><b style=""><span style="background-color: rgb(255, 255, 0);">bold </span><u style="background-color: rgb(0, 255, 255);">underline dfdfd</u></b></li><li><b style=""><u style="background-color: rgb(0, 255, 255);">dffdfd</u></b></li><li style="text-align: center; "><span style="background-color: rgb(0, 255, 255);"><b><u><br></u></b></span></li><li style="text-align: center; "><span style="background-color: rgb(0, 255, 255);"><b><u>tulisan di tengaht</u></b></span></li><li style="text-align: center; "><span style="background-color: rgb(0, 255, 255);"><b><u>table</u></b></span></li><li style="text-align: center; "><span style="background-color: rgb(0, 255, 255);"><b><u><br></u></b></span></li></ol>',
                'categori_id' => 'f25ff747-15b2-4e2f-92de-2c7880fce1b1',
                'deleted_at' => NULL,
                'created_at' => '2025-09-22 12:41:09',
                'updated_at' => '2025-09-22 12:41:09',
            ),
            3 => 
            array (
                'id' => 'b3b500d5-00f2-4a7b-a34e-0c584972aec5',
                'img' => NULL,
                'judul' => 'Suscipit magni quod',
                'deskripsi' => 'Duis dolorum aut qui.v',
                'categori_id' => 'f25ff747-15b2-4e2f-92de-2c7880fce1b1',
                'deleted_at' => '2025-09-22 17:42:51',
                'created_at' => '2025-09-22 17:42:46',
                'updated_at' => '2025-09-22 17:42:51',
            ),
        ));
        
        
    }
}