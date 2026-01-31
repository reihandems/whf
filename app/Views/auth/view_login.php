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
            <div class="avatar">
                <div class="w-20 rounded-full">
                    <img src="<?= base_url('assets/img/logo-light.png') ?>" />
                </div>
            </div>
            <h1 class="text-2xl md:text-4xl font-semibold mt-4">Halo,<br>Selamat Datang di <span class="text-primary">WHF</span></h1>

            <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-error mt-4">
                    <span><?= session()->getFlashdata('error') ?></span>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('/login-process') ?>" method="POST">
                <?= csrf_field() ?>
                <div class="grid grid-cols-1 mt-3">
                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Username</legend>
                        <input type="text" name="username" class="input w-96" placeholder="Masukkan Username" required />
                    </fieldset>
                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Password</legend>
                        <input type="password" name="password" class="input w-96" placeholder="Masukkan Password" required />
                    </fieldset>
                    <label class="flex mt-3 gap-2 items-center">
                        <input type="checkbox" name="remember" class="checkbox checkbox-sm checkbox-primary" />
                        <span class="text-sm">Ingat Saya</span>
                    </label>
                </div>
                <button type="submit" class="btn btn-primary mt-5 w-40">Login</button>
            </form>
            <p class="text-sm mt-5">Belum punya akun? <a href="<?= base_url('/register') ?>" class="text-primary font-semibold"> Daftar Sekarang</a></p>
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