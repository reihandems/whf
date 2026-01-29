<?= $this->extend('main/customer/view_main') ?>
<?= $this->section('content') ?>
<!-- Content -->
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
                        Kategori
                    </label>
                </div>
                <div class="drawer-side">
                    <label for="my-drawer-3" aria-label="close sidebar" class="drawer-overlay"></label>
                    <ul class="menu bg-base-200 min-h-full w-80 p-4">
                        <!-- Creatine -->
                        <li>
                            <h3 class="text-lg font-semibold">Protein</h3>
                        </li>
                        <li>
                            <a href="#" class="pl-8 text-primary font-semibold">Whey Protein</a>
                            <a href="#" class="pl-8 text-gray-500 font-semibold">Isolate Protein</a>
                            <a href="#" class="pl-8 text-gray-500 font-semibold">Protein Bars</a>
                            <a href="#" class="pl-8 text-gray-500 font-semibold">Real Food</a>
                        </li>
                        <li>
                            <h3 class="text-lg font-semibold">Creatine</h3>
                        </li>
                        <li>
                            <a href="#" class="pl-8 text-gray-500 font-semibold">Monohydrate</a>
                            <a href="#" class="pl-8 text-gray-500 font-semibold">Tri-Creatine</a>
                            <a href="#" class="pl-8 text-gray-500 font-semibold">Advanced Stacks</a>
                        </li>
                        <li>
                            <h3 class="text-lg font-semibold">Pre-Workout</h3>
                        </li>
                        <li>
                            <a href="#" class="pl-8 text-gray-500 font-semibold">Shots</a>
                            <a href="#" class="pl-8 text-gray-500 font-semibold">Strength</a>
                            <a href="#" class="pl-8 text-gray-500 font-semibold">Pump</a>
                            <a href="#" class="pl-8 text-gray-500 font-semibold">Focus</a>
                        </li>
                        <li>
                            <h3 class="text-lg font-semibold">Fat Burner</h3>
                        </li>
                        <li>
                            <a href="#" class="pl-8 text-gray-500 font-semibold">Thermogenic</a>
                            <a href="#" class="pl-8 text-gray-500 font-semibold">Appetite</a>
                            <a href="#" class="pl-8 text-gray-500 font-semibold">Carb Blockers</a>
                            <a href="#" class="pl-8 text-gray-500 font-semibold">Fat Blockers</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Sidebar -->
        <!-- Content -->
        <div class="col-span-12 md:col-span-9 py-3 md:py-6 px-10">
            <div class="breadcrumbs text-sm">
                <ul>
                    <li class="text-gray-500 font-semibold">Produk</li>
                    <li class="text-gray-500 font-semibold">Protein</li>
                    <li class="font-semibold">Whey Protein</li>
                </ul>
            </div>
            <h1 class="text-2xl font-bold">Whey Protein</h1>
            <div class="flex flex-wrap mt-4 gap-4">
                <select class="select rounded-2xl w-24">
                    <option disabled selected>Brand</option>
                    <option>Crimson</option>
                    <option>Amber</option>
                    <option>Velvet</option>
                </select>
                <select class="select rounded-2xl w-24">
                    <option disabled selected>Price</option>
                    <option>Crimson</option>
                    <option>Amber</option>
                    <option>Velvet</option>
                </select>
                <select class="select rounded-2xl w-24">
                    <option disabled selected>Flavour</option>
                    <option>Crimson</option>
                    <option>Amber</option>
                    <option>Velvet</option>
                </select>
                <select class="select rounded-2xl w-24">
                    <option disabled selected>Size</option>
                    <option>Crimson</option>
                    <option>Amber</option>
                    <option>Velvet</option>
                </select>
            </div>
            <div class="grid grid-cols-12 gap-8 mt-8">
                <div class="md:col-span-3 col-span-6">
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
                <div class="md:col-span-3 col-span-6">
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
                <div class="md:col-span-3 col-span-6">
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
                <div class="md:col-span-3 col-span-6">
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
                <div class="md:col-span-3 col-span-6">
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
                <div class="md:col-span-3 col-span-6">
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
                <div class="md:col-span-3 col-span-6">
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
                <div class="md:col-span-3 col-span-6">
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