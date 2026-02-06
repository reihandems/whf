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
                <p class="font-bold"><?= $order['kode_pesanan'] ?></p>
            </div>
            <div class="flex flex-col">
                <p class="text-gray-400">Tanggal Pesanan</p>
                <p><?= date('d F Y, H:i', strtotime($order['created_at'])) ?></p>
            </div>
            <div class="flex flex-col">
                <p class="text-gray-400">Status</p>
                <p>
                    <span class="badge badge-outline badge-info"><?= ucfirst($order['status_pesanan']) ?></span>
                </p>
            </div>
            <div class="flex flex-col">
                <p class="text-gray-400">Pengiriman</p>
                <p>Ekspedisi</p>
            </div>
        </div>
    </div>
    <div class="col-span-12">
        <div class="divider my-0"></div>
    </div>
    <div class="col-span-12">
        <p class="text-gray-400">Informasi Produk (Milik Anda)</p>
        <div class="overflow-x-auto rounded-box border border-base-content/5 bg-base-300 mt-3">
            <table class="table">
                <!-- head -->
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Produk</th>
                        <th class="text-right">Harga</th>
                        <th class="text-center">Jumlah</th>
                        <th class="text-right">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($details as $index => $item): ?>
                        <tr>
                            <th><?= $index + 1 ?></th>
                            <td class="font-semibold"><?= $item['nama_produk'] ?></td>
                            <td class="text-right">Rp. <?= number_format($item['harga'], 0, ',', '.') ?></td>
                            <td class="text-center"><?= $item['jumlah'] ?></td>
                            <td class="text-right font-bold text-primary">Rp. <?= number_format($item['subtotal'], 0, ',', '.') ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-span-12">
        <div class="divider my-0"></div>
    </div>
    <div class="col-span-12">
        <p>Informasi Customer</p>
        <div class="grid grid-cols-12 mt-5 gap-5 text-sm">
            <div class="md:col-span-4 col-span-6 flex flex-col gap-1">
                <p class="text-gray-400 uppercase text-xs">Nama Penerima</p>
                <p class="font-semibold"><?= $order['nama_penerima'] ?></p>
            </div>
            <div class="md:col-span-4 col-span-6 flex flex-col gap-1">
                <p class="text-gray-400 uppercase text-xs">No. HP</p>
                <p><?= $order['no_hp_penerima'] ?></p>
            </div>
            <div class="md:col-span-4 col-span-6 flex flex-col gap-1">
                <p class="text-gray-400 uppercase text-xs">Status Pesanan</p>
                <p><?= ucfirst($order['status_pesanan']) ?></p>
            </div>
            <div class="md:col-span-4 col-span-6 flex flex-col gap-1">
                <p class="text-gray-400 uppercase text-xs">Kelurahan</p>
                <p><?= $order['kelurahan'] ?></p>
            </div>
            <div class="md:col-span-4 col-span-6 flex flex-col gap-1">
                <p class="text-gray-400 uppercase text-xs">Kecamatan</p>
                <p><?= $order['kecamatan'] ?></p>
            </div>
            <div class="md:col-span-4 col-span-6 flex flex-col gap-1">
                <p class="text-gray-400 uppercase text-xs">Kota / Kabupaten</p>
                <p><?= $order['kota'] ?></p>
            </div>
            <div class="md:col-span-4 col-span-6 flex flex-col gap-1">
                <p class="text-gray-400 uppercase text-xs">Provinsi</p>
                <p><?= $order['provinsi'] ?></p>
            </div>
            <div class="md:col-span-4 col-span-6 flex flex-col gap-1">
                <p class="text-gray-400 uppercase text-xs">Kode Pos</p>
                <p><?= $order['kode_pos'] ?></p>
            </div>
            <div class="col-span-12 flex flex-col gap-1">
                <p class="text-gray-400 uppercase text-xs">Alamat Lengkap</p>
                <p class="text-sm"><?= $order['alamat_lengkap'] ?></p>
            </div>
        </div>
    </div>
    <div class="col-span-12">
        <div class="divider my-0"></div>
    </div>
    <div class="col-span-12 flex flex-col gap-2">
        <div class="flex flex-row items-center justify-between">
            <p class="text-gray-400">Total Pembayaran (Seluruh Pesanan)</p>
            <p class="text-xl font-bold text-right">Rp. <?= number_format($order['total'], 0, ',', '.') ?></p>
        </div>
    </div>
    <div class="col-span-12">
        <div class="divider my-0"></div>
    </div>
    <div class="col-span-12 flex justify-end">
        <div class="flex flex-row gap-3">
            <a href="<?= base_url('/supplier/pesanan') ?>" class="btn btn-ghost">Kembali</a>
            <?php if ($order['status_pesanan'] == 'menunggu_pembayaran' || $order['status_pesanan'] == 'pending'): ?>
                <a href="<?= base_url('supplier/pesanan/process/' . $order['id_pesanan']) ?>" class="btn btn-primary text-white">Proses Pesanan</a>
            <?php elseif ($order['status_pesanan'] == 'diproses'): ?>
                <a href="<?= base_url('supplier/pesanan/ship/' . $order['id_pesanan']) ?>" class="btn btn-success text-white">Kirim Pesanan</a>
            <?php endif; ?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>

</script>
<?= $this->endSection() ?>