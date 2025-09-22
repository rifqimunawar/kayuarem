<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categori_products')->delete();
        
        
        
    }
}