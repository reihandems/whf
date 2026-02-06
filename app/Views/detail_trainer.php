<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $t['nama_trainer'] ?> - WHF Fitness</title>
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
        <div class="col-span-12 px-12 py-8">
            <a href="javascript:history.back()" class="btn mb-5">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path fill-rule="evenodd" d="M11.03 3.97a.75.75 0 0 1 0 1.06l-6.22 6.22H21a.75.75 0 0 1 0 1.5H4.81l6.22 6.22a.75.75 0 1 1-1.06 1.06l-7.5-7.5a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
                </svg>
                Kembali
            </a>
            <div class="grid grid-cols-12 gap-8">
                <div class="col-span-12 md:col-span-6 text-center">
                    <img
                        src="<?= base_url('assets/img/trainer/' . ($t['foto_profil'] ?: 'default.png')) ?>"
                        class="w-full h-[500px] object-cover rounded-lg shadow-2xl"
                        onerror="this.src='https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp'" />
                </div>
                <div class="col-span-12 md:col-span-6">
                    <div class="breadcrumbs text-sm">
                        <ul>
                            <li class="text-gray-500 font-semibold">Trainer</li>
                            <li class="font-semibold">Detail</li>
                        </ul>
                    </div>
                    <p class="text-gray-400 font-semibold mb-2"><?= $t['kategori'] ?></p>
                    <h1 class="text-4xl font-bold mb-2"><?= $t['nama_trainer'] ?></h1>
                    <div class="flex flex-row items-center gap-2">
                        <div class="rating rating-sm">
                            <?php for ($i = 1; $i <= 5; $i++): ?>
                                <input type="radio" class="mask mask-star-2 bg-orange-400" <?= ($i == round($t['rating'])) ? 'checked' : '' ?> disabled />
                            <?php endfor; ?>
                        </div>
                        <p class="text-xs font-semibold"><?= $t['jumlah_review'] ?> Reviews</p>
                    </div>
                    <p class="text-2xl font-bold mt-3 text-primary">Rp <?= number_format($t['harga_per_sesi'], 0, ',', '.') ?> <span class="text-sm font-normal text-gray-400">/ sesi</span></p>

                    <div class="mt-5">
                        <p class="text-sm font-bold mb-2">Deskripsi Trainer :</p>
                        <p class="text-sm text-gray-500 font-medium text-justify leading-relaxed">
                            <?= nl2br(esc($t['deskripsi'])) ?>
                        </p>
                    </div>

                    <div class="flex flex-row gap-3 mt-8">
                        <a href="<?= base_url('/login') ?>" class="btn btn-primary flex-1 text-white">Login untuk Booking</a>
                        <a href="https://wa.me/621234567890?text=Halo%20saya%20ingin%20tanya%20tentang%20trainer%20<?= urlencode($t['nama_trainer']) ?>" target="_blank" class="btn btn-outline btn-success">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M19.05 4.91A9.82 9.82 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.26 8.26 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07s.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28" />
                            </svg>
                            Tanya via WhatsApp
                        </a>
                    </div>

                    <div class="grid grid-cols-2 gap-4 mt-8">
                        <div class="bg-base-200 p-4 rounded-xl">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded bg-primary/10 flex items-center justify-center">
                                    <img src="<?= base_url('assets/img/icon-trainer-1.svg') ?>" class="w-6" />
                                </div>
                                <div>
                                    <p class="text-xs text-gray-500 font-bold uppercase">Pengalaman</p>
                                    <p class="text-sm font-bold"><?= $t['pengalaman_tahun'] ?> Tahun</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-base-200 p-4 rounded-xl">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded bg-primary/10 flex items-center justify-center">
                                    <img src="<?= base_url('assets/img/icon-trainer-2.svg') ?>" class="w-6" />
                                </div>
                                <div>
                                    <p class="text-xs text-gray-500 font-bold uppercase">Lokasi</p>
                                    <p class="text-sm font-bold"><?= $t['lokasi'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12 mt-16">
                        <div class="flex flex-row items-center gap-3 mb-8">
                            <h2 class="text-2xl font-bold">Ulasan Trainer</h2>
                            <span class="badge badge-primary font-bold"><?= count($reviews) ?></span>
                        </div>

                        <?php if (empty($reviews)): ?>
                            <div class="bg-base-200 p-10 rounded-xl text-center">
                                <p class="text-gray-500 italic">Belum ada ulasan untuk trainer ini.</p>
                            </div>
                        <?php else: ?>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <?php foreach ($reviews as $r): ?>
                                    <div class="bg-white p-6 rounded-xl border border-base-content/5 shadow-sm">
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