<?= $this->extend('main/admin/view_main') ?>
<?= $this->section('content') ?>
<div class="grid grid-cols-12 gap-4">
    <div class="col-span-12 flex flex-row gap-2 items-center bg-base-100 p-4 rounded-box shadow-sm border border-base-content/5">
        <form action="" method="GET" class="flex flex-row gap-3">
            <label class="input w-full md:w-64">
                <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" fill="none" stroke="currentColor">
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="m21 21-4.3-4.3"></path>
                    </g>
                </svg>
                <input type="search" name="keyword" value="<?= $keyword ?>" placeholder="Cari Customer..." />
            </label>
        </form>
        <div class="badge badge-ghost ml-auto">Total: <?= count($customer) ?> Customer</div>
    </div>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="col-span-12">
            <div class="alert alert-success py-2">
                <span><?= session()->getFlashdata('success') ?></span>
            </div>
        </div>
    <?php endif; ?>

    <div class="col-span-12">
        <div class="overflow-x-auto rounded-box border border-base-content/5 bg-base-100 shadow-sm">
            <table class="table table-zebra">
                <thead>
                    <tr>
                        <th width="50">No</th>
                        <th>Info Customer</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>No. Telepon</th>
                        <th class="text-center" width="100">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($customer)): ?>
                        <tr>
                            <td colspan="6" class="text-center py-10 opacity-50 italic">Belum ada data customer.</td>
                        </tr>
                    <?php else: ?>
                        <?php $no = 1 + (10 * ($pager->getCurrentPage('customer') - 1));
                        foreach ($customer as $c): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td>
                                    <div class="font-bold"><?= $c['nama_lengkap'] ?></div>
                                    <div class="text-xs opacity-50">Daftar: <?= date('d M Y', strtotime($c['created_at'])) ?></div>
                                </td>
                                <td><?= $c['username'] ?></td>
                                <td><?= $c['email'] ?></td>
                                <td><?= $c['no_hp'] ?: '-' ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url('/admin/data-customer/delete/' . $c['id_customer']) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus customer ini? Tindakan ini tidak dapat dibatalkan.')" class="btn btn-square btn-ghost btn-xs text-error">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M7 21q-.825 0-1.412-.587T5 19V6q-.425 0-.712-.288T4 5t.288-.712T5 4h4q0-.425.288-.712T10 3h4q.425 0 .713.288T15 4h4q.425 0 .713.288T20 5t-.288.713T19 6v13q0 .825-.587 1.413T17 21zM17 6H7v13h10zM9 17h2V8H9zm4 0h2V8h-2zM7 6v13z" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-span-12 mt-4 flex justify-center">
        <?= $pager->links('customer', 'daisy_full') ?>
    </div>
</div>
<?= $this->endSection() ?>