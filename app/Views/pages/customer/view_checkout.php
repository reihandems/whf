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
                        <a href="<?= base_url('user/cart') ?>" class="text-gray-500">Keranjang</a>
                    </li>
                    <li>
                        <a class="font-bold">Pembayaran</a>
                    </li>
                </ul>
            </div>
            <h1 class="text-2xl font-semibold">Informasi Pengiriman</h1>
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
                        <legend class="fieldset-legend">No. HP</legend>
                        <input type="text" class="input" placeholder="Masukkan nomor HP" />
                    </fieldset>
                </div>
                <div class="col-span-6 md:col-span-3">
                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Provinsi</legend>
                        <select class="select">
                            <option disabled selected>Pilih Provinsi</option>
                            <option>Chrome</option>
                            <option>FireFox</option>
                            <option>Safari</option>
                        </select>
                    </fieldset>
                </div>
                <div class="col-span-6 md:col-span-3">
                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Kota</legend>
                        <select class="select">
                            <option disabled selected>Pilih Kota</option>
                            <option>Chrome</option>
                            <option>FireFox</option>
                            <option>Safari</option>
                        </select>
                    </fieldset>
                </div>
                <div class="col-span-6 md:col-span-3">
                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Kecamatan</legend>
                        <select class="select">
                            <option disabled selected>Pilih Kecamatan</option>
                            <option>Chrome</option>
                            <option>FireFox</option>
                            <option>Safari</option>
                        </select>
                    </fieldset>
                </div>
                <div class="col-span-6 md:col-span-3">
                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Kelurahan</legend>
                        <select class="select">
                            <option disabled selected>Pilih Kelurahan</option>
                            <option>Chrome</option>
                            <option>FireFox</option>
                            <option>Safari</option>
                        </select>
                    </fieldset>
                </div>
                <div class="col-span-6">
                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Kode Pos</legend>
                        <input type="text" class="input w-full" placeholder="Masukkan kode pos" />
                    </fieldset>
                </div>
                <div class="col-span-6">
                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Alamat Lengkap</legend>
                        <textarea class="textarea w-full h-24" placeholder="Pastikan alamatnya sudah lengkap"></textarea>
                    </fieldset>
                </div>
                <div class="col-span-6">
                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Detail Lainnya</legend>
                        <input type="text" class="input w-full" placeholder="Blok / Unit No., Patokan" />
                    </fieldset>
                </div>
                <div class="col-span-6 mt-3">
                    <label class="flex gap-2 items-center">
                        <input type="checkbox" class="checkbox checkbox-sm checkbox-primary" />
                        <span class="text-sm">Gunakan Alamat Saya</span>
                    </label>
                </div>
                <div class="col-span-6">
                    <div class="divider mb-0 w-full"></div>
                </div>
                <div class="col-span-6">
                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Kurir</legend>
                        <select class="select w-full">
                            <option disabled selected>Pilih Kurir Pengiriman</option>
                            <option>Chrome</option>
                            <option>FireFox</option>
                            <option>Safari</option>
                        </select>
                    </fieldset>
                </div>
            </div>
        </div>

        <div class="ringkasan-pesanan col-span-12 md:col-span-6 p-8 bg-base-300 mt-5 rounded-xl flex flex-col gap-5 self-start">
            <h1 class="text-xl font-semibold">Review Pesanan</h1>
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
                            <p class="text-xs text-gray-500">Evolene</p>
                            <h1 class="text-xl font-semibold">Isolene</h1>
                            <p class="text-xs">Isi: <span class="text-gray-500">50 Sachet</span></p>
                            <h1 class="font-semiboldtext-xl">Rp. 959.000</h1>
                        </div>
                    </div>
                    <!-- Jumlah Pesanan -->
                    <div class="jumlah">
                        <p class="text-gray-400 font-semibold">1x</p>
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
            <div class="flex flex-row justify-between">
                <p class="text-gray-400 text-sm md:text-base">Ongkos Kirim</p>
                <p class="text-sm md:text-base">Rp. 10.000</p>
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