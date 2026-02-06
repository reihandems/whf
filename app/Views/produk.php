<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk - WHF Fitness</title>
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
            <div class="grid grid-cols-12">
                <!-- Sidebar -->
                <div class="col-span-12 md:col-span-3">
                    <div class="drawer lg:drawer-open h-full">
                        <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />
                        <div class="drawer-content flex flex-col md:items-center items-start justify-center">
                            <label for="my-drawer-3" class="btn drawer-button lg:hidden md:mx-0 md:mt-0 mt-5 mx-6">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                    <path fill-rule="evenodd" d="M3.792 2.938A49.069 49.069 0 0 1 12 2.25c2.797 0 5.54.236 8.209.688a1.857 1.857 0 0 1 1.541 1.836v1.044a3 3 0 0 1-.879 2.121l-6.182 6.182a1.5 1.5 0 0 0-.439 1.061v2.927a3 3 0 0 1-1.658 2.684l-1.757.878A.75.75 0 0 1 9.75 21v-5.818a1.5 1.5 0 0 0-.44-1.06L3.13 7.938a3 3 0 0 1-.879-2.121V4.774c0-.897.64-1.683 1.542-1.836Z" clip-rule="evenodd" />
                                </svg>
                                Kategori
                            </label>
                        </div>
                        <div class="drawer-side z-50">
                            <label for="my-drawer-3" aria-label="close sidebar" class="drawer-overlay"></label>
                            <ul class="menu bg-base-200 min-h-full w-80 p-4">
                                <li>
                                    <a href="<?= base_url('/produk') ?>" class="text-lg font-bold <?= (!$currentSubcategory) ? 'text-primary' : '' ?>">SEMUA PRODUK</a>
                                </li>
                                <?php foreach ($categoriesGrouped as $catName => $subCats): ?>
                                    <li>
                                        <h3 class="text-lg font-semibold mt-4"><?= $catName ?></h3>
                                    </li>
                                    <?php foreach ($subCats as $sub): ?>
                                        <li>
                                            <a href="<?= base_url('/produk?subcategory=' . urlencode($sub)) ?>"
                                                class="pl-8 font-semibold <?= ($currentSubcategory == $sub) ? 'text-primary' : 'text-gray-500' ?>">
                                                <?= $sub ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Content -->
                <div class="col-span-12 md:col-span-9 py-3 md:py-6 px-10">
                    <div class="breadcrumbs text-sm">
                        <ul>
                            <li class="text-gray-500 font-semibold">Produk</li>
                            <?php if ($currentSubcategory): ?>
                                <li class="font-semibold"><?= $currentSubcategory ?></li>
                            <?php else: ?>
                                <li class="font-semibold">Semua Produk</li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <h1 class="text-2xl font-bold"><?= $currentSubcategory ?: 'Semua Produk' ?></h1>

                    <?php if (empty($products)): ?>
                        <div class="flex flex-col items-center justify-center py-20 opacity-50 italic">
                            <p>Produk tidak ditemukan.</p>
                        </div>
                    <?php else: ?>
                        <div class="grid grid-cols-12 gap-8 mt-8">
                            <?php foreach ($products as $p): ?>
                                <div class="md:col-span-3 col-span-6">
                                    <a href="<?= base_url('/produk/detail/' . $p['id_produk']) ?>" class="card bg-base-300 w-full shadow-sm hover:shadow-lg hover:shadow-blue-500/50 transition-all duration-300 h-full">
                                        <figure>
                                            <img src="<?= base_url('assets/img/produk/' . ($p['foto_produk'] ?: 'default.png')) ?>" alt="<?= $p['nama_produk'] ?>" class="h-48 w-full object-cover" />
                                        </figure>
                                        <div class="card-body p-4">
                                            <p class="text-xs text-gray-400 font-semibold"><?= $p['nama_brand'] ?></p>
                                            <h2 class="card-title text-sm h-10 overflow-hidden line-clamp-2"><?= $p['nama_produk'] ?></h2>
                                            <h1 class="text-lg font-bold text-primary">Rp <?= number_format($p['harga'], 0, ',', '.') ?></h1>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
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