<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BlogSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'judul'           => 'Pentingnya Hidrasi Saat Berolahraga',
                'slug'            => 'pentingnya-hidrasi-saat-berolahraga',
                'konten'          => '<p>Hidrasi adalah kunci utama performa olahraga yang optimal. Tubuh manusia terdiri dari sekitar 60% air, dan selama berolahraga, kita kehilangan cairan melalui keringat. Kekurangan cairan sedikit saja dapat menyebabkan penurunan energi, kram otot, dan konsentrasi yang buruk.</p><p>Para ahli menyarankan untuk minum setidaknya 500ml air dua jam sebelum memulai sesi latihan, dan terus minum dalam jumlah kecil setiap 15-20 menit selama latihan berlangsung. Jangan menunggu haus, karena rasa haus adalah tanda awal dehidrasi.</p>',
                'foto_cover'      => 'blog-hydration.jpg',
                'author'          => 'Admin WHF',
                'views'           => 150,
                'is_published'    => 1,
                'tanggal_publish' => date('Y-m-d H:i:s'),
                'created_at'      => date('Y-m-d H:i:s'),
                'updated_at'      => date('Y-m-d H:i:s'),
            ],
            [
                'judul'           => '5 Makanan Terbaik untuk Pemulihan Otot',
                'slug'            => '5-makanan-terbaik-untuk-pemulihan-otot',
                'konten'          => '<p>Setelah melakukan sesi latihan beban yang berat, otot Anda mengalami robekan mikro yang perlu diperbaiki. Nutrisi yang tepat setelah latihan sangat penting. Berikut adalah 5 makanan terbaik untuk mempercepat proses pemulihan:</p><ul><li><strong>Telur:</strong> Sumber protein berkualitas tinggi dengan profil asam amino lengkap.</li><li><strong>Ikan Salmon:</strong> Kaya akan asam lemak Omega-3 yang mengurangi peradangan otot.</li><li><strong>Pisang:</strong> Sumber kalium dan karbohidrat cepat serap untuk mengembalikan cadangan glikogen.</li><li><strong>Yogurt Yunani:</strong> Mengandung protein kasein yang baik untuk pemulihan jangka panjang.</li><li><strong>Bayam:</strong> Kaya akan magnesium yang membantu relaksasi otot.</li></ul>',
                'foto_cover'      => 'blog-muscle-recovery.jpg',
                'author'          => 'Dr. Fitri',
                'views'           => 230,
                'is_published'    => 1,
                'tanggal_publish' => date('Y-m-d H:i:s', strtotime('-1 day')),
                'created_at'      => date('Y-m-d H:i:s'),
                'updated_at'      => date('Y-m-d H:i:s'),
            ],
            [
                'judul'           => 'Manfaat Tidur 8 Jam Bagi Pertumbuhan Otot',
                'slug'            => 'manfaat-tidur-8-jam-bagi-pertumbuhan-otot',
                'konten'          => '<p>Banyak orang fokus pada apa yang mereka lakukan di gym, tetapi sering mengabaikan apa yang mereka lakukan di tempat tidur. Tidur adalah waktu di mana tubuh benar-benar melepaskan Hormon Pertumbuhan (HGH) yang krusial untuk regenerasi sel dan pertumbuhan otot.</p><p>Kurang tidur meningkatkan kadar kortisol (hormon stres) yang bersifat katabolik, artinya dapat memecah jaringan otot. Pastikan Anda mendapatkan tidur berkualitas selama 7-9 jam setiap malam untuk melihat hasil transformasi tubuh yang lebih cepat.</p>',
                'foto_cover'      => 'blog-sleep.jpg',
                'author'          => 'Coach Will',
                'views'           => 410,
                'is_published'    => 1,
                'tanggal_publish' => date('Y-m-d H:i:s', strtotime('-2 days')),
                'created_at'      => date('Y-m-d H:i:s'),
                'updated_at'      => date('Y-m-d H:i:s'),
            ],
            [
                'judul'           => 'Mitos vs Fakta: Apakah Karbohidrat Bikin Gemuk?',
                'slug'            => 'mitos-vs-fakta-apakah-karbohidrat-bikin-gemuk',
                'konten'          => '<p>Seringkali karbohidrat dianggap sebagai musuh utama dalam penurunan berat badan. Namun, faktanya karbohidrat adalah sumber bahan bakar utama bagi otak dan otot kita. Yang menentukan kenaikan berat badan adalah total kalori yang masuk vs kalori yang keluar, bukan sekadar jenis makronutrisinya.</p><p>Karbohidrat kompleks seperti nasi merah, gandum utuh, dan ubi jalar memberikan energi yang lebih tahan lama dan membuat kenyang lebih lama dibandingkan karbohidrat sederhana seperti gula pasir atau tepung putih.</p>',
                'foto_cover'      => 'blog-carbs.jpg',
                'author'          => 'Nutrition Expert',
                'views'           => 185,
                'is_published'    => 1,
                'tanggal_publish' => date('Y-m-d H:i:s', strtotime('-5 days')),
                'created_at'      => date('Y-m-d H:i:s'),
                'updated_at'      => date('Y-m-d H:i:s'),
            ],
            [
                'judul'           => 'Latihan Beban vs Kardio: Mana yang Lebih Baik?',
                'slug'            => 'latihan-beban-vs-kardio-mana-yang-lebih-baik',
                'konten'          => '<p>Ini adalah perdebatan abadi di dunia kebugaran. Kardio sangat bagus untuk kesehatan jantung dan membakar banyak kalori saat aktivitas berlangsung. Di sisi lain, latihan beban meningkatkan massa otot, yang berarti metabolisme tubuh Anda akan meningkat bahkan saat sedang beristirahat (Afterburn Effect).</p><p>Idealnya, program kebugaran yang seimbang harus mencakup keduanya. Latihan beban minimal 3 kali seminggu dikombinasikan dengan kardio intensitas rendah-menengah (LISS) seperti jalan cepat akan memberikan hasil yang paling berkelanjutan.</p>',
                'foto_cover'      => 'blog-weight-vs-cardio.jpg',
                'author'          => 'Coach Will',
                'views'           => 560,
                'is_published'    => 1,
                'tanggal_publish' => date('Y-m-d H:i:s', strtotime('-1 week')),
                'created_at'      => date('Y-m-d H:i:s'),
                'updated_at'      => date('Y-m-d H:i:s'),
            ],
        ];

        // Using Query Builder
        $this->db->table('blog')->insertBatch($data);
    }
}
