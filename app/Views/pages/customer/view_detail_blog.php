<?= $this->extend('main/customer/view_main') ?>
<?= $this->section('content') ?>
<!-- Content -->
<div class="col-span-12 py-12 px-6 md:px-24">
    <a href="<?= base_url('/user/blog') ?>" class="btn btn-ghost btn-sm mb-10 text-xs font-black uppercase tracking-[0.2em] opacity-50 hover:opacity-100 transition-all duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 mr-3">
            <path fill-rule="evenodd" d="M11.03 3.97a.75.75 0 0 1 0 1.06l-6.22 6.22H21a.75.75 0 0 1 0 1.5H4.81l6.22 6.22a.75.75 0 1 1-1.06 1.06l-7.5-7.5a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
        </svg>
        Kembali ke Feed
    </a>

    <div class="grid grid-cols-12 gap-16">
        <!-- Main Article -->
        <article class="col-span-12 lg:col-span-8">
            <header class="mb-12">
                <div class="flex items-center gap-6 mb-6 text-[10px] font-black uppercase tracking-[0.4em] text-primary">
                    <p><?= date('d F Y', strtotime($b['tanggal_publish'])) ?></p>
                    <p class="opacity-20 font-normal">|</p>
                    <p><?= $b['views'] ?> Pembaca</p>
                </div>
                <h1 class="text-5xl md:text-6xl font-black leading-[1.05] mb-8 tracking-tighter"><?= $b['judul'] ?></h1>

                <div class="flex items-center justify-between border-y border-base-content/5 py-6">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-2xl bg-base-300 dynamic-logo shadow-lg"></div>
                        <div>
                            <p class="text-xs font-black uppercase tracking-widest text-base-content"><?= $b['author'] ?></p>
                            <p class="text-[10px] text-primary font-black uppercase tracking-[0.1em]">WHF Health Advisor</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <button class="btn btn-circle btn-sm btn-ghost border border-base-content/10"><svg xmlns="http://www.w3.org/2000/svg" class="w-4" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M14 9V5l7 7l-7 7v-4.1c-5 0-8.5 1.6-11 5.1c1-5 4-10 11-11" />
                            </svg></button>
                        <button class="btn btn-circle btn-sm btn-ghost border border-base-content/10"><svg xmlns="http://www.w3.org/2000/svg" class="w-4" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3C4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5C22 5.42 19.58 3 16.5 3" />
                            </svg></button>
                    </div>
                </div>
            </header>

            <div class="rounded-[2.5rem] overflow-hidden shadow-[0_32px_64px_-16px_rgba(0,0,0,0.2)] mb-12 transform hover:scale-[1.02] transition-transform duration-500 ring-1 ring-white/10">
                <img src="<?= base_url('assets/img/blog/' . ($b['foto_cover'] ?: 'default.png')) ?>"
                    class="w-full h-auto object-cover"
                    onerror="this.src='https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp'" />
            </div>

            <div class="prose prose-xl prose-primary max-w-none text-base-content/80 leading-[1.8] text-justify font-medium">
                <?= $b['konten'] ?>
            </div>

            <div class="mt-20 p-10 bg-base-200 rounded-[2.5rem] text-center border border-base-content/5">
                <h3 class="text-2xl font-black mb-4 uppercase tracking-tighter">Apakah artikel ini bermanfaat?</h3>
                <div class="flex justify-center gap-4">
                    <button class="btn btn-primary px-8 rounded-2xl font-black uppercase text-xs tracking-widest text-white">Bermanfaat</button>
                    <button class="btn btn-ghost px-8 rounded-2xl font-black uppercase text-xs tracking-widest opacity-50">Kurang Relevan</button>
                </div>
            </div>
        </article>

        <!-- Sidebar / Related -->
        <aside class="col-span-12 lg:col-span-4">
            <div class="sticky top-32">
                <div class="mb-12">
                    <h2 class="text-2xl font-black mb-8 border-l-4 border-secondary pl-4 uppercase tracking-tighter">Baca Selanjutnya</h2>
                    <div class="flex flex-col gap-10">
                        <?php foreach ($related as $r): ?>
                            <a href="<?= base_url('/user/blog/detail/' . $r['slug']) ?>" class="group flex flex-col gap-4">
                                <div class="w-full aspect-video rounded-2xl overflow-hidden shadow-xl ring-1 ring-white/5 shrink-0">
                                    <img src="<?= base_url('assets/img/blog/' . ($r['foto_cover'] ?: 'default.png')) ?>"
                                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                                        onerror="this.src='https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp'" />
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-[10px] font-black uppercase text-secondary tracking-[0.2em] mb-2 opacity-60"><?= $r['author'] ?></p>
                                    <h3 class="text-lg font-black line-clamp-2 leading-tight group-hover:text-secondary transition-colors"><?= $r['judul'] ?></h3>
                                    <p class="text-[10px] font-bold text-gray-500 mt-2 uppercase tracking-widest"><?= date('d M Y', strtotime($r['tanggal_publish'])) ?></p>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="p-10 bg-gradient-to-br from-secondary to-primary rounded-[2.5rem] text-white shadow-2xl shadow-primary/30 relative overflow-hidden group">
                    <div class="absolute -right-8 -top-8 w-32 h-32 bg-white/10 rounded-full blur-2xl group-hover:scale-150 transition-transform duration-700"></div>
                    <h3 class="text-2xl font-black mb-3 leading-none tracking-tighter">Butuh Tips Khusus?</h3>
                    <p class="text-sm font-bold opacity-80 mb-8 leading-relaxed">Konsultasikan target fitnessmu dengan personal trainer terbaik kami.</p>
                    <a href="<?= base_url('/user/trainer') ?>" class="btn btn-white w-full font-black uppercase text-xs tracking-widest rounded-2xl">Cari Trainer</a>
                </div>
            </div>
        </aside>
    </div>
</div>
<!-- Content -->
<?= $this->endSection() ?>