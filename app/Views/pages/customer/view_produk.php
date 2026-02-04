<?= $this->extend('main/customer/view_main') ?>
<?= $this->section('content') ?>
<!-- Content -->
<div class="col-span-12">
    <div class="grid grid-cols-12">
        <!-- Sidebar -->
        <div class="col-span-12 md:col-span-3">
            <div class="drawer lg:drawer-open h-full">
                <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />
                <div class="drawer-content flex flex-col md:items-center items-start justify-center">
                    <!-- Page content here -->
                    <label for="my-drawer-3" class="btn drawer-button lg:hidden md:mx-0 md:mt-0 mt-5 mx-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd" d="M3.792 2.938A49.069 49.069 0 0 1 12 2.25c2.797 0 5.54.236 8.209.688a1.857 1.857 0 0 1 1.541 1.836v1.044a3 3 0 0 1-.879 2.121l-6.182 6.182a1.5 1.5 0 0 0-.439 1.061v2.927a3 3 0 0 1-1.658 2.684l-1.757.878A.75.75 0 0 1 9.75 21v-5.818a1.5 1.5 0 0 0-.44-1.06L3.13 7.938a3 3 0 0 1-.879-2.121V4.774c0-.897.64-1.683 1.542-1.836Z" clip-rule="evenodd" />
                        </svg>
                        Kategori
                    </label>
                </div>
                <div class="drawer-side z-50">
                    <label for="my-drawer-3" aria-label="close sidebar" class="drawer-overlay"></label>
                    <ul class="menu bg-base-200 min-h-full w-80 p-4">
                        <li>
                            <a href="<?= base_url('/user/produk') ?>" class="text-lg font-bold <?= (!$currentSubcategory) ? 'text-primary' : '' ?>">SEMUA PRODUK</a>
                        </li>
                        <?php foreach ($categoriesGrouped as $catName => $subCats): ?>
                            <li>
                                <h3 class="text-lg font-semibold mt-4"><?= $catName ?></h3>
                            </li>
                            <?php foreach ($subCats as $sub): ?>
                                <li>
                                    <a href="<?= base_url('/user/produk?subcategory=' . urlencode($sub)) ?>" 
                                       class="pl-8 font-semibold <?= ($currentSubcategory == $sub) ? 'text-primary' : 'text-gray-500' ?>">
                                        <?= $sub ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Sidebar -->
        <!-- Content -->
        <div class="col-span-12 md:col-span-9 py-3 md:py-6 px-10">
            <div class="breadcrumbs text-sm">
                <ul>
                    <li class="text-gray-500 font-semibold">Produk</li>
                    <?php if ($currentSubcategory): ?>
                        <li class="font-semibold"><?= $currentSubcategory ?></li>
                    <?php else: ?>
                        <li class="font-semibold">Semua Produk</li>
                    <?php endif; ?>
                </ul>
            </div>
            <h1 class="text-2xl font-bold"><?= $currentSubcategory ?: 'Semua Produk' ?></h1>
            
            <?php if (empty($products)): ?>
                <div class="flex flex-col items-center justify-center py-20 opacity-50 italic">
                    <p>Produk tidak ditemukan.</p>
                </div>
            <?php else: ?>
                <div class="grid grid-cols-12 gap-8 mt-8">
                    <?php foreach ($products as $p): ?>
                        <div class="md:col-span-3 col-span-6">
                            <a href="<?= base_url('/user/produk/detail/' . $p['id_produk']) ?>" class="card bg-base-300 w-full shadow-sm hover:shadow-lg hover:shadow-blue-500/50 transition-all duration-300 h-full">
                                <figure>
                                    <img src="<?= base_url('assets/img/produk/' . ($p['foto_produk'] ?: 'default.png')) ?>" alt="<?= $p['nama_produk'] ?>" class="h-48 w-full object-cover" />
                                </figure>
                                <div class="card-body p-4">
                                    <p class="text-xs text-gray-400 font-semibold"><?= $p['nama_brand'] ?></p>
                                    <h2 class="card-title text-sm h-10 overflow-hidden line-clamp-2"><?= $p['nama_produk'] ?></h2>
                                    <h1 class="text-lg font-bold text-primary">Rp <?= number_format($p['harga'], 0, ',', '.') ?></h1>
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