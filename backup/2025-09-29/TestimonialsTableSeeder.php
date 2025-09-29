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
                'nama' => 'Omnis recusandae Qu',
                'profesi' => 'Ut fuga Qui enim vo',
                'deskripsi' => 'In incidunt sed omn',
                'deleted_at' => NULL,
                'created_at' => '2025-09-22 01:41:03',
                'updated_at' => '2025-09-22 01:41:03',
            ),
            1 => 
            array (
                'id' => 2,
                'img' => 'testimonial_20250922014702.jpg',
                'nama' => 'Rendi Prasetyo',
                'profesi' => 'Ut fuga Qui enim vo',
                'deskripsi' => 'beli produk disini gaada duanya semuanya bagus bangett sangat rekomended',
                'deleted_at' => NULL,
                'created_at' => '2025-09-22 01:47:02',
                'updated_at' => '2025-09-22 01:47:02',
            ),
            2 => 
            array (
                'id' => 3,
                'img' => 'testimonial_20250922014805.jpg',
                'nama' => 'Raie Aswajjillah',
                'profesi' => 'Programmer',
                'deskripsi' => 'produk disini sangat bagus sekali memuaskan sekali tidak mengecewakan',
                'deleted_at' => NULL,
                'created_at' => '2025-09-22 01:48:05',
                'updated_at' => '2025-09-22 01:48:05',
            ),
        ));
        
        
    }
}