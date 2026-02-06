<?= $this->extend('main/trainer/view_main') ?>
<?= $this->section('content') ?>
<div class="grid grid-cols-12 gap-4">
    <div class="col-span-12 flex md:flex-row flex-col justify-between md:gap-0 gap-3">
        <div role="tablist" class="tabs tabs-box">
            <a href="<?= base_url('trainer/booking?status=terkonfirmasi') ?>" role="tab" class="tab <?= $current_status == 'terkonfirmasi' ? 'tab-active' : '' ?>">
                Booking Aktif (<?= $counts['terkonfirmasi'] ?>)
            </a>
            <a href="<?= base_url('trainer/booking?status=selesai') ?>" role="tab" class="tab <?= $current_status == 'selesai' ? 'tab-active' : '' ?>">
                Selesai
            </a>
        </div>
        <label class="input w-full md:w-64">
            <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" fill="none" stroke="currentColor">
                    <circle cx="11" cy="11" r="8"></circle>
                    <path d="m21 21-4.3-4.3"></path>
                </g>
            </svg>
            <input type="search" placeholder="Cari Kode Booking / Nama..." />
        </label>
    </div>

    <div class="col-span-12">
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success mb-4 text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span><?= session()->getFlashdata('success') ?></span>
            </div>
        <?php endif; ?>

        <div class="overflow-x-auto rounded-box border border-base-content/5 bg-base-300">
            <table class="table table-zebra w-full">
                <thead>
                    <tr class="bg-base-200">
                        <th>No</th>
                        <th>Info Booking</th>
                        <th>Detail Trainee</th>
                        <th>Jadwal & Sesi</th>
                        <th>Total Pendapatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($bookings)): ?>
                        <tr>
                            <td colspan="6" class="text-center py-20">
                                <div class="flex flex-col items-center gap-2 opacity-30">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                        <line x1="16" y1="2" x2="16" y2="6"></line>
                                        <line x1="8" y1="2" x2="8" y2="6"></line>
                                        <line x1="3" y1="10" x2="21" y2="10"></line>
                                    </svg>
                                    <p class="italic">Belum ada data booking dengan status ini.</p>
                                </div>
                            </td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($bookings as $index => $b): ?>
                            <tr class="hover">
                                <th><?= $index + 1 ?></th>
                                <td>
                                    <div class="flex flex-col">
                                        <span class="font-bold text-primary"><?= $b['kode_booking'] ?></span>
                                        <span class="text-[10px] opacity-50"><?= date('d/m/Y H:i', strtotime($b['created_at'])) ?></span>
                                        <?php if ($b['status_booking'] == 'terkonfirmasi'): ?>
                                            <span class="badge badge-soft badge-info badge-xs mt-1">Aktif</span>
                                        <?php elseif ($b['status_booking'] == 'selesai'): ?>
                                            <span class="badge badge-soft badge-success badge-xs mt-1">Selesai</span>
                                        <?php endif; ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="flex flex-col">
                                        <span class="font-bold"><?= $b['nama_trainee'] ?></span>
                                        <span class="text-xs opacity-60"><?= $b['email_trainee'] ?></span>
                                        <span class="text-[10px] italic"><?= $b['no_hp_trainee'] ?></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="flex flex-col">
                                        <div class="flex items-center gap-1 text-xs">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                                <line x1="3" y1="10" x2="21" y2="10"></line>
                                            </svg>
                                            <span>Mulai: <?= date('d M Y', strtotime($b['tanggal_booking'])) ?></span>
                                        </div>
                                        <span class="badge badge-outline badge-xs mt-1"><?= $b['jumlah_sesi'] ?> Sesi</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="font-black">Rp <?= number_format($b['total'], 0, ',', '.') ?></span>
                                </td>
                                <td>
                                    <?php if ($b['status_booking'] == 'terkonfirmasi'): ?>
                                        <a href="<?= base_url('trainer/booking/complete/' . $b['id_booking']) ?>"
                                            class="btn btn-sm btn-success text-white"
                                            onclick="return confirm('Apakah seluruh sesi latihan untuk trainee ini sudah selesai?')">
                                            Selesaikan
                                        </a>
                                    <?php else: ?>
                                        <button class="btn btn-sm btn-disabled">Selesai</button>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>