<?= $this->extend('main/customer/view_main') ?>
<?= $this->section('content') ?>
<div class="col-span-12">
    <form action="<?= base_url('user/checkout/process') ?>" method="POST" id="checkout-form" class="grid grid-cols-12 px-12 py-6 gap-x-8">
        <?= csrf_field() ?>
        <!-- Progress steps -->
        <div class="col-span-12 mb-8 flex justify-center">
            <ul class="steps w-full max-w-lg font-semibold text-xs md:text-sm">
                <li class="step step-primary">Keranjang Belanja</li>
                <li class="step step-primary">Data Pengiriman</li>
                <li class="step">Pembayaran Selesai</li>
            </ul>
        </div>

        <div class="col-span-12 mb-6">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 border-b border-base-content/5 pb-4">
                <div>
                    <h1 class="text-3xl font-black">Informasi Pengiriman</h1>
                    <p class="text-xs text-base-content/50 mt-1 font-semibold">Silakan lengkapi detail alamat pengiriman produk Anda.</p>
                </div>
                <div>
                    <div class="alert bg-primary/5 border border-primary/20 p-3 rounded-xl flex items-center justify-between gap-4">
                        <span class="text-xs font-bold text-primary">Isi alamat otomatis dari profil Anda?</span>
                        <label class="btn btn-primary btn-xs font-black cursor-pointer">
                            <input type="checkbox" id="use_my_address" class="hidden" />
                            Gunakan Alamat Profil
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <!-- Form Isi alamat dan kurir pengiriman -->
        <div class="col-span-12 md:col-span-7 flex flex-col gap-6">
            <!-- Section 1: Data Diri -->
            <div class="bg-base-300 p-6 rounded-2xl border border-base-content/5 shadow-sm space-y-4">
                <h3 class="text-sm font-extrabold text-primary uppercase tracking-wider mb-2">1. Data Penerima</h3>
                <div class="grid grid-cols-2 gap-4">
                    <fieldset class="fieldset col-span-2 md:col-span-1">
                        <legend class="fieldset-legend font-bold">Nama Lengkap</legend>
                        <input type="text" id="nama_lengkap" name="nama_lengkap" class="input input-bordered w-full rounded-xl" placeholder="Nama penerima" required />
                    </fieldset>
                    <fieldset class="fieldset col-span-2 md:col-span-1">
                        <legend class="fieldset-legend font-bold">No. HP / WhatsApp</legend>
                        <input type="text" id="no_hp" name="no_hp" class="input input-bordered w-full rounded-xl" placeholder="Nomor HP aktif" required />
                    </fieldset>
                </div>
            </div>

            <!-- Section 2: Alamat Lengkap -->
            <div class="bg-base-300 p-6 rounded-2xl border border-base-content/5 shadow-sm space-y-4">
                <h3 class="text-sm font-extrabold text-primary uppercase tracking-wider mb-2">2. Alamat Pengiriman</h3>
                <div class="grid grid-cols-2 gap-4">
                    <fieldset class="fieldset col-span-2 md:col-span-1">
                        <legend class="fieldset-legend font-bold">Provinsi</legend>
                        <input type="text" id="provinsi" name="provinsi" class="input input-bordered w-full rounded-xl" placeholder="Provinsi" required />
                    </fieldset>
                    <fieldset class="fieldset col-span-2 md:col-span-1">
                        <legend class="fieldset-legend font-bold">Kota / Kabupaten</legend>
                        <input type="text" id="kota" name="kota" class="input input-bordered w-full rounded-xl" placeholder="Kota" required />
                    </fieldset>
                    <fieldset class="fieldset col-span-2 md:col-span-1">
                        <legend class="fieldset-legend font-bold">Kecamatan</legend>
                        <input type="text" id="kecamatan" name="kecamatan" class="input input-bordered w-full rounded-xl" placeholder="Kecamatan" required />
                    </fieldset>
                    <fieldset class="fieldset col-span-2 md:col-span-1">
                        <legend class="fieldset-legend font-bold">Kelurahan</legend>
                        <input type="text" id="kelurahan" name="kelurahan" class="input input-bordered w-full rounded-xl" placeholder="Kelurahan" required />
                    </fieldset>
                    <fieldset class="fieldset col-span-2">
                        <legend class="fieldset-legend font-bold">Kode Pos</legend>
                        <input type="text" id="kode_pos" name="kode_pos" class="input input-bordered w-full rounded-xl" placeholder="Kode pos" required />
                    </fieldset>
                    <fieldset class="fieldset col-span-2">
                        <legend class="fieldset-legend font-bold">Alamat Lengkap</legend>
                        <textarea id="alamat_lengkap" name="alamat_lengkap" class="textarea textarea-bordered w-full h-24 rounded-xl" placeholder="Tulis jalan, nomor rumah, RT/RW secara detail..." required></textarea>
                    </fieldset>
                    <fieldset class="fieldset col-span-2">
                        <legend class="fieldset-legend font-bold">Detail Alamat / Patokan (Opsional)</legend>
                        <input type="text" id="detail_alamat" name="detail_alamat" class="input input-bordered w-full rounded-xl" placeholder="Contoh: Rumah cat biru pagar hitam dekat masjid" />
                    </fieldset>
                </div>
            </div>

            <!-- Section 3: Kurir -->
            <div class="bg-base-300 p-6 rounded-2xl border border-base-content/5 shadow-sm space-y-4">
                <h3 class="text-sm font-extrabold text-primary uppercase tracking-wider mb-2">3. Kurir Pengiriman</h3>
                <fieldset class="fieldset">
                    <legend class="fieldset-legend font-bold">Pilih Layanan Kurir</legend>
                    <input type="hidden" name="shipping_cost" id="shipping_cost_input" value="0">
                    <select id="courier" name="courier" class="select select-bordered w-full rounded-xl" required>
                        <option value="" disabled selected>Pilih Kurir Pengiriman</option>
                        <option value="10000">JNE Reguler (Rp 10.000) - Estimasi 2-3 hari</option>
                        <option value="12000">J&T Express (Rp 12.000) - Estimasi 2-4 hari</option>
                        <option value="15000">SiCepat REG (Rp 15.000) - Estimasi 1-3 hari</option>
                    </select>
                </fieldset>
            </div>
        </div>

        <!-- Sticky Review Pesanan -->
        <div class="col-span-12 md:col-span-5 md:sticky md:top-24 self-start mt-6 md:mt-0">
            <div class="bg-base-300 p-6 rounded-2xl border border-base-content/5 shadow-sm flex flex-col gap-5">
                <h2 class="text-lg font-extrabold text-base-content flex items-center justify-between border-b border-base-content/5 pb-3">
                    Review Pesanan
                    <span class="badge badge-primary font-bold"><?= count($cartItems) ?> Item</span>
                </h2>
                
                <!-- Produk yang dimasukkan ke keranjang -->
                <div class="flex flex-col gap-4 max-h-48 overflow-y-auto pr-1">
                    <?php foreach ($cartItems as $item): ?>
                        <div class="flex flex-row items-center justify-between gap-3 bg-base-200/40 p-3 rounded-xl">
                            <div class="flex flex-row items-center gap-3">
                                <div class="avatar shrink-0">
                                    <div class="w-12 h-12 rounded-lg">
                                        <img src="<?= base_url('assets/img/produk/' . ($item['foto_produk'] ?: 'default.png')) ?>" onerror="this.src='https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp'" class="object-cover" />
                                    </div>
                                </div>
                                <div class="overflow-hidden">
                                    <p class="text-[10px] text-primary font-bold uppercase tracking-wider"><?= $item['nama_brand'] ?></p>
                                    <h4 class="text-xs font-bold text-base-content truncate"><?= $item['nama_produk'] ?></h4>
                                    <h5 class="text-xs font-semibold text-base-content/60 mt-0.5"><?= $item['jumlah'] ?>x · Rp. <?= number_format($item['harga'], 0, ',', '.') ?></h5>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                
                <div class="divider my-0"></div>
                
                <div class="space-y-2 text-xs font-bold">
                    <div class="flex flex-row justify-between text-base-content/60">
                        <p>Subtotal</p>
                        <p>Rp. <span id="display-subtotal"><?= number_format($subtotal, 0, ',', '.') ?></span></p>
                    </div>
                    <div class="flex flex-row justify-between text-base-content/60">
                        <p>Diskon</p>
                        <p>Rp. 0</p>
                    </div>
                    <div class="flex flex-row justify-between text-base-content/60">
                        <p>Ongkos Kirim</p>
                        <p>Rp. <span id="display-shipping">0</span></p>
                    </div>
                </div>

                <div class="divider my-0"></div>

                <div class="flex flex-row justify-between items-center">
                    <p class="text-sm font-extrabold text-base-content">Total Pembayaran</p>
                    <p class="text-xl font-black text-primary">Rp. <span id="display-total"><?= number_format($subtotal, 0, ',', '.') ?></span></p>
                </div>

                <div class="join w-full mt-2">
                    <input type="text" class="input input-bordered join-item w-full input-sm rounded-l-xl focus:outline-none" placeholder="Kode Promo" />
                    <button type="button" class="btn join-item btn-outline btn-sm rounded-r-xl font-bold">Apply</button>
                </div>

                <button type="submit" class="btn btn-primary w-full shadow-lg shadow-primary/20 hover:scale-[1.02] transition-all duration-300 h-12 mt-2 text-sm font-black uppercase tracking-wider rounded-xl">
                    Proses Pembayaran
                </button>
            </div>
        </div>
    </form>
