<?= $this->extend('main/customer/view_main') ?>
<?= $this->section('content') ?>
<!-- Content -->
<div class="col-span-12">
    <div class="grid grid-cols-6 md:grid-cols-12 md:px-12 px-8 py-10 gap-12">
        <!-- Terbaru -->
        <div class="col-span-6 md:col-span-6">
            <h1 class="text-2xl font-black mb-6 border-l-4 border-primary pl-4 uppercase tracking-tighter">Terbaru</h1>
            <?php if ($latest): ?>
                <a href="<?= base_url('/user/blog/detail/' . $latest['slug']) ?>" class="group block">
                    <div class="overflow-hidden rounded-3xl mb-6 shadow-2xl relative">
                        <img src="<?= base_url('assets/img/blog/' . ($latest['foto_cover'] ?: 'default.png')) ?>"
                            class="w-full h-96 object-cover transition-transform duration-700 group-hover:scale-110"
                            onerror="this.src='https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp'" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-8">
                            <span class="text-white font-bold uppercase tracking-widest text-xs border border-white/30 px-4 py-2 rounded-full backdrop-blur-md">Baca Selengkapnya</span>
                        </div>
                    </div>
                    <h1 class="text-3xl font-black mb-4 group-hover:text-primary transition-colors leading-[1.1]"><?= $latest['judul'] ?></h1>
                    <div class="flex flex-row items-center gap-4 mb-4 text-xs font-black uppercase tracking-[0.2em] text-gray-400">
                        <p><?= date('d M Y', strtotime($latest['tanggal_publish'])) ?></p>
                        <p class="text-primary font-bold opacity-30">/</p>
                        <p class="text-primary"><?= $latest['author'] ?></p>
                    </div>
                    <p class="text-sm font-medium text-gray-500 text-justify leading-relaxed line-clamp-3">
                        <?= strip_tags($latest['konten']) ?>
                    </p>
                </a>
            <?php else: ?>
                <div class="bg-base-200/50 p-10 rounded-3xl text-center italic opacity-50">Belum ada artikel terbaru.</div>
            <?php endif; ?>
        </div>

        <!-- Paling Banyak Dibaca -->
        <div class="col-span-6 md:col-span-6">
            <h1 class="text-2xl font-black mb-6 border-l-4 border-secondary pl-4 uppercase tracking-tighter">Populer</h1>
            <div class="flex flex-col gap-8">
                <?php if (empty($mostRead)): ?>
                    <div class="bg-base-200/50 p-10 rounded-3xl text-center italic opacity-50">Belum ada artikel populer.</div>
                <?php else: ?>
                    <?php foreach ($mostRead as $m): ?>
                        <a href="<?= base_url('/user/blog/detail/' . $m['slug']) ?>" class="group flex flex-col md:flex-row gap-6 items-start">
                            <div class="w-full md:w-56 h-36 overflow-hidden rounded-2xl shadow-xl shrink-0">
                                <img src="<?= base_url('assets/img/blog/' . ($m['foto_cover'] ?: 'default.png')) ?>"
                                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-125"
                                    onerror="this.src='https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp'" />
                            </div>
                            <div class="flex flex-col gap-2">
                                <h1 class="text-xl font-black group-hover:text-secondary transition-colors line-clamp-2 leading-tight"><?= $m['judul'] ?></h1>
                                <div class="flex flex-row items-center gap-3 text-[10px] font-black uppercase tracking-[0.2em]">
                                    <p class="text-gray-400"><?= date('d M Y', strtotime($m['tanggal_publish'])) ?></p>
                                    <p class="text-secondary font-bold opacity-30">/</p>
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
    <div class="grid grid-cols-12 gap-8 px-8 md:px-12 pb-20">
        <div class="col-span-12">
            <h1 class="text-2xl font-black mb-8 border-l-4 border-gray-300 pl-4 uppercase tracking-tighter">Artikel Lainnya</h1>
        </div>

        <?php if (empty($others)): ?>
            <div class="col-span-12 py-20 bg-base-200/30 rounded-3xl text-center italic opacity-30">
                <p>Tidak ada artikel lainnya saat ini.</p>
            </div>
        <?php else: ?>
            <?php foreach ($others as $o): ?>
                <div class="md:col-span-3 col-span-12">
                    <a href="<?= base_url('/user/blog/detail/' . $o['slug']) ?>" class="card bg-base-300 w-full shadow-sm hover:shadow-2xl transition-all duration-500 h-full group border border-white/5">
                        <figure class="h-56 overflow-hidden">
                            <img src="<?= base_url('assets/img/blog/' . ($o['foto_cover'] ?: 'default.png')) ?>"
                                alt="<?= $o['judul'] ?>"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                                onerror="this.src='https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp'" />
                        </figure>
                        <div class="card-body p-6">
                            <p class="text-[10px] font-black uppercase tracking-[0.2em] text-primary mb-2 opacity-70"><?= $o['author'] ?></p>
                            <p class="font-black text-lg line-clamp-2 mb-3 leading-tight group-hover:text-primary transition-colors"><?= $o['judul'] ?></p>
                            <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mt-auto border-t border-gray-500/10 pt-4"><?= date('d M Y', strtotime($o['tanggal_publish'])) ?></p>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>
<!-- Content -->
<?= $this->endSection() ?>