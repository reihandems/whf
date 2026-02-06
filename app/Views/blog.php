<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - WHF Fitness</title>
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
        <div class="col-span-12">
            <div class="grid grid-cols-6 md:grid-cols-12 md:px-12 px-8 py-8 gap-12">
                <!-- Terbaru -->
                <div class="col-span-6 md:col-span-6">
                    <h1 class="text-2xl font-bold mb-5 border-l-4 border-primary pl-4">Terbaru</h1>
                    <?php if ($latest): ?>
                        <a href="<?= base_url('/blog/detail/' . $latest['slug']) ?>" class="group block">
                            <div class="overflow-hidden rounded-2xl mb-4 shadow-xl">
                                <img src="<?= base_url('assets/img/blog/' . ($latest['foto_cover'] ?: 'default.png')) ?>"
                                    class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-105"
                                    onerror="this.src='https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp'" />
                            </div>
                            <h1 class="text-2xl font-black mb-3 group-hover:text-primary transition-colors leading-tight"><?= $latest['judul'] ?></h1>
                            <div class="flex flex-row items-center gap-3 mb-3 text-sm font-bold">
                                <p class="text-gray-400"><?= date('d M Y', strtotime($latest['tanggal_publish'])) ?></p>
                                <p class="text-gray-300">|</p>
                                <p class="text-primary font-black uppercase tracking-widest text-xs"><?= $latest['author'] ?></p>
                            </div>
                            <p class="text-sm font-medium text-gray-500 text-justify line-clamp-3">
                                <?= strip_tags($latest['konten']) ?>
                            </p>
                        </a>
                    <?php else: ?>
                        <p class="italic text-gray-400">Belum ada artikel terbaru.</p>
                    <?php endif; ?>
                </div>

                <!-- Paling Banyak Dibaca -->
                <div class="col-span-6 md:col-span-6">
                    <h1 class="text-2xl font-bold mb-5 border-l-4 border-secondary pl-4">Paling Banyak Dibaca</h1>
                    <div class="flex flex-col gap-6">
                        <?php if (empty($mostRead)): ?>
                            <p class="italic text-gray-400">Belum ada artikel populer.</p>
                        <?php else: ?>
                            <?php foreach ($mostRead as $m): ?>
                                <a href="<?= base_url('/blog/detail/' . $m['slug']) ?>" class="group flex flex-col md:flex-row gap-5 items-start">
                                    <div class="w-full md:w-48 h-32 overflow-hidden rounded-xl shadow-lg shrink-0">
                                        <img src="<?= base_url('assets/img/blog/' . ($m['foto_cover'] ?: 'default.png')) ?>"
                                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                                            onerror="this.src='https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp'" />
                                    </div>
                                    <div class="flex flex-col gap-1">
                                        <h1 class="text-lg font-bold group-hover:text-secondary transition-colors line-clamp-2"><?= $m['judul'] ?></h1>
                                        <div class="flex flex-row items-center gap-2 text-[10px] font-bold uppercase tracking-wider">
                                            <p class="text-gray-400"><?= date('d M Y', strtotime($m['tanggal_publish'])) ?></p>
                                            <p class="text-gray-300">|</p>
                                            <p class="text-secondary"><?= $m['author'] ?></p>
                                        </div>
                                    </div>
                                </a>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- Artikel Lainnya -->
            <div class="grid grid-cols-12 gap-8 px-8 md:px-12 pb-12">
                <div class="col-span-12">
                    <h1 class="text-2xl font-bold mb-5 border-l-4 border-gray-400 pl-4">Artikel Lainnya</h1>
                </div>

                <?php if (empty($others)): ?>
                    <div class="col-span-12 text-center py-10 opacity-50 italic">
                        <p>Tidak ada artikel lainnya.</p>
                    </div>
                <?php else: ?>
                    <?php foreach ($others as $o): ?>
                        <div class="md:col-span-3 col-span-12">
                            <a href="<?= base_url('/blog/detail/' . $o['slug']) ?>" class="card bg-base-300 w-full shadow-sm hover:shadow-xl transition-all duration-300 h-full border border-base-content/5">
                                <figure class="h-48 overflow-hidden">
                                    <img src="<?= base_url('assets/img/blog/' . ($o['foto_cover'] ?: 'default.png')) ?>"
                                        alt="<?= $o['judul'] ?>"
                                        class="w-full h-full object-cover"
                                        onerror="this.src='https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp'" />
                                </figure>
                                <div class="card-body p-5">
                                    <p class="text-[10px] font-black uppercase tracking-widest text-primary"><?= $o['author'] ?></p>
                                    <p class="font-bold text-sm line-clamp-3 mb-2"><?= $o['judul'] ?></p>
                                    <p class="text-[10px] font-bold text-gray-400"><?= date('d M Y', strtotime($o['tanggal_publish'])) ?></p>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
        <!-- Content -->

        <div class="col-span-12">
            <footer class="footer sm:footer-horizontal bg-base-200 text-base-content py-10 px-12">
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
    </div>
</body>

</html>