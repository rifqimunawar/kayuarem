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
                'deskripsi' => '{"en":"Arem wood is a handicraft brand that presents unique products from selected wood, combined with modern industrial materials such as acrylic, ACP, leather, and others. With the support of CNC Router and Laser Engine technology, each product is processed precisely, then enhanced by experienced experts to produce the best quality.\\r\\nWe produce various needs ranging from home decorations, wooden bags, educational toys, to equipment for cafes, restaurants and hotels.\\r\\nMore than just a brand, arem wood is also committed to empowering laboratories from the surrounding environment, so that each work not only has aesthetic value, but also social value.","id":"Kayu Arem adalah merek kerajinan yang menghadirkan produk-produk unik dari kayu pilihan, dipadukan dengan material industri modern seperti akrilik, ACP, kulit, dan lainnya. Dengan dukungan teknologi CNC Router dan Laser Engine, setiap produk diproses secara presisi, lalu disempurnakan oleh tenaga ahli berpengalaman untuk menghasilkan kualitas terbaik.\\r\\nKami memproduksi berbagai kebutuhan mulai dari dekorasi rumah, tas kayu, mainan edukatif, hingga perlengkapan untuk kafe, restoran, dan hotel.\\r\\nLebih dari sekadar merek, Kayu Arem juga berkomitmen untuk memberdayakan laboratorium dari lingkungan sekitar, sehingga setiap karya tidak hanya memiliki nilai estetika, tetapi juga nilai sosial."}',
                'visi' => '{"id":"Menjadi Perusahaan Kayu Arem terpercaya di Indonesia yang mengutamakan kualitas, keberlanjutan, dan inovasi dalam setiap produk.","en":"Become a trusted arem wood company in Indonesia that prioritizes quality, sustainability, and innovation in every product."}',
                'misi' => '{"id":"1. Menghasilkan Produk Kayu Arem Berkualitas Tinggi yang Tahan Lama, Ramah Lingkungan, dan Memenuhi Standar Industri.\\r\\n2. Menjaga keberlanjutan sumber daya alam dengan menerapkan praktik produksi yang bertanggung jawab serta mendukung program reboisasi.\\r\\n3. Meningkatkan kepuasan pelanggan melalui pelayanan yang cepat, tepat, dan profesional.\\r\\n4. Mengembangkan Inovasi Produk sesuai kebutuhan pasar lokal maupun global, baik untuk konstruksi, interior, maupun dekorasi.\\r\\n5. Memberdayakan masyarakat sekitar dengan membuka lapangan kerja serta memberikan pelatihan keterampilan berbasis industri kayu.","en":"1. Producing high quality arem wood products that are durable, environmentally friendly, and meet industrial standards.\\r\\n2. Maintaining the sustainability of natural resources by implementing responsible production practices and supporting the reforestation program.\\r\\n3. Increase customer satisfaction through fast, precise and professional service.\\r\\n4. Develop product innovations according to local and global market needs, both for construction, interior, and decoration.\\r\\n5. Empowering the surrounding community by opening jobs and providing training in the wood industry -based skills."}',
                'slogan' => '{"id":"Crafting Stories in every details","en":"Crafting Stories in every details"}',
                'img_slogan' => 'img_slogan_20250929114339.png',
                'deskripsi_slogan' => '{"en":"Reflects our commitment in presenting wood products that are not only functional but also meaningful. Every detail is done with precision, producing works that tell the story of beauty, quality, and sincerity in each process.","id":"Mencerminkan komitmen kami dalam menghadirkan produk kayu yang tidak hanya fungsional tetapi juga bermakna. Setiap detail dikerjakan dengan presisi, menghasilkan karya yang bercerita tentang keindahan, kualitas, dan ketulusan dalam setiap prosesnya."}',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2025-09-29 13:47:09',
            ),
        ));
        
        
    }
}