<?= $this->extend('main/customer/view_main') ?>
<?= $this->section('content') ?>
<!-- Content -->
<div class="col-span-12 text-center mt-10">
    <h1 class="text-2xl md:text-4xl font-bold">Temukan Personal Trainer Terbaikmu</h1>
    <p class="text-gray-500 font-semibold mt-2">Pilih trainer sesuai kebutuhan dan jadwalmu</p>
    <img src="<?= base_url('assets/img/trainer-hero.png') ?>" alt="hero" class="h-96 mx-0 md:mx-auto">
</div>
<div class="col-span-12">
    <div class="grid grid-cols-12">
        <!-- Sidebar -->
        <div class="col-span-12 md:col-span-3">
            <div class="drawer lg:drawer-open h-full">
                <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />
                <div class="drawer-content flex flex-col md:items-center items-start justify-center">
                    <!-- Page content here -->
                    <label for="my-drawer-3" class="btn drawer-button lg:hidden md:mx-0 md:mt-0 mt-5 mx-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd" d="M3.792 2.938A49.069 49.069 0 0 1 12 2.25c2.797 0 5.54.236 8.209.688a1.857 1.857 0 0 1 1.541 1.836v1.044a3 3 0 0 1-.879 2.121l-6.182 6.182a1.5 1.5 0 0 0-.439 1.061v2.927a3 3 0 0 1-1.658 2.684l-1.757.878A.75.75 0 0 1 9.75 21v-5.818a1.5 1.5 0 0 0-.44-1.06L3.13 7.938a3 3 0 0 1-.879-2.121V4.774c0-.897.64-1.683 1.542-1.836Z" clip-rule="evenodd" />
                        </svg>
                        Filter
                    </label>
                </div>
                <div class="drawer-side">
                    <label for="my-drawer-3" aria-label="close sidebar" class="drawer-overlay"></label>
                    <ul class="menu bg-base-200 min-h-full w-80 p-4">
                        <!-- Creatine -->
                        <li>
                            <h3 class="text-lg font-semibold">Filter</h3>
                        </li>
                        <div class="divider my-1"></div>
                        <li>
                            <legend class="fieldset-legend">Jenis Kelamin</legend>
                            <div class="flex flex-row gap-3">
                                <label class="label cursor-pointer">
                                    <input type="radio" name="gender" class="radio radio-primary radio-xs" checked />
                                    <span class="label-text">Laki-laki</span>
                                </label>

                                <label class="label cursor-pointer">
                                    <input type="radio" name="gender" class="radio radio-xs" />
                                    <span class="label-text">Perempuan</span>
                                </label>
                            </div>
                        </li>
                        <li>
                            <fieldset class="fieldset">
                                <legend class="fieldset-legend">Kategori</legend>
                                <select class="select rounded-2xl">
                                    <option selected>Weight Loss</option>
                                    <option>FireFox</option>
                                    <option>Safari</option>
                                </select>
                            </fieldset>
                        </li>
                        <li>
                            <fieldset class="fieldset">
                                <legend class="fieldset-legend">Harga</legend>
                                <select class="select rounded-2xl">
                                    <option selected>
                                        < Rp. 500.000 </option>
                                    <option>FireFox</option>
                                    <option>Safari</option>
                                </select>
                            </fieldset>
                        </li>
                        <li>
                            <fieldset class="fieldset">
                                <legend class="fieldset-legend">Lokasi</legend>
                                <select class="select rounded-2xl">
                                    <option selected> Jakarta </option>
                                    <option>FireFox</option>
                                    <option>Safari</option>
                                </select>
                            </fieldset>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Sidebar -->
        <!-- Content -->
        <div class="col-span-12 md:col-span-9 py-3 md:py-5 md:px-10 px-8">
            <div class="grid grid-cols-12 gap-8">
                <div class="md:col-span-4 col-span-6">
                    <a href="#" class="card bg-base-100 w-full shadow-sm">
                        <figure>
                            <img
                                src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                                alt="Shoes" class="h-48" />
                        </figure>
                        <div class="card-body">
                            <p class="text-xs text-gray-400 font-semibold">Evolene</p>
                            <h2 class="card-title">Card Title</h2>
                            <h1 class="text-xl font-semibold">Rp. 959.000</h1>
                        </div>
                    </a>
                </div>
                <div class="md:col-span-4 col-span-6">
                    <a href="#" class="card bg-base-100 w-full shadow-sm">
                        <figure>
                            <img
                                src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                                alt="Shoes" class="h-48" />
                        </figure>
                        <div class="card-body">
                            <p class="text-xs text-gray-400 font-semibold">Evolene</p>
                            <h2 class="card-title">Card Title</h2>
                            <h1 class="text-xl font-semibold">Rp. 959.000</h1>
                        </div>
                    </a>
                </div>
                <div class="md:col-span-4 col-span-6">
                    <a href="#" class="card bg-base-100 w-full shadow-sm">
                        <figure>
                            <img
                                src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                                alt="Shoes" class="h-48" />
                        </figure>
                        <div class="card-body">
                            <p class="text-xs text-gray-400 font-semibold">Evolene</p>
                            <h2 class="card-title">Card Title</h2>
                            <h1 class="text-xl font-semibold">Rp. 959.000</h1>
                        </div>
                    </a>
                </div>
                <div class="md:col-span-4 col-span-6">
                    <a href="#" class="card bg-base-100 w-full shadow-sm">
                        <figure>
                            <img
                                src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                                alt="Shoes" class="h-48" />
                        </figure>
                        <div class="card-body">
                            <p class="text-xs text-gray-400 font-semibold">Evolene</p>
                            <h2 class="card-title">Card Title</h2>
                            <h1 class="text-xl font-semibold">Rp. 959.000</h1>
                        </div>
                    </a>
                </div>
                <div class="md:col-span-4 col-span-6">
                    <a href="#" class="card bg-base-100 w-full shadow-sm">
                        <figure>
                            <img
                                src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                                alt="Shoes" class="h-48" />
                        </figure>
                        <div class="card-body">
                            <p class="text-xs text-gray-400 font-semibold">Evolene</p>
                            <h2 class="card-title">Card Title</h2>
                            <h1 class="text-xl font-semibold">Rp. 959.000</h1>
                        </div>
                    </a>
                </div>
                <div class="md:col-span-4 col-span-6">
                    <a href="#" class="card bg-base-100 w-full shadow-sm">
                        <figure>
                            <img
                                src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                                alt="Shoes" class="h-48" />
                        </figure>
                        <div class="card-body">
                            <p class="text-xs text-gray-400 font-semibold">Evolene</p>
                            <h2 class="card-title">Card Title</h2>
                            <h1 class="text-xl font-semibold">Rp. 959.000</h1>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- Content -->
    </div>
</div>
<?= $this->endSection() ?>