<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TestimonialsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('testimonials')->delete();
        
        \DB::table('testimonials')->insert(array (
            0 => 
            array (
                'id' => 1,
                'img' => 'testimonial_20250929203746.png',
                'nama' => 'Nabila Aprilia',
                'profesi' => '{"id":"-","en":"-"}',
                'deskripsi' => '{"id":"Arem wood products are good, not regret shopping here, of course repeat orders","en":"Arem wood products are good, not regret shopping here, of course repeat orders"}',
                'deleted_at' => NULL,
                'created_at' => '2025-09-22 01:41:03',
                'updated_at' => '2025-09-29 20:37:48',
            ),
            1 => 
            array (
                'id' => 2,
                'img' => 'testimonial_20250929203810.png',
                'nama' => 'Rendi Prasetyo',
                'profesi' => '{"id":"-","en":"-"}',
                'deskripsi' => '{"id":"buying the product here is not second to none is very good, very recommended","en":"Buying the product here is not second to none is very good, very recommended"}',
                'deleted_at' => NULL,
                'created_at' => '2025-09-22 01:47:02',
                'updated_at' => '2025-09-29 20:38:11',
            ),
            2 => 
            array (
                'id' => 3,
                'img' => 'testimonial_20250929203825.png',
                'nama' => 'Raie Aswajjillah',
                'profesi' => '{"id":"-","en":"-"}',
                'deskripsi' => '{"id":"Produknya bagus bagus","en":"The product is good"}',
                'deleted_at' => NULL,
                'created_at' => '2025-09-22 01:48:05',
                'updated_at' => '2025-09-29 22:05:53',
            ),
        ));
        
        
    }
}