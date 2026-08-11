<?= $this->extend('main/customer/view_main') ?>
<?= $this->section('content') ?>
<!-- Content -->
<div class="col-span-12 px-4 md:px-12 py-8 max-w-7xl mx-auto w-full">
    <div class="breadcrumbs text-sm">
        <ul>
            <li><a href="<?= base_url('/home') ?>" class="text-gray-500 font-semibold">Beranda</a></li>
            <li class="font-semibold text-gray-500">Pencarian</li>
            <li class="font-bold">"<?= esc($keyword) ?>"</li>
        </ul>
    </div>

    <div class="mt-6 flex flex-col md:flex-row md:items-baseline md:justify-between gap-2 border-b border-base-content/5 pb-4">
        <h1 class="text-3xl font-extrabold">Hasil Pencarian</h1>
        <p class="text-sm font-semibold text-base-content/60">Ditemukan <span class="text-primary font-bold"><?= count($products) ?></span> produk untuk kata kunci <span class="italic font-bold">"<?= esc($keyword) ?>"</span></p>
    </div>

    <?php if (empty($products)): ?>
        <div class="flex flex-col items-center justify-center py-20 text-center space-y-4">
            <div class="w-20 h-20 rounded-full bg-base-200 flex items-center justify-center text-base-content/40">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75l-2.489-2.489m0 0a3.375 3.375 0 10-4.773-4.773 3.375 3.375 0 004.774 4.774zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <div>
                <h2 class="text-xl font-bold">Produk Tidak Ditemukan</h2>
                <p class="text-sm text-base-content/50 mt-1 max-w-md mx-auto">Kami tidak dapat menemukan produk yang cocok dengan pencarian Anda. Coba periksa ejaan Anda atau gunakan kata kunci umum lainnya.</p>
            </div>
            <a href="<?= base_url('/user/produk') ?>" class="btn btn-primary font-bold">Lihat Semua Produk</a>
        </div>
    <?php else: ?>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-8">
            <?php foreach ($products as $p): ?>
                <a href="<?= base_url('/user/produk/detail/' . $p['id_produk']) ?>" class="group card bg-base-100 border border-base-content/5 hover:border-primary/20 shadow-sm hover:shadow-md transition-all duration-300 overflow-hidden">
                    <figure class="relative overflow-hidden h-40 md:h-48 bg-base-200">
                        <img src="<?= base_url('assets/img/produk/' . ($p['foto_produk'] ?: 'default.png')) ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" onerror="this.src='https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp'" />
                    </figure>
                    <div class="card-body p-4 justify-between">
                        <div>
                            <p class="text-[10px] font-bold text-primary/75 uppercase tracking-wide"><?= $p['nama_brand'] ?></p>
                            <h4 class="font-bold text-sm text-base-content line-clamp-1 group-hover:text-primary transition-colors duration-200 mt-1"><?= $p['nama_produk'] ?></h4>
                        </div>
                        <div class="mt-3 pt-2 border-t border-base-content/5 flex items-center justify-between">
                            <span class="font-black text-sm text-primary">Rp <?= number_format($p['harga'], 0, ',', '.') ?></span>
                            <div class="flex items-center gap-0.5 text-xs text-orange-400 font-bold">
                                ★ <span class="text-base-content/70"><?= number_format($p['rating'], 1) ?></span>
                            </div>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>
<?= $this->endSection() ?>
