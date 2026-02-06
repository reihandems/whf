<?= $this->extend('main/customer/view_main') ?>
<?= $this->section('content') ?>
<div class="col-span-12">
    <form action="<?= base_url('user/checkout/process') ?>" method="POST" id="checkout-form" class="grid grid-cols-12 px-12 py-6 gap-x-8">
        <?= csrf_field() ?>
        <div class="col-span-12">
            <div class="breadcrumbs text-sm">
                <ul>
                    <li>
                        <a href="<?= base_url('user/home') ?>" class="text-gray-500">Home</a>
                    </li>
                    <li>
                        <a href="<?= base_url('user/cart') ?>" class="text-gray-500">Keranjang</a>
                    </li>
                    <li>
                        <a class="font-bold">Pembayaran</a>
                    </li>
                </ul>
            </div>
            <h1 class="text-2xl font-semibold">Informasi Pengiriman</h1>
        </div>
        <!-- Form Isi alamat dan kurir pengiriman -->
        <div class="produk col-span-12 md:col-span-6 p-8 bg-base-300 mt-5 rounded-xl flex flex-col gap-10 self-start">
            <div class="grid grid-cols-6 gap-x-5">
                <div class="col-span-6 md:col-span-3">
                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Nama Lengkap</legend>
                        <input type="text" id="nama_lengkap" name="nama_lengkap" class="input" placeholder="Masukkan nama lengkap" required />
                    </fieldset>
                </div>
                <div class="col-span-6 md:col-span-3">
                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">No. HP</legend>
                        <input type="text" id="no_hp" name="no_hp" class="input" placeholder="Masukkan nomor HP" required />
                    </fieldset>
                </div>
                <div class="col-span-6 md:col-span-3">
                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Provinsi</legend>
                        <input type="text" id="provinsi" name="provinsi" class="input" placeholder="Masukkan Provinsi" required />
                    </fieldset>
                </div>
                <div class="col-span-6 md:col-span-3">
                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Kota</legend>
                        <input type="text" id="kota" name="kota" class="input" placeholder="Masukkan Kota" required />
                    </fieldset>
                </div>
                <div class="col-span-6 md:col-span-3">
                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Kecamatan</legend>
                        <input type="text" id="kecamatan" name="kecamatan" class="input" placeholder="Masukkan Kecamatan" required />
                    </fieldset>
                </div>
                <div class="col-span-6 md:col-span-3">
                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Kelurahan</legend>
                        <input type="text" id="kelurahan" name="kelurahan" class="input" placeholder="Masukkan Kelurahan" required />
                    </fieldset>
                </div>
                <div class="col-span-6">
                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Kode Pos</legend>
                        <input type="text" id="kode_pos" name="kode_pos" class="input w-full" placeholder="Masukkan kode pos" required />
                    </fieldset>
                </div>
                <div class="col-span-6">
                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Alamat Lengkap</legend>
                        <textarea id="alamat_lengkap" name="alamat_lengkap" class="textarea w-full h-24" placeholder="Pastikan alamatnya sudah lengkap" required></textarea>
                    </fieldset>
                </div>
                <div class="col-span-6">
                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Detail Lainnya</legend>
                        <input type="text" id="detail_alamat" name="detail_alamat" class="input w-full" placeholder="Blok / Unit No., Patokan" />
                    </fieldset>
                </div>
                <div class="col-span-6 mt-3">
                    <label class="flex gap-2 items-center cursor-pointer">
                        <input type="checkbox" id="use_my_address" class="checkbox checkbox-sm checkbox-primary" />
                        <span class="text-sm">Gunakan Alamat Saya</span>
                    </label>
                </div>
                <div class="col-span-6">
                    <div class="divider mb-0 w-full"></div>
                </div>
                <div class="col-span-6">
                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Kurir</legend>
                        <input type="hidden" name="shipping_cost" id="shipping_cost_input" value="0">
                        <select id="courier" name="courier" class="select w-full" required>
                            <option value="" disabled selected>Pilih Kurir Pengiriman</option>
                            <option value="10000">JNE (Rp 10.000)</option>
                            <option value="12000">J&T Express (Rp 12.000)</option>
                            <option value="15000">SiCepat (Rp 15.000)</option>
                        </select>
                    </fieldset>
                </div>
            </div>
        </div>

        <div class="ringkasan-pesanan col-span-12 md:col-span-6 p-8 bg-base-300 mt-5 rounded-xl flex flex-col gap-5 self-start">
            <h1 class="text-xl font-semibold">Review Pesanan</h1>
            <!-- Produk yang dimasukkan ke keranjang -->
            <div class="flex flex-col gap-8">
                <?php foreach ($cartItems as $item): ?>
                    <div class="flex flex-row items-center justify-between gap-4 md:gap-0">
                        <div class="kiri flex flex-row items-center gap-5">
                            <div class="avatar">
                                <div class="w-18 rounded">
                                    <img src="<?= base_url('assets/img/produk/' . ($item['foto_produk'] ?: 'default.png')) ?>" />
                                </div>
                            </div>
                            <div class="flex flex-col gap-1">
                                <p class="text-xs text-gray-400 font-semibold"><?= $item['nama_brand'] ?></p>
                                <h1 class="text-xl font-semibold"><?= $item['nama_produk'] ?></h1>
                                <h1 class="font-bold text-lg text-primary">Rp. <?= number_format($item['harga'], 0, ',', '.') ?></h1>
                            </div>
                        </div>
                        <!-- Jumlah Pesanan -->
                        <div class="jumlah">
                            <p class="text-gray-400 font-semibold"><?= $item['jumlah'] ?>x</p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="divider my-0"></div>
            <div class="flex flex-row justify-between">
                <p class="text-gray-400 text-sm md:text-base">Subtotal</p>
                <p class="text-sm md:text-base font-semibold">Rp. <span id="display-subtotal"><?= number_format($subtotal, 0, ',', '.') ?></span></p>
            </div>
            <div class="flex flex-row justify-between">
                <p class="text-gray-400 text-sm md:text-base">Diskon</p>
                <p class="text-sm md:text-base font-semibold">Rp. 0</p>
            </div>
            <div class="flex flex-row justify-between">
                <p class="text-gray-400 text-sm md:text-base">Ongkos Kirim</p>
                <p class="text-sm md:text-base font-semibold">Rp. <span id="display-shipping">0</span></p>
            </div>
            <div class="divider my-1"></div>
            <div class="flex flex-row justify-between items-center">
                <p class="text-gray-500 text-lg md:text-xl font-bold">Total</p>
                <p class="text-xl md:text-2xl font-black text-primary">Rp. <span id="display-total"><?= number_format($subtotal, 0, ',', '.') ?></span></p>
            </div>
            <div class="join w-full mt-2">
                <input type="text" class="input join-item w-full" placeholder="Tambah Kode Promo" />
                <button type="button" class="btn join-item btn-outline">Apply</button>
            </div>
            <button type="submit" class="btn btn-primary w-full shadow-lg shadow-primary/20 hover:scale-[1.02] transition-all duration-300 h-14 mt-4 text-lg font-bold">
                Bayar Sekarang
            </button>
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