<?= $this->extend('main/supplier/view_main') ?>
<?= $this->section('content') ?>
<div class="grid grid-cols-12 gap-4">
    <div class="col-span-12 flex md:flex-row flex-col justify-between md:gap-0 gap-3">
        <div role="tablist" class="tabs tabs-box">
            <a href="<?= base_url('supplier/pesanan?status=pending') ?>" role="tab" class="tab <?= $current_status == 'pending' ? 'tab-active' : '' ?>">Pending (<?= $counts['pending'] ?>)</a>
            <a href="<?= base_url('supplier/pesanan?status=diproses') ?>" role="tab" class="tab <?= $current_status == 'diproses' ? 'tab-active' : '' ?>">Diproses (<?= $counts['diproses'] ?>)</a>
            <a href="<?= base_url('supplier/pesanan?status=dikirim') ?>" role="tab" class="tab <?= $current_status == 'dikirim' ? 'tab-active' : '' ?>">Dikirim (<?= $counts['dikirim'] ?>)</a>
            <a href="<?= base_url('supplier/pesanan?status=selesai') ?>" role="tab" class="tab <?= $current_status == 'selesai' ? 'tab-active' : '' ?>">Selesai</a>
        </div>
        <label class="input w-full md:w-48">
            <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <g
                    stroke-linejoin="round"
                    stroke-linecap="round"
                    stroke-width="2.5"
                    fill="none"
                    stroke="currentColor">
                    <circle cx="11" cy="11" r="8"></circle>
                    <path d="m21 21-4.3-4.3"></path>
                </g>
            </svg>
            <input type="search" required placeholder="Cari Pesanan..." />
        </label>
    </div>
    <div class="col-span-12">
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success mb-4">
                <span><?= session()->getFlashdata('success') ?></span>
            </div>
        <?php endif; ?>

        <div class="overflow-x-auto rounded-box border border-base-content/5 bg-base-300">
            <table class="table">
                <!-- head -->
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Pesanan</th>
                        <th>Nama Penerima</th>
                        <th>Tanggal Pesanan</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($orders)): ?>
                        <tr>
                            <td colspan="7" class="text-center py-10 opacity-50 italic">Belum ada pesanan masuk.</td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($orders as $index => $order): ?>
                            <tr>
                                <th><?= $index + 1 ?></th>
                                <td class="font-bold text-primary"><?= $order['kode_pesanan'] ?></td>
                                <td><?= $order['nama_penerima'] ?></td>
                                <td><?= date('d M Y, H:i', strtotime($order['created_at'])) ?></td>
                                <td class="font-semibold">Rp. <?= number_format($order['total'], 0, ',', '.') ?></td>
                                <td>
                                    <?php if ($order['status_pesanan'] == 'menunggu_pembayaran'): ?>
                                        <span class="text-warning">Menunggu Pembayaran</span>
                                    <?php elseif ($order['status_pesanan'] == 'diproses'): ?>
                                        <span class="text-info">Diproses</span>
                                    <?php elseif ($order['status_pesanan'] == 'dikirim'): ?>
                                        <span class="text-success">Dikirim</span>
                                    <?php elseif ($order['status_pesanan'] == 'selesai'): ?>
                                        <span class="text-primary">Selesai</span>
                                    <?php else: ?>
                                        <span class="text-ghost"><?= ucfirst($order['status_pesanan']) ?></span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <div class="flex gap-2">
                                        <?php if ($order['status_pesanan'] == 'pending' || $order['status_pesanan'] == 'menunggu_pembayaran'): ?>
                                            <!-- Manual process if needed, but usually waiting for Payment Notification -->
                                            <a href="<?= base_url('supplier/pesanan/process/' . $order['id_pesanan']) ?>" class="btn btn-sm btn-primary text-white">Proses</a>
                                        <?php elseif ($order['status_pesanan'] == 'diproses'): ?>
                                            <a href="<?= base_url('supplier/pesanan/ship/' . $order['id_pesanan']) ?>" class="btn btn-sm btn-success text-white">Kirim</a>
                                        <?php endif; ?>
                                        <a href="<?= base_url('supplier/pesanan/detail/' . $order['id_pesanan']) ?>" class="btn btn-sm btn-ghost">Detail</a>
                                    </div>
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