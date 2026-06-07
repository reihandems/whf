<?= $this->extend('main/customer/view_main') ?>
<?= $this->section('content') ?>
<div class="col-span-12 flex justify-center py-12 px-6">
    <div class="w-full max-w-lg">
        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-base-content/5 transition-all duration-500" id="payment-card">
            <!-- Header -->
            <div class="bg-primary p-8 text-white text-center relative overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-full opacity-10 pointer-events-none">
                    <svg width="100%" height="100%" viewBox="0 0 100 100" preserveAspectRatio="none">
                        <path d="M0 0 L100 100 M100 0 L0 100" stroke="currentColor" stroke-width="0.5"/>
                    </svg>
                </div>
                <h1 class="text-xl font-black italic tracking-widest mb-1 uppercase">WHF PAYMENT SIMULATOR</h1>
                <p class="text-xs font-bold opacity-80 uppercase tracking-widest">Environment: Research Sandbox</p>
            </div>

            <!-- Transaction Info -->
            <div class="p-8 space-y-8">
                <div class="flex flex-col gap-4 border-b border-dashed border-base-content/10 pb-6">
                    <div>
                        <p class="text-[10px] text-gray-400 font-black uppercase tracking-widest mb-1">Kode Transaksi</p>
                        <p class="text-lg font-black text-gray-800"><?= $kode ?></p>
                    </div>
                    <div>
                        <p class="text-[10px] text-gray-400 font-black uppercase tracking-widest mb-1">Total Tagihan</p>
                        <p class="text-2xl font-black text-primary">Rp <?= number_format($amount, 0, ',', '.') ?></p>
                    </div>
                </div>

                <!-- Payment Methods Simulation -->
                <div>
                    <p class="text-xs font-black text-gray-500 uppercase tracking-widest mb-4">Pilih Metode Pembayaran (Simulasi)</p>
                    <div class="grid grid-cols-2 gap-3">
                        <label class="cursor-pointer">
                            <input type="radio" name="payment_method" class="peer hidden" checked />
                            <div class="p-4 rounded-2xl border-2 border-base-content/5 bg-base-200/30 text-gray-400 peer-checked:border-primary peer-checked:bg-primary/5 peer-checked:text-gray-800 transition-all duration-300 flex flex-col items-center gap-2">
                                <img src="<?= base_url('assets/img/qris.svg') ?>" class="h-6 opacity-80" />
                                <span class="text-[10px] font-black uppercase transition-colors duration-300">QRIS / E-Wallet</span>
                            </div>
                        </label>
                        <label class="cursor-pointer">
                            <input type="radio" name="payment_method" class="peer hidden" />
                            <div class="p-4 rounded-2xl border-2 border-base-content/5 bg-base-200/30 text-gray-400 peer-checked:border-primary peer-checked:bg-primary/5 peer-checked:text-gray-800 transition-all duration-300 flex flex-col items-center gap-2">
                                <img src="<?= base_url('assets/img/bca.svg') ?>" class="h-5 opacity-80" />
                                <span class="text-[10px] font-black uppercase transition-colors duration-300">Virtual Account</span>
                            </div>
                        </label>
                    </div>
                </div>

                <!-- Simulation Info Message -->
                <div class="bg-blue-50 border-l-4 border-blue-500 p-4 rounded-r-xl">
                    <div class="flex gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <p class="text-xs text-blue-700 font-medium leading-relaxed">
                            <strong>Mode Simulasi:</strong> Klik tombol konfirmasi di bawah untuk memproses transaksi secara otomatis ke sistem database WHF tanpa pembayaran asli.
                        </p>
                    </div>
                </div>

                <!-- Buttons -->
                <form action="<?= base_url('user/payment/confirm') ?>" method="POST" id="confirm-form" target="_top">
                    <?= csrf_field() ?>
                    <input type="hidden" name="kode" value="<?= $kode ?>">
                    <input type="hidden" name="type" value="<?= $type ?>">
                    
                    <button type="submit" id="btn-confirm" class="btn btn-primary w-full h-14 rounded-2xl text-white font-black tracking-widest shadow-xl shadow-primary/30 transition-all duration-300 hover:scale-[1.02] active:scale-[0.98]">
                        KONFIRMASI PEMBAYARAN
                    </button>
                </form>

                <?php 
                $cancelUrl = ($type == 'produk') ? base_url('user/pesanan?status=pending') : base_url('user/booking?status=pending');
                ?>
                <a href="<?= $cancelUrl ?>" target="_top" class="block text-center text-xs font-bold text-gray-400 hover:text-primary transition-colors duration-300">
                    Batal dan Kembali
                </a>
            </div>

            <!-- Footer -->
            <div class="bg-base-200 p-4 text-center">
                <p class="text-[9px] font-black text-gray-400 uppercase tracking-[0.2em]">Secure Simulation Engine v2.0</p>
            </div>
        </div>

        <!-- Success Animation Overlay (Hidden by Default) -->
        <div id="success-overlay" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-white/90 backdrop-blur-sm transition-opacity duration-500 opacity-0 px-6">
            <div class="text-center">
                <div class="w-24 h-24 bg-success rounded-full flex items-center justify-center mx-auto mb-6 scale-0 transition-transform duration-500 delay-100 shadow-2xl shadow-success/30" id="success-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <h2 class="text-3xl font-black italic mb-2 tracking-tight text-gray-800 translate-y-4 opacity-0 transition-all duration-500 delay-300" id="success-title">PEMBAYARAN BERHASIL!</h2>
                <p class="text-gray-500 font-bold translate-y-4 opacity-0 transition-all duration-500 delay-400" id="success-msg">Menyambungkan ke sistem WHF...</p>
            </div>
        </div>
    </div>
</div>

<?= $this->section('script') ?>
<script>
    const form = document.getElementById('confirm-form');
    const btn = document.getElementById('btn-confirm');
    const card = document.getElementById('payment-card');
    const overlay = document.getElementById('success-overlay');
    const icon = document.getElementById('success-icon');
    const title = document.getElementById('success-title');
    const msg = document.getElementById('success-msg');

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Disable button
        btn.disabled = true;
        btn.innerHTML = '<span class="loading loading-spinner loading-sm"></span> MEMPROSES...';
        
        // Step 1: Simulate processing
        setTimeout(() => {
            // Step 2: Show success animation
            overlay.classList.remove('hidden');
            setTimeout(() => {
                overlay.style.opacity = '1';
                icon.style.transform = 'scale(1)';
                title.style.transform = 'translateY(0)';
                title.style.opacity = '1';
                msg.style.transform = 'translateY(0)';
                msg.style.opacity = '1';
            }, 50);

            // Step 3: Real redirect to confirm in DB
            setTimeout(() => {
                form.submit();
            }, 2500);
        }, 1200);
    });
</script>
<?= $this->endSection() ?>
<?= $this->endSection() ?>
