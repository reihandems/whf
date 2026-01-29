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
                    <li class="text-gray-500 font-semibold">Trainer</li>
                    <li class="font-semibold">Detail</li>
                </ul>
            </div>
            <p class="text-gray-400 font-semibold mb-2">Muscle Building | Weight Loss</p>
            <h1 class="text-4xl font-bold mb-2">Walter Blanda</h1>
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
            <p class="text-xl font-semibold mt-3">Rp. 70.000 / sesi</p>
            <p class="text-xs text-gray-500 font-semibold mt-3 text-justify">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus commodo ipsum non ante finibus, sit amet placerat libero malesuada. Cras viverra, elit vel vestibulum pharetra, dui magna imperdiet dolor, eget vestibulum urna leo at dui. Nunc nec tortor eget eros faucibus egestas ultricies vel nisl. Quisque a nunc mollis erat rhoncus lacinia.
            </p>
            <fieldset class="fieldset mt-3">
                <legend class="fieldset-legend">Tanggal Booking: </legend>
                <input type="date" class="input" />
            </fieldset>
            <div class="flex flex-row gap-3 mt-5">
                <div class="btn btn-neutral">Booking Sesi</div>
                <div class="btn btn-outline btn-success">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M19.05 4.91A9.82 9.82 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.26 8.26 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07s.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28" />
                    </svg>
                    Konfirmasi via Whatsapp
                </div>
            </div>
            <p class="text-xs mt-8 font-semibold">Pengiriman :</p>
            <div class="flex flex-wrap justify-start gap-6 mt-3">
                <div class="flex flex-row gap-3 items-center">
                    <div class="avatar">
                        <div class="w-10 rounded">
                            <img src="<?= base_url('assets/img/icon-trainer-1.svg') ?>" />
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <p class="text-xs text-gray-500 font-semibold">Pengalaman</p>
                        <p class="text-sm font-semibold">5 Tahun</p>
                    </div>
                </div>
                <div class="flex flex-row gap-3 items-center">
                    <div class="avatar">
                        <div class="w-10 rounded">
                            <img src="<?= base_url('assets/img/icon-trainer-2.svg') ?>" />
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <p class="text-xs text-gray-500 font-semibold">Lokasi</p>
                        <p class="text-sm font-semibold">Jakarta</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content -->
<?= $this->endSection() ?>