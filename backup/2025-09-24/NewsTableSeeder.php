<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('news')->delete();
        
        \DB::table('news')->insert(array (
            0 => 
            array (
                'id' => 'f2eb6d00-c77c-4797-b9c2-4d310ee0b059',
                'img' => 'news_20250923110055.jpg',
                'judul' => 'Kayu Arem Ikut Lomba Inovasi Teknologi Informasi 2025',
                'deskripsi' => '<p data-start="446" data-end="809">Tidak hanya fokus pada kerajinan kayu dan akrilik, KayuArem juga terus mengembangkan diri dalam pemanfaatan <strong data-start="554" data-end="575">teknologi digital</strong> untuk mendukung usaha. Pada <strong data-start="604" data-end="646">Lomba Inovasi Teknologi Informasi 2025</strong> yang diselenggarakan oleh komunitas TI Bekasi bersama Dinas Kominfo, KayuArem turut berpartisipasi dengan mengusung tema <strong data-start="768" data-end="806">“Digitalisasi UMKM Kerajinan Kayu”</strong>.</p>
<p data-start="811" data-end="858">Dalam lomba ini, KayuArem menampilkan konsep:</p>
<ul data-start="859" data-end="1128">
<li data-start="859" data-end="921">
<p data-start="861" data-end="921"><strong data-start="861" data-end="883">Website interaktif</strong> untuk katalog dan pemesanan produk,</p>
</li>
<li data-start="922" data-end="987">
<p data-start="924" data-end="987"><strong data-start="924" data-end="963">Integrasi sistem database sederhana</strong> untuk manajemen stok,</p>
</li>
<li data-start="988" data-end="1128">
<p data-start="990" data-end="1128">serta <strong data-start="996" data-end="1017">penerapan QR Code</strong> pada produk agar pelanggan bisa langsung mengakses informasi bahan, cara perawatan, dan detail custom order.</p>
</li>
</ul>
<p data-start="1130" data-end="1346">“Teknologi sangat penting untuk UMKM saat ini. Dengan digitalisasi, kami bisa lebih dekat dengan pelanggan, lebih efisien dalam produksi, dan tentu lebih siap menghadapi persaingan pasar,” ujar perwakilan KayuArem.</p>
<p data-start="1348" data-end="1517">Partisipasi KayuArem dalam lomba ini mendapat apresiasi dari dewan juri, terutama karena mampu memadukan <strong data-start="1453" data-end="1478">kerajinan tradisional</strong> dengan <strong data-start="1486" data-end="1514">inovasi teknologi modern</strong>.</p>',
                'categori_id' => 'f25ff747-15b2-4e2f-92de-2c7880fce1b1',
                'deleted_at' => NULL,
                'created_at' => '2025-09-22 12:01:26',
                'updated_at' => '2025-09-23 11:00:55',
            ),
            1 => 
            array (
                'id' => '3f1c5bb1-8cbb-4828-a843-cf78fa92afd2',
                'img' => 'news_20250923100422.jpg',
                'judul' => 'Pameran Furnitur Lokal Bekasi 2025: Kayu Arem Tampilkan Koleksi Baru',
                'deskripsi' => '<p data-start="441" data-end="769">Kayu Arem kembali hadir membawa inovasi baru dalam dunia kerajinan kayu dan akrilik. Pada <strong data-start="530" data-end="568">Pameran Furnitur Lokal Bekasi 2025</strong> yang diselenggarakan di <strong data-start="593" data-end="616">Living Plaza Bekasi</strong> tanggal <strong data-start="625" data-end="647">12–15 Oktober 2025</strong>, KayuArem memperkenalkan koleksi terbarunya yang menggabungkan unsur <strong data-start="717" data-end="731">kayu alami</strong> dengan sentuhan <strong data-start="748" data-end="766">akrilik modern</strong>.</p>
<p data-start="771" data-end="924">Booth KayuArem menjadi salah satu daya tarik pengunjung berkat desain yang unik dan detail pengerjaan yang rapi. Koleksi baru yang dipamerkan meliputi:</p>
<ul data-start="925" data-end="1207">
<li data-start="925" data-end="983">
<p data-start="927" data-end="983"><strong data-start="927" data-end="956">Lampu meja kayu + akrilik</strong> dengan konsep minimalis,</p>
</li>
<li data-start="984" data-end="1044">
<p data-start="986" data-end="1044"><strong data-start="986" data-end="1009">Rak dinding modular</strong> yang bisa disesuaikan kebutuhan,</p>
</li>
<li data-start="1045" data-end="1120">
<p data-start="1047" data-end="1120"><strong data-start="1047" data-end="1081">Meja kopi kombinasi kayu solid</strong> dengan panel akrilik tembus pandang,</p>
</li>
<li data-start="1121" data-end="1207">
<p data-start="1123" data-end="1207">serta beberapa produk <strong data-start="1145" data-end="1173">custom dekorasi interior</strong> yang mendapat banyak perhatian.</p>
</li>
</ul>
<p data-start="1209" data-end="1480">“Pameran ini bukan hanya tentang memamerkan produk, tapi juga kesempatan untuk berinteraksi langsung dengan pelanggan dan mendengar masukan mereka. Kami senang banyak pengunjung yang tertarik dengan konsep kayu dan akrilik yang kami hadirkan,” ujar perwakilan KayuArem.</p>
<p data-start="1482" data-end="1731">Acara ini diikuti oleh puluhan pengrajin dan produsen furnitur lokal dari Bekasi dan sekitarnya. Selain menampilkan produk, pengunjung juga bisa mengikuti demo singkat, talkshow desain interior, serta mendapatkan promo khusus dari peserta pameran.</p>',
                'categori_id' => 'f25ff747-15b2-4e2f-92de-2c7880fce1b1',
                'deleted_at' => NULL,
                'created_at' => '2025-09-22 12:02:37',
                'updated_at' => '2025-09-23 10:04:22',
            ),
            2 => 
            array (
                'id' => '70570e10-f307-42a9-a006-1a6011cb5980',
                'img' => 'news_20250923100200.jpg',
                'judul' => 'Kayu Arem Ikut Pelatihan UMKM dari Dinas Perindustrian',
                'deskripsi' => '<p data-start="389" data-end="662">Kayu Arem terus berkomitmen untuk berkembang, tidak hanya dalam hal produk, tetapi juga dari sisi manajemen usaha. Pada tanggal <strong data-start="516" data-end="540">20–21 September 2025</strong>, Kayu Arem berkesempatan mengikuti <strong data-start="575" data-end="593">Pelatihan UMKM</strong> yang diselenggarakan oleh <strong data-start="620" data-end="659">Dinas Perindustrian dan Perdagangan</strong>.</p>
<p data-start="664" data-end="760">Kegiatan ini menghadirkan berbagai narasumber profesional yang membahas topik penting seperti:</p>
<ul data-start="761" data-end="926">
<li data-start="761" data-end="803">
<p data-start="763" data-end="803">Strategi pemasaran digital untuk UMKM,</p>
</li>
<li data-start="804" data-end="837">
<p data-start="806" data-end="837">Manajemen keuangan sederhana,</p>
</li>
<li data-start="838" data-end="871">
<p data-start="840" data-end="871">Standarisasi kualitas produk,</p>
</li>
<li data-start="872" data-end="926">
<p data-start="874" data-end="926">serta peluang ekspor untuk produk kerajinan lokal.</p>
</li>
</ul>
<p data-start="928" data-end="1144">“Pelatihan ini sangat bermanfaat bagi kami. Sebagai brand lokal, kami ingin terus berinovasi, bukan hanya pada produk, tapi juga bagaimana membangun bisnis yang sehat dan berkelanjutan,” ungkap perwakilan KayuArem.</p>
<p data-start="1146" data-end="1339">Selain menambah wawasan, kegiatan ini juga menjadi ajang networking antar pelaku UMKM, di mana KayuArem dapat berbagi pengalaman dengan sesama pengrajin serta membuka peluang kolaborasi baru.</p>',
                'categori_id' => 'f25ff747-15b2-4e2f-92de-2c7880fce1b1',
                'deleted_at' => NULL,
                'created_at' => '2025-09-22 12:41:09',
                'updated_at' => '2025-09-23 10:02:00',
            ),
            3 => 
            array (
                'id' => 'b3b500d5-00f2-4a7b-a34e-0c584972aec5',
                'img' => NULL,
                'judul' => 'Suscipit magni quod',
                'deskripsi' => 'Duis dolorum aut qui.v',
                'categori_id' => 'f25ff747-15b2-4e2f-92de-2c7880fce1b1',
                'deleted_at' => '2025-09-22 17:42:51',
                'created_at' => '2025-09-22 17:42:46',
                'updated_at' => '2025-09-22 17:42:51',
            ),
        ));
        
        
    }
}