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
                <input type="search" name="keyword" value="<?= $keyword ?>" placeholder="Cari Barang..." />
            </label>
        </form>
        <button onclick="modal_add.showModal()" class="btn btn-neutral">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                <path fill="currentColor" d="M11 13H6q-.425 0-.712-.288T5 12t.288-.712T6 11h5V6q0-.425.288-.712T12 5t.713.288T13 6v5h5q.425 0 .713.288T19 12t-.288.713T18 13h-5v5q0 .425-.288.713T12 19t-.712-.288T11 18z" />
            </svg>
            Tambah Produk
        </button>
    </div>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="col-span-12">
            <div class="alert alert-success py-2">
                <span><?= session()->getFlashdata('success') ?></span>
            </div>
        </div>
    <?php endif; ?>

    <div class="col-span-12">
        <div class="overflow-x-auto rounded-box border border-base-content/5 bg-base-100 shadow-sm w-full">
            <table class="table table-xs">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Nama Produk</th>
                        <th>Kategori</th>
                        <th>Brand</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1 + (10 * ($pager->getCurrentPage('produk') - 1));
                    foreach ($produk as $p): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td>
                                <div class="avatar">
                                    <div class="mask mask-squircle h-12 w-12 bg-base-200">
                                        <?php if ($p['foto_produk']): ?>
                                            <img src="<?= base_url('assets/img/produk/' . $p['foto_produk']) ?>" alt="<?= $p['nama_produk'] ?>" />
                                        <?php else: ?>
                                            <div class="flex items-center justify-center h-full">N/A</div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="flex flex-col justify-center">
                                    <div class="font-bold"><?= $p['nama_produk'] ?></div>
                                    <div class="text-xs opacity-50"><?= substr($p['deskripsi'], 0, 50) ?>...</div>
                                </div>
                            </td>
                            <td>
                                <div><?= $p['sub_kategori'] ?></div>
                            </td>
                            <td>
                                <div><?= $p['nama_brand'] ?></div>
                            </td>
                            <td class="font-semibold">Rp <?= number_format($p['harga'], 0, ',', '.') ?></td>
                            <td>
                                <div class="badge badge-soft <?= $p['stok'] > 10 ? 'badge-success' : 'badge-warning' ?> badge-sm"><?= $p['stok'] ?></div>
                            </td>
                            <td>
                                <div class="flex justify-center gap-2">
                                    <button onclick="editProduk(<?= htmlspecialchars(json_encode($p)) ?>)" class="btn btn-square btn-ghost btn-xs">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M3 21v-4.25L16.2 3.575q.3-.275.663-.425t.762-.15t.775.15t.65.45L20.425 5q.3.275.438.65t.137.75t-.137.763t-.438.662L7.25 21zM17.6 7.8L19 6.4L17.6 5L16.2 6.4z" />
                                        </svg>
                                    </button>
                                    <a href="<?= base_url('/admin/data-produk/delete/' . $p['id_produk']) ?>" onclick="return confirm('Hapus produk ini?')" class="btn btn-square btn-ghost btn-xs text-error">
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
        <?= $pager->links('produk', 'daisy_full') ?>
    </div>
</div>

