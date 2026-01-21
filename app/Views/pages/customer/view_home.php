<?= $this->extend('main/customer/view_main') ?>
<?= $this->section('content') ?>
<!-- Hero -->
<div class="col-span-12 md:min-h-screen" style="background-image: url(<?= base_url('assets/img/bg-img.png') ?>); background-size: cover;">
    <div class="flex md:flex-row flex-col gap-3 md:gap-18 justify-between align-middle items-center h-full md:px-12 px-8 md:mt-0 mt-20">
        <div class="kiri flex flex-col gap-4">
            <h1 class="text-4xl font-bold">Tingkatkan Performa Latihanmu dengan Suplemen Terbaik!</h1>
            <p class="text-gray-400 font-semibold">Kami menyediakan whey protein, mass gainer, dan suplemen fitness original dari berbagai brand populer dengan harga bersaing</p>
            <div class="flex flex-row gap-2">
                <a href="#" class="btn btn-neutral">Belanja Sekarang</a>
                <a href="#" class="btn">Cari Brand</a>
            </div>
        </div>
        <div class="kanan md:flex hidden">
            <img src="<?= base_url('assets/img/hero-img.png') ?>" alt="" class="rounded-3xl bg-blue-500 shadow-lg shadow-blue-500/50">
        </div>
    </div>
</div>
<div class="col-span-12">
    <h1 class="text-center text-2xl md:mt-12 mt-10 font-bold">KATEGORI UTAMA</h1>
    <div class="flex flex-wrap justify-center items-center mt-8 gap-8">
        <a href="#" class="btn btn-primary w-32">Protein</a>
        <a href="#" class="btn btn-soft w-32">Creatine</a>
        <a href="#" class="btn btn-soft w-32">Pre-Workout</a>
        <a href="#" class="btn btn-soft w-32">Fat Burner</a>
        <a href="#" class="btn btn-soft w-32">Recovery</a>
    </div>
    <div class="grid grid-cols-12 md:gap-8 gap-6 px-8 md:px-12 mt-12">
        <div class="md:col-span-3 col-span-6">
            <a href="#" class="card bg-base-100 w-full shadow-sm">
                <figure>
                    <img
                        src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                        alt="Shoes" class="md:h-64 h-48" />
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
                        alt="Shoes" class="md:h-64 h-48" />
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
                        alt="Shoes" class="md:h-64 h-48" />
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
                        alt="Shoes" class="md:h-64 h-48" />
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
<div class="col-span-12">
    <div class="banner-1 md:p-12 p-8">
        <img src="<?= base_url('assets/img/banner-1.png') ?>" alt="" class="rounded-2xl">
    </div>
</div>
<div class="col-span-12">
    <h1 class="text-center text-2xl font-bold">PALING BANYAK DICARI</h1>
    <div class="grid grid-cols-12 md:gap-8 gap-6 px-8 md:px-12 mt-12">
        <div class="md:col-span-3 col-span-6">
            <a href="#" class="card bg-base-100 w-full shadow-sm">
                <figure>
                    <img
                        src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                        alt="Shoes" class="md:h-64 h-48" />
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
                        alt="Shoes" class="md:h-64 h-48" />
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
                        alt="Shoes" class="md:h-64 h-48" />
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
                        alt="Shoes" class="md:h-64 h-48" />
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
                        alt="Shoes" class="md:h-64 h-48" />
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
                        alt="Shoes" class="md:h-64 h-48" />
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
                        alt="Shoes" class="md:h-64 h-48" />
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
                        alt="Shoes" class="md:h-64 h-48" />
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
<div class="col-span-12">
    <div class="banner-1 md:p-12 p-8">
        <img src="<?= base_url('assets/img/banner-2.png') ?>" alt="" class="rounded-2xl">
    </div>
</div>
<?= $this->endSection() ?>