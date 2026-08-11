<?= $this->extend('main/customer/view_main') ?>
<?= $this->section('content') ?>
<div class="col-span-12">
    <form action="<?= base_url('user/checkout-trainer/process') ?>" method="POST" id="checkout-form" class="grid grid-cols-12 px-12 py-6 gap-x-8">
        <?= csrf_field() ?>
        <input type="hidden" name="id_trainer" value="<?= $trainer['id_trainer'] ?>">
        <input type="hidden" name="tanggal_sesi" value="<?= $tanggal_sesi ?>">
        <input type="hidden" name="jumlah_sesi" value="<?= $jumlah_sesi ?>">

        <!-- Progress steps -->
        <div class="col-span-12 mb-8 flex justify-center">
            <ul class="steps w-full max-w-lg font-semibold text-xs md:text-sm">
                <li class="step step-primary">Pilih Trainer</li>
                <li class="step step-primary">Detail Pemesanan</li>
                <li class="step">Pembayaran Selesai</li>
            </ul>
        </div>

        <div class="col-span-12 mb-6">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 border-b border-base-content/5 pb-4">
                <div>
                    <h1 class="text-3xl font-black">Detail Pemesanan</h1>
                    <p class="text-xs text-base-content/50 mt-1 font-semibold">Harap isi detail informasi Anda (trainee) yang akan mengikuti sesi.</p>
                </div>
                <div>
                    <div class="alert bg-primary/5 border border-primary/20 p-3 rounded-xl flex items-center justify-between gap-4">
                        <span class="text-xs font-bold text-primary">Isi form otomatis menggunakan data Anda?</span>
                        <label class="btn btn-primary btn-xs font-black cursor-pointer">
                            <input type="checkbox" id="use_my_data" class="hidden" />
                            Gunakan Data Profil
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <!-- Form Isi alamat trainee -->
        <div class="col-span-12 md:col-span-7 flex flex-col gap-6">
            <div class="bg-base-300 p-6 rounded-2xl border border-base-content/5 shadow-sm space-y-4">
                <h3 class="text-sm font-extrabold text-primary uppercase tracking-wider mb-2">Informasi Trainee</h3>
                <div class="grid grid-cols-2 gap-4">
                    <fieldset class="fieldset col-span-2">
                        <legend class="fieldset-legend font-bold">Nama Lengkap</legend>
                        <input type="text" id="nama_lengkap" name="nama_lengkap" class="input input-bordered w-full rounded-xl" placeholder="Masukkan nama lengkap Anda" required value="<?= $customer['nama_lengkap'] ?? '' ?>" />
                    </fieldset>
                    <fieldset class="fieldset col-span-2 md:col-span-1">
                        <legend class="fieldset-legend font-bold">Alamat Email</legend>
                        <input type="email" id="email" name="email" class="input input-bordered w-full rounded-xl" placeholder="Masukkan alamat email aktif" required value="<?= session()->get('email') ?>" />
                    </fieldset>
                    <fieldset class="fieldset col-span-2 md:col-span-1">
                        <legend class="fieldset-legend font-bold">No. HP / WhatsApp</legend>
                        <input type="text" id="no_hp" name="no_hp" class="input input-bordered w-full rounded-xl" placeholder="Masukkan No. HP aktif" required value="<?= $customer['no_hp'] ?? '' ?>" />
                    </fieldset>
                    <fieldset class="fieldset col-span-2">
                        <legend class="fieldset-legend font-bold">Alamat Lengkap</legend>
                        <textarea id="alamat_lengkap" name="alamat_lengkap" class="textarea textarea-bordered h-24 w-full rounded-xl" placeholder="Masukkan alamat tempat tinggal Anda saat ini" required><?= $customer['alamat_lengkap'] ?? '' ?></textarea>
                    </fieldset>
                </div>
            </div>
        </div>

        <!-- Sticky Review Booking -->
        <div class="col-span-12 md:col-span-5 md:sticky md:top-24 self-start mt-6 md:mt-0">
            <div class="bg-base-300 p-6 rounded-2xl border border-base-content/5 shadow-sm flex flex-col gap-5">
                <h2 class="text-lg font-extrabold text-base-content border-b border-base-content/5 pb-3">
                    Review Booking
                </h2>
                <div class="flex flex-col gap-4">
                    <div class="flex flex-row items-center gap-3 bg-base-200/40 p-3 rounded-xl">
                        <div class="avatar shrink-0">
                            <div class="w-14 h-14 rounded-xl">
                                <img src="<?= base_url('assets/img/trainer/' . ($trainer['foto_profil'] ?: 'default.png')) ?>" onerror="this.src='https://img.daisyui.com/images/profile/demo/batperson@192.webp'" class="object-cover" />
                            </div>
                        </div>
                        <div class="overflow-hidden">
                            <div class="badge badge-soft badge-primary badge-xs mb-0.5 font-bold"><?= $trainer['kategori'] ?></div>
                            <h4 class="text-sm font-extrabold text-base-content truncate"><?= $trainer['nama_trainer'] ?></h4>
                            <p class="text-xs text-base-content/60 mt-0.5 font-semibold">Harga: Rp. <?= number_format($trainer['harga_per_sesi'], 0, ',', '.') ?> / sesi</p>
                        </div>
                    </div>

                    <div class="bg-base-200/20 p-3 rounded-xl text-xs space-y-2 font-bold text-base-content/70">
                        <div class="flex justify-between">
                            <span>Mulai Latihan</span>
                            <span class="text-base-content font-extrabold"><?= date('d M Y', strtotime($tanggal_sesi)) ?></span>
                        </div>
                        <div class="flex justify-between">
                            <span>Jumlah Sesi</span>
                            <span class="text-base-content font-extrabold"><?= $jumlah_sesi ?> Sesi (<?= $jumlah_sesi * 60 ?> Menit)</span>
                        </div>
                    </div>
                </div>

                <div class="divider my-0"></div>

                <div class="space-y-2 text-xs font-bold">
                    <div class="flex flex-row justify-between text-base-content/60">
                        <p>Subtotal</p>
                        <p>Rp. <?= number_format($subtotal, 0, ',', '.') ?></p>
                    </div>
                </div>

                <div class="divider my-0"></div>

                <div class="flex flex-row justify-between items-center">
                    <p class="text-sm font-extrabold text-base-content">Total Pembayaran</p>
                    <p class="text-xl font-black text-primary">Rp. <?= number_format($total, 0, ',', '.') ?></p>
                </div>

                <div class="join w-full mt-2">
                    <input type="text" class="input input-bordered join-item w-full input-sm rounded-l-xl focus:outline-none" placeholder="Kode Promo" />
                    <button type="button" class="btn join-item btn-outline btn-sm rounded-r-xl font-bold">Apply</button>
                </div>

                <button type="submit" id="submit-btn" class="btn btn-primary w-full shadow-lg shadow-primary/20 hover:scale-[1.02] transition-all duration-300 h-12 mt-2 text-sm font-black uppercase tracking-wider rounded-xl">
                    Proses Pembayaran
                </button>
            </div>
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