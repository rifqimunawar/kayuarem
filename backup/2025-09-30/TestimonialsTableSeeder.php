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
                'img' => 'testimonial_20250922014103.jpeg',
                'nama' => 'Nabila Aprilia',
                'jk' => NULL,
                'profesi' => 'Ukhti',
                'deskripsi' => '{"id":"Produknya lucu lucu","en":"The product is funny"}',
                'deleted_at' => NULL,
                'created_at' => '2025-09-22 01:41:03',
                'updated_at' => '2025-09-27 16:10:58',
            ),
            1 => 
            array (
                'id' => 2,
                'img' => 'testimonial_20250922014702.jpg',
                'nama' => 'Rendi Prasetyo',
                'jk' => NULL,
                'profesi' => 'Ttaveler',
                'deskripsi' => '{"id":"beli produk disini gaada duanya semuanya bagus bangett sangat rekomended","en":"buying the product here is not second to none is very good, very recommended"}',
                'deleted_at' => NULL,
                'created_at' => '2025-09-22 01:47:02',
                'updated_at' => '2025-09-27 16:10:13',
            ),
            2 => 
            array (
                'id' => 3,
                'img' => 'testimonial_20250922014805.jpg',
                'nama' => 'Raie Aswajjillah',
                'jk' => '1',
                'profesi' => 'Programmer',
                'deskripsi' => '{"id":"produk disini sangat bagus sekali memuaskan sekali tidak mengecewakan","en":"The product here is very good, it is very satisfying not to disappoint"}',
                'deleted_at' => NULL,
                'created_at' => '2025-09-22 01:48:05',
                'updated_at' => '2025-09-30 17:08:45',
            ),
        ));
        
        
    }
}