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
                'deskripsi' => '{"en":"Arem wood is a craft brand that presents unique products from selected wood, combined with modern industrial materials such as acrylic, acp, leather, and others. With the Support of CNC Router and Laser Engine Technology, each product is processed precisely, then enhanced by experienced experts to produce the best quality. We Produce Various Needs Ranging from Home Decor, Wooden Bags, Educational Toys, To Equipment for Cafes, Restaurants and Hotels. More than just a brand, arem wood is also committed to empowering laboratory from the surrounding environment, so that each work has social value as well as aesthetic.","id":"Arem wood is a craft brand that presents unique products from selected wood, combined with modern industrial materials such as acrylic, acp, leather, and others. With the Support of CNC Router and Laser Engine Technology, each product is processed precisely, then enhanced by experienced experts to produce the best quality. We Produce Various Needs Ranging from Home Decor, Wooden Bags, Educational Toys, To Equipment for Cafes, Restaurants and Hotels. More than just a brand, arem wood is also committed to empowering laboratory from the surrounding environment, so that each work has social value as well as aesthetic."}',
                'visi' => '{"id":"Become a Trusted Arem Wood Company in Indonesia that prioritizes quality, sustainability, and innovation in every product.","en":"Become a Trusted Arem Wood Company in Indonesia that prioritizes quality, sustainability, and innovation in every product."}',
                'misi' => '{"id":"1. Producing High Quality Arem Wood Products that are Durable, Environmentally Friendly, and Meet Industrial Standards.\\r\\n2. Maintaining the sustainability of natural resources by promoting responsible production practices and supporting the reforestation program.\\r\\n3. Increase Customer satisfaction through fast, precise and professional service.\\r\\n4. Develop Product Innovations according to local and global market needs, both for construction, interior, and decoration.\\r\\n5. Empowering the surrounding community by opening jobs and training in the wood industry -based skills.","en":"1. Producing High Quality Arem Wood Products that are Durable, Environmentally Friendly, and Meet Industrial Standards.\\r\\n2. Maintaining the sustainability of natural resources by promoting responsible production practices and supporting the reforestation program.\\r\\n3. Increase Customer satisfaction through fast, precise and professional service.\\r\\n4. Develop Product Innovations according to local and global market needs, both for construction, interior, and decoration.\\r\\n5. Empowering the surrounding community by opening jobs and training in the wood industry -based skills."}',
                'slogan' => '{"id":"Crafting Stories in every detail","en":"Crafting Stories in every detail"}',
                'img_slogan' => 'img_slogan_20250929114339.png',
                'deskripsi_slogan' => '{"en":"Reflecting Our Commitment to Delivering Wood Products that are not only functional but also meaningful. Every detail is crafted with precision, creating works that tell stories of beauty, quality, and sinceritas in every process.","id":"Reflecting Our Commitment to Delivering Wood Products that are not only functional but also meaningful. Every detail is crafted with precision, creating works that tell stories of beauty, quality, and sinceritas in every process."}',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2025-09-29 11:43:41',
            ),
        ));
        
        
    }
}