<?= $this->extend('main/customer/view_main') ?>
<?= $this->section('content') ?>
<!-- Hero -->
<div class="col-span-12 md:min-h-screen" style="background-image: url(<?= base_url('assets/img/bg-img.png') ?>); background-size: cover;">
    <div class="flex md:flex-row flex-col gap-3 md:gap-18 justify-between align-middle items-center h-full md:px-12 px-8 md:mt-0 mt-20">
        <div class="kiri flex flex-col gap-4">
            <h1 class="text-4xl font-bold">Tingkatkan Performa Latihanmu dengan Suplemen Terbaik!</h1>
            <p class="text-gray-400 font-semibold">Kami menyediakan whey protein, mass gainer, dan suplemen fitness original dari berbagai brand populer dengan harga bersaing</p>
            <div class="flex flex-row gap-2">
                <a href="#" class="btn btn-neutral">Belanja Sekarang</a>
                <a href="#" class="btn">Cari Brand</a>
            </div>
        </div>
        <div class="kanan md:flex hidden">
            <img src="<?= base_url('assets/img/hero-img.png') ?>" alt="" class="rounded-3xl bg-blue-500 shadow-lg shadow-blue-500/50">
        </div>
    </div>
</div>

<div class="col-span-12">
    <h1 class="text-center text-2xl md:mt-12 mt-10 font-bold uppercase">Kategori Utama</h1>
    <div class="flex flex-wrap justify-center items-center mt-8 gap-8">
        <?php foreach ($categories as $cat): ?>
            <button onclick="switchCategory('<?= url_title($cat, '-', true) ?>')" id="btn-<?= url_title($cat, '-', true) ?>" class="category-btn btn <?= ($cat == 'Protein') ? 'btn-primary' : 'btn-soft' ?> w-32"><?= $cat ?></button>
        <?php endforeach; ?>
    </div>

    <div id="category-products-container" class="grid grid-cols-12 md:gap-8 gap-6 px-8 md:px-12 mt-12">
        <?php foreach ($productsByCategory as $catName => $products): ?>
            <div id="wrapper-<?= url_title($catName, '-', true) ?>" class="category-wrapper col-span-12 grid grid-cols-12 md:gap-8 gap-6 <?= ($catName == 'Protein') ? '' : 'hidden' ?>">
                <?php if (empty($products)): ?>
                    <div class="col-span-12 text-center py-10 opacity-50 italic">Belum ada produk di kategori ini.</div>
                <?php else: ?>
                    <?php foreach ($products as $p): ?>
                        <div class="md:col-span-3 col-span-6">
                            <a href="<?= base_url('/user/produk/detail/' . $p['id_produk']) ?>" class="card bg-base-300 w-full shadow-sm hover:shadow-lg hover:shadow-blue-500/50 transition-all duration-300">
                                <figure>
                                    <img src="<?= base_url('assets/img/produk/' . ($p['foto_produk'] ?: 'default.png')) ?>" alt="<?= $p['nama_produk'] ?>" class="md:h-64 h-48 w-full object-cover" />
                                </figure>
                                <div class="card-body p-4">
                                    <p class="text-xs text-gray-400 font-semibold"><?= $p['nama_brand'] ?></p>
                                    <h2 class="card-title text-sm md:text-base h-12 overflow-hidden line-clamp-2"><?= $p['nama_produk'] ?></h2>
                                    <h1 class="text-lg md:text-xl font-bold text-primary">Rp <?= number_format($p['harga'], 0, ',', '.') ?></h1>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="col-span-12">
    <div class="banner-1 md:p-12 p-8">
        <img src="<?= base_url('assets/img/banner-1.png') ?>" alt="" class="rounded-2xl">
    </div>
</div>

<div class="col-span-12 mt-10">
    <h1 class="text-center text-2xl font-bold uppercase">Paling Banyak Dicari</h1>
    <div class="grid grid-cols-12 md:gap-8 gap-6 px-8 md:px-12 mt-12">
        <?php if (empty($mostSearched)): ?>
            <div class="col-span-12 text-center py-10 opacity-50 italic">Belum ada data popular.</div>
        <?php else: ?>
            <?php foreach ($mostSearched as $p): ?>
                <div class="md:col-span-3 col-span-6">
                    <a href="<?= base_url('/produk/detail/' . $p['id_produk']) ?>" class="card bg-base-300 w-full shadow-sm hover:shadow-lg hover:shadow-blue-500/50 transition-all duration-300">
                        <figure>
                            <img src="<?= base_url('assets/img/produk/' . ($p['foto_produk'] ?: 'default.png')) ?>" alt="<?= $p['nama_produk'] ?>" class="md:h-64 h-48 w-full object-cover" />
                        </figure>
                        <div class="card-body p-4">
                            <p class="text-xs text-gray-400 font-semibold"><?= $p['nama_brand'] ?></p>
                            <h2 class="card-title text-sm md:text-base h-12 overflow-hidden line-clamp-2"><?= $p['nama_produk'] ?></h2>
                            <h1 class="text-lg md:text-xl font-bold text-primary">Rp <?= number_format($p['harga'], 0, ',', '.') ?></h1>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>

<div class="col-span-12">
    <div class="banner-1 md:p-12 p-8">
        <img src="<?= base_url('assets/img/banner-2.png') ?>" alt="" class="rounded-2xl">
    </div>
</div>

<script>
    function switchCategory(slug) {
        // Hide all wrappers
        document.querySelectorAll('.category-wrapper').forEach(wrapper => {
            wrapper.classList.add('hidden');
        });

        // Show selected wrapper
        const target = document.getElementById('wrapper-' + slug);
        if (target) {
            target.classList.remove('hidden');
        }

        // Update buttons
        document.querySelectorAll('.category-btn').forEach(btn => {
            btn.classList.remove('btn-primary');
            btn.classList.add('btn-soft');
        });

        const activeBtn = document.getElementById('btn-' + slug);
        if (activeBtn) {
            activeBtn.classList.remove('btn-soft');
            activeBtn.classList.add('btn-primary');
        }
    }
</script>
<?= $this->endSection() ?>