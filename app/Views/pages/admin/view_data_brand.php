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
                <input type="search" name="keyword" value="<?= $keyword ?>" placeholder="Cari Brand..." />
            </label>
        </form>
        <button onclick="modal_add.showModal()" class="btn btn-neutral">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                <path fill="currentColor" d="M11 13H6q-.425 0-.712-.288T5 12t.288-.712T6 11h5V6q0-.425.288-.712T12 5t.713.288T13 6v5h5q.425 0 .713.288T19 12t-.288.713T18 13h-5v5q0 .425-.288.713T12 19t-.712-.288T11 18z" />
            </svg>
            Tambah Brand
        </button>
    </div>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="col-span-12">
            <div class="alert alert-success py-2">
                <span><?= session()->getFlashdata('success') ?></span>
            </div>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
        <div class="col-span-12">
            <div class="alert alert-error py-2">
                <span><?= session()->getFlashdata('error') ?></span>
            </div>
        </div>
    <?php endif; ?>

    <div class="col-span-12">
        <div class="overflow-x-auto rounded-box border border-base-content/5 bg-base-100 shadow-sm">
            <table class="table table-zebra">
                <thead>
                    <tr>
                        <th width="50">No</th>
                        <th>Logo</th>
                        <th>Nama Brand</th>
                        <th>Deskripsi</th>
                        <th class="text-center" width="150">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1 + (10 * ($pager->getCurrentPage('brand') - 1));
                    foreach ($brand as $b): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td>
                                <div class="avatar">
                                    <div class="mask mask-squircle h-12 w-12 bg-base-200">
                                        <?php if ($b['logo']): ?>
                                            <img src="<?= base_url('assets/img/brand/' . $b['logo']) ?>" alt="<?= $b['nama_brand'] ?>" />
                                        <?php else: ?>
                                            <div class="flex items-center justify-center h-full text-xs">N/A</div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </td>
                            <td class="font-bold"><?= $b['nama_brand'] ?></td>
                            <td><?= $b['deskripsi'] ?: '-' ?></td>
                            <td>
                                <div class="flex justify-center gap-2">
                                    <button onclick="editBrand(<?= htmlspecialchars(json_encode($b)) ?>)" class="btn btn-square btn-ghost btn-xs text-info">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M3 21v-4.25L16.2 3.575q.3-.275.663-.425t.762-.15t.775.15t.65.45L20.425 5q.3.275.438.65t.137.75t-.137.763t-.438.662L7.25 21zM17.6 7.8L19 6.4L17.6 5L16.2 6.4z" />
                                        </svg>
                                    </button>
                                    <a href="<?= base_url('/admin/data-brand/delete/' . $b['id_brand']) ?>" onclick="return confirm('Hapus brand ini?')" class="btn btn-square btn-ghost btn-xs text-error">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M7 21q-.825 0-1.412-.587T5 19V6q-.425 0-.712-.288T4 5t.288-.712T5 4h4q0-.425.288-.712T10 3h4q.425 0 .713.288T15 4h4q.425 0 .713.288T20 5t-.288.713T19 6v13q0 .825-.587 1.413T17 21zM17 6H7v13h10zM9 17h2V8H9zm4 0h2V8h-2zM7 6v13z" />
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-span-12 mt-4 flex justify-center">
        <?= $pager->links('brand', 'daisy_full') ?>
    </div>
</div>

<!-- Modal Add -->
<dialog id="modal_add" class="modal modal-bottom sm:modal-middle">
    <div class="modal-box w-full max-w-lg bg-base-100">
        <form action="<?= base_url('/admin/data-brand/store') ?>" method="POST" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <h3 class="font-bold text-lg mb-4">Tambah Brand Baru</h3>
            <div class="grid grid-cols-1 gap-4">
                <fieldset class="fieldset">
                    <legend class="fieldset-legend">Nama Brand</legend>
                    <input type="text" name="nama_brand" class="input w-full" placeholder="Contoh: Optimum Nutrition" required />
                </fieldset>
                <fieldset class="fieldset">
                    <legend class="fieldset-legend">Logo Brand</legend>
                    <input type="file" name="logo" class="file-input w-full" />
                </fieldset>
                <fieldset class="fieldset">
                    <legend class="fieldset-legend">Deskripsi</legend>
                    <textarea name="deskripsi" class="textarea w-full h-24" placeholder="Deskripsi brand..."></textarea>
                </fieldset>
            </div>
            <div class="modal-action">
                <button type="button" onclick="modal_add.close()" class="btn">Batal</button>
                <button type="submit" class="btn btn-primary px-10">Simpan</button>
            </div>
        </form>
    </div>
</dialog>

<!-- Modal Edit -->
<dialog id="modal_edit" class="modal modal-bottom sm:modal-middle">
    <div class="modal-box w-full max-w-lg bg-base-100">
        <form action="<?= base_url('/admin/data-brand/update') ?>" method="POST" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <input type="hidden" name="id_brand" id="edit_id">
            <h3 class="font-bold text-lg mb-4">Edit Brand</h3>
            <div class="grid grid-cols-1 gap-4">
                <fieldset class="fieldset">
                    <legend class="fieldset-legend">Nama Brand</legend>
                    <input type="text" name="nama_brand" id="edit_nama" class="input w-full" required />
                </fieldset>
                <fieldset class="fieldset">
                    <legend class="fieldset-legend">Logo Baru (Opsional)</legend>
                    <input type="file" name="logo" class="file-input w-full" />
                </fieldset>
                <fieldset class="fieldset">
                    <legend class="fieldset-legend">Deskripsi</legend>
                    <textarea name="deskripsi" id="edit_deskripsi" class="textarea w-full h-24"></textarea>
                </fieldset>
            </div>
            <div class="modal-action">
                <button type="button" onclick="modal_edit.close()" class="btn">Batal</button>
                <button type="submit" class="btn btn-primary px-10">Perbarui</button>
            </div>
        </form>
    </div>
</dialog>

<script>
    function editBrand(data) {
        document.getElementById('edit_id').value = data.id_brand;
        document.getElementById('edit_nama').value = data.nama_brand;
        document.getElementById('edit_deskripsi').value = data.deskripsi;

        modal_edit.showModal();
    }
</script>
<?= $this->endSection() ?>