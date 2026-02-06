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
            <div class="navbar bg-base-100 shadow-sm px-6 md:px-12">
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
        <div class="col-span-12 px-12 py-8">
            <a href="<?= base_url('/home') ?>" class="btn mb-5">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path fill-rule="evenodd" d="M11.03 3.97a.75.75 0 0 1 0 1.06l-6.22 6.22H21a.75.75 0 0 1 0 1.5H4.81l6.22 6.22a.75.75 0 1 1-1.06 1.06l-7.5-7.5a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
                </svg>
                Kembali
            </a>
            <div class="grid grid-cols-12 gap-8">
                <div class="col-span-12 md:col-span-6">
                    <img
                        src="<?= base_url('assets/img/produk/' . ($p['foto_produk'] ?: 'default.png')) ?>"
                        class="w-full h-[500px] object-cover rounded-xl shadow-2xl" onerror="this.src='https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp'" />
                </div>
                <div class="col-span-12 md:col-span-6">
                    <div class="breadcrumbs text-sm">
                        <ul>
                            <li class="text-gray-500 font-semibold"><?= $p['nama_kategori'] ?></li>
                            <li class="font-semibold"><?= $p['sub_kategori'] ?></li>
                        </ul>
                    </div>
                    <p class="text-gray-400 font-semibold mb-2"><?= $p['nama_brand'] ?></p>
                    <h1 class="text-4xl font-bold mb-2"><?= $p['nama_produk'] ?></h1>
                    <div class="flex flex-row items-center gap-2">
                        <div class="rating rating-sm">
                            <?php for ($i = 1; $i <= 5; $i++): ?>
                                <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" <?= ($i == round($p['rating'])) ? 'checked' : '' ?> disabled />
                            <?php endfor; ?>
                        </div>
                        <p class="text-xs font-semibold"><?= $p['jumlah_review'] ?> Reviews</p>
                    </div>
                    <p class="text-3xl font-bold mt-3 text-primary">Rp <?= number_format($p['harga'], 0, ',', '.') ?></p>
                    <div class="mt-5">
                        <p class="text-sm font-bold mb-2">Deskripsi Produk :</p>
                        <p class="text-sm text-gray-500 font-medium text-justify leading-relaxed">
                            <?= nl2br(esc($p['deskripsi'])) ?>
                        </p>
                    </div>

                    <div class="grid grid-cols-2 gap-4 mt-6">
                        <div class="bg-base-200 p-3 rounded-lg">
                            <p class="text-xs text-gray-500 font-semibold">Tersedia Stok</p>
                            <p class="text-sm font-bold"><?= $p['stok'] ?> Unit</p>
                        </div>
                        <div class="bg-base-200 p-3 rounded-lg">
                            <p class="text-xs text-gray-500 font-semibold">Berat</p>
                            <p class="text-sm font-bold"><?= $p['berat'] ?> Gram</p>
                        </div>
                        <?php if ($p['flavour']): ?>
                            <div class="bg-base-200 p-3 rounded-lg">
                                <p class="text-xs text-gray-500 font-semibold">Rasa</p>
                                <p class="text-sm font-bold"><?= $p['flavour'] ?></p>
                            </div>
                        <?php endif; ?>
                        <?php if ($p['ukuran']): ?>
                            <div class="bg-base-200 p-3 rounded-lg">
                                <p class="text-xs text-gray-500 font-semibold">Ukuran</p>
                                <p class="text-sm font-bold"><?= $p['ukuran'] ?></p>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="flex flex-row gap-3 mt-8">
                        <a href="<?= base_url('/login') ?>" class="btn btn-primary flex-1">Tambah ke Keranjang</a>
                    </div>

                    <p class="text-xs mt-8 font-semibold">Pengiriman :</p>
                    <div class="flex flex-wrap justify-start gap-6 mt-3">
                        <div class="flex flex-row gap-3 items-center">
                            <div class="avatar">
                                <div class="w-12 rounded bg-base-200 p-2">
                                    <img src="<?= base_url('assets/img/icon-kirim-1.svg') ?>" />
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <p class="text-xs text-gray-500 font-semibold">Paket</p>
                                <p class="text-sm font-semibold">Reguler</p>
                            </div>
                        </div>
                        <div class="flex flex-row gap-3 items-center">
                            <div class="avatar">
                                <div class="w-12 rounded bg-base-200 p-2">
                                    <img src="<?= base_url('assets/img/icon-kirim-2.svg') ?>" />
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <p class="text-xs text-gray-500 font-semibold">Waktu Pengiriman</p>
                                <p class="text-sm font-semibold">2 - 4 Hari Kerja</p>
                            </div>
                        </div>
                        <div class="flex flex-row gap-3 items-center">
                            <div class="avatar">
                                <div class="w-12 rounded bg-base-200 p-2">
                                    <img src="<?= base_url('assets/img/icon-kirim-3.svg') ?>" />
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <p class="text-xs text-gray-500 font-semibold">Estimasi Sampai</p>
                                <p class="text-sm font-semibold">Tergantung Lokasi</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-span-12">
                    <div class="mt-16">
                        <div class="flex flex-row items-center gap-3 mb-8">
                            <h2 class="text-2xl font-bold">Ulasan Produk</h2>
                            <span class="badge badge-primary font-bold"><?= count($reviews) ?></span>
                        </div>
    
                        <?php if (empty($reviews)): ?>
                            <div class="bg-base-200 p-10 rounded-xl text-center">
                                <p class="text-gray-500 italic">Belum ada ulasan untuk produk ini.</p>
                            </div>
                        <?php else: ?>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <?php foreach ($reviews as $r): ?>
                                    <div class="bg-base-200 p-6 rounded-xl border border-base-content/5">
                                        <div class="flex flex-row justify-between items-start mb-4">
                                            <div class="flex flex-row gap-3 items-center">
                                                <div class="avatar">
                                                    <div class="w-10 rounded-full">
                                                        <?php if ($r['foto_profil']): ?>
                                                            <img src="<?= base_url('assets/img/customer/' . $r['foto_profil']) ?>" />
                                                        <?php else: ?>
                                                            <img src="https://ui-avatars.com/api/?name=<?= urlencode($r['nama_lengkap']) ?>&background=random" />
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div>
                                                    <p class="text-sm font-bold"><?= $r['nama_lengkap'] ?></p>
                                                    <p class="text-[10px] text-gray-400 font-semibold"><?= date('d M Y', strtotime($r['created_at'])) ?></p>
                                                </div>
                                            </div>
                                            <div class="rating rating-xs">
                                                <?php for ($i = 1; $i <= 5; $i++): ?>
                                                    <input type="radio" class="mask mask-star-2 bg-orange-400" <?= ($i == $r['rating']) ? 'checked' : '' ?> disabled />
                                                <?php endfor; ?>
                                            </div>
                                        </div>
                                        <p class="text-sm text-gray-500 font-medium leading-relaxed">
                                            <?= esc($r['komentar']) ?>
                                        </p>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <div class="col-span-12">
            <footer class="footer sm:footer-horizontal bg-base-200 text-base-content py-10 px-12">
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