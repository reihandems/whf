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
        <div class="col-span-12 md:col-span-6 p-12" style="background-image: url(<?= base_url('assets/img/bg-img.png') ?>); background-size: cover;">
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
            <div class="grid grid-cols-2 gap-x-4 mt-3">
                <div class="col-span-1">
                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Nama Lengkap</legend>
                        <input type="text" class="input w-full" placeholder="Masukkan Nama Lengkap" required />
                    </fieldset>
                </div>
                <div class="col-span-1">
                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Username</legend>
                        <input type="text" class="input w-full" placeholder="Masukkan Username" required />
                    </fieldset>
                </div>
                <div class="col-span-1">
                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Email</legend>
                        <input type="email" class="input w-full" placeholder="Masukkan Email" required />
                    </fieldset>
                </div>
                <div class="col-span-1">
                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Password</legend>
                        <input type="password" class="input w-full" placeholder="Masukkan Password" required />
                    </fieldset>
                </div>
                <div class="col-span-2">
                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Konfirmasi Password</legend>
                        <input type="password" class="input w-full" placeholder="Masukkan Ulang Password" required />
                    </fieldset>
                </div>
                <label class="flex mt-3 gap-2 items-center">
                    <input type="checkbox" checked="checked" class="checkbox checkbox-sm checkbox-primary" />
                    <span class="text-sm">Ingat Saya</span>
                </label>
            </div>
            <button class="btn btn-primary mt-5 w-40">Daftar</button>
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
</body>

</html>