<!-- Modal Add -->
<dialog id="modal_add" class="modal modal-bottom sm:modal-middle">
    <div class="modal-box w-full md:w-11/12 md:max-w-3xl bg-base-100">
        <form action="<?= base_url('/admin/data-produk/store') ?>" method="POST" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <h3 class="font-bold text-lg mb-4">Tambah Produk Baru</h3>
            <div class="grid grid-cols-2 gap-4">
                <fieldset class="fieldset col-span-2 md:col-span-1">
                    <legend class="fieldset-legend">Nama Produk</legend>
                    <input type="text" name="nama_produk" class="input w-full" placeholder="Contoh: Whey Protein Gold Standard" required />
                </fieldset>
                <fieldset class="fieldset col-span-2 md:col-span-1">
                    <legend class="fieldset-legend">Kategori</legend>
                    <select name="id_kategori" class="select w-full" required>
                        <option value="" disabled selected>Pilih Sub Kategori</option>
                        <?php foreach ($kategori as $k): ?>
                            <option value="<?= $k['id_kategori'] ?>"><?= $k['nama_kategori'] ?> - <?= $k['sub_kategori'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </fieldset>
                <fieldset class="fieldset col-span-2 md:col-span-1">
                    <legend class="fieldset-legend">Brand</legend>
                    <select name="id_brand" class="select w-full" required>
                        <option value="" disabled selected>Pilih Brand</option>
                        <?php foreach ($brand as $b): ?>
                            <option value="<?= $b['id_brand'] ?>"><?= $b['nama_brand'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </fieldset>
                <fieldset class="fieldset col-span-2 md:col-span-1">
                    <legend class="fieldset-legend">Supplier (Opsional)</legend>
                    <select name="id_supplier" class="select w-full">
                        <option value="">Pilih Supplier</option>
                        <?php foreach ($supplier as $s): ?>
                            <option value="<?= $s['id_supplier'] ?>"><?= $s['nama_supplier'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </fieldset>
                <fieldset class="fieldset col-span-2 md:col-span-1">
                    <legend class="fieldset-legend">Harga (Rp)</legend>
                    <input type="number" name="harga" class="input w-full" placeholder="100000" required />
                </fieldset>
                <fieldset class="fieldset col-span-2 md:col-span-1">
                    <legend class="fieldset-legend">Stok</legend>
                    <input type="number" name="stok" class="input w-full" placeholder="10" required />
                </fieldset>
                <fieldset class="fieldset col-span-2 md:col-span-1">
                    <legend class="fieldset-legend">Berat (Gram)</legend>
                    <input type="number" name="berat" class="input w-full" placeholder="1000" />
                </fieldset>
                <fieldset class="fieldset col-span-2 md:col-span-1">
                    <legend class="fieldset-legend">Foto Produk</legend>
                    <input type="file" name="foto_produk" class="file-input w-full" />
                </fieldset>
                <fieldset class="fieldset col-span-2">
                    <legend class="fieldset-legend">Deskripsi</legend>
                    <textarea name="deskripsi" class="textarea w-full h-24" placeholder="Deskripsi detail produk..."></textarea>
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
<dialog id="modal_edit" class="modal">
    <div class="modal-box w-11/12 max-w-3xl bg-base-100">
        <form action="<?= base_url('/admin/data-produk/update') ?>" method="POST" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <input type="hidden" name="id_produk" id="edit_id">
            <h3 class="font-bold text-lg mb-4">Edit Produk</h3>
            <div class="grid grid-cols-2 gap-4">
                <fieldset class="fieldset col-span-2 md:col-span-1">
                    <legend class="fieldset-legend">Nama Produk</legend>
                    <input type="text" name="nama_produk" id="edit_nama" class="input w-full" required />
                </fieldset>
                <fieldset class="fieldset col-span-2 md:col-span-1">
                    <legend class="fieldset-legend">Sub Kategori</legend>
                    <select name="id_kategori" id="edit_kategori" class="select w-full" required>
                        <?php foreach ($kategori as $k): ?>
                            <option value="<?= $k['id_kategori'] ?>"><?= $k['nama_kategori'] ?> - <?= $k['sub_kategori'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </fieldset>
                <fieldset class="fieldset col-span-2 md:col-span-1">
                    <legend class="fieldset-legend">Brand</legend>
                    <select name="id_brand" id="edit_brand" class="select w-full" required>
                        <?php foreach ($brand as $b): ?>
                            <option value="<?= $b['id_brand'] ?>"><?= $b['nama_brand'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </fieldset>
                <fieldset class="fieldset col-span-2 md:col-span-1">
                    <legend class="fieldset-legend">Supplier</legend>
                    <select name="id_supplier" id="edit_supplier" class="select w-full">
                        <option value="">Pilih Supplier</option>
                        <?php foreach ($supplier as $s): ?>
                            <option value="<?= $s['id_supplier'] ?>"><?= $s['nama_supplier'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </fieldset>
                <fieldset class="fieldset col-span-2 md:col-span-1">
                    <legend class="fieldset-legend">Harga (Rp)</legend>
                    <input type="number" name="harga" id="edit_harga" class="input w-full" required />
                </fieldset>
                <fieldset class="fieldset col-span-2 md:col-span-1">
                    <legend class="fieldset-legend">Stok</legend>
                    <input type="number" name="stok" id="edit_stok" class="input w-full" required />
                </fieldset>
                <fieldset class="fieldset col-span-1">
                    <legend class="fieldset-legend">Status</legend>
                    <select name="is_active" id="edit_active" class="select w-full">
                        <option value="1">Aktif</option>
                        <option value="0">Non-Aktif</option>
                    </select>
                </fieldset>
                <fieldset class="fieldset col-span-1">
                    <legend class="fieldset-legend">Foto Baru (Opsional)</legend>
                    <input type="file" name="foto_produk" class="file-input w-full" />
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
    function editProduk(data) {
        document.getElementById('edit_id').value = data.id_produk;
        document.getElementById('edit_nama').value = data.nama_produk;
        document.getElementById('edit_kategori').value = data.id_kategori;
        document.getElementById('edit_brand').value = data.id_brand;
        document.getElementById('edit_supplier').value = data.id_supplier || '';
        document.getElementById('edit_harga').value = data.harga;
        document.getElementById('edit_stok').value = data.stok;
        document.getElementById('edit_deskripsi').value = data.deskripsi;
        document.getElementById('edit_active').value = data.is_active;

        modal_edit.showModal();
    }
</script>
<?= $this->endSection() ?>