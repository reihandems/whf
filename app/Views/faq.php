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
        <div class="col-span-12 text-center">
            <div class="px-8 md:px-12 py-8">
                <h1 class="text-4xl font-semibold">Frequently Asked <span class="text-primary">Questions</span></h1>
                <div class="md:w-140 w-auto mx-auto mt-8">
                    <div class="collapse bg-base-300 border-base-300 border rounded-t-xl rounded-b-none">
                        <input type="checkbox" class="w-full px-0" />
                        <div class="collapse-title font-semibold flex flex-row items-center justify-between w-full px-8">
                            <p>Apa itu WHF?</p>
                            <div class="w-6 h-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M11 13H6q-.425 0-.712-.288T5 12t.288-.712T6 11h5V6q0-.425.288-.712T12 5t.713.288T13 6v5h5q.425 0 .713.288T19 12t-.288.713T18 13h-5v5q0 .425-.288.713T12 19t-.712-.288T11 18z" />
                                </svg>
                            </div>
                        </div>
                        <div class="collapse-content px-8 text-sm text-start">
                            Will Healthy Fitness (WHF) adalah platform terpercaya yang berdedikasi untuk mendukung perjalanan kebugaran Anda. Kami menyediakan berbagai pilihan suplemen gym berkualitas tinggi dan jasa Personal Trainer profesional untuk membantu Anda mencapai target tubuh impian dengan cara yang sehat dan efektif.
                        </div>
                    </div>

                    <div class="collapse bg-base-300 rounded-none">
                        <input type="checkbox" class="w-full px-0" />
                        <div class="collapse-title font-semibold flex flex-row items-center justify-between w-full px-8">
                            <p class="text-start">Apakah saya harus membuat akun untuk berbelanja?</p>
                            <div class="w-6 h-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M11 13H6q-.425 0-.712-.288T5 12t.288-.712T6 11h5V6q0-.425.288-.712T12 5t.713.288T13 6v5h5q.425 0 .713.288T19 12t-.288.713T18 13h-5v5q0 .425-.288.713T12 19t-.712-.288T11 18z" />
                                </svg>
                            </div>
                        </div>
                        <div class="collapse-content px-8 text-sm text-start">
                            Ya, Anda perlu membuat akun. Dengan memiliki akun di WHF, Anda dapat memantau riwayat pesanan, menyimpan alamat pengiriman, dan mendapatkan akses eksklusif ke program latihan atau promo menarik lainnya.
                        </div>
                    </div>

                    <div class="collapse bg-base-300 rounded-none">
                        <input type="checkbox" class="w-full px-0" />
                        <div class="collapse-title font-semibold flex flex-row items-center justify-between w-full px-8">
                            <p class="text-start">Metode pembayaran apa saja yang tersedia?</p>
                            <div class="w-6 h-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M11 13H6q-.425 0-.712-.288T5 12t.288-.712T6 11h5V6q0-.425.288-.712T12 5t.713.288T13 6v5h5q.425 0 .713.288T19 12t-.288.713T18 13h-5v5q0 .425-.288.713T12 19t-.712-.288T11 18z" />
                                </svg>
                            </div>
                        </div>
                        <div class="collapse-content px-8 text-sm text-start">
                            Kami bekerja sama dengan payment gateway DOKU untuk menjamin keamanan dan kenyamanan transaksi Anda. Anda bisa membayar melalui berbagai metode seperti Transfer Bank (Virtual Account), Kartu Kredit, E-Wallet (OVO, DANA, dll), hingga pembayaran via minimarket.
                        </div>
                    </div>

                    <div class="collapse bg-base-300 rounded-none">
                        <input type="checkbox" class="w-full px-0" />
                        <div class="collapse-title font-semibold flex flex-row items-center justify-between w-full px-8">
                            <p class="text-start">Berapa lama waktu pengiriman pesanan saya?</p>
                            <div class="w-6 h-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M11 13H6q-.425 0-.712-.288T5 12t.288-.712T6 11h5V6q0-.425.288-.712T12 5t.713.288T13 6v5h5q.425 0 .713.288T19 12t-.288.713T18 13h-5v5q0 .425-.288.713T12 19t-.712-.288T11 18z" />
                                </svg>
                            </div>
                        </div>
                        <div class="collapse-content px-8 text-sm text-start">
                            Waktu pengiriman bergantung pada lokasi Anda dan jenis layanan kurir yang dipilih. Umumnya, pesanan akan diproses dalam 1-2 hari kerja. Estimasi sampai di tujuan adalah 2-5 hari kerja untuk wilayah Indonesia.
                        </div>
                    </div>

                    <div class="collapse bg-base-300 rounded-none">
                        <input type="checkbox" class="w-full px-0" />
                        <div class="collapse-title font-semibold flex flex-row items-center justify-between w-full px-8">
                            <p class="text-start">Bagaimana cara melacak pesanan saya?</p>
                            <div class="w-6 h-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M11 13H6q-.425 0-.712-.288T5 12t.288-.712T6 11h5V6q0-.425.288-.712T12 5t.713.288T13 6v5h5q.425 0 .713.288T19 12t-.288.713T18 13h-5v5q0 .425-.288.713T12 19t-.712-.288T11 18z" />
                                </svg>
                            </div>
                        </div>
                        <div class="collapse-content px-8 text-sm text-start">
                            Setelah pesanan Anda berhasil dibuat, kami akan mengirimkan email konfirmasi ke alamat email yang Anda berikan. Email ini akan mengandung detail pesanan dan nomor resi jika pesanan Anda sedang dalam proses pengiriman.
                        </div>
                    </div>

                    <div class="collapse bg-base-300 rounded-none">
                        <input type="checkbox" class="w-full px-0" />
                        <div class="collapse-title font-semibold flex flex-row items-center justify-between w-full px-8">
                            <p class="text-start">Apakah produk yang dijual 100% original?</p>
                            <div class="w-6 h-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M11 13H6q-.425 0-.712-.288T5 12t.288-.712T6 11h5V6q0-.425.288-.712T12 5t.713.288T13 6v5h5q.425 0 .713.288T19 12t-.288.713T18 13h-5v5q0 .425-.288.713T12 19t-.712-.288T11 18z" />
                                </svg>
                            </div>
                        </div>
                        <div class="collapse-content px-8 text-sm text-start">
                            Tentu saja! Keamanan konsumen adalah prioritas utama kami. Semua suplemen yang kami jual dijamin 100% original dan telah melalui proses seleksi ketat untuk memastikan Anda mendapatkan produk yang aman dan berkualitas.
                        </div>
                    </div>

                    <div class="collapse bg-base-300 rounded-b-xl rounded-t-none">
                        <input type="checkbox" class="w-full px-0" />
                        <div class="collapse-title font-semibold flex flex-row items-start gap-8 justify-between w-full px-8">
                            <p class="text-start">Bagaimana cara menghubungi customer service jika saya butuh bantuan?</p>
                            <div class="w-6 h-6 self-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M11 13H6q-.425 0-.712-.288T5 12t.288-.712T6 11h5V6q0-.425.288-.712T12 5t.713.288T13 6v5h5q.425 0 .713.288T19 12t-.288.713T18 13h-5v5q0 .425-.288.713T12 19t-.712-.288T11 18z" />
                                </svg>
                            </div>
                        </div>
                        <div class="collapse-content px-8 text-sm text-start">
                            Jika Anda butuh bantuan lebih lanjut, tim kami siap membantu! Anda dapat menghubungi kami melalui fitur Contact Us di website, mengirim email ke willhealthyfitness@gmail.com, atau melalui WhatsApp resmi kami yang tertera di bagian bawah halaman ini.
                        </div>
                    </div>
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