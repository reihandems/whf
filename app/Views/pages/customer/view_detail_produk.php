<?= $this->extend('main/customer/view_main') ?>
<?= $this->section('content') ?>
<!-- Content -->
<div class="col-span-12 px-4 md:px-12 py-8 max-w-7xl mx-auto">
    <a href="<?= base_url('/user/produk') ?>" class="btn btn-ghost hover:bg-base-200 mb-6 gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
            <path fill-rule="evenodd" d="M11.03 3.97a.75.75 0 0 1 0 1.06l-6.22 6.22H21a.75.75 0 0 1 0 1.5H4.81l6.22 6.22a.75.75 0 1 1-1.06 1.06l-7.5-7.5a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
        </svg>
        Kembali ke Produk
    </a>
    <div class="grid grid-cols-12 gap-8 lg:gap-12">
        <!-- Product Image -->
        <div class="col-span-12 md:col-span-6 lg:col-span-5">
            <div class="sticky top-24">
                <img
                    src="<?= base_url('assets/img/produk/' . ($p['foto_produk'] ?: 'default.png')) ?>"
                    class="w-full h-[450px] lg:h-[520px] object-cover rounded-2xl shadow-xl border border-base-content/5" 
                    onerror="this.src='https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp'" />
            </div>
        </div>

        <!-- Product Specs & Details -->
        <div class="col-span-12 md:col-span-6 lg:col-span-7 space-y-6">
            <div>
                <div class="flex flex-wrap items-center gap-2 mb-3">
                    <span class="badge badge-primary font-bold px-3 py-2 text-xs"><?= $p['nama_kategori'] ?></span>
                    <span class="badge badge-outline font-semibold px-3 py-2 text-xs"><?= $p['sub_kategori'] ?></span>
                </div>
                <p class="text-sm font-semibold text-primary/80 tracking-wide uppercase"><?= $p['nama_brand'] ?></p>
                <h1 class="text-3xl lg:text-4xl font-extrabold text-base-content mt-1 leading-tight"><?= $p['nama_produk'] ?></h1>
                
                <div class="flex items-center gap-3 mt-3">
                    <div class="flex items-center gap-1">
                        <div class="rating rating-sm">
                            <?php for ($i = 1; $i <= 5; $i++): ?>
                                <input type="radio" class="mask mask-star-2 bg-orange-400" <?= ($i == round($p['rating'])) ? 'checked' : '' ?> disabled />
                            <?php endfor; ?>
                        </div>
                        <span class="text-sm font-bold ml-1"><?= number_format($p['rating'], 1) ?></span>
                    </div>
                    <span class="text-base-content/30">|</span>
                    <p class="text-sm text-base-content/75 font-medium"><?= $p['jumlah_review'] ?> Ulasan</p>
                </div>

                <div class="mt-4 p-4 bg-primary/5 rounded-2xl border border-primary/10">
                    <p class="text-[11px] font-semibold text-primary uppercase tracking-wider">Harga Terbaik</p>
                    <p class="text-3xl lg:text-4xl font-black text-primary mt-1">Rp <?= number_format($p['harga'], 0, ',', '.') ?></p>
                </div>
            </div>

            <!-- Tabbed Product Information (Description, How to Use, Nutrition Facts) -->
            <div class="card bg-base-100 border border-base-content/5 shadow-sm overflow-hidden">
                <div role="tablist" class="tabs tabs-lifted bg-base-200">
                    <input type="radio" name="product_tabs" role="tab" class="tab font-bold" aria-label="Deskripsi" checked />
                    <div role="tabpanel" class="tab-content bg-base-100 border-base-300 p-6">
                        <div class="text-sm text-base-content/85 leading-relaxed text-justify whitespace-pre-line">
                            <?= esc($p['deskripsi']) ?>
                        </div>
                    </div>

                    <input type="radio" name="product_tabs" role="tab" class="tab font-bold" aria-label="Cara Pakai" />
                    <div role="tabpanel" class="tab-content bg-base-100 border-base-300 p-6">
                        <div class="text-sm text-base-content/85 leading-relaxed text-justify whitespace-pre-line">
                            <?= $p['cara_pemakaian'] ? esc($p['cara_pemakaian']) : 'Informasi cara pemakaian tidak tersedia untuk produk ini. Harap ikuti petunjuk umum penggunaan suplemen fitness.' ?>
                        </div>
                    </div>

                    <input type="radio" name="product_tabs" role="tab" class="tab font-bold" aria-label="Kandungan Nutrisi" />
                    <div role="tabpanel" class="tab-content bg-base-100 border-base-300 p-6">
                        <div class="text-sm text-base-content/85 leading-relaxed text-justify whitespace-pre-line">
                            <?= $p['kandungan_nutrisi'] ? esc($p['kandungan_nutrisi']) : 'Kandungan nutrisi lengkap belum dicantumkan. Anda bisa berkonsultasi kepada trainer kami untuk panduan nutrisi harian.' ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Specs Parameters Grid -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-3">
                <div class="bg-base-200/50 border border-base-content/5 p-3 rounded-xl flex items-center gap-3">
                    <div class="p-2 bg-primary/10 rounded-lg text-primary shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-[10px] text-base-content/50 font-semibold uppercase">Stok Tersedia</p>
                        <p class="text-xs font-extrabold"><?= $p['stok'] ?> Unit</p>
                    </div>
                </div>
                <div class="bg-base-200/50 border border-base-content/5 p-3 rounded-xl flex items-center gap-3">
                    <div class="p-2 bg-primary/10 rounded-lg text-primary shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v18m0-18h4.5a3 3 0 013 3v0a3 3 0 01-3 3H12m0-6H7.5a3 3 0 00-3 3v0a3 3 0 003 3H12m0 0h4.5a3 3 0 013 3v0a3 3 0 01-3 3H12m0 0H7.5a3 3 0 00-3 3v0a3 3 0 003 3H12" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-[10px] text-base-content/50 font-semibold uppercase">Berat Bersih</p>
                        <p class="text-xs font-extrabold"><?= $p['berat'] ?> Gram</p>
                    </div>
                </div>
                <div class="bg-base-200/50 border border-base-content/5 p-3 rounded-xl flex items-center gap-3">
                    <div class="p-2 bg-primary/10 rounded-lg text-primary shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-[10px] text-base-content/50 font-semibold uppercase">Varian Rasa</p>
                        <p class="text-xs font-extrabold"><?= $p['flavour'] ?: 'Plain' ?></p>
                    </div>
                </div>
                <div class="bg-base-200/50 border border-base-content/5 p-3 rounded-xl flex items-center gap-3">
                    <div class="p-2 bg-primary/10 rounded-lg text-primary shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v16.5m0-16.5L12 12m-8.25-8.25L20.25 12M20.25 12v8.25m0-8.25L12 12m8.25 8.25H3.75" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-[10px] text-base-content/50 font-semibold uppercase">Ukuran</p>
                        <p class="text-xs font-extrabold"><?= $p['ukuran'] ?: '-' ?></p>
                    </div>
                </div>
            </div>

            <!-- Add to Cart Widget -->
            <div class="p-5 bg-base-200 rounded-2xl border border-base-content/5">
                <form id="add-to-cart-form">
                    <?= csrf_field() ?>
                    <input type="hidden" name="id_produk" value="<?= $p['id_produk'] ?>">
                    <div class="flex flex-row gap-4 items-center">
                        <div class="flex items-center bg-base-100 rounded-xl border border-base-content/10 px-1 py-1">
                            <button type="button" onclick="updateQty(-1)" class="btn btn-ghost btn-xs btn-square font-bold">-</button>
                            <input type="number" name="qty" id="qty-input" value="1" min="1" max="<?= $p['stok'] ?>" class="bg-transparent w-12 text-center font-bold text-sm focus:outline-none [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none">
                            <button type="button" onclick="updateQty(1)" class="btn btn-ghost btn-xs btn-square font-bold">+</button>
                        </div>
                        <button type="submit" id="add-to-cart-submit" class="btn btn-primary flex-1 font-bold shadow-lg hover:shadow-primary/30">Tambah ke Keranjang</button>
                    </div>
                </form>
            </div>

            <!-- Delivery Information Card -->
            <div class="bg-base-100 border border-base-content/5 rounded-2xl p-4">
                <p class="text-xs font-bold text-base-content mb-3 uppercase tracking-wider">Metode Pengiriman</p>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-base-200 flex items-center justify-center text-primary shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124l-.317-5.136a5.125 5.125 0 00-4.82-4.717h-2.227a.75.75 0 00-.75.75v5.25c0 .414-.336.75-.75.75h-9" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-[10px] text-base-content/50 font-bold uppercase">Paket</p>
                            <p class="text-xs font-bold">Reguler</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-base-200 flex items-center justify-center text-primary shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-[10px] text-base-content/50 font-bold uppercase">Waktu Kirim</p>
                            <p class="text-xs font-bold">2 - 4 Hari Kerja</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-base-200 flex items-center justify-center text-primary shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-[10px] text-base-content/50 font-bold uppercase">Estimasi</p>
                            <p class="text-xs font-bold">Tergantung Lokasi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Rating Breakdown & Reviews -->
        <div class="col-span-12 border-t border-base-content/10 pt-12 mt-8">
            <h2 class="text-2xl font-black mb-8 text-base-content flex items-center gap-3">
                Ulasan Produk
                <span class="badge badge-primary font-extrabold text-sm py-3 px-3"><?= count($reviews) ?></span>
            </h2>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                <!-- Rating Breakdown Card -->
                <div class="lg:col-span-4 bg-base-200/50 border border-base-content/5 p-6 rounded-2xl">
                    <p class="text-sm font-bold text-base-content/70">Rata-rata Rating</p>
                    <div class="flex items-baseline gap-2 mt-2">
                        <span class="text-5xl font-black text-base-content"><?= number_format($p['rating'], 1) ?></span>
                        <span class="text-base-content/40 text-sm">/ 5</span>
                    </div>
                    <div class="rating rating-sm mt-2">
                        <?php for ($i = 1; $i <= 5; $i++): ?>
                            <input type="radio" class="mask mask-star-2 bg-orange-400" <?= ($i == round($p['rating'])) ? 'checked' : '' ?> disabled />
                        <?php endfor; ?>
                    </div>

                    <!-- Progress bars for distribution (mocked dynamically for aesthetics based on actual average) -->
                    <div class="space-y-2 mt-6">
                        <?php 
                        $stars = [5, 4, 3, 2, 1];
                        foreach ($stars as $s): 
                            $percentage = 0;
                            if (count($reviews) > 0) {
                                $matchCount = 0;
                                foreach($reviews as $rev) {
                                    if ($rev['rating'] == $s) $matchCount++;
                                }
                                $percentage = ($matchCount / count($reviews)) * 100;
                            } else {
                                // Default placeholders if zero reviews to keep it visually stunning
                                $percentage = ($s == round($p['rating'])) ? 100 : 0;
                            }
                        ?>
                        <div class="flex items-center gap-3 text-xs">
                            <span class="w-3 font-bold"><?= $s ?></span>
                            <progress class="progress progress-primary flex-1 h-2" value="<?= $percentage ?>" max="100"></progress>
                            <span class="w-8 text-right font-medium text-base-content/50"><?= round($percentage) ?>%</span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Review Items -->
                <div class="lg:col-span-8 space-y-4">
                    <?php if (empty($reviews)): ?>
                        <div class="bg-base-200/30 p-10 rounded-2xl text-center border border-dashed border-base-content/10">
                            <p class="text-base-content/50 italic font-semibold text-sm">Belum ada ulasan untuk produk ini. Jadilah yang pertama memberikan ulasan!</p>
                        </div>
                    <?php else: ?>
                        <div class="grid grid-cols-1 gap-4">
                            <?php foreach ($reviews as $r): ?>
                                <div class="bg-base-100 p-6 rounded-2xl border border-base-content/5 shadow-sm space-y-3">
                                    <div class="flex flex-row justify-between items-start">
                                        <div class="flex flex-row gap-3 items-center">
                                            <div class="avatar">
                                                <div class="w-10 h-10 rounded-full">
                                                    <?php if ($r['foto_profil']): ?>
                                                        <img src="<?= base_url('assets/img/customer/' . $r['foto_profil']) ?>" />
                                                    <?php else: ?>
                                                        <img src="https://ui-avatars.com/api/?name=<?= urlencode($r['nama_lengkap']) ?>&background=random" />
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div>
                                                <p class="text-sm font-bold text-base-content"><?= $r['nama_lengkap'] ?></p>
                                                <p class="text-[10px] text-base-content/40 font-semibold"><?= date('d M Y', strtotime($r['created_at'])) ?></p>
                                            </div>
                                        </div>
                                        <div class="rating rating-xs">
                                            <?php for ($i = 1; $i <= 5; $i++): ?>
                                                <input type="radio" class="mask mask-star-2 bg-orange-400" <?= ($i == $r['rating']) ? 'checked' : '' ?> disabled />
                                            <?php endfor; ?>
                                        </div>
                                    </div>
                                    <p class="text-sm text-base-content/75 font-medium leading-relaxed">
                                        <?= esc($r['komentar']) ?>
                                    </p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- Related Products Section -->
        <?php if (!empty($relatedProducts)): ?>
            <div class="col-span-12 border-t border-base-content/10 pt-12 mt-12">
                <h3 class="text-2xl font-black mb-6 text-base-content">Produk Terkait</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 lg:gap-6">
                    <?php foreach ($relatedProducts as $rp): ?>
                        <a href="<?= base_url('/user/produk/detail/' . $rp['id_produk']) ?>" class="group card bg-base-100 border border-base-content/5 hover:border-primary/20 shadow-sm hover:shadow-md transition-all duration-300 overflow-hidden">
                            <figure class="relative overflow-hidden h-40 md:h-48 bg-base-200">
                                <img src="<?= base_url('assets/img/produk/' . ($rp['foto_produk'] ?: 'default.png')) ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" onerror="this.src='https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp'" />
                            </figure>
                            <div class="card-body p-4 justify-between">
                                <div>
                                    <p class="text-[10px] font-bold text-primary/75 uppercase tracking-wide"><?= $rp['nama_brand'] ?></p>
                                    <h4 class="font-bold text-sm text-base-content line-clamp-1 group-hover:text-primary transition-colors duration-200 mt-1"><?= $rp['nama_produk'] ?></h4>
                                </div>
                                <div class="mt-3 pt-2 border-t border-base-content/5 flex items-center justify-between">
                                    <span class="font-black text-sm text-primary">Rp <?= number_format($rp['harga'], 0, ',', '.') ?></span>
                                    <div class="flex items-center gap-0.5 text-xs text-orange-400 font-bold">
                                        ★ <span class="text-base-content/70"><?= number_format($rp['rating'], 1) ?></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<script>
    function updateQty(val) {
        const input = document.getElementById('qty-input');
        let current = parseInt(input.value);
        current += val;
        if (current < 1) current = 1;
        if (current > <?= $p['stok'] ?>) current = <?= $p['stok'] ?>;
        input.value = current;
    }

    document.getElementById('add-to-cart-form').addEventListener('submit', async function(e) {
        e.preventDefault();
        const submitBtn = document.getElementById('add-to-cart-submit');
        const qty = parseInt(document.getElementById('qty-input').value);
        
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<span class="loading loading-spinner loading-xs"></span> Menambah...';

        try {
            const formData = new FormData(this);
            const response = await fetch('<?= base_url('/user/cart/add') ?>', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            });

            // Since add() redirects to /user/cart normally, but we sent an AJAX request,
            // we can intercept the success or query the backend cart status.
            // Let's reload cart counts in navbar.
            const cartBadge = document.getElementById('nav-cart-badge');
            if (cartBadge) {
                let currentCount = parseInt(cartBadge.innerText) || 0;
                let newCount = currentCount + qty;
                if (newCount > 98) {
                    cartBadge.innerText = '99+';
                } else {
                    cartBadge.innerText = newCount;
                }
            }

            // Create temporary toast notification
            const toast = document.createElement('div');
            toast.className = "toast toast-top toast-end mt-20 z-[9999]";
            toast.innerHTML = `
                <div class="alert alert-success">
                    <span class="text-white font-semibold">Produk berhasil ditambahkan ke keranjang!</span>
                </div>
            `;
            document.body.appendChild(toast);
            setTimeout(() => toast.remove(), 3000);

        } catch (error) {
            console.error('Error adding to cart:', error);
            alert('Gagal menambahkan produk ke keranjang.');
        } finally {
            submitBtn.disabled = false;
            submitBtn.innerHTML = 'Tambah ke Keranjang';
        }
    });
</script>
<?= $this->endSection() ?>