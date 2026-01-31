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
                <input type="search" name="keyword" value="<?= $keyword ?>" placeholder="Cari Trainer..." />
            </label>
        </form>
        <button onclick="modal_add.showModal()" class="btn btn-neutral ml-auto">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                <path fill="currentColor" d="M11 13H6q-.425 0-.712-.288T5 12t.288-.712T6 11h5V6q0-.425.288-.712T12 5t.713.288T13 6v5h5q.425 0 .713.288T19 12t-.288.713T18 13h-5v5q0 .425-.288.713T12 19t-.712-.288T11 18z" />
            </svg>
            Tambah Trainer
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
                        <th>Foto</th>
                        <th>Nama Trainer</th>
                        <th>Kategori</th>
                        <th>Harga/Sesi</th>
                        <th>Exp</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($trainer)): ?>
                        <tr>
                            <td colspan="7" class="text-center py-10 opacity-50 italic">Belum ada data trainer.</td>
                        </tr>
                    <?php else: ?>
                        <?php $no = 1 + (10 * ($pager->getCurrentPage('trainer') - 1));
                        foreach ($trainer as $t): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td>
                                    <div class="avatar">
                                        <div class="mask mask-squircle h-12 w-12 bg-base-200">
                                            <?php if ($t['foto_profil']): ?>
                                                <img src="<?= base_url('assets/img/trainer/' . $t['foto_profil']) ?>" alt="<?= $t['nama_trainer'] ?>" />
                                            <?php else: ?>
                                                <div class="flex items-center justify-center h-full text-xs">N/A</div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="font-bold"><?= $t['nama_trainer'] ?></div>
                                    <div class="text-xs opacity-50"><?= $t['email'] ?></div>
                                </td>
                                <td>
                                    <div class="badge badge-soft badge-info badge-sm p-3"><?= $t['kategori'] ?></div>
                                </td>
                                <td class="font-semibold">Rp <?= number_format($t['harga_per_sesi'], 0, ',', '.') ?></td>
                                <td><?= $t['pengalaman_tahun'] ?> Tahun</td>
                                <td>
                                    <div class="flex justify-center gap-2">
                                        <button onclick="editTrainer(<?= htmlspecialchars(json_encode($t)) ?>)" class="btn btn-square btn-ghost btn-xs text-info">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                                <path fill="currentColor" d="M3 21v-4.25L16.2 3.575q.3-.275.663-.425t.762-.15t.775.15t.65.45L20.425 5q.3.275.438.65t.137.75t-.137.763t-.438.662L7.25 21zM17.6 7.8L19 6.4L17.6 5L16.2 6.4z" />
                                            </svg>
                                        </button>
                                        <a href="<?= base_url('/admin/data-trainer/delete/' . $t['id_trainer']) ?>" onclick="return confirm('Hapus trainer ini?')" class="btn btn-square btn-ghost btn-xs text-error">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                                <path fill="currentColor" d="M7 21q-.825 0-1.412-.587T5 19V6q-.425 0-.712-.288T4 5t.288-.712T5 4h4q0-.425.288-.712T10 3h4q.425 0 .713.288T15 4h4q.425 0 .713.288T20 5t-.288.713T19 6v13q0 .825-.587 1.413T17 21zM17 6H7v13h10zM9 17h2V8H9zm4 0h2V8h-2zM7 6v13z" />
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-span-12 mt-4 flex justify-center">
        <?= $pager->links('trainer', 'daisy_full') ?>
    </div>
</div>

