<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('projects')->delete();
        
        \DB::table('projects')->insert(array (
            0 => 
            array (
                'id' => 'dc5103d3-d49f-41d0-acc3-0b50a5b67ae8',
                'img' => 'project_20250927154421.jpg',
                'judul' => '{"id":"Kusen untuk perumahan PIK 2","en":"Frame for pik housing 2"}',
                'deskripsi' => '{"id":"Membuat semua kebutuhan kontruksi untuk perumahan elite di PIK 2","en":"Make all construction needs for elite housing in PIK 2"}',
                'categori_id' => '010eddf0-4c31-4f38-b4f0-c893d4e9eff8',
                'deleted_at' => '2025-09-29 15:31:40',
                'created_at' => '2025-09-22 12:49:26',
                'updated_at' => '2025-09-29 15:31:40',
            ),
            1 => 
            array (
                'id' => 'e86d01b8-797a-461c-85c8-4beca429cb17',
                'img' => 'project_20250922125116.jpg',
                'judul' => '{"id":"Pembuatan Patung Jokowi","en":"Making Jokowi\'s Statue"}',
                'deskripsi' => '{"id":"Membuat patung pa jokowi sebagai bentuk kemajuan bangsa indonesia","en":"Making a statue of Mr. Jokowi as a form of progress of the Indonesian people"}',
                'categori_id' => 'ad91397b-f02c-4806-a31f-8ffeedb51fff',
                'deleted_at' => '2025-09-29 15:31:36',
                'created_at' => '2025-09-22 12:51:16',
                'updated_at' => '2025-09-29 15:31:36',
            ),
            2 => 
            array (
                'id' => 'e85ab85e-1145-40c8-a67e-7fade11d5f9d',
                'img' => 'project_20250929153752.jpg',
                'judul' => '{"id":"Souvenir Eksklusif Tatakan Kalender - PT JD","en":"Exclusive Souvenir Calendar Calendar - PT JD"}',
                'deskripsi' => '{"id":"Kayu Arem berhasil memenangkan tender pengadaan souvenir berupa tatakan kalender eksklusif untuk PT JD. Produk ini dirancang dengan material kayu pilihan yang memiliki kualitas baik, ramah lingkungan, dan tampilan elegan untuk mendukung citra perusahaan.\\r\\n\\r\\nDalam project ini, Kayu Arem memproduksi sebanyak 3.600 pcs tatakan kalender sesuai dengan spesifikasi yang diminta oleh PT JD. Proses produksi dilakukan dengan standar kualitas tinggi, mulai dari pemilihan bahan, pemotongan presisi, hingga finishing yang rapi, sehingga menghasilkan souvenir yang tidak hanya fungsional tetapi juga memiliki nilai estetika.\\r\\n\\r\\nKeberhasilan dalam project ini menunjukkan komitmen Kayu Arem dalam menyediakan produk kreatif, berkualitas, serta tepat waktu untuk mendukung kebutuhan promosi dan branding perusahaan mitra.","en":"Arem Kayu won a souvenir procurement tender in the form of an exclusive calendar mat for PT JD. This product is designed with selected wood materials that have good quality, environmentally friendly, and elegant appearance to support the company\'s image.\\r\\n\\r\\nIn this project, Arem wood produces 3,600 pcs of calendar coasters in accordance with the specifications requested by PT JD. The production process is carried out with high quality standards, ranging from the selection of materials, precision cuts, to neat finishing, so as to produce souvenirs that are not only functional but also have aesthetic value.\\r\\n\\r\\nSuccess in this project shows the commitment of arem wood in providing creative, quality, and on time products to support the promotional needs and branding of partner companies."}',
                'categori_id' => '72c90e52-6678-4e7b-ab5a-95ce02b510d7',
                'deleted_at' => NULL,
                'created_at' => '2025-09-29 15:37:53',
                'updated_at' => '2025-09-29 15:37:53',
            ),
        ));
        
        
    }
}