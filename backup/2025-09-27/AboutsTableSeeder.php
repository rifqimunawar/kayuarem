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
                'visi' => 'Menjadi perusahaan kayu arem terpercaya di Indonesia yang mengedepankan kualitas, keberlanjutan, dan inovasi dalam setiap produk.',
                'misi' => '1. Menghasilkan produk kayu arem berkualitas tinggi yang tahan lama, ramah lingkungan, dan memenuhi standar industri.
2. Menjaga keberlanjutan sumber daya alam dengan mengedepankan praktik produksi yang bertanggung jawab serta mendukung program reboisasi.
3. Meningkatkan kepuasan pelanggan melalui pelayanan yang cepat, tepat, dan profesional.
4. Mengembangkan inovasi produk sesuai kebutuhan pasar lokal dan global, baik untuk konstruksi, interior, maupun dekorasi.
5. Memberdayakan masyarakat sekitar dengan membuka lapangan kerja dan pelatihan keterampilan berbasis industri kayu.',
                'slogan' => 'kayu mu adalah kayu terbaik',
                'img_slogan' => 'img_slogan_20250927021154.png',
                'deskripsi_slogan' => 'deskripsi untuk slogan',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2025-09-27 02:11:54',
            ),
        ));
        
        
    }
}