<?= $this->extend('main/trainer/view_main') ?>
<?= $this->section('content') ?>
<div class="grid grid-cols-12 gap-4">
    <div class="col-span-12">
        <h1 class="text-gray-400">Ringkasan</h1>
    </div>
    <div class="col-span-12">
        <div class="stats shadow bg-base-300 w-full">
            <div class="stat text-center">
                <div class="stat-title">Total Pendapatan Bulan Ini</div>
                <div class="stat-value">Rp. <?= number_format($total_pendapatan, 0, ',', '.') ?></div>
                <div class="stat-desc">Semua waktu</div>
            </div>
        </div>
    </div>
    <div class="col-span-6">
        <div class="stats shadow bg-base-300 w-full">
            <div class="stat">
                <div class="stat-title">Total Trainee</div>
                <div class="stat-value"><?= number_format($total_trainee, 0, ',', '.') ?></div>
            </div>
        </div>
    </div>
    <div class="col-span-6">
        <div class="stats shadow bg-base-300 w-full">
            <div class="stat">
                <div class="stat-title">Total Booking</div>
                <div class="stat-value"><?= number_format($total_booking, 0, ',', '.') ?></div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>