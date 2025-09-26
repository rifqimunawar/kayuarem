<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QuotesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('quotes')->delete();
        
        \DB::table('quotes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama' => 'Beatae dolorem nobis',
                'email' => 'caziq@mailinator.com',
                'mobile' => 'Ex corrupti aliqua',
                'note' => 'Quod aute eaque magn',
                'deleted_at' => '2025-09-23 09:48:27',
                'created_at' => '2025-09-21 23:20:11',
                'updated_at' => '2025-09-23 09:48:27',
            ),
            1 => 
            array (
                'id' => 2,
                'nama' => 'Maiores in dolores v',
                'email' => 'furod@mailinator.com',
                'mobile' => 'Incidunt in molesti',
                'note' => 'Ullamco est est labo',
                'deleted_at' => '2025-09-23 09:48:23',
                'created_at' => '2025-09-21 23:21:07',
                'updated_at' => '2025-09-23 09:48:23',
            ),
            2 => 
            array (
                'id' => 3,
                'nama' => 'Jokowi',
                'email' => 'nujysyteki@mailinator.com',
                'mobile' => 'Quis in accusantium',
                'note' => 'inget ya ijazah saya asli tidak ada yang palsu palsu',
                'deleted_at' => '2025-09-23 09:48:19',
                'created_at' => '2025-09-21 23:29:39',
                'updated_at' => '2025-09-23 09:48:19',
            ),
            3 => 
            array (
                'id' => 4,
                'nama' => 'Molestias eum sed am',
                'email' => 'cutaricona@mailinator.com',
                'mobile' => 'Velit cumque id nisi',
                'note' => 'Quam placeat dolor',
                'deleted_at' => '2025-09-23 09:48:16',
                'created_at' => '2025-09-22 22:45:58',
                'updated_at' => '2025-09-23 09:48:16',
            ),
            4 => 
            array (
                'id' => 5,
                'nama' => 'Firdaus Nur',
                'email' => 'firdausnurhariyanto@gmail.com',
                'mobile' => '087825807625',
                'note' => 'Mohon untuk dapat dibuatkan penawaran untuk pembuatan no ruangan total ada 338 Pcs',
                'deleted_at' => NULL,
                'created_at' => '2025-09-23 09:48:06',
                'updated_at' => '2025-09-23 09:48:06',
            ),
            5 => 
            array (
                'id' => 6,
                'nama' => 'Sharma',
                'email' => 'manshis@vgroupinc.com',
                'mobile' => 'Ddf Pahidp',
                'note' => 'Hi there,

I hope this message finds you well.

I recently had a chance to review your website (kayuarem.com) and wanted to propose a website redesign service tailored to enhance your online presence. Key benefits include:
•Modern, responsive design
•Improved user experience and navigation
•Faster loading speeds
•SEO optimization for better visibility
•Mobile-friendly layout
•Accessibility compliance (WCAG/ADA standards to ensure your site is usable for all users)

The goal is to align your website with current digital trends, accessibility standards, and user expectations.

Would you like to see some of our recent work or schedule a quick online meeting to discuss your goals?

Looking forward to your response.

Best regards,
Manshi',
                'deleted_at' => NULL,
                'created_at' => '2025-09-23 22:37:28',
                'updated_at' => '2025-09-23 22:37:28',
            ),
        ));
        
        
    }
}