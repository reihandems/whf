<?= $this->extend('main/supplier/view_main') ?>
<?= $this->section('content') ?>
<div class="grid grid-cols-12 gap-3">
    <div class="col-span-12">
        <a href="<?= base_url('/supplier/pesanan') ?>" class="btn">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path fill-rule="evenodd" d="M11.03 3.97a.75.75 0 0 1 0 1.06l-6.22 6.22H21a.75.75 0 0 1 0 1.5H4.81l6.22 6.22a.75.75 0 1 1-1.06 1.06l-7.5-7.5a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
            </svg>
            Kembali
        </a>
    </div>
    <div class="col-span-12">
        <h1 class="text-2xl font-bold">Detail Pesanan</h1>
    </div>
    <div class="col-span-12">
        <div class="divider my-0"></div>
    </div>
    <div class="col-span-12">
        <div class="flex flex-wrap justify-between gap-3">
            <div class="flex flex-col">
                <p class="text-gray-400">No. Pesanan</p>
                <p>023818123</p>
            </div>
            <div class="flex flex-col">
                <p class="text-gray-400">Tanggal Pesanan</p>
                <p>023818123</p>
            </div>
            <div class="flex flex-col">
                <p class="text-gray-400">Pembayaran</p>
                <p>Gopay</p>
            </div>
            <div class="flex flex-col">
                <p class="text-gray-400">Pengiriman</p>
                <p>JNE</p>
            </div>
        </div>
    </div>
    <div class="col-span-12">
        <div class="divider my-0"></div>
    </div>
    <div class="col-span-12">
        <p class="text-gray-400">Informasi Produk</p>
        <div class="overflow-x-auto rounded-box border border-base-content/5 bg-base-300 mt-3">
            <table class="table">
                <!-- head -->
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Job</th>
                        <th>Favorite Color</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- row 1 -->
                    <tr>
                        <th>1</th>
                        <td>Cy Ganderton</td>
                        <td>Quality Control Specialist</td>
                        <td>Blue</td>
                    </tr>
                    <!-- row 2 -->
                    <tr>
                        <th>2</th>
                        <td>Hart Hagerty</td>
                        <td>Desktop Support Technician</td>
                        <td>Purple</td>
                    </tr>
                    <!-- row 3 -->
                    <tr>
                        <th>3</th>
                        <td>Brice Swyre</td>
                        <td>Tax Accountant</td>
                        <td>Red</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-span-12">
        <div class="divider my-0"></div>
    </div>
    <div class="col-span-12">
        <p>Informasi Customer</p>
        <div class="grid grid-cols-12 mt-5 gap-5">
            <div class="md:col-span-4 col-span-6 flex flex-col gap-2">
                <p class="text-gray-400">Nama</p>
                <p>Rayhan Dwi Putra</p>
            </div>
            <div class="md:col-span-4 col-span-6 flex flex-col gap-2">
                <p class="text-gray-400">No. HP</p>
                <p>08123456789</p>
            </div>
            <div class="md:col-span-4 col-span-6 flex flex-col gap-2">
                <p class="text-gray-400">RT / RW</p>
                <p>01 / 11</p>
            </div>
            <div class="md:col-span-4 col-span-6 flex flex-col gap-2">
                <p class="text-gray-400">Kelurahan</p>
                <p>Cempaka Putih Barat</p>
            </div>
            <div class="md:col-span-4 col-span-6 flex flex-col gap-2">
                <p class="text-gray-400">Kecamatan</p>
                <p>Cempaka Putih</p>
            </div>
            <div class="md:col-span-4 col-span-6 flex flex-col gap-2">
                <p class="text-gray-400">Kota</p>
                <p>Jakarta Pusat</p>
            </div>
            <div class="md:col-span-4 col-span-6 flex flex-col gap-2">
                <p class="text-gray-400">Provinsi</p>
                <p>DKI Jakarta</p>
            </div>
            <div class="md:col-span-4 col-span-6 flex flex-col gap-2">
                <p class="text-gray-400">Kode Pos</p>
                <p>10520</p>
            </div>
            <div class="col-span-12 flex flex-col gap-2">
                <p class="text-gray-400">Alamat Lengkap</p>
                <p class="text-justify">Jl. Cempaka Putih Barat No. 123, RT/RW 01/11, Kelurahan Cempaka Putih Barat, Kecamatan Cempaka Putih, Kota Jakarta Pusat, Provinsi DKI Jakarta, Kode Pos 10520</p>
            </div>
        </div>
    </div>
    <div class="col-span-12">
        <div class="divider my-0"></div>
    </div>
    <div class="col-span-12 flex flex-col gap-3">
        <div class="flex flex-row-items-center justify-between">
            <p class="text-gray-400">Subtotal</p>
            <p>Rp. 1.339.000</p>
        </div>
        <div class="flex flex-row-items-center justify-between">
            <p class="text-gray-400">Diskon</p>
            <p>Rp. 0</p>
        </div>
        <div class="flex flex-row-items-center justify-between">
            <p class="text-gray-400 text-lg font-bold">Total</p>
            <p class="text-lg font-bold">Rp. 1.339.000</p>
        </div>
    </div>
    <div class="col-span-12">
        <div class="divider my-0"></div>
    </div>
    <div class="col-span-12 flex justify-end">
        <div class="flex flex-row gap-3">
            <button class="btn btn-soft">Kembali</button>
            <button class="btn btn-neutral">Proses Pesanan</button>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>

</script>
<?= $this->endSection() ?>