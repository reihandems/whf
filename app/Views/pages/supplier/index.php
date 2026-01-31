<?= $this->extend('main/supplier/view_main') ?>
<?= $this->section('content') ?>
<div class="grid grid-cols-12 gap-4">
    <div class="col-span-12">
        <h1 class="text-gray-400">Ringkasan</h1>
    </div>
    <div class="col-span-12">
        <div class="stats shadow bg-base-300 w-full">
            <div class="stat text-center">
                <div class="stat-title">Penjualan</div>
                <div class="stat-value">Rp. 1.329.000</div>
                <div class="stat-desc">21% more than last month</div>
            </div>
        </div>
    </div>
    <div class="md:col-span-6 col-span-12">
        <div class="stats shadow bg-base-300 w-full">
            <div class="stat text-center md:text-start">
                <div class="stat-title">Total Barang Return</div>
                <div class="stat-value">89,400</div>
                <div class="stat-desc">21% more than last month</div>
            </div>
        </div>
    </div>
    <div class="md:col-span-6 col-span-12">
        <div class="stats shadow bg-base-300 w-full">
            <div class="stat text-center md:text-start">
                <div class="stat-title">Total Pesanan Hari Ini</div>
                <div class="stat-value">89,400</div>
                <div class="stat-desc">21% more than last month</div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>