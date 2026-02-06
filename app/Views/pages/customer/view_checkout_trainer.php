<?= $this->extend('main/customer/view_main') ?>
<?= $this->section('content') ?>
<div class="col-span-12">
    <form action="<?= base_url('user/checkout-trainer/process') ?>" method="POST" id="checkout-form" class="grid grid-cols-12 px-12 py-6 gap-x-8">
        <?= csrf_field() ?>
        <input type="hidden" name="id_trainer" value="<?= $trainer['id_trainer'] ?>">
        <input type="hidden" name="tanggal_sesi" value="<?= $tanggal_sesi ?>">
        <input type="hidden" name="jumlah_sesi" value="<?= $jumlah_sesi ?>">

        <div class="col-span-12">
            <div class="breadcrumbs text-sm">
                <ul>
                    <li>
                        <a href="<?= base_url('user/trainer') ?>" class="text-gray-500">Trainer</a>
                    </li>
                    <li>
                        <a class="font-bold">Pembayaran Booking</a>
                    </li>
                </ul>
            </div>
            <h1 class="text-2xl font-semibold">Informasi Trainee</h1>
        </div>
        <!-- Form Isi alamat trainee -->
        <div class="produk col-span-12 md:col-span-6 p-8 bg-base-300 mt-5 rounded-xl flex flex-col gap-10 self-start">
            <div class="grid grid-cols-6 gap-x-5">
                <div class="col-span-6">
                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Nama Lengkap</legend>
                        <input type="text" id="nama_lengkap" name="nama_lengkap" class="input w-full" placeholder="Masukkan nama lengkap" required value="<?= $customer['nama_lengkap'] ?? '' ?>" />
                    </fieldset>
                </div>
                <div class="col-span-6 md:col-span-3">
                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Email</legend>
                        <input type="email" id="email" name="email" class="input w-full" placeholder="Masukkan Email" required value="<?= session()->get('email') ?>" />
                    </fieldset>
                </div>
                <div class="col-span-6 md:col-span-3">
                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">No. HP</legend>
                        <input type="text" id="no_hp" name="no_hp" class="input w-full" placeholder="Masukkan No. HP" required value="<?= $customer['no_hp'] ?? '' ?>" />
                    </fieldset>
                </div>
                <div class="col-span-6">
                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Alamat Lengkap</legend>
                        <textarea id="alamat_lengkap" name="alamat_lengkap" class="textarea h-24 w-full" placeholder="Masukkan Alamat Lengkap" required><?= $customer['alamat_lengkap'] ?? '' ?></textarea>
                    </fieldset>
                </div>
                <div class="col-span-6 mt-3">
                    <label class="flex gap-2 items-center cursor-pointer">
                        <input type="checkbox" id="use_my_data" class="checkbox checkbox-sm checkbox-primary" />
                        <span class="text-sm">Gunakan Data Saya</span>
                    </label>
                </div>
            </div>
        </div>

        <div class="ringkasan-pesanan col-span-12 md:col-span-6 p-8 bg-base-300 mt-5 rounded-xl flex flex-col gap-5 self-start">
            <h1 class="text-xl font-semibold">Review Booking</h1>
            <div class="flex flex-col gap-8">
                <div class="flex flex-row items-center justify-between gap-4 md:gap-0">
                    <div class="kiri flex flex-row items-center gap-5">
                        <div class="avatar">
                            <div class="w-20 rounded-xl">
                                <img src="<?= base_url('assets/img/trainer/' . ($trainer['foto_profil'] ?: 'default.png')) ?>" onerror="this.src='https://img.daisyui.com/images/profile/demo/batperson@192.webp'" />
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <div class="badge badge-soft badge-primary badge-sm"><?= $trainer['kategori'] ?></div>
                            <h1 class="text-xl font-bold"><?= $trainer['nama_trainer'] ?></h1>
                            <p class="text-xs text-gray-400">Tanggal Sesi: <span class="font-semibold text-white"><?= date('d M Y', strtotime($tanggal_sesi)) ?></span></p>
                            <p class="text-xs text-gray-400">Total Sesi: <span class="font-semibold text-white"><?= $jumlah_sesi ?> Sesi</span></p>
                            <h1 class="font-bold text-lg text-primary">Rp. <?= number_format($trainer['harga_per_sesi'], 0, ',', '.') ?> / sesi</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="divider my-0"></div>
            <div class="flex flex-row justify-between">
                <p class="text-gray-400 text-sm md:text-base">Subtotal</p>
                <p class="text-sm md:text-base font-semibold">Rp. <?= number_format($subtotal, 0, ',', '.') ?></p>
            </div>
            <div class="divider my-1"></div>
            <div class="flex flex-row justify-between items-center">
                <p class="text-gray-400 text-lg md:text-xl font-bold">Total</p>
                <p class="text-xl md:text-2xl font-black text-primary">Rp. <?= number_format($total, 0, ',', '.') ?></p>
            </div>
            <div class="join w-full mt-2">
                <input type="text" class="input join-item w-full" placeholder="Tambah Kode Promo" />
                <button type="button" class="btn join-item btn-outline">Apply</button>
            </div>
            <button type="submit" id="submit-btn" class="btn btn-primary w-full shadow-lg shadow-primary/20 hover:scale-[1.02] transition-all duration-300 h-14 mt-4 text-lg font-bold">
                Bayar Sekarang
            </button>
        </div>
    </form>
</div>

<script src="https://sandbox.doku.com/jokul-checkout-js/v1/jokul-checkout-1.0.0.js"></script>
<script>
    const customerData = <?= json_encode($customer) ?>;
    const userEmail = "<?= session()->get('email') ?>";
    const useMyDataCheckbox = document.getElementById('use_my_data');
    const checkoutForm = document.getElementById('checkout-form');
    const submitBtn = document.getElementById('submit-btn');

    useMyDataCheckbox.addEventListener('change', function() {
        if (this.checked) {
            document.getElementById('nama_lengkap').value = customerData.nama_lengkap || '';
            document.getElementById('email').value = userEmail || '';
            document.getElementById('no_hp').value = customerData.no_hp || '';
            document.getElementById('alamat_lengkap').value = customerData.alamat_lengkap || '';
        }
    });

    checkoutForm.addEventListener('submit', async function(e) {
        e.preventDefault();

        submitBtn.disabled = true;
        submitBtn.innerHTML = '<span class="loading loading-spinner"></span> Memproses...';

        try {
            const formData = new FormData(this);
            const response = await fetch('<?= base_url('user/checkout-trainer/process') ?>', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            });

            const result = await response.json();

            if (result.status === 'success') {
                loadJokulCheckout(result.payment_url);
            } else {
                alert('Gagal: ' + (result.message || 'Terjadi kesalahan.'));
                console.error(result);
            }
        } catch (error) {
            console.error('Error:', error);
            alert('Gagal memproses booking.');
        } finally {
            submitBtn.disabled = false;
            submitBtn.innerHTML = 'Bayar Sekarang';
        }
    });
</script>
<?= $this->endSection() ?>