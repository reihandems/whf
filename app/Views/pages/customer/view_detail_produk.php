<?= $this->extend('main/customer/view_main') ?>
<?= $this->section('content') ?>
<!-- Content -->
<div class="col-span-12 px-12 py-8">
    <a href="#" class="btn mb-5">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
            <path fill-rule="evenodd" d="M11.03 3.97a.75.75 0 0 1 0 1.06l-6.22 6.22H21a.75.75 0 0 1 0 1.5H4.81l6.22 6.22a.75.75 0 1 1-1.06 1.06l-7.5-7.5a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
        </svg>
        Kembali
    </a>
    <div class="grid grid-cols-12 gap-8">
        <div class="col-span-12 md:col-span-6">
            <img
                src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                class="w-full h-full rounded-lg shadow-2xl" />
        </div>
        <div class="col-span-12 md:col-span-6">
            <div class="breadcrumbs text-sm">
                <ul>
                    <li class="text-gray-500 font-semibold">Protein</li>
                    <li class="font-semibold">Whey Protein</li>
                </ul>
            </div>
            <p class="text-gray-400 font-semibold mb-2">Evolene</p>
            <h1 class="text-4xl font-bold mb-2">Isolene</h1>
            <div class="flex flex-row items-center gap-2">
                <div class="rating">
                    <div class="mask mask-star" aria-label="1 star"></div>
                    <div class="mask mask-star" aria-label="2 star"></div>
                    <div class="mask mask-star" aria-label="3 star"></div>
                    <div class="mask mask-star" aria-label="4 star"></div>
                    <div class="mask mask-star" aria-label="5 star"></div>
                </div>
                <p class="text-xs font-semibold">0 Reviews</p>
            </div>
            <p class="text-xl font-semibold mt-3">Rp. 959.000</p>
            <p class="text-xs text-gray-500 font-semibold mt-3 text-justify">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus commodo ipsum non ante finibus, sit amet placerat libero malesuada. Cras viverra, elit vel vestibulum pharetra, dui magna imperdiet dolor, eget vestibulum urna leo at dui. Nunc nec tortor eget eros faucibus egestas ultricies vel nisl. Quisque a nunc mollis erat rhoncus lacinia.
            </p>
            <div class="flex flex-row gap-3 mt-5">
                <div class="btn btn-soft flex justify-between w-28">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd" d="M4.25 12a.75.75 0 0 1 .75-.75h14a.75.75 0 0 1 0 1.5H5a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
                    </svg>
                    <p>1</p>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd" d="M12 3.75a.75.75 0 0 1 .75.75v6.75h6.75a.75.75 0 0 1 0 1.5h-6.75v6.75a.75.75 0 0 1-1.5 0v-6.75H4.5a.75.75 0 0 1 0-1.5h6.75V4.5a.75.75 0 0 1 .75-.75Z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="btn btn-neutral">Tambah ke Keranjang</div>
            </div>
            <p class="text-xs mt-8 font-semibold">Pengiriman :</p>
            <div class="flex flex-wrap justify-start gap-6 mt-3">
                <div class="flex flex-row gap-3 items-center">
                    <div class="avatar">
                        <div class="w-12 rounded">
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
                        <div class="w-12 rounded">
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
                        <div class="w-12 rounded">
                            <img src="<?= base_url('assets/img/icon-kirim-3.svg') ?>" />
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <p class="text-xs text-gray-500 font-semibold">Estimasi Sampai</p>
                        <p class="text-sm font-semibold">22 - 24 Januari 2026</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content -->
<?= $this->endSection() ?>