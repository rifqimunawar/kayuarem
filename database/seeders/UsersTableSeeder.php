<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin User',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => '2025-09-22 16:16:59',
                'password' => '$2y$12$VmqGJzPT2w5AFM/iW2O2uulc/LRPa3AksGVAVQLYLyP4s.st339xi',
                'remember_token' => NULL,
                'created_at' => '2025-09-22 16:16:59',
                'updated_at' => '2025-09-22 16:16:59',
            ),
        ));
        
        
    }
}