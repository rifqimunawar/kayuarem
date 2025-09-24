<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AboutsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('abouts')->delete();
        
        \DB::table('abouts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'img' => 'about_20250921215719.jpg',
                'jumlah_client' => '154',
                'jumlah_project' => '589',
                'deskripsi' => 'Kayu Arem adalah brand kerajinan yang menghadirkan produk-produk unik dari kayu pilihan, dikombinasikan dengan bahan industrial modern seperti akrilik, ACP, kulit, dan lainnya. Dengan dukungan teknologi mesin CNC router dan laser, setiap produk diproses secara presisi, lalu disempurnakan oleh tenaga ahli berpengalaman agar menghasilkan kualitas terbaik. Kami memproduksi berbagai kebutuhan mulai dari home decor, tas kayu,mainan edukatif, hingga perlengkapan untuk kafe, restoran, dan hotel. Lebih dari sekadar brand, Kayu Arem juga berkomitmen untuk memberdayakan tenaga kerja dari lingkungan sekitar, sehingga setiap karya memiliki nilai sosial sekaligus estetika.',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2025-09-24 08:04:46',
            ),
        ));
        
        
    }
}