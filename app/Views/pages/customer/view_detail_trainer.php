<?= $this->extend('main/customer/view_main') ?>
<?= $this->section('content') ?>
<!-- Content -->
<div class="col-span-12 px-12 py-8">
    <a href="javascript:history.back()" class="btn mb-5 text-xs font-bold uppercase transition-all duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4">
            <path fill-rule="evenodd" d="M11.03 3.97a.75.75 0 0 1 0 1.06l-6.22 6.22H21a.75.75 0 0 1 0 1.5H4.81l6.22 6.22a.75.75 0 1 1-1.06 1.06l-7.5-7.5a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
        </svg>
        Kembali
    </a>
    <div class="grid grid-cols-12 gap-8">
        <div class="col-span-12 md:col-span-6 text-center">
            <img
                src="<?= base_url('assets/img/trainer/' . ($t['foto_profil'] ?: 'default.png')) ?>"
                class="w-full h-[500px] object-cover rounded-2xl shadow-2xl shadow-blue-500/20"
                onerror="this.src='https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp'" />
        </div>
        <div class="col-span-12 md:col-span-6">
            <div class="breadcrumbs text-sm mb-4">
                <ul>
                    <li class="text-gray-500 font-semibold">Trainer</li>
                    <li class="font-semibold">Detail</li>
                </ul>
            </div>

            <div class="badge badge-soft badge-primary mb-2"><?= $t['kategori'] ?></div>
            <h1 class="text-4xl font-black mb-2"><?= $t['nama_trainer'] ?></h1>

            <div class="flex flex-row items-center gap-2 mb-4">
                <div class="rating rating-sm">
                    <?php for ($i = 1; $i <= 5; $i++): ?>
                        <input type="radio" class="mask mask-star-2 bg-orange-400" <?= ($i == round($t['rating'])) ? 'checked' : '' ?> disabled />
                    <?php endfor; ?>
                </div>
                <p class="text-xs font-bold text-gray-500 uppercase tracking-widest"><?= $t['jumlah_review'] ?> Reviews</p>
            </div>

            <div class="bg-base-200/50 p-6 rounded-2xl mb-6 border border-base-content/5">
                <p class="text-xs font-bold text-gray-400 uppercase mb-1">Harga per Sesi</p>
                <div class="flex items-end gap-2">
                    <h2 class="text-3xl font-black text-primary">Rp <?= number_format($t['harga_per_sesi'], 0, ',', '.') ?></h2>
                    <p class="text-sm font-semibold text-gray-500 mb-1">/ sesi</p>
                </div>
            </div>

            <div class="mb-8">
                <p class="text-sm font-bold uppercase tracking-widest text-gray-400 mb-2">Tentang Trainer</p>
                <p class="text-sm text-gray-500 font-medium text-justify leading-relaxed">
                    <?= nl2br(esc($t['deskripsi'])) ?>
                </p>
            </div>

            <form action="<?= base_url('/user/checkout-trainer') ?>" method="GET" class="space-y-4">
                <input type="hidden" name="id_trainer" value="<?= $t['id_trainer'] ?>">
                <fieldset class="fieldset">
                    <legend class="fieldset-legend font-bold">Pilih Tanggal Sesi:</legend>
                    <input type="date" name="tanggal_sesi" class="input input-bordered w-full rounded-xl" required min="<?= date('Y-m-d') ?>" />
                </fieldset>

                <div class="flex flex-row gap-3 pt-4">
                    <button type="submit" class="btn btn-primary flex-1 text-white font-bold rounded-xl shadow-lg shadow-blue-500/30">BOOKING SESI SEKARANG</button>
                    <a href="https://wa.me/621234567890?text=Halo%20saya%20ingin%20tanya%20tentang%20trainer%20<?= urlencode($t['nama_trainer']) ?>" target="_blank" class="btn btn-outline btn-success rounded-xl font-bold">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M19.05 4.91A9.82 9.82 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.26 8.26 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07s.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28" />
                        </svg>
                        Hubungi
                    </a>
                </div>
            </form>

            <div class="grid grid-cols-2 gap-4 mt-12">
                <div class="bg-base-200/30 p-5 rounded-2xl border border-base-content/5">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center text-primary">
                            <img src="<?= base_url('assets/img/icon-trainer-1.svg') ?>" class="w-6 h-6" />
                        </div>
                        <div>
                            <p class="text-[10px] text-gray-400 font-black uppercase tracking-widest">Pengalaman</p>
                            <p class="text-base font-black"><?= $t['pengalaman_tahun'] ?> Tahun</p>
                        </div>
                    </div>
                </div>
                <div class="bg-base-200/30 p-5 rounded-2xl border border-base-content/5">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-xl bg-secondary/10 flex items-center justify-center text-secondary">
                            <img src="<?= base_url('assets/img/icon-trainer-2.svg') ?>" class="w-6 h-6" />
                        </div>
                        <div>
                            <p class="text-[10px] text-gray-400 font-black uppercase tracking-widest">Lokasi</p>
                            <p class="text-base font-black"><?= $t['lokasi'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content -->
<?= $this->endSection() ?>