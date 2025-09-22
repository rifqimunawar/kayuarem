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
                'deleted_at' => NULL,
                'created_at' => '2025-09-21 23:20:11',
                'updated_at' => '2025-09-21 23:20:11',
            ),
            1 => 
            array (
                'id' => 2,
                'nama' => 'Maiores in dolores v',
                'email' => 'furod@mailinator.com',
                'mobile' => 'Incidunt in molesti',
                'note' => 'Ullamco est est labo',
                'deleted_at' => NULL,
                'created_at' => '2025-09-21 23:21:07',
                'updated_at' => '2025-09-21 23:21:07',
            ),
            2 => 
            array (
                'id' => 3,
                'nama' => 'Jokowi',
                'email' => 'nujysyteki@mailinator.com',
                'mobile' => 'Quis in accusantium',
                'note' => 'inget ya ijazah saya asli tidak ada yang palsu palsu',
                'deleted_at' => NULL,
                'created_at' => '2025-09-21 23:29:39',
                'updated_at' => '2025-09-21 23:29:39',
            ),
            3 => 
            array (
                'id' => 4,
                'nama' => 'Molestias eum sed am',
                'email' => 'cutaricona@mailinator.com',
                'mobile' => 'Velit cumque id nisi',
                'note' => 'Quam placeat dolor',
                'deleted_at' => NULL,
                'created_at' => '2025-09-22 22:45:58',
                'updated_at' => '2025-09-22 22:45:58',
            ),
        ));
        
        
    }
}