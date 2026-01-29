<?= $this->extend('main/customer/view_main') ?>
<?= $this->section('content') ?>
<div class="col-span-12">
    <div class="grid grid-cols-12 px-12 py-6 gap-x-8">
        <div class="col-span-12">
            <div class="breadcrumbs text-sm">
                <ul>
                    <li>
                        <a href="<?= base_url('user/home') ?>" class="text-gray-500">Home</a>
                    </li>
                    <li>
                        <a class="font-bold">Keranjang</a>
                    </li>
                </ul>
            </div>
            <h1 class="text-2xl font-semibold">Keranjang Anda</h1>
        </div>
        <div class="produk col-span-12 md:col-span-7 p-8 bg-base-300 mt-5 rounded-xl flex flex-col gap-10 self-start">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 md:gap-0">
                <div class="kiri flex flex-row items-center gap-5">
                    <div class="avatar">
                        <div class="w-24 rounded">
                            <img src="https://img.daisyui.com/images/profile/demo/batperson@192.webp" />
                        </div>
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="text-xs text-gray-500">Evolene</p>
                        <h1 class="md:text-2xl text-xl font-semibold">Isolene</h1>
                        <p class="text-xs">Isi: <span class="text-gray-500">50 Sachet</span></p>
                        <h1 class="font-semibold md:text-2xl text-xl">Rp. 959.000</h1>
                    </div>
                </div>
                <div class="btn btn-soft flex justify-between w-full text-sm md:w-28">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd" d="M4.25 12a.75.75 0 0 1 .75-.75h14a.75.75 0 0 1 0 1.5H5a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
                    </svg>
                    <p>1</p>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd" d="M12 3.75a.75.75 0 0 1 .75.75v6.75h6.75a.75.75 0 0 1 0 1.5h-6.75v6.75a.75.75 0 0 1-1.5 0v-6.75H4.5a.75.75 0 0 1 0-1.5h6.75V4.5a.75.75 0 0 1 .75-.75Z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 md:gap-0">
                <div class="kiri flex flex-row items-center gap-5">
                    <div class="avatar">
                        <div class="w-24 rounded">
                            <img src="https://img.daisyui.com/images/profile/demo/batperson@192.webp" />
                        </div>
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="text-xs text-gray-500">Evolene</p>
                        <h1 class="md:text-2xl text-xl font-semibold">Isolene</h1>
                        <p class="text-xs">Isi: <span class="text-gray-500">50 Sachet</span></p>
                        <h1 class="font-semibold md:text-2xl text-xl">Rp. 959.000</h1>
                    </div>
                </div>
                <div class="btn btn-soft flex justify-between w-full text-sm md:w-28">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd" d="M4.25 12a.75.75 0 0 1 .75-.75h14a.75.75 0 0 1 0 1.5H5a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
                    </svg>
                    <p>1</p>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd" d="M12 3.75a.75.75 0 0 1 .75.75v6.75h6.75a.75.75 0 0 1 0 1.5h-6.75v6.75a.75.75 0 0 1-1.5 0v-6.75H4.5a.75.75 0 0 1 0-1.5h6.75V4.5a.75.75 0 0 1 .75-.75Z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="ringkasan-pesanan col-span-12 md:col-span-5 p-8 bg-base-300 mt-5 rounded-xl flex flex-col gap-5">
            <h1 class="text-xl font-semibold">Ringkasan Pesanan</h1>
            <div class="flex flex-row justify-between">
                <p class="text-gray-400">Subtotal</p>
                <p>Rp. 1.329.000</p>
            </div>
            <div class="flex flex-row justify-between">
                <p class="text-gray-400">Diskon</p>
                <p>Rp. 0</p>
            </div>
            <div class="flex flex-row justify-between">
                <p class="text-gray-400">Ongkos Kirim</p>
                <p>Rp. 10.000</p>
            </div>
            <div class="divider my-1"></div>
            <div class="flex flex-row justify-between">
                <p class="text-gray-400 text-xl">Total</p>
                <p class="text-xl">Rp. 1.339.000</p>
            </div>
            <div class="join w-full">
                <input type="text" class="input join-item w-full" placeholder="Tambah Kode Promo" />
                <button class="btn join-item btn-primary">Apply</button>
            </div>
            <div class="btn">Checkout</div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>