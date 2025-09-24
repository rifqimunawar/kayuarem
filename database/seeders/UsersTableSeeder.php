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
                'remember_token' => '3LvTWxwtVdFbETi8Sgkct1rQPxypDXMAhjFTSgE0oaegpeFpU5xb26gKwatT',
                'deleted_at' => NULL,
                'created_at' => '2025-09-22 16:16:59',
                'updated_at' => '2025-09-22 16:16:59',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Zephania Ewing',
                'username' => 'huhuqiqyci',
                'email' => 'musevi@mailinator.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$le0qZLs2CUpJBtdaXYcHu.8gVfwY.gWe06Ue5Ocr6uVAm//p8ZNfq',
                'remember_token' => NULL,
                'deleted_at' => '2025-09-22 17:51:35',
                'created_at' => '2025-09-22 17:44:07',
                'updated_at' => '2025-09-22 17:51:35',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Elaine Davis',
                'username' => 'wopanu',
                'email' => 'jofymyh@mailinator.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$3n.aKnqKLEQnQN8frdUcMOI8gHle0AJZcEXd3vhcz9JnVVBPBxywG',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-09-22 17:46:55',
                'updated_at' => '2025-09-22 17:46:55',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Micah Chang',
                'username' => 'hibifoza',
                'email' => 'kohu@mailinator.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$de8dy.a0LZmvrrmTxwbUD.Sh8v1yeixlzRVVBzueIub30yvq2R8fC',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-09-22 17:47:33',
                'updated_at' => '2025-09-22 17:47:42',
            ),
        ));
        
        
    }
}