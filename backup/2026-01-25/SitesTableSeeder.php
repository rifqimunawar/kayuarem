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
                'site_name' => 'Kayu Arem - Crafting Stories in Every Details',
                'logo' => 'logo_20250929111745.png',
                'alamat' => 'Workshop & Office
Perumahan Mega Regency Blok G29 No.26 RT 05 / RW 20,Desa Sukaragam, Kec. Serang Baru, Kab. Bekasi,Provinsi Jawa Barat (17330)',
                'link_ig' => 'https://www.instagram.com/kayuarem',
                'link_tw' => 'https://shopee.co.id/kayuarem?entryPoint=ShopByPDP',
                'link_fb' => 'https://www.facebook.com/share/18j89k7nkm/',
                'link_yt' => 'https://youtube.com/@kayuarem?si=AAtzXZ1Mt3UNBqvs',
                'link_lk' => 'https://shopee.co.id/kayuarem',
                'link_tt' => 'https://www.tiktok.com/@kayuarem?_t=zs-8wnkgknz543&_r=1',
                'link_shopee' => 'https://shopee.co.id/kayuarem',
                'link_tokped' => 'https://tk.tokopedia.com/ZSDcFYCNj/',
                'link_lazada' => 'https://s.lazada.co.id/s.Z2ZIao',
                'mobile' => '0822-1329-4234',
                'email' => 'kayuarem@gmail.com',
                'link_gmap' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.0249382470383!2d107.11884937366563!3d-6.39078359359972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6999aabbe3cac7%3A0x2be6a75b0f493b5!2sKayu%20Arem!5e0!3m2!1sen!2sid!4v1758809172428!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'slogan' => 'gggg',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2025-10-29 23:29:22',
            ),
        ));
        
        
    }
}