<?= $this->extend('main/customer/view_main') ?>
<?= $this->section('content') ?>
<!-- Content -->
<div class="col-span-12 px-12 py-8">
    <a href="javascript:history.back()" class="btn mb-5">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
            <path fill-rule="evenodd" d="M11.03 3.97a.75.75 0 0 1 0 1.06l-6.22 6.22H21a.75.75 0 0 1 0 1.5H4.81l6.22 6.22a.75.75 0 1 1-1.06 1.06l-7.5-7.5a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
        </svg>
        Kembali
    </a>
    <div class="grid grid-cols-12 gap-8">
        <div class="col-span-12 md:col-span-6">
            <img
                src="<?= base_url('assets/img/produk/' . ($p['foto_produk'] ?: 'default.png')) ?>"
                class="w-full h-[500px] object-cover rounded-xl shadow-2xl" onerror="this.src='https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp'" />
        </div>
        <div class="col-span-12 md:col-span-6">
            <div class="breadcrumbs text-sm">
                <ul>
                    <li class="text-gray-500 font-semibold"><?= $p['nama_kategori'] ?></li>
                    <li class="font-semibold"><?= $p['sub_kategori'] ?></li>
                </ul>
            </div>
            <p class="text-gray-400 font-semibold mb-2"><?= $p['nama_brand'] ?></p>
            <h1 class="text-4xl font-bold mb-2"><?= $p['nama_produk'] ?></h1>
            <div class="flex flex-row items-center gap-2">
                <div class="rating rating-sm">
                    <?php for ($i = 1; $i <= 5; $i++): ?>
                        <input type="radio" name="rating-detail" class="mask mask-star-2 bg-orange-400" <?= ($i == round($p['rating'])) ? 'checked' : '' ?> disabled />
                    <?php endfor; ?>
                </div>
                <p class="text-xs font-semibold"><?= $p['jumlah_review'] ?> Reviews</p>
            </div>
            <p class="text-3xl font-bold mt-3 text-primary">Rp <?= number_format($p['harga'], 0, ',', '.') ?></p>

            <div class="mt-5">
                <p class="text-sm font-bold mb-2">Deskripsi Produk :</p>
                <p class="text-sm text-gray-500 font-medium text-justify leading-relaxed">
                    <?= nl2br(esc($p['deskripsi'])) ?>
                </p>
            </div>

            <div class="grid grid-cols-2 gap-4 mt-6">
                <div class="bg-base-200 p-3 rounded-lg">
                    <p class="text-xs text-gray-500 font-semibold">Tersedia Stok</p>
                    <p class="text-sm font-bold"><?= $p['stok'] ?> Unit</p>
                </div>
                <div class="bg-base-200 p-3 rounded-lg">
                    <p class="text-xs text-gray-500 font-semibold">Berat</p>
                    <p class="text-sm font-bold"><?= $p['berat'] ?> Gram</p>
                </div>
                <?php if ($p['flavour']): ?>
                    <div class="bg-base-200 p-3 rounded-lg">
                        <p class="text-xs text-gray-500 font-semibold">Rasa</p>
                        <p class="text-sm font-bold"><?= $p['flavour'] ?></p>
                    </div>
                <?php endif; ?>
                <?php if ($p['ukuran']): ?>
                    <div class="bg-base-200 p-3 rounded-lg">
                        <p class="text-xs text-gray-500 font-semibold">Ukuran</p>
                        <p class="text-sm font-bold"><?= $p['ukuran'] ?></p>
                    </div>
                <?php endif; ?>
            </div>

            <form action="<?= base_url('/user/cart/add') ?>" method="POST" class="mt-8">
                <?= csrf_field() ?>
                <input type="hidden" name="id_produk" value="<?= $p['id_produk'] ?>">
                <div class="flex flex-row gap-3">
                    <div class="flex items-center gap-2 bg-base-200 rounded-lg px-2">
                        <button type="button" onclick="updateQty(-1)" class="btn btn-ghost btn-sm btn-square">-</button>
                        <input type="number" name="qty" id="qty-input" value="1" min="1" max="<?= $p['stok'] ?>" class="bg-transparent w-12 text-center font-bold focus:outline-none">
                        <button type="button" onclick="updateQty(1)" class="btn btn-ghost btn-sm btn-square">+</button>
                    </div>
                    <button type="submit" class="btn btn-primary flex-1">Tambah ke Keranjang</button>
                </div>
            </form>

            <p class="text-xs mt-8 font-semibold">Pengiriman :</p>
            <div class="flex flex-wrap justify-start gap-6 mt-3">
                <div class="flex flex-row gap-3 items-center">
                    <div class="avatar">
                        <div class="w-12 rounded bg-base-200 p-2">
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
                        <div class="w-12 rounded bg-base-200 p-2">
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
                        <div class="w-12 rounded bg-base-200 p-2">
                            <img src="<?= base_url('assets/img/icon-kirim-3.svg') ?>" />
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <p class="text-xs text-gray-500 font-semibold">Estimasi Sampai</p>
                        <p class="text-sm font-semibold">Tergantung Lokasi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function updateQty(val) {
        const input = document.getElementById('qty-input');
        let current = parseInt(input.value);
        current += val;
        if (current < 1) current = 1;
        if (current > <?= $p['stok'] ?>) current = <?= $p['stok'] ?>;
        input.value = current;
    }
</script>
<?= $this->endSection() ?>