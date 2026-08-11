<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url('assets/css/output.css') ?>" rel="stylesheet">
    <link href="<?= base_url('resources/css/custom.css') ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
</head>

<body>
    <div class="grid grid-cols-12 min-h-screen">
        <div class="col-span-12 md:col-span-6 py-12 md:px-12 px-4" style="background-image: url(<?= base_url('assets/img/bg-img.png') ?>); background-size: cover;">
            <div class="flex flex-row items-center justify-between">
                <div class="avatar">
                    <div class="w-20 rounded-full">
                        <img src="<?= base_url('assets/img/logo-light.png') ?>" />
                    </div>
                </div>
                <a href="<?= base_url('/login') ?>" class="btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M10.3 7.7a.984.984 0 0 0 0 1.4l1.9 1.9H3c-.55 0-1 .45-1 1s.45 1 1 1h9.2l-1.9 1.9a.984.984 0 0 0 0 1.4c.39.39 1.01.39 1.4 0l3.59-3.59a.996.996 0 0 0 0-1.41L11.7 7.7a.984.984 0 0 0-1.4 0M20 19h-7c-.55 0-1 .45-1 1s.45 1 1 1h7c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-7c-.55 0-1 .45-1 1s.45 1 1 1h7z" />
                    </svg>
                    Sudah punya akun?
                </a>
            </div>
            
            <h1 class="text-2xl md:text-4xl font-semibold mt-4">Halo,<br>Silakan Daftar Akun <span class="text-primary">WHF</span></h1>

            <!-- Registration Guide Panel -->
            <div class="bg-base-200/80 border border-base-content/10 rounded-2xl p-4 mt-6 text-sm">
                <h3 class="font-bold text-primary mb-2 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
                    </svg>
                    Panduan Registrasi Akun
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-3 text-xs">
                    <div class="flex items-start gap-2">
                        <span class="bg-primary text-primary-content rounded-full w-5 h-5 flex items-center justify-center shrink-0 font-bold">1</span>
                        <p>Isi Nama Lengkap, Username unik, dan Email aktif Anda.</p>
                    </div>
                    <div class="flex items-start gap-2">
                        <span class="bg-primary text-primary-content rounded-full w-5 h-5 flex items-center justify-center shrink-0 font-bold">2</span>
                        <p>Buat Password minimal 8 karakter dengan kombinasi angka & simbol.</p>
                    </div>
                    <div class="flex items-start gap-2">
                        <span class="bg-primary text-primary-content rounded-full w-5 h-5 flex items-center justify-center shrink-0 font-bold">3</span>
                        <p>Setujui Syarat & Ketentuan yang berlaku, lalu klik tombol Daftar.</p>
                    </div>
                </div>
            </div>

            <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-error mt-4">
                    <span><?= session()->getFlashdata('error') ?></span>
                </div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('validation')): ?>
                <div class="alert alert-warning mt-4">
                    <ul>
                        <?php foreach (session()->getFlashdata('validation') as $error): ?>
                            <li><?= $error ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('/register-process') ?>" method="POST" id="register-form">
                <?= csrf_field() ?>
                <div class="grid grid-cols-2 gap-x-4 mt-3">
                    <div class="col-span-1">
                        <fieldset class="fieldset">
                            <legend class="fieldset-legend">Nama Lengkap</legend>
                            <input type="text" name="nama_lengkap" class="input w-full" placeholder="Masukkan Nama Lengkap" value="<?= old('nama_lengkap') ?>" required />
                            <span class="text-[10px] text-base-content/60 mt-1">Sesuai KTP (min 3 karakter)</span>
                        </fieldset>
                    </div>
                    <div class="col-span-1">
                        <fieldset class="fieldset">
                            <legend class="fieldset-legend">Username</legend>
                            <input type="text" name="username" class="input w-full" placeholder="Masukkan Username" value="<?= old('username') ?>" required />
                            <span class="text-[10px] text-base-content/60 mt-1">Hanya huruf dan angka (tanpa spasi)</span>
                        </fieldset>
                    </div>
                    <div class="col-span-2">
                        <fieldset class="fieldset">
                            <legend class="fieldset-legend">Email</legend>
                            <input type="email" name="email" class="input w-full" placeholder="Masukkan Email" value="<?= old('email') ?>" required />
                            <span class="text-[10px] text-base-content/60 mt-1">Contoh: nama@domain.com</span>
                        </fieldset>
                    </div>
                    <div class="col-span-1">
                        <fieldset class="fieldset">
                            <legend class="fieldset-legend">Password</legend>
                            <input type="password" id="password" name="password" class="input w-full" placeholder="Masukkan Password" required />
                            
                            <!-- Password Strength Indicator -->
                            <div class="mt-2 space-y-1">
                                <div class="flex justify-between text-[10px] font-semibold">
                                    <span>Kekuatan Password:</span>
                                    <span id="strength-text" class="text-base-content/50">Sangat Lemah</span>
                                </div>
                                <div class="grid grid-cols-3 gap-1">
                                    <div id="strength-bar-1" class="h-1 rounded bg-base-content/20 transition-all duration-300"></div>
                                    <div id="strength-bar-2" class="h-1 rounded bg-base-content/20 transition-all duration-300"></div>
                                    <div id="strength-bar-3" class="h-1 rounded bg-base-content/20 transition-all duration-300"></div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-span-1">
                        <fieldset class="fieldset">
                            <legend class="fieldset-legend">Konfirmasi Password</legend>
                            <input type="password" id="konfirmasi_password" name="konfirmasi_password" class="input w-full" placeholder="Masukkan Ulang Password" required />
                            
                            <!-- Real-time Password Match Status -->
                            <div id="match-status" class="text-[10px] mt-1 font-semibold flex items-center gap-1 opacity-0 transition-opacity duration-300">
                                <span id="match-icon"></span>
                                <span id="match-text"></span>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-span-2">
                        <label class="flex mt-3 gap-2 items-center cursor-pointer">
                            <input type="checkbox" name="terms" class="checkbox checkbox-sm checkbox-primary" required />
                            <span class="text-xs">Saya setuju dengan <a href="javascript:void(0)" onclick="terms_modal.showModal()" class="text-primary font-bold hover:underline">Syarat & Ketentuan</a> yang berlaku.</span>
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-5 md:w-40 w-full">Daftar</button>
            </form>
        </div>
        <div class="col-span-12 hidden md:col-span-6 md:block">
            <div class="bg-login h-full w-full flex items-center justify-center"
                style="background-image: url(<?= base_url('assets/img/bg-login.png') ?>); 
                    background-repeat: no-repeat; 
                    background-size: cover; 
                    background-position: center;">
            </div>
        </div>
    </div>

    <!-- T&C Modal -->
    <dialog id="terms_modal" class="modal">
        <div class="modal-box max-w-lg">
            <h3 class="font-bold text-lg text-primary flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                </svg>
                Syarat & Ketentuan WHF
            </h3>
            <div class="py-4 text-xs space-y-3 leading-relaxed max-h-60 overflow-y-auto mt-2">
                <p class="font-bold">1. Ketentuan Umum</p>
                <p class="text-base-content/80">Dengan mendaftar di Will Healthy Fitness (WHF), Anda menyatakan bahwa seluruh data yang diberikan adalah benar dan valid.</p>
                
                <p class="font-bold">2. Keamanan Akun</p>
                <p class="text-base-content/80">Anda bertanggung jawab penuh untuk menjaga kerahasiaan password dan aktivitas yang terjadi di bawah akun Anda.</p>
                
                <p class="font-bold">3. Pemesanan & Pembayaran</p>
                <p class="text-base-content/80">Pembelian produk suplemen serta booking sesi personal trainer yang telah dibayar secara sah melalui simulator atau sistem pembayaran WHF bersifat mengikat dan diproses sesuai status pemesanan.</p>

                <p class="font-bold">4. Kebijakan Privasi</p>
                <p class="text-base-content/80">Data diri, email, dan riwayat pesanan Anda tidak akan dibagikan kepada pihak ketiga di luar kepentingan operasional layanan WHF.</p>
            </div>
            <div class="modal-action">
                <form method="dialog">
                    <button class="btn btn-primary">Saya Mengerti</button>
                </form>
            </div>
        </div>
    </dialog>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const passwordInput = document.getElementById('password');
            const confirmInput = document.getElementById('konfirmasi_password');
            
            const strengthText = document.getElementById('strength-text');
            const bar1 = document.getElementById('strength-bar-1');
            const bar2 = document.getElementById('strength-bar-2');
            const bar3 = document.getElementById('strength-bar-3');

            const matchStatus = document.getElementById('match-status');
            const matchIcon = document.getElementById('match-icon');
            const matchText = document.getElementById('match-text');

            // Password Strength Logic
            if (passwordInput) {
                passwordInput.addEventListener('input', function() {
                    const val = this.value;
                    let score = 0;

                    if (val.length >= 8) score++;
                    if (/[0-9]/.test(val)) score++;
                    if (/[^A-Za-z0-9]/.test(val)) score++;

                    // Reset strength classes
                    bar1.className = 'h-1 rounded transition-all duration-300';
                    bar2.className = 'h-1 rounded transition-all duration-300';
                    bar3.className = 'h-1 rounded transition-all duration-300';

                    if (val.length === 0) {
                        strengthText.textContent = 'Sangat Lemah';
                        strengthText.className = 'text-base-content/50';
                        bar1.classList.add('bg-base-content/20');
                        bar2.classList.add('bg-base-content/20');
                        bar3.classList.add('bg-base-content/20');
                    } else if (score === 1 || val.length < 8) {
                        strengthText.textContent = 'Lemah (Min. 8 Karakter)';
                        strengthText.className = 'text-error';
                        bar1.classList.add('bg-error');
                        bar2.classList.add('bg-base-content/20');
                        bar3.classList.add('bg-base-content/20');
                    } else if (score === 2) {
                        strengthText.textContent = 'Sedang';
                        strengthText.className = 'text-warning';
                        bar1.classList.add('bg-warning');
                        bar2.classList.add('bg-warning');
                        bar3.classList.add('bg-base-content/20');
                    } else if (score === 3) {
                        strengthText.textContent = 'Kuat';
                        strengthText.className = 'text-success';
                        bar1.classList.add('bg-success');
                        bar2.classList.add('bg-success');
                        bar3.classList.add('bg-success');
                    }

                    checkMatch();
                });
            }

            // Real-time Match Logic
            if (confirmInput) {
                confirmInput.addEventListener('input', checkMatch);
            }

            function checkMatch() {
                const pVal = passwordInput.value;
                const cVal = confirmInput.value;

                if (cVal.length === 0) {
                    matchStatus.classList.add('opacity-0');
                    return;
                }

                matchStatus.classList.remove('opacity-0');
                if (pVal === cVal) {
                    matchStatus.className = 'text-[10px] mt-1 font-semibold flex items-center gap-1 text-success transition-opacity duration-300';
                    matchIcon.innerHTML = '✔';
                    matchText.textContent = 'Password cocok';
                } else {
                    matchStatus.className = 'text-[10px] mt-1 font-semibold flex items-center gap-1 text-error transition-opacity duration-300';
                    matchIcon.innerHTML = '✖';
                    matchText.textContent = 'Password belum cocok';
                }
            }
        });
    </script>
</body>

</html>