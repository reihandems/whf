<?= $this->extend('main/customer/view_main') ?>
<?= $this->section('content') ?>
<div class="col-span-12">
    <div class="grid grid-cols-12 px-12 py-6 gap-x-8 gap-y-6">
        <div class="col-span-12">
            <a href="<?= base_url('/user/booking') ?>" class="btn btn-sm md:btn-md">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                </svg>
                Kembali
            </a>
        </div>

        <div class="col-span-12 md:col-span-8">
            <div class="bg-base-300 p-8 rounded-2xl flex flex-col gap-6">
                <div class="flex flex-row items-center justify-between">
                    <div class="flex flex-row items-center gap-3">
                        <div class="p-3 bg-primary/10 rounded-xl text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                <polyline points="14 2 14 8 20 8"></polyline>
                                <line x1="16" y1="13" x2="8" y2="13"></line>
                                <line x1="16" y1="17" x2="8" y2="17"></line>
                                <polyline points="10 9 9 9 8 9"></polyline>
                            </svg>
                        </div>
                        <div>
                            <h1 class="text-xl font-bold"><?= $b['kode_booking'] ?></h1>
                            <p class="text-xs text-gray-400">Dibuat pada: <?= date('d M Y, H:i', strtotime($b['created_at'])) ?></p>
                        </div>
                    </div>
                    <?php if ($b['status_booking'] == 'menunggu_pembayaran'): ?>
                        <div class="badge badge-warning badge-lg">&bull; Menunggu Pembayaran</div>
                    <?php elseif ($b['status_booking'] == 'terkonfirmasi'): ?>
                        <div class="badge badge-success badge-lg">&bull; Terkonfirmasi</div>
                    <?php elseif ($b['status_booking'] == 'selesai'): ?>
                        <div class="badge badge-primary badge-lg">&bull; Selesai</div>
                    <?php else: ?>
                        <div class="badge badge-error badge-lg">&bull; <?= ucfirst($b['status_booking']) ?></div>
                    <?php endif; ?>
                </div>

                <div class="divider"></div>

                <div class="flex flex-col gap-4">
                    <h2 class="text-lg font-bold">Informasi Trainer</h2>
                    <div class="flex flex-row items-center gap-5 p-4 bg-base-200 rounded-xl border border-base-100">
                        <div class="avatar">
                            <div class="w-24 rounded-xl">
                                <img src="<?= base_url('assets/img/trainer/' . ($b['foto_profil'] ?: 'default.png')) ?>" onerror="this.src='https://img.daisyui.com/images/profile/demo/batperson@192.webp'" />
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <div class="badge badge-soft badge-primary badge-xs"><?= $b['kategori'] ?></div>
                            <h1 class="text-2xl font-black"><?= $b['nama_trainer'] ?></h1>
                            <p class="text-sm text-gray-500 font-semibold italic">Rp. <?= number_format($b['harga_per_sesi'], 0, ',', '.') ?> / sesi</p>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-6">
                    <div class="flex flex-col gap-4">
                        <h2 class="text-lg font-bold">Jadwal Sesi</h2>
                        <div class="p-4 bg-base-200 rounded-xl border border-base-100 flex items-center gap-3">
                            <div class="p-2 bg-secondary/10 rounded-lg text-secondary">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-400">Tanggal Mulai</p>
                                <p class="font-bold"><?= date('l, d M Y', strtotime($b['tanggal_booking'])) ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-4">
                        <h2 class="text-lg font-bold">Durasi</h2>
                        <div class="p-4 bg-base-200 rounded-xl border border-base-100 flex items-center gap-3">
                            <div class="p-2 bg-accent/10 rounded-lg text-accent">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-400">Total Pertemuan</p>
                                <p class="font-bold"><?= $b['jumlah_sesi'] ?> Sesi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-span-12 md:col-span-4 flex flex-col gap-6">
            <div class="bg-base-300 p-8 rounded-2xl flex flex-col gap-5">
                <h2 class="text-lg font-bold">Detail Trainee</h2>
                <div class="flex flex-col gap-4">
                    <div class="flex flex-col">
                        <p class="text-xs text-gray-400 font-bold uppercase">Nama Trainee</p>
                        <p class="font-semibold"><?= $b['nama_trainee'] ?></p>
                    </div>
                    <div class="flex flex-col">
                        <p class="text-xs text-gray-400 font-bold uppercase">Email</p>
                        <p class="font-semibold"><?= $b['email_trainee'] ?></p>
                    </div>
                    <div class="flex flex-col">
                        <p class="text-xs text-gray-400 font-bold uppercase">No. HP</p>
                        <p class="font-semibold"><?= $b['no_hp_trainee'] ?></p>
                    </div>
                    <div class="flex flex-col">
                        <p class="text-xs text-gray-400 font-bold uppercase">Alamat</p>
                        <p class="font-semibold"><?= $b['alamat_trainee'] ?></p>
                    </div>
                </div>

                <div class="divider italic text-gray-500 text-xs">Rincian Pembayaran</div>

                <div class="flex flex-row justify-between text-sm">
                    <p class="text-gray-400 font-semibold">Subtotal</p>
                    <p class="font-bold">Rp. <?= number_format($b['total'], 0, ',', '.') ?></p>
                </div>
                <div class="flex flex-row justify-between items-center mt-2">
                    <p class="text-lg font-bold">Total</p>
                    <p class="text-2xl font-black text-primary">Rp. <?= number_format($b['total'], 0, ',', '.') ?></p>
                </div>

                <?php if ($b['status_booking'] == 'selesai' && $b['review_count'] == 0): ?>
                    <button class="btn btn-primary w-full mt-4" onclick="openRatingModal(<?= $b['id_booking'] ?>, <?= $b['id_trainer'] ?>, '<?= $b['nama_trainer'] ?>')">Beri Nilai Trainer</button>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<!-- Same Rating Modal as in list view -->
