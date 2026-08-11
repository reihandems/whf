<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pencarian: "<?= esc($keyword) ?>" - WHF Fitness</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/output.css') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
</head>

<body class="bg-base-100 font-sans">
    <div class="grid grid-cols-12">
        <!-- Badge -->
        <div class="col-span-12">
            <div class="bg-primary text-white px-8 md:px-12 py-3 flex flex-wrap gap-2 md:gap-0 md:justify-between justify-center">
                <div class="md:flex flex-row gap-3 hidden">
                    <p class="text-xs font-semibold">+6212-3456-7890</p>
                    <p class="text-xs font-semibold">willhealthyfitness@gmail.com</p>
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
            <?= $this->include('layout/navbar_guest') ?>
        </div>

        <!-- Content -->
        <div class="col-span-12 py-8 px-4 md:px-12 max-w-7xl mx-auto w-full">
            <div class="breadcrumbs text-sm">
                <ul>
                    <li><a href="<?= base_url('/') ?>" class="text-gray-500 font-semibold">Beranda</a></li>
                    <li class="font-semibold text-gray-500">Pencarian</li>
                    <li class="font-bold">"<?= esc($keyword) ?>"</li>
                </ul>
            </div>

            <div class="mt-6 flex flex-col md:flex-row md:items-baseline md:justify-between gap-2 border-b border-base-content/5 pb-4">
                <h1 class="text-3xl font-extrabold">Hasil Pencarian</h1>
                <p class="text-sm font-semibold text-base-content/60">Ditemukan <span class="text-primary font-bold"><?= count($products) ?></span> produk untuk kata kunci <span class="italic font-bold">"<?= esc($keyword) ?>"</span></p>
            </div>

            <?php if (empty($products)): ?>
                <div class="flex flex-col items-center justify-center py-20 text-center space-y-4">
                    <div class="w-20 h-20 rounded-full bg-base-200 flex items-center justify-center text-base-content/40">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75l-2.489-2.489m0 0a3.375 3.375 0 10-4.773-4.773 3.375 3.375 0 004.774 4.774zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-xl font-bold">Produk Tidak Ditemukan</h2>
                        <p class="text-sm text-base-content/50 mt-1 max-w-md mx-auto">Kami tidak dapat menemukan produk yang cocok dengan pencarian Anda. Coba periksa ejaan Anda atau gunakan kata kunci umum lainnya.</p>
                    </div>
                    <a href="<?= base_url('/produk') ?>" class="btn btn-primary font-bold">Lihat Semua Produk</a>
                </div>
            <?php else: ?>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-8">
                    <?php foreach ($products as $p): ?>
                        <a href="<?= base_url('/produk/detail/' . $p['id_produk']) ?>" class="group card bg-base-100 border border-base-content/5 hover:border-primary/20 shadow-sm hover:shadow-md transition-all duration-300 overflow-hidden">
                            <figure class="relative overflow-hidden h-40 md:h-48 bg-base-200">
                                <img src="<?= base_url('assets/img/produk/' . ($p['foto_produk'] ?: 'default.png')) ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" onerror="this.src='https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp'" />
                            </figure>
                            <div class="card-body p-4 justify-between">
                                <div>
                                    <p class="text-[10px] font-bold text-primary/75 uppercase tracking-wide"><?= $rp['nama_brand'] ?? $p['nama_brand'] ?></p>
                                    <h4 class="font-bold text-sm text-base-content line-clamp-1 group-hover:text-primary transition-colors duration-200 mt-1"><?= $p['nama_produk'] ?></h4>
                                </div>
                                <div class="mt-3 pt-2 border-t border-base-content/5 flex items-center justify-between">
                                    <span class="font-black text-sm text-primary">Rp <?= number_format($p['harga'], 0, ',', '.') ?></span>
                                    <div class="flex items-center gap-0.5 text-xs text-orange-400 font-bold">
                                        ★ <span class="text-base-content/70"><?= number_format($p['rating'], 1) ?></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>

        <!-- Footer -->
        <div class="col-span-12">
            <footer class="footer sm:footer-horizontal bg-base-200 text-base-content py-10 px-4 md:px-12 w-full mt-20">
                <aside>
                    <div class="avatar me-3">
                        <div class="w-14 h-14 rounded-full dynamic-logo"></div>
                    </div>
                    <p class="text-xs text-gray-500 font-semibold">
                        Jl. Kramat Raya No.7-9 4, RT.4/RW.2, Kramat, Kec. Senen,<br> Kota Jakarta Pusat, DKI Jakarta 10450.
                        <br /><br>+6212-3456-7890<br><br>willhealthyfitness@gmail.com
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
    </div>
</body>

</html>
