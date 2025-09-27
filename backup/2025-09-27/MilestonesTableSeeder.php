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
                'title' => '2006',
                'deskripsi' => 'Perusahaan di dirikan',
                'deleted_at' => NULL,
                'created_at' => '2025-09-27 01:58:24',
                'updated_at' => '2025-09-27 01:58:24',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => '2007',
                'deskripsi' => 'Perusahaan Membuka Cabang bandugn',
                'deleted_at' => NULL,
                'created_at' => '2025-09-27 01:59:24',
                'updated_at' => '2025-09-27 01:59:24',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => '2010',
                'deskripsi' => 'Membuka Cabang di jakarta',
                'deleted_at' => NULL,
                'created_at' => '2025-09-27 02:01:02',
                'updated_at' => '2025-09-27 02:01:02',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => '2015',
                'deskripsi' => 'Membuka Cabang di Bali',
                'deleted_at' => NULL,
                'created_at' => '2025-09-27 02:24:00',
                'updated_at' => '2025-09-27 02:24:00',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => '2019',
                'deskripsi' => 'Membuka Cabang di Papua',
                'deleted_at' => NULL,
                'created_at' => '2025-09-27 02:24:19',
                'updated_at' => '2025-09-27 02:24:19',
            ),
        ));
        
        
    }
}