<dialog id="rating_modal" class="modal">
    <div class="modal-box w-11/12 max-w-lg bg-base-300">
        <h3 class="text-xl font-bold mb-4 text-center">Beri Nilai Trainer</h3>
        <form action="<?= base_url('/user/booking/review/submit') ?>" method="POST" id="rating_form">
            <?= csrf_field() ?>
            <input type="hidden" name="id_booking" id="modal_id_booking">
            <input type="hidden" name="id_trainer" id="modal_id_trainer">

            <div class="flex flex-col items-center gap-6 py-4">
                <div class="text-center">
                    <p class="text-sm text-gray-400 mb-1">Anda mengulas trainer:</p>
                    <h4 id="modal_trainer_name" class="text-lg font-bold text-primary"></h4>
                </div>

                <div class="flex flex-col items-center gap-2">
                    <p class="text-sm font-semibold uppercase tracking-widest text-gray-500">Rating</p>
                    <div class="rating rating-lg">
                        <input type="radio" name="rating" value="1" class="mask mask-star-2 bg-orange-400" />
                        <input type="radio" name="rating" value="2" class="mask mask-star-2 bg-orange-400" />
                        <input type="radio" name="rating" value="3" class="mask mask-star-2 bg-orange-400" />
                        <input type="radio" name="rating" value="4" class="mask mask-star-2 bg-orange-400" />
                        <input type="radio" name="rating" value="5" class="mask mask-star-2 bg-orange-400" checked />
                    </div>
                </div>

                <div class="w-full">
                    <p class="text-sm font-semibold uppercase tracking-widest text-gray-500 mb-2">Komentar</p>
                    <textarea name="komentar" class="textarea textarea-bordered w-full h-32" placeholder="Bagaimana pengalaman latihan Anda bersama trainer ini?"></textarea>
                </div>
            </div>

            <div class="modal-action flex justify-center gap-3">
                <button type="button" class="btn btn-ghost flex-1" onclick="rating_modal.close()">Batal</button>
                <button type="submit" class="btn btn-primary flex-1">Kirim Ulasan</button>
            </div>
        </form>
    </div>
</dialog>

<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
    function openRatingModal(id_booking, id_trainer, trainer_name) {
        document.getElementById('modal_id_booking').value = id_booking;
        document.getElementById('modal_id_trainer').value = id_trainer;
        document.getElementById('modal_trainer_name').innerText = trainer_name;
        document.getElementById('rating_modal').showModal();
    }
</script>
<?= $this->endSection() ?>