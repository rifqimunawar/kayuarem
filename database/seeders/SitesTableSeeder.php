<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SitesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sites')->delete();
        
        \DB::table('sites')->insert(array (
            0 => 
            array (
                'id' => 1,
                'site_name' => 'Kayu Arem - Membawa Cerita di Setiap Detail Karya',
                'logo' => 'logo_20250923092552.png',
                'alamat' => 'Workshop & Office
Perumahan Mega Regency Blok G29 No.26 RT 05 / RW 20,Desa Sukaragam, Kec. Serang Baru, Kab. Bekasi,Provinsi Jawa Barat (17330)',
                'link_ig' => 'https://github.com/rifqimunawar',
                'link_tw' => 'https://shopee.co.id/kayuarem?entryPoint=ShopByPDP',
                'link_fb' => 'https://www.instagram.com/kayuarem',
                'link_yt' => 'https://www.tiktok.com/@kayuarem?_t=zs-8wnkgknz543&_r=1',
                'link_lk' => 'https://shopee.co.id/kayuarem',
                'mobile' => '0851-6114-5097',
                'email' => 'info@kayuarem.com',
                'link_gmap' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16801.62692362123!2d107.57638916209652!3d-6.999304343211575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e940e3f16181%3A0xb5fe7dd04d2ca7a0!2sPerumahan%20Bumi%20Cipta%20Asri!5e1!3m2!1sid!2sid!4v1758529986690!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'slogan' => 'gggg',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2025-09-24 08:04:15',
            ),
        ));
        
        
    }
}