<?= $this->extend('main/customer/view_main') ?>
<?= $this->section('content') ?>
<!-- Content -->
<div class="col-span-12 py-10 px-6 md:px-24">
    <a href="<?= base_url('/user/blog') ?>" class="btn btn-ghost btn-sm mb-8 text-xs font-bold uppercase tracking-widest">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 mr-2">
            <path fill-rule="evenodd"
                d="M11.03 3.97a.75.75 0 0 1 0 1.06l-6.22 6.22H21a.75.75 0 0 1 0 1.5H4.81l6.22 6.22a.75.75 0 1 1-1.06 1.06l-7.5-7.5a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 0 1 1.06 0Z"
                clip-rule="evenodd" />
        </svg>
        Kembali ke Artikel
    </a>

    <div class="grid grid-cols-12 gap-8 lg:gap-12 min-w-0 overflow-hidden">
        <!-- Main Article -->
        <article class="col-span-12 lg:col-span-8 min-w-0 overflow-hidden">
            <div class="mb-8">
                <div
                    class="flex items-center gap-4 mb-4 text-[10px] font-black uppercase tracking-[0.3em] text-primary">
                    <p><?= date('d F Y', strtotime($b['tanggal_publish'])) ?></p>
                    <p class="opacity-20">|</p>
                    <p><?= $b['views'] ?> Views</p>
                </div>
                <h1 class="text-2xl md:text-5xl font-black leading-tight mb-6 break-words overflow-hidden">
                    <?= $b['judul'] ?>
                </h1>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-base-300 dynamic-logo"></div>
                    <div>
                        <p class="text-xs font-bold uppercase tracking-widest"><?= $b['author'] ?></p>
                        <p class="text-[10px] text-gray-400 font-semibold uppercase">WHF Health Expert</p>
                    </div>
                </div>
            </div>

            <div class="w-full max-w-full rounded-3xl overflow-hidden shadow-2xl mb-10 ring-1 ring-black/5">
                <img src="<?= base_url('assets/img/blog/' . ($b['foto_cover'] ?: 'default.png')) ?>"
                    class="block w-full max-w-full h-auto md:h-[420px] object-cover"
                    onerror="this.src='https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp'" />
            </div>

            <div
                class="prose prose-lg max-w-none text-gray-600 leading-relaxed text-justify font-medium break-words overflow-hidden">
                <?= $b['konten'] ?>
            </div>
        </article>

        <!-- Sidebar / Related -->
        <aside class="col-span-12 lg:col-span-4">
            <div class="sticky top-24">
                <h2 class="text-xl font-black mb-8 border-b-2 border-primary/20 pb-4 uppercase tracking-tighter">Artikel
                    Terkait</h2>
                <div class="flex flex-col gap-8">
                    <?php foreach ($related as $r): ?>
                        <a href="<?= base_url('/blog/detail/' . $r['slug']) ?>" class="group flex gap-4">
                            <div class="w-24 h-24 rounded-2xl overflow-hidden shadow-md shrink-0 ring-1 ring-black/5">
                                <img src="<?= base_url('assets/img/blog/' . ($r['foto_cover'] ?: 'default.png')) ?>"
                                    class="w-full h-full object-cover transition-transform group-hover:scale-110"
                                    onerror="this.src='https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp'" />
                            </div>
                            <div class="flex flex-col justify-center">
                                <p class="text-[8px] font-black uppercase text-primary tracking-widest mb-1 opacity-70">
                                    <?= $r['author'] ?></p>
                                <h3
                                    class="text-sm font-bold line-clamp-2 leading-snug group-hover:text-primary transition-colors">
                                    <?= $r['judul'] ?></h3>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>

                <div class="mt-12 p-8 bg-primary rounded-3xl text-white shadow-xl shadow-primary/20">
                    <h3 class="text-lg font-black mb-2 leading-tight">Dapatkan Update Mingguan!</h3>
                    <p class="text-xs font-semibold opacity-80 mb-6">Bergabunglah dengan 5000+ member lainnya untuk info
                        fitness terbaru.</p>
                    <a href="<?= base_url('/register') ?>" class="btn btn-sm w-full font-bold">Daftar Sekarang</a>
                </div>
            </div>
        </aside>
    </div>
</div>
<!-- Content -->
<?= $this->endSection() ?>