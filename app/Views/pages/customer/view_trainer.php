<?= $this->extend('main/customer/view_main') ?>
<?= $this->section('content') ?>
<!-- Content -->
<div class="col-span-12 text-center mt-10">
    <h1 class="text-2xl md:text-4xl font-bold">Temukan Personal Trainer Terbaikmu</h1>
    <p class="text-gray-500 font-semibold mt-2">Pilih trainer sesuai kebutuhan dan jadwalmu</p>
    <img src="<?= base_url('assets/img/trainer-hero.png') ?>" alt="hero" class="md:h-96 h-auto mx-0 md:mx-auto">
</div>
<div class="col-span-12">
    <div class="grid grid-cols-12">
        <!-- Sidebar -->
        <div class="col-span-12 md:col-span-3">
            <div class="drawer lg:drawer-open h-full">
                <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />
                <div class="drawer-content flex flex-col md:items-center items-start justify-center">
                    <label for="my-drawer-3" class="btn drawer-button lg:hidden md:mx-0 md:mt-0 mt-5 mx-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd" d="M3.792 2.938A49.069 49.069 0 0 1 12 2.25c2.797 0 5.54.236 8.209.688a1.857 1.857 0 0 1 1.541 1.836v1.044a3 3 0 0 1-.879 2.121l-6.182 6.182a1.5 1.5 0 0 0-.439 1.061v2.927a3 3 0 0 1-1.658 2.684l-1.757.878A.75.75 0 0 1 9.75 21v-5.818a1.5 1.5 0 0 0-.44-1.06L3.13 7.938a3 3 0 0 1-.879-2.121V4.774c0-.897.64-1.683 1.542-1.836Z" clip-rule="evenodd" />
                        </svg>
                        Filter
                    </label>
                </div>
                <div class="drawer-side z-50">
                    <label for="my-drawer-3" aria-label="close sidebar" class="drawer-overlay"></label>
                    <form action="<?= base_url('/user/trainer') ?>" method="GET" class="menu bg-base-200 min-h-full w-80 p-4">
                        <li>
                            <h3 class="text-lg font-semibold">Filter</h3>
                        </li>
                        <div class="divider my-1"></div>

                        <li>
                            <legend class="fieldset-legend font-bold">Jenis Kelamin</legend>
                            <div class="flex flex-row gap-3">
                                <label class="label cursor-pointer">
                                    <input type="radio" name="gender" value="Laki-laki" class="radio checked:radio-primary radio-xs" onchange="this.form.submit()" <?= ($currentFilters['gender'] == 'Laki-laki') ? 'checked' : '' ?> />
                                    <span class="label-text ml-2">Laki-laki</span>
                                </label>
                                <label class="label cursor-pointer">
                                    <input type="radio" name="gender" value="Perempuan" class="radio checked:radio-secondary radio-xs" onchange="this.form.submit()" <?= ($currentFilters['gender'] == 'Perempuan') ? 'checked' : '' ?> />
                                    <span class="label-text ml-2">Perempuan</span>
                                </label>
                            </div>
                        </li>

                        <li>
                            <fieldset class="fieldset">
                                <legend class="fieldset-legend font-bold">Kategori</legend>
                                <select name="category" class="select rounded-2xl" onchange="this.form.submit()">
                                    <option value="">Semua Kategori</option>
                                    <?php foreach ($categories as $cat): ?>
                                        <option value="<?= $cat['kategori'] ?>" <?= ($currentFilters['category'] == $cat['kategori']) ? 'selected' : '' ?>><?= $cat['kategori'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </fieldset>
                        </li>

                        <li>
                            <fieldset class="fieldset">
                                <legend class="fieldset-legend font-bold">Harga per Sesi</legend>
                                <select name="price_range" class="select rounded-2xl" onchange="this.form.submit()">
                                    <option value="">Semua Harga</option>
                                    <option value="<500" <?= ($currentFilters['price_range'] == '<500') ? 'selected' : '' ?>>
                                        < Rp. 500.000 </option>
                                    <option value="500-1000" <?= ($currentFilters['price_range'] == '500-1000') ? 'selected' : '' ?>> Rp. 500rb - 1jt </option>
                                    <option value=">1000" <?= ($currentFilters['price_range'] == '>1000') ? 'selected' : '' ?>> > Rp. 1.000.000 </option>
                                </select>
                            </fieldset>
                        </li>

                        <li>
                            <fieldset class="fieldset">
                                <legend class="fieldset-legend font-bold">Lokasi</legend>
                                <select name="location" class="select rounded-2xl" onchange="this.form.submit()">
                                    <option value="">Semua Lokasi</option>
                                    <?php foreach ($locations as $loc): ?>
                                        <option value="<?= $loc['lokasi'] ?>" <?= ($currentFilters['location'] == $loc['lokasi']) ? 'selected' : '' ?>><?= $loc['lokasi'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </fieldset>
                        </li>

                        <li class="mt-4">
                            <a href="<?= base_url('/user/trainer') ?>" class="btn btn-ghost btn-sm">Reset Filter</a>
                        </li>
                    </form>
                </div>
            </div>
        </div>
        <!-- Content -->
        <div class="col-span-12 md:col-span-9 py-3 md:py-5 md:px-10 px-8">
            <?php if (empty($trainers)): ?>
                <div class="flex flex-col items-center justify-center py-20 opacity-50 italic text-center w-full">
                    <p>Trainer tidak ditemukan dengan filter yang dipilih.</p>
                </div>
            <?php else: ?>
                <div class="grid grid-cols-12 gap-8">
                    <?php foreach ($trainers as $t): ?>
                        <div class="md:col-span-4 col-span-6">
                            <a href="<?= base_url('/user/trainer/detail/' . $t['id_trainer']) ?>" class="card bg-base-300 w-full shadow-sm hover:shadow-lg hover:shadow-blue-500/50 transition-all duration-300 h-full">
                                <figure>
                                    <img src="<?= base_url('assets/img/trainer/' . ($t['foto_profil'] ?: 'default.png')) ?>"
                                        alt="<?= $t['nama_trainer'] ?>"
                                        class="h-64 w-full object-cover"
                                        onerror="this.src='https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp'" />
                                </figure>
                                <div class="card-body p-4">
                                    <div class="badge badge-primary badge-sm mb-1"><?= $t['kategori'] ?></div>
                                    <h2 class="card-title text-base font-bold"><?= $t['nama_trainer'] ?></h2>
                                    <p class="text-xs text-gray-500 font-semibold mb-2"><?= $t['pengalaman_tahun'] ?> Thn Pengalaman</p>
                                    <p class="text-sm font-bold text-primary">Rp <?= number_format($t['harga_per_sesi'], 0, ',', '.') ?> <span class="text-xs text-gray-400 font-normal">/sesi</span></p>
                                    <div class="flex items-center gap-1 mt-2">
                                        <div class="rating rating-xs">
                                            <?php for ($i = 1; $i <= 5; $i++): ?>
                                                <input type="radio" name="rating-<?= $t['id_trainer'] ?>" class="mask mask-star-2 bg-orange-400" <?= ($i == round($t['rating'])) ? 'checked' : '' ?> disabled />
                                            <?php endfor; ?>
                                        </div>
                                        <span class="text-[10px] font-semibold">(<?= $t['jumlah_review'] ?>)</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
        <!-- Content -->
    </div>
</div>
<?= $this->endSection() ?>