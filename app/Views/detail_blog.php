<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $b['judul'] ?> - WHF Fitness</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/output.css') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
</head>

<body>
    <div class="grid grid-cols-12">
        <!-- Badge -->
        <div class="col-span-12">
            <div class="bg-primary text-white px-8 md:px-12 py-3 flex flex-wrap gap-2 md:gap-0 md:justify-between justify-center text-xs font-semibold">
                <div class="md:flex flex-row gap-3 hidden">
                    <p>+6212-3456-7890</p>
                    <p>willhealthyfitness@gmail.com</p>
                </div>
                <p>Informasi Kesehatan Terbaru Setiap Hari 🥗</p>
                <div class="kanan md:flex flex-row gap-3 hidden">
                    <p>Indonesia (IDR)</p>
                </div>
            </div>
        </div>

        <!-- Navbar -->
        <div class="col-span-12">
            <?= $this->include('layout/navbar_guest') ?>
        </div>

        <!-- Content -->
        <div class="col-span-12 py-10 px-6 md:px-24">
            <a href="<?= base_url('/blog') ?>" class="btn btn-ghost btn-sm mb-8 text-xs font-bold uppercase tracking-widest">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 mr-2">
                    <path fill-rule="evenodd" d="M11.03 3.97a.75.75 0 0 1 0 1.06l-6.22 6.22H21a.75.75 0 0 1 0 1.5H4.81l6.22 6.22a.75.75 0 1 1-1.06 1.06l-7.5-7.5a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
                </svg>
                Kembali ke Artikel
            </a>

            <div class="grid grid-cols-12 gap-12">
                <!-- Main Article -->
                <article class="col-span-12 lg:col-span-8">
                    <div class="mb-8">
                        <div class="flex items-center gap-4 mb-4 text-[10px] font-black uppercase tracking-[0.3em] text-primary">
                            <p><?= date('d F Y', strtotime($b['tanggal_publish'])) ?></p>
                            <p class="opacity-20">|</p>
                            <p><?= $b['views'] ?> Views</p>
                        </div>
                        <h1 class="text-4xl md:text-5xl font-black leading-tight mb-6"><?= $b['judul'] ?></h1>
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-base-300 dynamic-logo"></div>
                            <div>
                                <p class="text-xs font-bold uppercase tracking-widest"><?= $b['author'] ?></p>
                                <p class="text-[10px] text-gray-400 font-semibold uppercase">WHF Health Expert</p>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-3xl overflow-hidden shadow-2xl mb-10 ring-1 ring-black/5">
                        <img src="<?= base_url('assets/img/blog/' . ($b['foto_cover'] ?: 'default.png')) ?>"
                            class="w-full h-auto object-cover"
                            onerror="this.src='https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp'" />
                    </div>

                    <div class="prose prose-lg max-w-none text-gray-600 leading-relaxed text-justify font-medium">
                        <?= $b['konten'] ?>
                    </div>
                </article>

                <!-- Sidebar / Related -->
                <aside class="col-span-12 lg:col-span-4">
                    <div class="sticky top-24">
                        <h2 class="text-xl font-black mb-8 border-b-2 border-primary/20 pb-4 uppercase tracking-tighter">Artikel Terkait</h2>
                        <div class="flex flex-col gap-8">
                            <?php foreach ($related as $r): ?>
                                <a href="<?= base_url('/blog/detail/' . $r['slug']) ?>" class="group flex gap-4">
                                    <div class="w-24 h-24 rounded-2xl overflow-hidden shadow-md shrink-0 ring-1 ring-black/5">
                                        <img src="<?= base_url('assets/img/blog/' . ($r['foto_cover'] ?: 'default.png')) ?>"
                                            class="w-full h-full object-cover transition-transform group-hover:scale-110"
                                            onerror="this.src='https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp'" />
                                    </div>
                                    <div class="flex flex-col justify-center">
                                        <p class="text-[8px] font-black uppercase text-primary tracking-widest mb-1 opacity-70"><?= $r['author'] ?></p>
                                        <h3 class="text-sm font-bold line-clamp-2 leading-snug group-hover:text-primary transition-colors"><?= $r['judul'] ?></h3>
                                    </div>
                                </a>
                            <?php endforeach; ?>
                        </div>

                        <div class="mt-12 p-8 bg-primary rounded-3xl text-white shadow-xl shadow-primary/20">
                            <h3 class="text-lg font-black mb-2 leading-tight">Dapatkan Update Mingguan!</h3>
                            <p class="text-xs font-semibold opacity-80 mb-6">Bergabunglah dengan 5000+ member lainnya untuk info fitness terbaru.</p>
                            <a href="<?= base_url('/register') ?>" class="btn btn-sm w-full font-bold">Daftar Sekarang</a>
                        </div>
                    </div>
                </aside>
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
                    </p>
                </aside>
                <nav>
                    <h6 class="footer-title">Bantuan</h6>
                    <a class="link link-hover">Hubungi Kami</a>
                    <a class="link link-hover">Syarat Kondisi</a>
                </nav>
            </footer>
        </div>
    </div>
</body>

</html>