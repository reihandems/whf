<?= $this->extend('main/customer/view_main') ?>
<?= $this->section('content') ?>
<div class="col-span-12">
    <div class="grid grid-cols-12 px-12 py-6 gap-x-8">
        <div class="col-span-12">
            <div class="breadcrumbs text-sm">
                <ul>
                    <li>
                        <a href="<?= base_url('user/home') ?>" class="text-gray-500">Trainer</a>
                    </li>
                    <li>
                        <a class="font-bold">Pembayaran</a>
                    </li>
                </ul>
            </div>
            <h1 class="text-2xl font-semibold">Informasi Trainee</h1>
        </div>
        <!-- Form Isi alamat dan kurir pengiriman -->
        <div class="produk col-span-12 md:col-span-6 p-8 bg-base-300 mt-5 rounded-xl flex flex-col gap-10 self-start">
            <div class="grid grid-cols-6 gap-x-5">
                <div class="col-span-6 md:col-span-3">
                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Nama Lengkap</legend>
                        <input type="text" class="input" placeholder="Masukkan nama lengkap" />
                    </fieldset>
                </div>
                <div class="col-span-6 md:col-span-3">
                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Email</legend>
                        <input type="email" class="input" placeholder="Masukkan Email" />
                    </fieldset>
                </div>
                <div class="col-span-6">
                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">No. HP</legend>
                        <input type="text" class="input w-full" placeholder="Masukkan No. HP" />
                    </fieldset>
                </div>
                <div class="col-span-6">
                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Alamat Lengkap</legend>
                        <textarea class="textarea h-24 w-full" placeholder="Masukkan Alamat Lengkap"></textarea>
                    </fieldset>
                </div>
                <div class="col-span-6 mt-3">
                    <label class="flex gap-2 items-center">
                        <input type="checkbox" class="checkbox checkbox-sm checkbox-primary" />
                        <span class="text-sm">Gunakan Data Saya</span>
                    </label>
                </div>
            </div>
        </div>

        <div class="ringkasan-pesanan col-span-12 md:col-span-6 p-8 bg-base-300 mt-5 rounded-xl flex flex-col gap-5 self-start">
            <h1 class="text-xl font-semibold">Review Booking</h1>
            <!-- Produk yang dimasukkan ke keranjang -->
            <div class="flex flex-col gap-8">
                <div class="flex flex-row items-center justify-between gap-4 md:gap-0">
                    <div class="kiri flex flex-row items-center gap-5">
                        <div class="avatar">
                            <div class="w-18 rounded">
                                <img src="https://img.daisyui.com/images/profile/demo/batperson@192.webp" />
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <p class="text-xs text-gray-500">Muscle Gain</p>
                            <h1 class="text-xl font-semibold">Walter Blanda</h1>
                            <p class="text-xs">Isi: <span class="text-gray-500">Paket: 20 Sesi</span></p>
                            <h1 class="font-semiboldtext-xl">Rp. 70.000 / sesi</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="divider my-0"></div>
            <div class="flex flex-row justify-between">
                <p class="text-gray-400 text-sm md:text-base">Subtotal</p>
                <p class="text-sm md:text-base">Rp. 1.329.000</p>
            </div>
            <div class="flex flex-row justify-between">
                <p class="text-gray-400 text-sm md:text-base">Diskon</p>
                <p class="text-sm md:text-base">Rp. 0</p>
            </div>
            <div class="divider my-1"></div>
            <div class="flex flex-row justify-between">
                <p class="text-gray-400 text-lg md:text-xl">Total</p>
                <p class="text-lg md:text-xl">Rp. 1.339.000</p>
            </div>
            <div class="join w-full">
                <input type="text" class="input join-item w-full" placeholder="Tambah Kode Promo" />
                <button class="btn join-item btn-primary">Apply</button>
            </div>
            <div class="btn">Bayar Sekarang</div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>