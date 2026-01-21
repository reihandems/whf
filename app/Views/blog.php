<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - WHF Fitness</title>
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
                    <p class="text-xs font-medium">Buat Akun Untuk Mendapatkan Diskon 10% : <span class="font-black"><a href="#" class="hover:underline">Daftar</a></span> 👈</p>
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
                                <a href="#" class="text-xs font-semibold hover:underline text-primary">HOME</a>
                            </li>
                            <li>
                                <a href="#" class="text-xs font-semibold">PRODUK</a>
                            </li>
                            <li>
                                <a href="#" class="text-xs font-semibold">TRAINER</a>
                            </li>
                            <li>
                                <a href="#" class="text-xs font-semibold">BLOG</a>
                            </li>
                            <li>
                                <a href="#" class="text-xs font-semibold">FAQ</a>
                            </li>
                        </ul>
                    </div>
                    <div class="avatar me-3">
                        <div class="w-14 h-14 rounded-full dynamic-logo"></div>
                    </div>
                    <p class="text-3xl me-3 md:flex hidden">|</p>
                    <ul class="menu menu-horizontal px-1 md:flex hidden">
                        <li>
                            <a href="#" class="text-xs font-semibold hover:underline text-primary">HOME</a>
                        </li>
                        <li>
                            <a href="#" class="text-xs font-semibold">PRODUK</a>
                        </li>
                        <li>
                            <a href="#" class="text-xs font-semibold">TRAINER</a>
                        </li>
                        <li>
                            <a href="#" class="text-xs font-semibold">BLOG</a>
                        </li>
                        <li>
                            <a href="#" class="text-xs font-semibold">FAQ</a>
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
                    <a href="#" class="mx-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
                        </svg>
                    </a>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <!-- Content -->
        <div class="col-span-12">
            <div class="grid grid-cols-6 md:grid-cols-12 md:px-12 px-8 py-8 gap-12">
                <div class="col-span-6 md:col-span-6">
                    <h1 class="text-2xl font-semibold mb-3">Terbaru</h1>
                    <a href="#" class="flex flex-wrap gap-3">
                        <img
                            src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                            class="w-auto md:w-full rounded-xl shadow-2xl" />
                        <h1 class="md:text-xl font-bold">Makanan Sehat Setelah Gym: Apa yang Harus Dimakan untuk Hasil Maksimal?</h1>
                        <div class="flex flex-row items-center gap-3">
                            <p class="text-sm font-semibold">2 November 2026</p>
                            <p class="text-lg font-semibold">|</p>
                            <p class="text-primary">Author</p>
                        </div>
                        <p class="text-xs font-semibold text-gray-500 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sed tempor turpis, sed consequat elit. Ut congue interdum orci, eget convallis sapien finibus id. Donec quis posuere magna. Suspendisse ultrices, ligula vel lacinia tincidunt, elit lacus condimentum purus, non mollis magna arcu id neque.</p>
                    </a>
                </div>
                <div class="col-span-6 md:col-span-6">
                    <h1 class="text-2xl font-semibold mb-3">Paling Banyak Dibaca</h1>
                    <div class="flex flex-col gap-5">
                        <a href="#" class="flex flex-col md:flex-row gap-5 items-center">
                            <img
                                src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                                class="w-full md:w-48 rounded-xl shadow-2xl" />
                            <div class="flex flex-col gap-1">
                                <h1 class="md:text-lg font-semibold">5 Latihan Gym Terbaik untuk Membentuk Otot Dada dengan Cepat</h1>
                                <div class="flex flex-row items-center gap-2 ">
                                    <p class="text-xs font-semibold">2 November 2026</p>
                                    <p class="text-lg font-semibold">|</p>
                                    <p class="text-xs text-primary">Author</p>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="flex flex-col md:flex-row gap-5 items-center">
                            <img
                                src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                                class="w-full md:w-48 rounded-xl shadow-2xl" />
                            <div class="flex flex-col gap-1">
                                <h1 class="md:text-lg font-semibold">5 Latihan Gym Terbaik untuk Membentuk Otot Dada dengan Cepat</h1>
                                <div class="flex flex-row items-center gap-2 ">
                                    <p class="text-xs font-semibold">2 November 2026</p>
                                    <p class="text-lg font-semibold">|</p>
                                    <p class="text-xs text-primary">Author</p>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="flex flex-col md:flex-row gap-5 items-center">
                            <img
                                src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                                class="w-full md:w-48 rounded-xl shadow-2xl" />
                            <div class="flex flex-col gap-1">
                                <h1 class="md:text-lg font-semibold">5 Latihan Gym Terbaik untuk Membentuk Otot Dada dengan Cepat</h1>
                                <div class="flex flex-row items-center gap-2 ">
                                    <p class="text-xs font-semibold">2 November 2026</p>
                                    <p class="text-lg font-semibold">|</p>
                                    <p class="text-xs text-primary">Author</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-12 gap-8 px-8 md:px-12 pb-8">
                <div class="col-span-12">
                    <h1 class="text-2xl font-semibold mb-3">Artikel Lainnya</h1>
                </div>
                <div class="md:col-span-3 col-span-6">
                    <a href="#" class="card bg-base-100 w-full shadow-sm">
                        <figure>
                            <img
                                src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                                alt="Shoes" class="h-48" />
                        </figure>
                        <div class="card-body">
                            <p class="text-xs font-semibold text-primary">Author</p>
                            <p class="font-semibold text-justify text-base">Cara Menjaga Konsistensi Workout: Tips agar Tidak Mudah Menyerah di Tengah Jalan</p>
                            <p class="text-xs font-semibold">2 November 2026</p>
                        </div>
                    </a>
                </div>
                <div class="md:col-span-3 col-span-6">
                    <a href="#" class="card bg-base-100 w-full shadow-sm">
                        <figure>
                            <img
                                src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                                alt="Shoes" class="h-48" />
                        </figure>
                        <div class="card-body">
                            <p class="text-xs font-semibold text-primary">Author</p>
                            <p class="font-semibold text-justify text-base">Cara Menjaga Konsistensi Workout: Tips agar Tidak Mudah Menyerah di Tengah Jalan</p>
                            <p class="text-xs font-semibold">2 November 2026</p>
                        </div>
                    </a>
                </div>
                <div class="md:col-span-3 col-span-6">
                    <a href="#" class="card bg-base-100 w-full shadow-sm">
                        <figure>
                            <img
                                src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                                alt="Shoes" class="h-48" />
                        </figure>
                        <div class="card-body">
                            <p class="text-xs font-semibold text-primary">Author</p>
                            <p class="font-semibold text-justify text-base">Cara Menjaga Konsistensi Workout: Tips agar Tidak Mudah Menyerah di Tengah Jalan</p>
                            <p class="text-xs font-semibold">2 November 2026</p>
                        </div>
                    </a>
                </div>
                <div class="md:col-span-3 col-span-6">
                    <a href="#" class="card bg-base-100 w-full shadow-sm">
                        <figure>
                            <img
                                src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                                alt="Shoes" class="h-48" />
                        </figure>
                        <div class="card-body">
                            <p class="text-xs font-semibold text-primary">Author</p>
                            <p class="font-semibold text-justify text-base">Cara Menjaga Konsistensi Workout: Tips agar Tidak Mudah Menyerah di Tengah Jalan</p>
                            <p class="text-xs font-semibold">2 November 2026</p>
                        </div>
                    </a>
                </div>
                <div class="md:col-span-3 col-span-6">
                    <a href="#" class="card bg-base-100 w-full shadow-sm">
                        <figure>
                            <img
                                src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                                alt="Shoes" class="h-48" />
                        </figure>
                        <div class="card-body">
                            <p class="text-xs font-semibold text-primary">Author</p>
                            <p class="font-semibold text-justify text-base">Cara Menjaga Konsistensi Workout: Tips agar Tidak Mudah Menyerah di Tengah Jalan</p>
                            <p class="text-xs font-semibold">2 November 2026</p>
                        </div>
                    </a>
                </div>
                <div class="md:col-span-3 col-span-6">
                    <a href="#" class="card bg-base-100 w-full shadow-sm">
                        <figure>
                            <img
                                src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                                alt="Shoes" class="h-48" />
                        </figure>
                        <div class="card-body">
                            <p class="text-xs font-semibold text-primary">Author</p>
                            <p class="font-semibold text-justify text-base">Cara Menjaga Konsistensi Workout: Tips agar Tidak Mudah Menyerah di Tengah Jalan</p>
                            <p class="text-xs font-semibold">2 November 2026</p>
                        </div>
                    </a>
                </div>
                <div class="md:col-span-3 col-span-6">
                    <a href="#" class="card bg-base-100 w-full shadow-sm">
                        <figure>
                            <img
                                src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                                alt="Shoes" class="h-48" />
                        </figure>
                        <div class="card-body">
                            <p class="text-xs font-semibold text-primary">Author</p>
                            <p class="font-semibold text-justify text-base">Cara Menjaga Konsistensi Workout: Tips agar Tidak Mudah Menyerah di Tengah Jalan</p>
                            <p class="text-xs font-semibold">2 November 2026</p>
                        </div>
                    </a>
                </div>
                <div class="md:col-span-3 col-span-6">
                    <a href="#" class="card bg-base-100 w-full shadow-sm">
                        <figure>
                            <img
                                src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                                alt="Shoes" class="h-48" />
                        </figure>
                        <div class="card-body">
                            <p class="text-xs font-semibold text-primary">Author</p>
                            <p class="font-semibold text-justify text-base">Cara Menjaga Konsistensi Workout: Tips agar Tidak Mudah Menyerah di Tengah Jalan</p>
                            <p class="text-xs font-semibold">2 November 2026</p>
                        </div>
                    </a>
                </div>
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
</body>

</html>