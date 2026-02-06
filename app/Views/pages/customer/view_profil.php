<?= $this->extend('main/customer/view_main') ?>
<?= $this->section('content') ?>
<div class="col-span-12">
    <div class="grid grid-cols-12 px-8 md:px-12 py-6 gap-x-2">
        <div class="col-span-12">
            <?php if (session()->getFlashdata('success')): ?>
                <div class="alert alert-success mb-4 rounded-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span><?= session()->getFlashdata('success') ?></span>
                </div>
            <?php endif; ?>

            <h1 class="text-xl font-semibold">Data Personal</h1>
        </div>

        <form action="<?= base_url('user/profil/update') ?>" method="post" enctype="multipart/form-data" class="col-span-12 grid grid-cols-12 gap-x-2">
            <?= csrf_field() ?>

            <div class="col-span-12 flex flex-row p-8 bg-base-300 mt-3 rounded-xl">
                <div class="grid grid-cols-12 gap-3 md:gap-1 w-full">
                    <div class="col-span-12 md:col-span-3 flex flex-row items-center md:items-start md:flex-col gap-3">
                        <div class="avatar">
                            <div class="w-24 rounded">
                                <?php if ($user['foto_profil']): ?>
                                    <img src="<?= base_url('assets/img/customer/' . $user['foto_profil']) ?>" alt="Profile" />
                                <?php else: ?>
                                    <img src="https://ui-avatars.com/api/?name=<?= urlencode($user['nama_lengkap']) ?>&background=random" />
                                <?php endif; ?>
                            </div>
                        </div>
                        <input type="file" name="foto_profil" class="file-input file-input-ghost" />
                    </div>
                    <div class="col-span-12 md:col-span-9">
                        <div class="grid grid-cols-8 gap-x-4 gap-y-2">
                            <div class="col-span-8 md:col-span-4">
                                <fieldset class="fieldset">
                                    <legend class="fieldset-legend">Nama Lengkap</legend>
                                    <input type="text" name="nama_lengkap" class="input w-full" value="<?= $user['nama_lengkap'] ?>" placeholder="Masukkan Nama Lengkap" />
                                </fieldset>
                            </div>
                            <div class="col-span-8 md:col-span-4">
                                <fieldset class="fieldset">
                                    <legend class="fieldset-legend">Username</legend>
                                    <input type="text" name="username" class="input w-full" value="<?= $user['username'] ?>" placeholder="Masukkan Username" />
                                </fieldset>
                            </div>
                            <div class="col-span-8 md:col-span-4">
                                <fieldset class="fieldset">
                                    <legend class="fieldset-legend">Email</legend>
                                    <input type="email" name="email" class="input w-full" value="<?= $user['email'] ?>" placeholder="Masukkan Email" />
                                </fieldset>
                            </div>
                            <div class="col-span-8 md:col-span-4">
                                <fieldset class="fieldset">
                                    <legend class="fieldset-legend">No. HP</legend>
                                    <input type="text" name="no_hp" class="input w-full" value="<?= $user['no_hp'] ?>" placeholder="Masukkan No. HP" />
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-span-12 mt-3">
                <h1 class="text-xl font-semibold mt-3">Alamat Anda</h1>
                <p class="text-sm text-gray-500">Isi data alamat pengiriman anda</p>
            </div>

            <div class="col-span-12 p-8 bg-base-300 mt-3 rounded-xl">
                <div class="grid grid-cols-12 gap-x-4 gap-y-1">
                    <div class="col-span-12 md:col-span-6">
                        <fieldset class="fieldset">
                            <legend class="fieldset-legend">Provinsi</legend>
                            <input type="text" name="provinsi" class="input w-full" value="<?= $user['provinsi'] ?>" placeholder="Masukkan Provinsi" />
                        </fieldset>
                    </div>
                    <div class="col-span-12 md:col-span-6">
                        <fieldset class="fieldset">
                            <legend class="fieldset-legend">Kota / Kabupaten</legend>
                            <input type="text" name="kota" class="input w-full" value="<?= $user['kota'] ?>" placeholder="Masukkan Kota / Kabupaten" />
                        </fieldset>
                    </div>
                    <div class="col-span-12 md:col-span-6">
                        <fieldset class="fieldset">
                            <legend class="fieldset-legend">Kecamatan</legend>
                            <input type="text" name="kecamatan" class="input w-full" value="<?= $user['kecamatan'] ?>" placeholder="Masukkan Kecamatan" />
                        </fieldset>
                    </div>
                    <div class="col-span-12 md:col-span-6">
                        <fieldset class="fieldset">
                            <legend class="fieldset-legend">Kelurahan / Desa</legend>
                            <input type="text" name="kelurahan" class="input w-full" value="<?= $user['kelurahan'] ?>" placeholder="Masukkan Kelurahan / Desa" />
                        </fieldset>
                    </div>
                    <div class="col-span-12">
                        <fieldset class="fieldset">
                            <legend class="fieldset-legend">Kode Pos</legend>
                            <input type="text" name="kode_pos" class="input w-full" value="<?= $user['kode_pos'] ?>" placeholder="Masukkan Kode Pos" />
                        </fieldset>
                    </div>
                    <div class="col-span-12">
                        <fieldset class="fieldset">
                            <legend class="fieldset-legend">Alamat Lengkap</legend>
                            <textarea name="alamat_lengkap" class="textarea h-24 w-full" placeholder="Masukkan Alamat Lengkap"><?= $user['alamat_lengkap'] ?></textarea>
                        </fieldset>
                    </div>
                    <div class="col-span-12">
                        <fieldset class="fieldset">
                            <legend class="fieldset-legend">Detail Lainnya</legend>
                            <input type="text" name="detail_alamat" class="input w-full" value="<?= $user['detail_alamat'] ?>" placeholder="Blok / Unit No., Patokan" />
                        </fieldset>
                    </div>
                </div>
            </div>

            <div class="col-span-12 flex justify-end mt-3 gap-2">
                <button type="reset" class="btn btn-soft">Reset</button>
                <button type="submit" class="btn">Simpan</button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>