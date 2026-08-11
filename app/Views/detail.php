<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $p['nama_produk'] ?> - WHF Fitness</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/output.css') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
</head>

<body>
    <div class="grid grid-cols-12">
        <!-- Badge -->
        <div class="col-span-12">
            <div class="bg-primary text-white px-8 md:px-12 py-3 flex flex-wrap gap-2 md:gap-0 md:justify-between justify-center">
                <div class="md:flex flex-row gap-3 hidden">
                    <p class="text-xs font-semibold">
                        +6212-3456-7890
                    </p>
                    <p class="text-xs font-semibold">
                        willhealthyfitness@gmail.com
                    </p>
                </div>
                <div class="tengah">
                    <p class="text-xs font-medium">Buat Akun Untuk Mendapatkan Diskon 10% : <span class="font-black"><a href="<?= base_url('/register') ?>" class="hover:underline">Daftar</a></span> 👈</p>
                </div>
                <div class="kanan md:flex flex-row gap-3 hidden">
                    <p class="text-xs font-semibold">Katalog Produk</p>
                    <p class="text-xs font-semibold">Indonesia (IDR)</p>
                </div>
            </div>
        </div>
        <!-- Navbar -->
        <div class="col-span-12">
            <div class="navbar bg-base-100 shadow-sm px-2 md:px-12">
                <div class="navbar-start">
                    <div class="dropdown">
                        <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                            </svg>
                        </div>
                        <ul
                            tabindex="-1"
                            class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                            <li>
                                <a href="<?= base_url('/home') ?>" class="text-xs <?= ($menu == 'home') ? 'hover:underline text-primary font-bold' : 'text-xs font-semibold' ?>">HOME</a>
                            </li>
                            <li>
                                <a href="<?= base_url('/produk') ?>" class="text-xs <?= ($menu == 'produk') ? 'hover:underline text-primary font-bold' : 'text-xs font-semibold' ?>">PRODUK</a>
                            </li>
                            <li>
                                <a href="<?= base_url('/trainer') ?>" class="text-xs <?= ($menu == 'trainer') ? 'hover:underline text-primary font-bold' : 'text-xs font-semibold' ?>">TRAINER</a>
                            </li>
                            <li>
                                <a href="<?= base_url('/blog') ?>" class="text-xs <?= ($menu == 'blog') ? 'hover:underline text-primary font-bold' : 'text-xs font-semibold' ?>">BLOG</a>
                            </li>
                            <li>
                                <a href="<?= base_url('/faq') ?>" class="text-xs <?= ($menu == 'faq') ? 'hover:underline text-primary font-bold' : 'text-xs font-semibold' ?>">FAQ</a>
                            </li>
                        </ul>
                    </div>
                    <div class="avatar me-3">
                        <div class="w-14 h-14 rounded-full dynamic-logo"></div>
                    </div>
                    <p class="text-3xl me-3 md:flex hidden">|</p>
                    <ul class="menu menu-horizontal px-1 md:flex hidden">
                        <li>
                            <a href="<?= base_url('/home') ?>" class="text-xs <?= ($menu == 'home') ? 'hover:underline text-primary font-bold' : 'text-xs font-semibold' ?>">HOME</a>
                        </li>
                        <li>
                            <a href="<?= base_url('/produk') ?>" class="text-xs <?= ($menu == 'produk') ? 'hover:underline text-primary font-bold' : 'text-xs font-semibold' ?>">PRODUK</a>
                        </li>
                        <li>
                            <a href="<?= base_url('/trainer') ?>" class="text-xs <?= ($menu == 'trainer') ? 'hover:underline text-primary font-bold' : 'text-xs font-semibold' ?>" class="text-xs font-semibold">TRAINER</a>
                        </li>
                        <li>
                            <a href="<?= base_url('/blog') ?>" class="text-xs <?= ($menu == 'blog') ? 'hover:underline text-primary font-bold' : 'text-xs font-semibold' ?>" class="text-xs font-semibold">BLOG</a>
                        </li>
                        <li>
                            <a href="<?= base_url('/faq') ?>" class="text-xs <?= ($menu == 'faq') ? 'hover:underline text-primary font-bold' : 'text-xs font-semibold' ?>" class="text-xs font-semibold">FAQ</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar-end">
                    <label class="input input-sm rounded-2xl w-40">
                        <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <g
                                stroke-linejoin="round"
                                stroke-linecap="round"
                                stroke-width="2.5"
                                fill="none"
                                stroke="currentColor">
                                <circle cx="11" cy="11" r="8"></circle>
                                <path d="m21 21-4.3-4.3"></path>
                            </g>
                        </svg>
                        <input type="search" required placeholder="Search" />
                    </label>
                    <a href="<?= base_url('/login') ?>" class="mx-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
                        </svg>
                    </a>
                    <a href="<?= base_url('/login') ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <!-- Content -->
        <div class="col-span-12 px-4 md:px-12 py-8 max-w-7xl mx-auto">
            <a href="<?= base_url('/produk') ?>" class="btn btn-ghost hover:bg-base-200 mb-6 gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                    <path fill-rule="evenodd" d="M11.03 3.97a.75.75 0 0 1 0 1.06l-6.22 6.22H21a.75.75 0 0 1 0 1.5H4.81l6.22 6.22a.75.75 0 1 1-1.06 1.06l-7.5-7.5a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
                </svg>
                Kembali ke Produk
            </a>
            <div class="grid grid-cols-12 gap-8 lg:gap-12">
                <!-- Product Image -->
                <div class="col-span-12 md:col-span-6 lg:col-span-5">
                    <div class="sticky top-24">
                        <img
                            src="<?= base_url('assets/img/produk/' . ($p['foto_produk'] ?: 'default.png')) ?>"
                            class="w-full h-[450px] lg:h-[520px] object-cover rounded-2xl shadow-xl border border-base-content/5" 
                            onerror="this.src=<?= base_url('assets/img/produk/default.png') ?>" />
                    </div>
                </div>

                <!-- Product Specs & Details -->
                <div class="col-span-12 md:col-span-6 lg:col-span-7 space-y-6">
                    <div>
                        <div class="flex flex-wrap items-center gap-2 mb-3">
                            <span class="badge badge-primary font-bold px-3 py-2 text-xs"><?= $p['nama_kategori'] ?></span>
                            <span class="badge badge-outline font-semibold px-3 py-2 text-xs"><?= $p['sub_kategori'] ?></span>
                        </div>
                        <p class="text-sm font-semibold text-primary/80 tracking-wide uppercase"><?= $p['nama_brand'] ?></p>
                        <h1 class="text-3xl lg:text-4xl font-extrabold text-base-content mt-1 leading-tight"><?= $p['nama_produk'] ?></h1>
                        
                        <div class="flex items-center gap-3 mt-3">
                            <div class="flex items-center gap-1">
                                <div class="rating rating-sm">
                                    <?php for ($i = 1; $i <= 5; $i++): ?>
                                        <input type="radio" class="mask mask-star-2 bg-orange-400" <?= ($i == round($p['rating'])) ? 'checked' : '' ?> disabled />
                                    <?php endfor; ?>
                                </div>
                                <span class="text-sm font-bold ml-1"><?= number_format($p['rating'], 1) ?></span>
                            </div>
                            <span class="text-base-content/30">|</span>
                            <p class="text-sm text-base-content/75 font-medium"><?= $p['jumlah_review'] ?> Ulasan</p>
                        </div>

                        <div class="mt-4 p-4 bg-primary/5 rounded-2xl border border-primary/10">
                            <p class="text-[11px] font-semibold text-primary uppercase tracking-wider">Harga Terbaik</p>
                            <p class="text-3xl lg:text-4xl font-black text-primary mt-1">Rp <?= number_format($p['harga'], 0, ',', '.') ?></p>
                        </div>
                    </div>

                    <!-- Tabbed Product Information (Description, How to Use, Nutrition Facts) -->
                    <div class="card bg-base-100 border border-base-content/5 shadow-sm overflow-hidden">
                        <div role="tablist" class="tabs tabs-lifted bg-base-200">
                            <input type="radio" name="product_tabs" role="tab" class="tab font-bold" aria-label="Deskripsi" checked />
                            <div role="tabpanel" class="tab-content bg-base-100 border-base-300 p-6">
                                <div class="text-sm text-base-content/85 leading-relaxed text-justify whitespace-pre-line">
                                    <?= esc($p['deskripsi']) ?>
                                </div>
                            </div>

                            <input type="radio" name="product_tabs" role="tab" class="tab font-bold" aria-label="Cara Pakai" />
                            <div role="tabpanel" class="tab-content bg-base-100 border-base-300 p-6">
                                <div class="text-sm text-base-content/85 leading-relaxed text-justify whitespace-pre-line">
                                    <?= $p['cara_pemakaian'] ? esc($p['cara_pemakaian']) : 'Informasi cara pemakaian tidak tersedia untuk produk ini. Harap ikuti petunjuk umum penggunaan suplemen fitness.' ?>
                                </div>
                            </div>

                            <input type="radio" name="product_tabs" role="tab" class="tab font-bold" aria-label="Kandungan Nutrisi" />
                            <div role="tabpanel" class="tab-content bg-base-100 border-base-300 p-6">
                                <div class="text-sm text-base-content/85 leading-relaxed text-justify whitespace-pre-line">
                                    <?= $p['kandungan_nutrisi'] ? esc($p['kandungan_nutrisi']) : 'Kandungan nutrisi lengkap belum dicantumkan. Anda bisa mendaftar akun untuk berkonsultasi kepada trainer kami untuk panduan nutrisi harian.' ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Specs Parameters Grid -->
                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-3">
                        <div class="bg-base-200/50 border border-base-content/5 p-3 rounded-xl flex items-center gap-3">
                            <div class="p-2 bg-primary/10 rounded-lg text-primary shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-[10px] text-base-content/50 font-semibold uppercase">Stok Tersedia</p>
                                <p class="text-xs font-extrabold"><?= $p['stok'] ?> Unit</p>
                            </div>
                        </div>
                        <div class="bg-base-200/50 border border-base-content/5 p-3 rounded-xl flex items-center gap-3">
                            <div class="p-2 bg-primary/10 rounded-lg text-primary shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v18m0-18h4.5a3 3 0 013 3v0a3 3 0 01-3 3H12m0-6H7.5a3 3 0 00-3 3v0a3 3 0 003 3H12m0 0h4.5a3 3 0 013 3v0a3 3 0 01-3 3H12m0 0H7.5a3 3 0 00-3 3v0a3 3 0 003 3H12" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-[10px] text-base-content/50 font-semibold uppercase">Berat Bersih</p>
                                <p class="text-xs font-extrabold"><?= $p['berat'] ?> Gram</p>
                            </div>
                        </div>
                        <div class="bg-base-200/50 border border-base-content/5 p-3 rounded-xl flex items-center gap-3">
                            <div class="p-2 bg-primary/10 rounded-lg text-primary shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-[10px] text-base-content/50 font-semibold uppercase">Varian Rasa</p>
                                <p class="text-xs font-extrabold"><?= $p['flavour'] ?: 'Plain' ?></p>
                            </div>
                        </div>
                        <div class="bg-base-200/50 border border-base-content/5 p-3 rounded-xl flex items-center gap-3">
                            <div class="p-2 bg-primary/10 rounded-lg text-primary shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v16.5m0-16.5L12 12m-8.25-8.25L20.25 12M20.25 12v8.25m0-8.25L12 12m8.25 8.25H3.75" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-[10px] text-base-content/50 font-semibold uppercase">Ukuran</p>
                                <p class="text-xs font-extrabold"><?= $p['ukuran'] ?: '-' ?></p>
                            </div>
                        </div>
                    </div>

                    <!-- Add to Cart Widget (Redirect to Login for Guest) -->
                    <div class="p-5 bg-base-200 rounded-2xl border border-base-content/5">
                        <div class="flex flex-row gap-4 items-center">
                            <a href="<?= base_url('/login') ?>" class="btn btn-primary flex-1 font-bold shadow-lg hover:shadow-primary/30">Login Untuk Belanja</a>
                        </div>
                    </div>

                    <!-- Delivery Information Card -->
                    <div class="bg-base-100 border border-base-content/5 rounded-2xl p-4">
                        <p class="text-xs font-bold text-base-content mb-3 uppercase tracking-wider">Metode Pengiriman</p>
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-xl bg-base-200 flex items-center justify-center text-primary shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124l-.317-5.136a5.125 5.125 0 00-4.82-4.717h-2.227a.75.75 0 00-.75.75v5.25c0 .414-.336.75-.75.75h-9" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-[10px] text-base-content/50 font-bold uppercase">Paket</p>
                                    <p class="text-xs font-bold">Reguler</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-xl bg-base-200 flex items-center justify-center text-primary shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-[10px] text-base-content/50 font-bold uppercase">Waktu Kirim</p>
                                    <p class="text-xs font-bold">2 - 4 Hari Kerja</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-xl bg-base-200 flex items-center justify-center text-primary shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-[10px] text-base-content/50 font-bold uppercase">Estimasi</p>
                                    <p class="text-xs font-bold">Tergantung Lokasi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Rating Breakdown & Reviews -->
                <div class="col-span-12 border-t border-base-content/10 pt-12 mt-8">
                    <h2 class="text-2xl font-black mb-8 text-base-content flex items-center gap-3">
                        Ulasan Produk
                        <span class="badge badge-primary font-extrabold text-sm py-3 px-3"><?= count($reviews) ?></span>
                    </h2>

                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                        <!-- Rating Breakdown Card -->
                        <div class="lg:col-span-4 bg-base-200/50 border border-base-content/5 p-6 rounded-2xl">
                            <p class="text-sm font-bold text-base-content/70">Rata-rata Rating</p>
                            <div class="flex items-baseline gap-2 mt-2">
                                <span class="text-5xl font-black text-base-content"><?= number_format($p['rating'], 1) ?></span>
                                <span class="text-base-content/40 text-sm">/ 5</span>
                            </div>
                            <div class="rating rating-sm mt-2">
                                <?php for ($i = 1; $i <= 5; $i++): ?>
                                    <input type="radio" class="mask mask-star-2 bg-orange-400" <?= ($i == round($p['rating'])) ? 'checked' : '' ?> disabled />
                                <?php endfor; ?>
                            </div>

                            <!-- Progress bars for distribution -->
                            <div class="space-y-2 mt-6">
                                <?php 
                                $stars = [5, 4, 3, 2, 1];
                                foreach ($stars as $s): 
                                    $percentage = 0;
                                    if (count($reviews) > 0) {
                                        $matchCount = 0;
                                        foreach($reviews as $rev) {
                                            if ($rev['rating'] == $s) $matchCount++;
                                        }
                                        $percentage = ($matchCount / count($reviews)) * 100;
                                    } else {
                                        $percentage = ($s == round($p['rating'])) ? 100 : 0;
                                    }
                                ?>
                                <div class="flex items-center gap-3 text-xs">
                                    <span class="w-3 font-bold"><?= $s ?></span>
                                    <progress class="progress progress-primary flex-1 h-2" value="<?= $percentage ?>" max="100"></progress>
                                    <span class="w-8 text-right font-medium text-base-content/50"><?= round($percentage) ?>%</span>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <!-- Review Items -->
                        <div class="lg:col-span-8 space-y-4">
                            <?php if (empty($reviews)): ?>
                                <div class="bg-base-200/30 p-10 rounded-2xl text-center border border-dashed border-base-content/10">
                                    <p class="text-base-content/50 italic font-semibold text-sm">Belum ada ulasan untuk produk ini.</p>
                                </div>
                            <?php else: ?>
                                <div class="grid grid-cols-1 gap-4">
                                    <?php foreach ($reviews as $r): ?>
                                        <div class="bg-base-100 p-6 rounded-2xl border border-base-content/5 shadow-sm space-y-3">
                                            <div class="flex flex-row justify-between items-start">
                                                <div class="flex flex-row gap-3 items-center">
                                                    <div class="avatar">
                                                        <div class="w-10 h-10 rounded-full">
                                                            <?php if ($r['foto_profil']): ?>
                                                                <img src="<?= base_url('assets/img/customer/' . $r['foto_profil']) ?>" />
                                                            <?php else: ?>
                                                                <img src="https://ui-avatars.com/api/?name=<?= urlencode($r['nama_lengkap']) ?>&background=random" />
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <p class="text-sm font-bold text-base-content"><?= $r['nama_lengkap'] ?></p>
                                                        <p class="text-[10px] text-base-content/40 font-semibold"><?= date('d M Y', strtotime($r['created_at'])) ?></p>
                                                    </div>
                                                </div>
                                                <div class="rating rating-xs">
                                                    <?php for ($i = 1; $i <= 5; $i++): ?>
                                                        <input type="radio" class="mask mask-star-2 bg-orange-400" <?= ($i == $r['rating']) ? 'checked' : '' ?> disabled />
                                                    <?php endfor; ?>
                                                </div>
                                            </div>
                                            <p class="text-sm text-base-content/75 font-medium leading-relaxed">
                                                <?= esc($r['komentar']) ?>
                                            </p>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <!-- Related Products Section -->
                <?php if (!empty($relatedProducts)): ?>
                    <div class="col-span-12 border-t border-base-content/10 pt-12 mt-12">
                        <h3 class="text-2xl font-black mb-6 text-base-content">Produk Terkait</h3>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 lg:gap-6">
                            <?php foreach ($relatedProducts as $rp): ?>
                                <a href="<?= base_url('/produk/detail/' . $rp['id_produk']) ?>" class="group card bg-base-100 border border-base-content/5 hover:border-primary/20 shadow-sm hover:shadow-md transition-all duration-300 overflow-hidden">
                                    <figure class="relative overflow-hidden h-40 md:h-48 bg-base-200">
                                        <img src="<?= base_url('assets/img/produk/' . ($rp['foto_produk'] ?: 'default.png')) ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" onerror="this.src='https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp'" />
                                    </figure>
                                    <div class="card-body p-4 justify-between">
                                        <div>
                                            <p class="text-[10px] font-bold text-primary/75 uppercase tracking-wide"><?= $rp['nama_brand'] ?></p>
                                            <h4 class="font-bold text-sm text-base-content line-clamp-1 group-hover:text-primary transition-colors duration-200 mt-1"><?= $rp['nama_produk'] ?></h4>
                                        </div>
                                        <div class="mt-3 pt-2 border-t border-base-content/5 flex items-center justify-between">
                                            <span class="font-black text-sm text-primary">Rp <?= number_format($rp['harga'], 0, ',', '.') ?></span>
                                            <div class="flex items-center gap-0.5 text-xs text-orange-400 font-bold">
                                                ★ <span class="text-base-content/70"><?= number_format($rp['rating'], 1) ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <!-- Footer -->
        <div class="col-span-12">
            <footer class="footer sm:footer-horizontal bg-base-200 text-base-content py-10 px-4 md:px-12">
                <aside>
                    <div class="avatar me-3">
                        <div class="w-14 h-14 rounded-full dynamic-logo"></div>
                    </div>
                    <p class="text-xs text-gray-500 font-semibold">
                        Jl. Kramat Raya No.7-9 4, RT.4/RW.2, Kramat, Kec. Senen,<br> Kota Jakarta Pusat, DKI Jakarta 10450.
                        <br /><br>
                        +6212-3456-7890
                        <br><br>
                        willhealthyfitness@gmail.com
                    </p>
                </aside>
                <nav>
                    <h6 class="footer-title">Kategori</h6>
                    <a class="link link-hover">Suplemen</a>
                    <a class="link link-hover">Pre-Workout</a>
                    <a class="link link-hover">Recovery</a>
                    <a class="link link-hover">Vitamin</a>
                    <a class="link link-hover">Fat Burner</a>
                    <a class="link link-hover">Perlengkapan</a>
                </nav>
                <nav>
                    <h6 class="footer-title">Bantuan</h6>
                    <a class="link link-hover">Hubungi Kami</a>
                    <a class="link link-hover">Syarat dan Ketentuan</a>
                    <a class="link link-hover">Kebijakan Privasi</a>
                </nav>
                <nav>
                    <h6 class="footer-title">Merek</h6>
                    <a class="link link-hover">Optimum Nutrion</a>
                    <a class="link link-hover">Evolene</a>
                    <a class="link link-hover">Yava Labs</a>
                    <a class="link link-hover">Provus</a>
                    <a class="link link-hover">EHP Labs</a>
                </nav>
            </footer>
        </div>
        <div class="col-span-12">
            <footer class="footer sm:footer-horizontal footer-center bg-base-300 text-base-content p-12">
                <aside>
                    <div class="flex flex-wrap gap-12 items-center justify-center">
                        <div class="h-6 w-24 dynamic-qris"></div>
                        <img src="<?= base_url('assets/img/dana.svg') ?>" class="h-6" />
                        <div class="h-6 w-24 dynamic-gopay"></div>
                        <img src="<?= base_url('assets/img/bca.svg') ?>" class="h-6" />
                        <img src="<?= base_url('assets/img/mandiri.svg') ?>" class="h-6" />
                        <img src="<?= base_url('assets/img/bri.svg') ?>" class="h-6" />
                        <img src="<?= base_url('assets/img/bni.svg') ?>" class="h-6" />
                        <img src="<?= base_url('assets/img/shopee.svg') ?>" class="h-6" />
                    </div>
                    <p class="mt-5 text-gray-500">Copyright © <?= date('Y') ?> - All right reserved by Will Healthy Fitness</p>
                </aside>
            </footer>
        </div>

        <?php if (session()->getFlashdata('success')) : ?>
            <div class="toast toast-top toast-end mt-20">
                <div class="alert alert-success">
                    <span class="text-white font-semibold"><?= session()->getFlashdata('success') ?></span>
                </div>
            </div>
            <script>
                setTimeout(() => {
                    document.querySelector('.toast').remove();
                }, 3000);
            </script>
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')) : ?>
            <div class="toast toast-top toast-end mt-20">
                <div class="alert alert-error">
                    <span class="text-white font-semibold"><?= session()->getFlashdata('error') ?></span>
                </div>
            </div>
            <script>
                setTimeout(() => {
                    document.querySelector('.toast').remove();
                }, 3000);
            </script>
        <?php endif; ?>
</body>

</html>