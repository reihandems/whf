<?= $this->extend('main/customer/view_main') ?>
<?= $this->section('content') ?>
<div class="col-span-12">
    <div class="grid grid-cols-12 px-8 md:px-12 py-6 gap-x-8 gap-y-2">
        <div class="col-span-12">
            <div class="breadcrumbs text-sm">
                <ul>
                    <li>
                        <a href="<?= base_url('user/home') ?>" class="text-gray-500">Home</a>
                    </li>
                    <li class="font-semibold">Booking Trainer</li>
                </ul>
            </div>
        </div>
        <div class="col-span-12">
            <h1 class="text-2xl font-semibold">Booking Saya</h1>
        </div>
        <div class="col-span-12 mt-3">
            <div role="tablist" class="tabs tabs-box">
                <a href="<?= base_url('/user/booking?status=menunggu_pembayaran') ?>" role="tab" class="tab <?= $current_status == 'menunggu_pembayaran' ? 'tab-active' : '' ?>">Belum Bayar (<?= $counts['menunggu_pembayaran'] ?>)</a>
                <a href="<?= base_url('/user/booking?status=terkonfirmasi') ?>" role="tab" class="tab <?= $current_status == 'terkonfirmasi' ? 'tab-active' : '' ?>">Terkonfirmasi (<?= $counts['terkonfirmasi'] ?>)</a>
                <a href="<?= base_url('/user/booking?status=selesai') ?>" role="tab" class="tab <?= $current_status == 'selesai' ? 'tab-active' : '' ?>">Selesai</a>
                <a href="<?= base_url('/user/booking?status=dibatalkan') ?>" role="tab" class="tab <?= $current_status == 'dibatalkan' ? 'tab-active' : '' ?>">Dibatalkan</a>
            </div>
        </div>
        <?php if (empty($bookings)): ?>
            <div class="col-span-12 p-8 bg-base-300 mt-3 rounded-xl text-center italic opacity-50">
                Belum ada booking untuk status ini.
            </div>
        <?php else: ?>
            <?php foreach ($bookings as $b): ?>
                <div class="col-span-12 flex flex-col gap-5 p-8 bg-base-300 mt-3 rounded-xl border border-base-100/10 active:border-primary transition-all">
                    <div class="flex flex-row items-center justify-between">
                        <div class="flex flex-row items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            <p class="font-bold"><?= $b['kode_booking'] ?></p>
                            <?php if ($b['status_booking'] == 'menunggu_pembayaran'): ?>
                                <div class="badge badge-soft badge-warning">&bull; Menunggu Pembayaran</div>
                            <?php elseif ($b['status_booking'] == 'terkonfirmasi'): ?>
                                <div class="badge badge-soft badge-success">&bull; Terkonfirmasi</div>
                            <?php elseif ($b['status_booking'] == 'selesai'): ?>
                                <div class="badge badge-soft badge-primary">&bull; Selesai</div>
                            <?php else: ?>
                                <div class="badge badge-soft badge-error">&bull; <?= ucfirst($b['status_booking']) ?></div>
                            <?php endif; ?>
                        </div>
                        <p class="text-xs text-gray-500"><?= date('d M Y, H:i', strtotime($b['created_at'])) ?></p>
                    </div>

                    <div class="flex flex-row items-center justify-between gap-4">
                        <div class="kiri flex flex-row gap-5 items-center">
                            <div class="avatar">
                                <div class="w-20 rounded-xl">
                                    <img src="<?= base_url('assets/img/trainer/' . ($b['foto_profil'] ?: 'default.png')) ?>" onerror="this.src='https://img.daisyui.com/images/profile/demo/batperson@192.webp'" />
                                </div>
                            </div>
                            <div class="flex flex-col gap-1">
                                <div class="badge badge-soft badge-primary badge-xs"><?= $b['kategori'] ?></div>
                                <h1 class="text-xl font-bold"><?= $b['nama_trainer'] ?></h1>
                                <p class="text-sm text-gray-400">Jadwal Sesi Pertama: <span class="font-semibold text-white"><?= date('d M Y', strtotime($b['tanggal_booking'])) ?></span></p>
                                <p class="text-sm text-gray-400">Total: <span class="font-semibold text-white"><?= $b['jumlah_sesi'] ?> Sesi</span></p>
                            </div>
                        </div>
                        <div class="kanan text-right">
                            <p class="text-gray-400 text-sm">Total Pembayaran</p>
                            <p class="text-2xl font-black text-primary">Rp. <?= number_format($b['total'], 0, ',', '.') ?></p>
                        </div>
                    </div>

                    <div class="divider my-0"></div>

                    <div class="flex flex-row items-center justify-between">
                        <div class="flex flex-row gap-2">
                            <div class="flex items-center gap-2 text-xs text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                                <span>Trainee: <?= $b['nama_trainee'] ?></span>
                            </div>
                        </div>
                        <div class="flex flex-row gap-2">
                            <a href="<?= base_url('/user/booking/detail/' . $b['id_booking']) ?>" class="btn btn-soft btn-sm md:btn-md">Detail Booking</a>
                            <?php if ($b['status_booking'] == 'selesai'): ?>
                                <?php if ($b['review_count'] > 0): ?>
                                    <button class="btn btn-primary btn-sm md:btn-md btn-disabled">Sudah Diulas</button>
                                <?php else: ?>
                                    <button class="btn btn-primary btn-sm md:btn-md" onclick="openRatingModal(<?= $b['id_booking'] ?>, <?= $b['id_trainer'] ?>, '<?= $b['nama_trainer'] ?>')">Beri Nilai</button>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>

<!-- Rating Modal -->
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