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
            <div class="grid grid-cols-12">
                <!-- Sidebar -->
                <div class="col-span-12 md:col-span-3">
                    <div class="drawer lg:drawer-open h-full">
                        <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />
                        <div class="drawer-content flex flex-col md:items-center items-start justify-center">
                            <!-- Page content here -->
                            <label for="my-drawer-3" class="btn drawer-button lg:hidden md:mx-0 md:mt-0 mt-5 mx-6">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                    <path fill-rule="evenodd" d="M3.792 2.938A49.069 49.069 0 0 1 12 2.25c2.797 0 5.54.236 8.209.688a1.857 1.857 0 0 1 1.541 1.836v1.044a3 3 0 0 1-.879 2.121l-6.182 6.182a1.5 1.5 0 0 0-.439 1.061v2.927a3 3 0 0 1-1.658 2.684l-1.757.878A.75.75 0 0 1 9.75 21v-5.818a1.5 1.5 0 0 0-.44-1.06L3.13 7.938a3 3 0 0 1-.879-2.121V4.774c0-.897.64-1.683 1.542-1.836Z" clip-rule="evenodd" />
                                </svg>
                                Kategori
                            </label>
                        </div>
                        <div class="drawer-side">
                            <label for="my-drawer-3" aria-label="close sidebar" class="drawer-overlay"></label>
                            <ul class="menu bg-base-200 min-h-full w-80 p-4">
                                <!-- Creatine -->
                                <li>
                                    <h3 class="text-lg font-semibold">Protein</h3>
                                </li>
                                <li>
                                    <a href="#" class="pl-8 text-primary font-semibold">Whey Protein</a>
                                    <a href="#" class="pl-8 text-gray-500 font-semibold">Isolate Protein</a>
                                    <a href="#" class="pl-8 text-gray-500 font-semibold">Protein Bars</a>
                                    <a href="#" class="pl-8 text-gray-500 font-semibold">Real Food</a>
                                </li>
                                <li>
                                    <h3 class="text-lg font-semibold">Creatine</h3>
                                </li>
                                <li>
                                    <a href="#" class="pl-8 text-gray-500 font-semibold">Monohydrate</a>
                                    <a href="#" class="pl-8 text-gray-500 font-semibold">Tri-Creatine</a>
                                    <a href="#" class="pl-8 text-gray-500 font-semibold">Advanced Stacks</a>
                                </li>
                                <li>
                                    <h3 class="text-lg font-semibold">Pre-Workout</h3>
                                </li>
                                <li>
                                    <a href="#" class="pl-8 text-gray-500 font-semibold">Shots</a>
                                    <a href="#" class="pl-8 text-gray-500 font-semibold">Strength</a>
                                    <a href="#" class="pl-8 text-gray-500 font-semibold">Pump</a>
                                    <a href="#" class="pl-8 text-gray-500 font-semibold">Focus</a>
                                </li>
                                <li>
                                    <h3 class="text-lg font-semibold">Fat Burner</h3>
                                </li>
                                <li>
                                    <a href="#" class="pl-8 text-gray-500 font-semibold">Thermogenic</a>
                                    <a href="#" class="pl-8 text-gray-500 font-semibold">Appetite</a>
                                    <a href="#" class="pl-8 text-gray-500 font-semibold">Carb Blockers</a>
                                    <a href="#" class="pl-8 text-gray-500 font-semibold">Fat Blockers</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Sidebar -->
                <!-- Content -->
                <div class="col-span-12 md:col-span-9 py-3 md:py-6 px-10">
                    <div class="breadcrumbs text-sm">
                        <ul>
                            <li class="text-gray-500 font-semibold">Produk</li>
                            <li class="text-gray-500 font-semibold">Protein</li>
                            <li class="font-semibold">Whey Protein</li>
                        </ul>
                    </div>
                    <h1 class="text-2xl font-bold">Whey Protein</h1>
                    <div class="flex flex-wrap mt-4 gap-4">
                        <select class="select rounded-2xl w-24">
                            <option disabled selected>Brand</option>
                            <option>Crimson</option>
                            <option>Amber</option>
                            <option>Velvet</option>
                        </select>
                        <select class="select rounded-2xl w-24">
                            <option disabled selected>Price</option>
                            <option>Crimson</option>
                            <option>Amber</option>
                            <option>Velvet</option>
                        </select>
                        <select class="select rounded-2xl w-24">
                            <option disabled selected>Flavour</option>
                            <option>Crimson</option>
                            <option>Amber</option>
                            <option>Velvet</option>
                        </select>
                        <select class="select rounded-2xl w-24">
                            <option disabled selected>Size</option>
                            <option>Crimson</option>
                            <option>Amber</option>
                            <option>Velvet</option>
                        </select>
                    </div>
                    <div class="grid grid-cols-12 gap-8 mt-8">
                        <div class="md:col-span-3 col-span-6">
                            <a href="#" class="card bg-base-100 w-full shadow-sm">
                                <figure>
                                    <img
                                        src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                                        alt="Shoes" class="h-48" />
                                </figure>
                                <div class="card-body">
                                    <p class="text-xs text-gray-400 font-semibold">Evolene</p>
                                    <h2 class="card-title">Card Title</h2>
                                    <h1 class="text-xl font-semibold">Rp. 959.000</h1>
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
                                    <p class="text-xs text-gray-400 font-semibold">Evolene</p>
                                    <h2 class="card-title">Card Title</h2>
                                    <h1 class="text-xl font-semibold">Rp. 959.000</h1>
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
                                    <p class="text-xs text-gray-400 font-semibold">Evolene</p>
                                    <h2 class="card-title">Card Title</h2>
                                    <h1 class="text-xl font-semibold">Rp. 959.000</h1>
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
                                    <p class="text-xs text-gray-400 font-semibold">Evolene</p>
                                    <h2 class="card-title">Card Title</h2>
                                    <h1 class="text-xl font-semibold">Rp. 959.000</h1>
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
                                    <p class="text-xs text-gray-400 font-semibold">Evolene</p>
                                    <h2 class="card-title">Card Title</h2>
                                    <h1 class="text-xl font-semibold">Rp. 959.000</h1>
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
                                    <p class="text-xs text-gray-400 font-semibold">Evolene</p>
                                    <h2 class="card-title">Card Title</h2>
                                    <h1 class="text-xl font-semibold">Rp. 959.000</h1>
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
                                    <p class="text-xs text-gray-400 font-semibold">Evolene</p>
                                    <h2 class="card-title">Card Title</h2>
                                    <h1 class="text-xl font-semibold">Rp. 959.000</h1>
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
                                    <p class="text-xs text-gray-400 font-semibold">Evolene</p>
                                    <h2 class="card-title">Card Title</h2>
                                    <h1 class="text-xl font-semibold">Rp. 959.000</h1>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Content -->
            </div>
        </div>

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