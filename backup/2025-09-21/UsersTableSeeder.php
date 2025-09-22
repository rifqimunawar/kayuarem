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
                'name' => 'Test User',
                'email' => 'test@example.com',
                'email_verified_at' => '2025-09-21 17:35:03',
                'password' => '$2y$12$IsLAJ9cKe5xlHTJTGxMeNOy6ESZOamOYlyjvpmbUD/hPlis.ZbrF2',
                'remember_token' => 'swHwK22c1f',
                'created_at' => '2025-09-21 17:35:03',
                'updated_at' => '2025-09-21 17:35:03',
            ),
        ));
        
        
    }
}