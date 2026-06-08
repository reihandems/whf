<?= $this->extend('main/customer/view_main') ?>
<?= $this->section('content') ?>
<!-- Content -->
<div class="col-span-12">
    <div class="grid grid-cols-6 md:grid-cols-12 md:px-12 px-4 py-8 gap-12">
        <!-- Terbaru -->
        <div class="col-span-6 md:col-span-6">
            <h1 class="text-2xl font-bold mb-5 border-l-4 border-primary pl-4">Terbaru</h1>
            <?php if ($latest): ?>
                <a href="<?= base_url('/blog/detail/' . $latest['slug']) ?>" class="group block">
                    <div class="overflow-hidden rounded-2xl mb-4 shadow-xl">
                        <img src="<?= base_url('assets/img/blog/' . ($latest['foto_cover'] ?: 'default.png')) ?>"
                            class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-105"
                            onerror="this.src='https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp'" />
                    </div>
                    <h1 class="text-2xl font-black mb-3 group-hover:text-primary transition-colors leading-tight"><?= $latest['judul'] ?></h1>
                    <div class="flex flex-row items-center gap-3 mb-3 text-sm font-bold">
                        <p class="text-gray-400"><?= date('d M Y', strtotime($latest['tanggal_publish'])) ?></p>
                        <p class="text-gray-300">|</p>
                        <p class="text-primary font-black uppercase tracking-widest text-xs"><?= $latest['author'] ?></p>
                    </div>
                    <p class="text-sm font-medium text-gray-500 text-justify line-clamp-3">
                        <?= strip_tags($latest['konten']) ?>
                    </p>
                </a>
            <?php else: ?>
                <p class="italic text-gray-400">Belum ada artikel terbaru.</p>
            <?php endif; ?>
        </div>

        <!-- Paling Banyak Dibaca -->
        <div class="col-span-6 md:col-span-6">
            <h1 class="text-2xl font-bold mb-5 border-l-4 border-secondary pl-4">Paling Banyak Dibaca</h1>
            <div class="flex flex-col gap-6">
                <?php if (empty($mostRead)): ?>
                    <p class="italic text-gray-400">Belum ada artikel populer.</p>
                <?php else: ?>
                    <?php foreach ($mostRead as $m): ?>
                        <a href="<?= base_url('/blog/detail/' . $m['slug']) ?>" class="group flex flex-col md:flex-row gap-5 items-start">
                            <div class="w-full md:w-48 h-32 overflow-hidden rounded-xl shadow-lg shrink-0">
                                <img src="<?= base_url('assets/img/blog/' . ($m['foto_cover'] ?: 'default.png')) ?>"
                                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                                    onerror="this.src='https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp'" />
                            </div>
                            <div class="flex flex-col gap-1">
                                <h1 class="text-lg font-bold group-hover:text-secondary transition-colors line-clamp-2"><?= $m['judul'] ?></h1>
                                <div class="flex flex-row items-center gap-2 text-[10px] font-bold uppercase tracking-wider">
                                    <p class="text-gray-400"><?= date('d M Y', strtotime($m['tanggal_publish'])) ?></p>
                                    <p class="text-gray-300">|</p>
                                    <p class="text-secondary"><?= $m['author'] ?></p>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Artikel Lainnya -->
    <div class="grid grid-cols-12 gap-8 px-4 md:px-12 pb-12">
        <div class="col-span-12">
            <h1 class="text-2xl font-bold mb-5 border-l-4 border-gray-400 pl-4">Artikel Lainnya</h1>
        </div>

        <?php if (empty($others)): ?>
            <div class="col-span-12 text-center py-10 opacity-50 italic">
                <p>Tidak ada artikel lainnya.</p>
            </div>
        <?php else: ?>
            <?php foreach ($others as $o): ?>
                <div class="md:col-span-3 col-span-12">
                    <a href="<?= base_url('/blog/detail/' . $o['slug']) ?>" class="card bg-base-300 w-full shadow-sm hover:shadow-xl transition-all duration-300 h-full border border-base-content/5">
                        <figure class="h-48 overflow-hidden">
                            <img src="<?= base_url('assets/img/blog/' . ($o['foto_cover'] ?: 'default.png')) ?>"
                                alt="<?= $o['judul'] ?>"
                                class="w-full h-full object-cover"
                                onerror="this.src='https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp'" />
                        </figure>
                        <div class="card-body p-5">
                            <p class="text-[10px] font-black uppercase tracking-widest text-primary"><?= $o['author'] ?></p>
                            <p class="font-bold text-sm line-clamp-3 mb-2"><?= $o['judul'] ?></p>
                            <p class="text-[10px] font-bold text-gray-400"><?= date('d M Y', strtotime($o['tanggal_publish'])) ?></p>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>
<!-- Content -->
<?= $this->endSection() ?>