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
            4 => 
            array (
                'id' => '0bf252fd-7111-4a6e-a770-b9c345aeffaa',
                'img' => 'news_20250923110322.jpg',
                'judul' => '5 Ide Menata Ruang Kerja dengan Sentuhan Kayu',
                'deskripsi' => '<p data-start="357" data-end="557">Kayu bukan hanya bahan dasar furnitur, tetapi juga elemen yang mampu memberikan suasana hangat dan natural pada ruang kerja. Berikut beberapa tips untuk menata ruang kerja Anda dengan sentuhan kayu:</p><ol data-start="559" data-end="1040">
<li data-start="559" data-end="677">
<p data-start="562" data-end="677"><strong data-start="562" data-end="593">Gunakan Meja Kayu Minimalis</strong><br data-start="593" data-end="596">
Meja dengan finishing natural membuat ruangan terasa lebih tenang dan fokus.</p>
</li>
<li data-start="678" data-end="755">
<p data-start="681" data-end="755"><strong data-start="681" data-end="711">Tambahkan Rak Dinding Kayu</strong><br data-start="711" data-end="714">
Hemat ruang sekaligus jadi dekorasi.</p>
</li>
<li data-start="756" data-end="848">
<p data-start="759" data-end="848"><strong data-start="759" data-end="792">Pilih Kursi dengan Aksen Kayu</strong><br data-start="792" data-end="795">
Menambah estetika tanpa mengorbankan kenyamanan.</p>
</li>
<li data-start="849" data-end="945">
<p data-start="852" data-end="945"><strong data-start="852" data-end="888">Gunakan Dekorasi Kecil dari Kayu</strong><br data-start="888" data-end="891">
Seperti tempat pensil, lampu meja, atau jam kayu.</p>
</li>
<li data-start="946" data-end="1040">
<p data-start="949" data-end="1040"><strong data-start="949" data-end="985">Kombinasikan dengan Tanaman Hias</strong><br data-start="985" data-end="988">
Kayu + tanaman = nuansa alami yang menenangkan.</p>
</li>
</ol><p>

</p><p data-start="1042" data-end="1131">👉 Sentuhan kecil kayu bisa membuat ruang kerja jadi lebih produktif sekaligus estetik.</p>',
                'categori_id' => 'ff1485f4-4fe4-45ec-9da9-a34ce1eb4732',
                'deleted_at' => NULL,
                'created_at' => '2025-09-23 11:03:22',
                'updated_at' => '2025-09-23 11:03:22',
            ),
            5 => 
            array (
                'id' => 'f018790a-9390-44eb-8ede-284742b117f4',
                'img' => 'news_20250923110508.jpg',
                'judul' => 'Tren Dekorasi Rumah 2025: Kayu Bertemu Akrilik',
                'deskripsi' => '<p data-start="1286" data-end="1483">Tahun 2025, tren interior semakin mengarah pada kombinasi bahan tradisional dengan material modern. Salah satu yang sedang naik daun adalah perpaduan <strong data-start="1436" data-end="1450">kayu alami</strong> dengan <strong data-start="1458" data-end="1480">akrilik transparan</strong>.</p><ul data-start="1485" data-end="1804">
<li data-start="1485" data-end="1554">
<p data-start="1487" data-end="1554"><strong data-start="1487" data-end="1516">Kayu Solid untuk Struktur</strong> → Memberikan kekuatan dan karakter.</p>
</li>
<li data-start="1555" data-end="1626">
<p data-start="1557" data-end="1626"><strong data-start="1557" data-end="1580">Akrilik untuk Aksen</strong> → Memberi kesan modern, ringan, dan elegan.</p>
</li>
<li data-start="1627" data-end="1709">
<p data-start="1629" data-end="1709"><strong data-start="1629" data-end="1658">Pencahayaan LED + Akrilik</strong> → Efek dramatis tanpa meninggalkan nuansa alami.</p>
</li>
<li data-start="1710" data-end="1804">
<p data-start="1712" data-end="1804"><strong data-start="1712" data-end="1729">Produk Custom</strong> → Meja, rak, atau lampu bisa dipersonalisasi sesuai gaya penghuni rumah.</p>
</li>
</ul><p>

</p><p data-start="1806" data-end="1919">👉 Perpaduan kayu &amp; akrilik bukan hanya indah, tapi juga tahan lama dan fleksibel untuk berbagai gaya interior.</p>',
                'categori_id' => 'ff1485f4-4fe4-45ec-9da9-a34ce1eb4732',
                'deleted_at' => NULL,
                'created_at' => '2025-09-23 11:05:08',
                'updated_at' => '2025-09-23 11:05:08',
            ),
            6 => 
            array (
                'id' => '6b8f4368-3c36-4cf7-81af-3390ef44ffc0',
                'img' => 'news_20250923110645.jpg',
                'judul' => 'Cara Merawat Furnitur Kayu agar Awet & Tetap Indah',
                'deskripsi' => '<p data-start="2078" data-end="2189">Furnitur kayu adalah investasi jangka panjang. Supaya tetap awet dan indah, berikut tips perawatan sederhana:</p><ol data-start="2191" data-end="2682">
<li data-start="2191" data-end="2288">
<p data-start="2194" data-end="2288"><strong data-start="2194" data-end="2231">Hindari Paparan Langsung Matahari</strong><br data-start="2231" data-end="2234">
Panas bisa membuat kayu retak atau warna memudar.</p>
</li>
<li data-start="2289" data-end="2383">
<p data-start="2292" data-end="2383"><strong data-start="2292" data-end="2331">Gunakan Lap Kering / Setengah Basah</strong><br data-start="2331" data-end="2334">
Jangan terlalu basah agar kayu tidak lembap.</p>
</li>
<li data-start="2384" data-end="2484">
<p data-start="2387" data-end="2484"><strong data-start="2387" data-end="2425">Poles dengan Minyak Kayu / Beeswax</strong><br data-start="2425" data-end="2428">
Menjaga kilau alami sekaligus melindungi permukaan.</p>
</li>
<li data-start="2485" data-end="2584">
<p data-start="2488" data-end="2584"><strong data-start="2488" data-end="2530">Jauhkan dari Air &amp; Kelembaban Berlebih</strong><br data-start="2530" data-end="2533">
Simpan di ruangan dengan sirkulasi udara baik.</p>
</li>
<li data-start="2585" data-end="2682">
<p data-start="2588" data-end="2682"><strong data-start="2588" data-end="2613">Bersihkan Noda Segera</strong><br data-start="2613" data-end="2616">
Tumpahan minuman sebaiknya langsung dilap agar tidak meresap.</p>
</li>
</ol><p>

</p><p data-start="2684" data-end="2786">👉 Dengan perawatan rutin, furnitur kayu bisa bertahan puluhan tahun sambil tetap cantik dan elegan.</p>',
                'categori_id' => 'ff1485f4-4fe4-45ec-9da9-a34ce1eb4732',
                'deleted_at' => NULL,
                'created_at' => '2025-09-23 11:06:45',
                'updated_at' => '2025-09-23 11:06:45',
            ),
            7 => 
            array (
                'id' => '3c29b90a-22b1-4401-9a96-380d01d43ece',
                'img' => 'news_20250923110904.jpg',
                'judul' => 'Kayu Arem Memberdayakan SDM Lokal Melalui Program CSR',
            'deskripsi' => '<p data-start="405" data-end="721">Kayu Arem percaya bahwa keberhasilan sebuah usaha bukan hanya diukur dari produk yang dihasilkan, tetapi juga dari kontribusinya terhadap lingkungan sekitar. Sebagai bagian dari program <strong data-start="590" data-end="631">Corporate Social Responsibility (CSR)</strong>, KayuArem menjalankan inisiatif untuk <strong data-start="670" data-end="700">memberdayakan SDM setempat</strong> di wilayah Bekasi.</p><p data-start="723" data-end="818">Program ini dilakukan dengan melibatkan masyarakat sekitar dalam berbagai aktivitas, seperti:</p><ul data-start="819" data-end="1156">
<li data-start="819" data-end="947">
<p data-start="821" data-end="947"><strong data-start="821" data-end="865">Pelatihan dasar kerajinan kayu &amp; akrilik</strong>, untuk memberi keterampilan baru yang bisa menjadi sumber penghasilan tambahan.</p>
</li>
<li data-start="948" data-end="1047">
<p data-start="950" data-end="1047"><strong data-start="950" data-end="986">Workshop kewirausahaan sederhana</strong>, membekali peserta dengan kemampuan mengelola usaha kecil.</p>
</li>
<li data-start="1048" data-end="1156">
<p data-start="1050" data-end="1156"><strong data-start="1050" data-end="1100">Kesempatan kerja langsung di workshop KayuArem</strong>, sehingga warga dapat terlibat dalam proses produksi.</p>
</li>
</ul><p data-start="1158" data-end="1389">“Bagi kami, KayuArem bukan hanya tentang membuat produk, tapi juga tentang memberikan manfaat nyata bagi komunitas. Dengan melibatkan SDM lokal, kami ingin tumbuh bersama dan menciptakan dampak positif,” ujar perwakilan KayuArem.</p><p>



</p><p data-start="1391" data-end="1643">Selain meningkatkan keterampilan, kegiatan ini juga mempererat hubungan sosial antara KayuArem dan masyarakat sekitar. Harapannya, semakin banyak warga yang bisa ikut serta dalam industri kreatif, sekaligus menjaga tradisi kerajinan kayu tetap hidup.</p>',
                'categori_id' => '5dedce96-f089-47b6-bcae-4ec405c68611',
                'deleted_at' => NULL,
                'created_at' => '2025-09-23 11:09:04',
                'updated_at' => '2025-09-23 11:09:04',
            ),
        ));
        
        
    }
}