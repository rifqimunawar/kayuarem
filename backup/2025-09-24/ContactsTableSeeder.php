<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contacts')->delete();
        
        \DB::table('contacts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama' => 'KIM JONG UN',
                'email' => 'hefi@mailinator.com',
                'subject' => 'Nesciunt facilis of',
                'message' => 'Bakar Bahil',
                'deleted_at' => NULL,
                'created_at' => '2025-09-21 23:40:04',
                'updated_at' => '2025-09-21 23:40:04',
            ),
        ));
        
        
    }
}