</div>

<script src="https://sandbox.doku.com/jokul-checkout-js/v1/jokul-checkout-1.0.0.js"></script>
<script>
    const customerData = <?= json_encode($customer) ?>;
    const subtotal = <?= $subtotal ?>;

    const useMyAddressCheckbox = document.getElementById('use_my_address');
    const courierSelect = document.getElementById('courier');
    const checkoutForm = document.getElementById('checkout-form');
    const submitBtn = checkoutForm.querySelector('button[type="submit"]');

    const fields = [
        'nama_lengkap', 'no_hp', 'provinsi', 'kota', 'kecamatan', 
        'kelurahan', 'kode_pos', 'alamat_lengkap', 'detail_alamat'
    ];

    useMyAddressCheckbox.addEventListener('change', function() {
        if (this.checked) {
            fields.forEach(field => {
                const element = document.getElementById(field);
                if (element && customerData[field]) {
                    element.value = customerData[field];
                }
            });
        } else {
            fields.forEach(field => {
                const element = document.getElementById(field);
                if (element) {
                    element.value = '';
                }
            });
        }
    });

    courierSelect.addEventListener('change', function() {
        if (!this.value) return;
        const shippingCost = parseInt(this.value);
        const total = subtotal + shippingCost;

        document.getElementById('shipping_cost_input').value = shippingCost;
        document.getElementById('display-shipping').innerText = shippingCost.toLocaleString('id-ID');
        document.getElementById('display-total').innerText = total.toLocaleString('id-ID');
    });

    checkoutForm.addEventListener('submit', async function(e) {
        e.preventDefault();

        // Basic validation for courier
        if (!courierSelect.value) {
            alert('Silakan pilih kurir terlebih dahulu.');
            return;
        }

        submitBtn.disabled = true;
        submitBtn.innerHTML = '<span class="loading loading-spinner"></span> Memproses...';

        try {
            const formData = new FormData(this);
            const response = await fetch('<?= base_url('user/checkout/process') ?>', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            });

            const result = await response.json();

            if (result.status === 'success') {
                // Call DOKU Checkout
                loadJokulCheckout(result.payment_url);
            } else {
                alert('Gagal: ' + (result.message || 'Terjadi kesalahan.'));
                console.error(result);
            }
        } catch (error) {
            console.error('Error:', error);
            alert('Gagal memproses pesanan.');
        } finally {
            submitBtn.disabled = false;
            submitBtn.innerHTML = 'Bayar Sekarang';
        }
    });
</script>
<?= $this->endSection() ?>