<!-- Modal Add -->
<dialog id="modal_add" class="modal modal-bottom sm:modal-middle">
    <div class="modal-box w-full max-w-2xl bg-base-100">
        <form action="<?= base_url('/admin/data-trainer/store') ?>" method="POST" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <h3 class="font-bold text-lg mb-4">Tambah Trainer Baru</h3>
            <div class="grid grid-cols-2 gap-4">
                <fieldset class="fieldset col-span-2 md:col-span-1">
                    <legend class="fieldset-legend">Nama Trainer</legend>
                    <input type="text" name="nama_trainer" class="input w-full" required />
                </fieldset>
                <fieldset class="fieldset col-span-2 md:col-span-1">
                    <legend class="fieldset-legend">Username</legend>
                    <input type="text" name="username" class="input w-full" required />
                </fieldset>
                <fieldset class="fieldset col-span-2 md:col-span-1">
                    <legend class="fieldset-legend">Email</legend>
                    <input type="email" name="email" class="input w-full" required />
                </fieldset>
                <fieldset class="fieldset col-span-2 md:col-span-1">
                    <legend class="fieldset-legend">Password</legend>
                    <input type="password" name="password" class="input w-full" required />
                </fieldset>
                <fieldset class="fieldset col-span-2 md:col-span-1">
                    <legend class="fieldset-legend">No. HP</legend>
                    <input type="text" name="no_hp" class="input w-full" />
                </fieldset>
                <fieldset class="fieldset col-span-2 md:col-span-1">
                    <legend class="fieldset-legend">Jenis Kelamin</legend>
                    <select name="jenis_kelamin" class="select w-full">
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </fieldset>
                <fieldset class="fieldset col-span-2 md:col-span-1">
                    <legend class="fieldset-legend">Kategori</legend>
                    <input type="text" name="kategori" class="input w-full" placeholder="Contoh: Bodybuilding" />
                </fieldset>
                <fieldset class="fieldset col-span-2 md:col-span-1">
                    <legend class="fieldset-legend">Harga Per Sesi (Rp)</legend>
                    <input type="number" name="harga_per_sesi" class="input w-full" required />
                </fieldset>
                <fieldset class="fieldset col-span-2 md:col-span-1">
                    <legend class="fieldset-legend">Pengalaman (Tahun)</legend>
                    <input type="number" name="pengalaman_tahun" class="input w-full" />
                </fieldset>
                <fieldset class="fieldset col-span-2 md:col-span-1">
                    <legend class="fieldset-legend">Lokasi</legend>
                    <input type="text" name="lokasi" class="input w-full" />
                </fieldset>
                <fieldset class="fieldset col-span-2">
                    <legend class="fieldset-legend">Foto Profil</legend>
                    <input type="file" name="foto_profil" class="file-input w-full" />
                </fieldset>
                <fieldset class="fieldset col-span-2">
                    <legend class="fieldset-legend">Deskripsi</legend>
                    <textarea name="deskripsi" class="textarea w-full h-24"></textarea>
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
    <div class="modal-box w-full max-w-2xl bg-base-100">
        <form action="<?= base_url('/admin/data-trainer/update') ?>" method="POST" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <input type="hidden" name="id_trainer" id="edit_id">
            <h3 class="font-bold text-lg mb-4">Edit Data Trainer</h3>
            <div class="grid grid-cols-2 gap-4">
                <fieldset class="fieldset col-span-2 md:col-span-1">
                    <legend class="fieldset-legend">Nama Trainer</legend>
                    <input type="text" name="nama_trainer" id="edit_nama" class="input w-full" required />
                </fieldset>
                <fieldset class="fieldset col-span-2 md:col-span-1">
                    <legend class="fieldset-legend">Username</legend>
                    <input type="text" name="username" id="edit_username" class="input w-full" required />
                </fieldset>
                <fieldset class="fieldset col-span-2 md:col-span-1">
                    <legend class="fieldset-legend">Email</legend>
                    <input type="email" name="email" id="edit_email" class="input w-full" required />
                </fieldset>
                <fieldset class="fieldset col-span-2 md:col-span-1">
                    <legend class="fieldset-legend">Password (Kosongkan jika tidak diubah)</legend>
                    <input type="password" name="password" class="input w-full" />
                </fieldset>
                <fieldset class="fieldset col-span-2 md:col-span-1">
                    <legend class="fieldset-legend">No. HP</legend>
                    <input type="text" name="no_hp" id="edit_no_hp" class="input w-full" />
                </fieldset>
                <fieldset class="fieldset col-span-2 md:col-span-1">
                    <legend class="fieldset-legend">Jenis Kelamin</legend>
                    <select name="jenis_kelamin" id="edit_jk" class="select w-full">
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </fieldset>
                <fieldset class="fieldset col-span-2 md:col-span-1">
                    <legend class="fieldset-legend">Kategori</legend>
                    <input type="text" name="kategori" id="edit_kategori" class="input w-full" />
                </fieldset>
                <fieldset class="fieldset col-span-2 md:col-span-1">
                    <legend class="fieldset-legend">Harga Per Sesi (Rp)</legend>
                    <input type="number" name="harga_per_sesi" id="edit_harga" class="input w-full" required />
                </fieldset>
                <fieldset class="fieldset col-span-2 md:col-span-1">
                    <legend class="fieldset-legend">Pengalaman (Tahun)</legend>
                    <input type="number" name="pengalaman_tahun" id="edit_exp" class="input w-full" />
                </fieldset>
                <fieldset class="fieldset col-span-2 md:col-span-1">
                    <legend class="fieldset-legend">Lokasi</legend>
                    <input type="text" name="lokasi" id="edit_lokasi" class="input w-full" />
                </fieldset>
                <fieldset class="fieldset col-span-2">
                    <legend class="fieldset-legend">Foto Profil (Opsional)</legend>
                    <input type="file" name="foto_profil" class="file-input w-full" />
                </fieldset>
                <fieldset class="fieldset col-span-2">
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
    function editTrainer(data) {
        document.getElementById('edit_id').value = data.id_trainer;
        document.getElementById('edit_nama').value = data.nama_trainer;
        document.getElementById('edit_username').value = data.username;
        document.getElementById('edit_email').value = data.email;
        document.getElementById('edit_no_hp').value = data.no_hp;
        document.getElementById('edit_jk').value = data.jenis_kelamin;
        document.getElementById('edit_kategori').value = data.kategori;
        document.getElementById('edit_harga').value = data.harga_per_sesi;
        document.getElementById('edit_exp').value = data.pengalaman_tahun;
        document.getElementById('edit_lokasi').value = data.lokasi;
        document.getElementById('edit_deskripsi').value = data.deskripsi;

        modal_edit.showModal();
    }
</script>
<?= $this->endSection() ?>