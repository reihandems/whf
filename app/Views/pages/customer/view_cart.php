<?= $this->extend('main/customer/view_main') ?>
<?= $this->section('content') ?>
<div class="col-span-12">
    <div class="grid grid-cols-12 px-8 md:px-12 py-6 gap-x-8">
        <div class="col-span-12">
            <div class="breadcrumbs text-sm">
                <ul>
                    <li><a href="<?= base_url('user/home') ?>" class="text-gray-500">Home</a></li>
                    <li><a class="font-bold border-b-2 border-primary">Keranjang</a></li>
                </ul>
            </div>
            <h1 class="text-3xl font-black mt-2 uppercase tracking-tighter">Keranjang Belanja</h1>
        </div>

        <?php if (empty($cartItems)): ?>
            <div class="col-span-12 py-20 flex flex-col items-center justify-center opacity-40 italic">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24 mb-4" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M17 18c-1.11 0-2 .89-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2M1 2v2h2l3.6 7.59l-1.36 2.45c-.15.28-.24.61-.24.96a2 2 0 0 0 2 2h12v-2H7.42c-.13 0-.25-.11-.25-.25l.03-.12L8.1 13h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.47c.07-.13.12-.28.12-.45a.5.5 0 0 0-.5-.5H5.21l-.94-2M7 18c-1.11 0-2 .89-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2" />
                </svg>
                <p class="text-xl">Keranjang Anda masih kosong.</p>
                <a href="<?= base_url('/user/produk') ?>" class="btn btn-primary btn-sm mt-6 rounded-full px-8 text-white font-bold">Mulai Belanja</a>
            </div>
        <?php else: ?>
            <div class="produk col-span-12 md:col-span-7 flex flex-col gap-6 mt-8">
                <?php foreach ($cartItems as $item): ?>
                    <div class="card bg-base-300 border border-white/5 p-6 rounded-3xl flex flex-col md:flex-row items-center gap-6 group transition-all hover:bg-base-200">
                        <div class="avatar shrink-0">
                            <div class="w-28 h-28 rounded-2xl shadow-2xl relative overflow-hidden ring-1 ring-white/10">
                                <img src="<?= base_url('assets/img/produk/' . ($item['foto_produk'] ?: 'default.png')) ?>"
                                    class="object-cover w-full h-full"
                                    onerror="this.src='https://img.daisyui.com/images/profile/demo/batperson@192.webp'" />
                                <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors"></div>
                            </div>
                        </div>

                        <div class="flex-1 flex flex-col gap-1 w-full text-center md:text-left">
                            <p class="text-[10px] font-black uppercase tracking-[0.2em] text-primary"><?= $item['nama_brand'] ?></p>
                            <h2 class="text-xl font-black leading-tight"><?= $item['nama_produk'] ?></h2>
                            <p class="text-xs font-bold text-gray-400 mb-2">Terbaik untuk pembentukan otot</p>
                            <h1 class="text-2xl font-black text-white">Rp <?= number_format($item['harga'], 0, ',', '.') ?></h1>
                        </div>

                        <div class="flex flex-col items-center gap-4">
                            <div class="bg-base-100 rounded-2xl p-1 flex items-center gap-4 border border-white/5">
                                <button onclick="updateQty(<?= $item['id_cart'] ?>, -1)" class="btn btn-ghost btn-circle btn-sm hover:bg-primary hover:text-white transition-all">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4" viewBox="0 0 24 24">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M20 12H4" />
                                    </svg>
                                </button>
                                <span class="font-black text-lg w-6 text-center tabular-nums" id="qty-<?= $item['id_cart'] ?>"><?= $item['jumlah'] ?></span>
                                <button onclick="updateQty(<?= $item['id_cart'] ?>, 1)" class="btn btn-ghost btn-circle btn-sm hover:bg-primary hover:text-white transition-all">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4" viewBox="0 0 24 24">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4" />
                                    </svg>
                                </button>
                            </div>
                            <a href="<?= base_url('user/cart/delete/' . $item['id_cart']) ?>" class="text-[10px] font-black uppercase tracking-widest text-red-500/50 hover:text-red-500 transition-colors flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M19 4h-3.5l-1-1h-5l-1 1H5v2h14M6 19a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7H6z" />
                                </svg>
                                Hapus Item
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="ringkasan-pesanan col-span-12 md:col-span-5 self-start mt-8">
                <div class="bg-base-300 p-8 rounded-[2rem] border border-white/5 flex flex-col gap-6 shadow-2xl relative overflow-hidden">
                    <div class="absolute -right-10 -top-10 w-40 h-40 bg-primary/5 rounded-full blur-3xl"></div>

                    <h1 class="text-xl font-black uppercase tracking-tighter border-b border-white/5 pb-4">Ringkasan Pesanan</h1>

                    <div class="space-y-4">
                        <div class="flex flex-row justify-between text-sm font-bold">
                            <p class="text-gray-400 uppercase tracking-widest text-[10px]">Subtotal</p>
                            <p class="tabular-nums">Rp <?= number_format($subtotal, 0, ',', '.') ?></p>
                        </div>
                        <div class="flex flex-row justify-between text-sm font-bold">
                            <p class="text-gray-400 uppercase tracking-widest text-[10px]">Pajak (11%)</p>
                            <p class="tabular-nums">Rp <?= number_format($subtotal * 0.11, 0, ',', '.') ?></p>
                        </div>
                        <div class="flex flex-row justify-between text-sm font-bold">
                            <p class="text-gray-400 uppercase tracking-widest text-[10px]">Biaya Layanan</p>
                            <p class="tabular-nums">Rp <?= number_format($shipping, 0, ',', '.') ?></p>
                        </div>
                    </div>

                    <div class="divider my-0 opacity-10"></div>

                    <div class="flex flex-row justify-between items-center">
                        <p class="text-white font-black uppercase tracking-tighter text-xl">Total Bayar</p>
                        <p class="text-2xl font-black text-primary tabular-nums">Rp <?= number_format($subtotal + ($subtotal * 0.11) + $shipping, 0, ',', '.') ?></p>
                    </div>

                    <div class="space-y-4 mt-4 w-full">
                        <div class="join w-full">
                            <div class="w-full">
                                <label class="input validator join-item w-full">
                                    <input type="text" placeholder="Kode Promo" class="w-full" required />
                                </label>
                                <div class="validator-hint hidden">Masukkan kode promo</div>
                            </div>
                            <button class="btn btn-primary join-item">Apply</button>
                        </div>
                        <a href="<?= base_url('user/checkout') ?>" class="btn btn-primary btn-lg w-full text-white font-black uppercase tracking-widest rounded-2xl shadow-lg shadow-blue-500/20">PROSES CHECKOUT</a>
                    </div>

                    <div class="flex items-center justify-center gap-4 opacity-30 mt-4 grayscale">
                        <img src="<?= base_url('assets/img/bca.svg') ?>" class="h-4" />
                        <img src="<?= base_url('assets/img/mandiri.svg') ?>" class="h-4" />
                        <img src="<?= base_url('assets/img/dana.svg') ?>" class="h-4" />
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<script>
    function updateQty(id_cart, change) {
        const qtySpan = document.getElementById('qty-' + id_cart);
        let currentQty = parseInt(qtySpan.innerText);
        let newQty = currentQty + change;

        if (newQty < 1) return;

        fetch('<?= base_url('user/cart/update') ?>', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: `id_cart=${id_cart}&qty=${newQty}`
        }).then(res => res.json()).then(data => {
            if (data.status === 'success') {
                location.reload();
            }
        });
    }
</script>

<?= $this->endSection() ?>