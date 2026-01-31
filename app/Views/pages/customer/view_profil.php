<?= $this->extend('main/customer/view_main') ?>
<?= $this->section('content') ?>
<div class="col-span-12">
    <div class="grid grid-cols-12 px-8 md:px-12 py-6 gap-x-2">
        <div class="col-span-12">
            <h1 class="text-xl font-semibold">Data Personal</h1>
        </div>
        <div class="col-span-12 flex flex-row p-8 bg-base-300 mt-3 rounded-xl">
            <div class="grid grid-cols-12 gap-3 md:gap-1 w-full">
                <div class="col-span-12 md:col-span-3 flex flex-row items-center md:items-start md:flex-col gap-3">
                    <div class="avatar">
                        <div class="w-24 rounded">
                            <img src="https://img.daisyui.com/images/profile/demo/batperson@192.webp" />
                        </div>
                    </div>
                    <input type="file" class="file-input file-input-ghost" />
                </div>
                <div class="col-span-12 md:col-span-9">
                    <div class="grid grid-cols-8 gap-x-4 gap-y-2">
                        <div class="col-span-8 md:col-span-4">
                            <fieldset class="fieldset">Nama Lengkap</legend>
                                <input type="text" class="input w-full" placeholder="Masukkan Nama Lengkap" />
                            </fieldset>
                        </div>
                        <div class="col-span-8 md:col-span-4">
                            <fieldset class="fieldset">Username</legend>
                                <input type="text" class="input w-full" placeholder="Masukkan Username" />
                            </fieldset>
                        </div>
                        <div class="col-span-8 md:col-span-4">
                            <fieldset class="fieldset">Email</legend>
                                <input type="text" class="input w-full" placeholder="Masukkan Email" />
                            </fieldset>
                        </div>
                        <div class="col-span-8 md:col-span-4">
                            <fieldset class="fieldset">No. HP</legend>
                                <input type="text" class="input w-full" placeholder="Masukkan No. HP" />
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
                        <select class="select w-full">
                            <option disabled selected>Pilih Provinsi</option>
                            <option>Chrome</option>
                            <option>FireFox</option>
                            <option>Safari</option>
                        </select>
                    </fieldset>
                </div>
                <div class="col-span-12 md:col-span-6">
                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Kota / Kabupaten</legend>
                        <select class="select w-full">
                            <option disabled selected>Pilih Kota / Kabupaten</option>
                            <option>Chrome</option>
                            <option>FireFox</option>
                            <option>Safari</option>
                        </select>
                    </fieldset>
                </div>
                <div class="col-span-12 md:col-span-6">
                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Kecamatan</legend>
                        <select class="select w-full">
                            <option disabled selected>Pilih Kecamatan</option>
                            <option>Chrome</option>
                            <option>FireFox</option>
                            <option>Safari</option>
                        </select>
                    </fieldset>
                </div>
                <div class="col-span-12 md:col-span-6">
                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Kelurahan / Desa</legend>
                        <select class="select w-full">
                            <option disabled selected>Pilih Kelurahan / Desa</option>
                            <option>Chrome</option>
                            <option>FireFox</option>
                            <option>Safari</option>
                        </select>
                    </fieldset>
                </div>
                <div class="col-span-12">
                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Kode Pos</legend>
                        <input type="text" class="input w-full" placeholder="Masukkan Kode Pos" />
                    </fieldset>
                </div>
                <div class="col-span-12">
                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Alamat Lengkap</legend>
                        <textarea class="textarea h-24 w-full" placeholder="Masukkan Alamat Lengkap"></textarea>
                    </fieldset>
                </div>
                <div class="col-span-12">
                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Detail Lainnya</legend>
                        <input type="text" class="input w-full" placeholder="Blok / Unit No., Patokan" />
                    </fieldset>
                </div>
            </div>
        </div>
        <div class="col-span-12 flex justify-end mt-3 gap-2">
            <div class="btn btn-soft">Reset</div>
            <div class="btn">Simpan</div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>