<?= $this->extend('main/customer/view_main') ?>
<?= $this->section('content') ?>
<div class="col-span-12">
    <div class="grid grid-cols-12 px-12 py-6 gap-x-6 gap-y-2">
        <div class="col-span-12">
            <div class="btn">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                </svg>
                Kembali
            </div>
        </div>
        <div class="col-span-12">
            <div class="breadcrumbs text-sm">
                <ul>
                    <li>
                        <a class="text-gray-500">Home</a>
                    </li>
                    <li>
                        <a class="text-gray-500">Pesanan</a>
                    </li>
                    <li class="font-semibold">PSN-001</li>
                </ul>
            </div>
        </div>
        <div class="col-span-9">
            <div class="grid grid-cols-9 gap-6">
                <div class="col-span-9 flex flex-col gap-5 p-8 bg-base-300 rounded-xl">
                    <div class="flex flex-row items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 1024 1024">
                            <path fill="currentColor" d="M704 192h160v736H160V192h160v64h384zM288 512h448v-64H288zm0 256h448v-64H288zm96-576V96h256v96z" />
                        </svg>
                        <p>PSN-001</p>
                        <div class="badge badge-soft badge-warning">&bull; Diproses</div>
                    </div>
                    <div class="flex flex-row items-center gap-4">
                        <div class="jam flex flex-row items-center gap-2 p-3 border border-base-100 rounded-lg bg-base-200">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 0 0 0-1.5h-3.75V6Z" clip-rule="evenodd" />
                            </svg>
                            <p class="text-xs text-gray-400">Jam Transaksi: 07 November 2025 17:03</p>
                        </div>
                        <div class="jam flex flex-row items-center gap-2 p-3 border border-base-100 rounded-lg bg-base-200">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                <path d="M3.375 4.5C2.339 4.5 1.5 5.34 1.5 6.375V13.5h12V6.375c0-1.036-.84-1.875-1.875-1.875h-8.25ZM13.5 15h-12v2.625c0 1.035.84 1.875 1.875 1.875h.375a3 3 0 1 1 6 0h3a.75.75 0 0 0 .75-.75V15Z" />
                                <path d="M8.25 19.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0ZM15.75 6.75a.75.75 0 0 0-.75.75v11.25c0 .087.015.17.042.248a3 3 0 0 1 5.958.464c.853-.175 1.522-.935 1.464-1.883a18.659 18.659 0 0 0-3.732-10.104 1.837 1.837 0 0 0-1.47-.725H15.75Z" />
                                <path d="M19.5 19.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z" />
                            </svg>
                            <p class="text-xs text-gray-400">Estimasi Sampai: 10 November 2025</p>
                        </div>
                        <div class="jam flex flex-row items-center gap-2 p-3 border border-base-100 rounded-lg bg-base-200">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                            </svg>
                            <p class="text-xs text-gray-400">Dikirim ke: Jakarta Pusat</p>
                        </div>
                    </div>
                    <div class="divider my-0"></div>
                    <div class="flex flex-row items-center justify-between border border-base-100 rounded-lg p-3">
                        <div class="kiri flex flex-row gap-3 items-center">
                            <div class="avatar">
                                <div class="w-24 rounded">
                                    <img src="https://img.daisyui.com/images/profile/demo/batperson@192.webp" />
                                </div>
                            </div>
                            <div class="flex flex-col gap-1">
                                <p class="text-sm text-gray-400">Evolene</p>
                                <h1 class="text-2xl">Isolene</h1>
                                <p class="text-sm text-gray-400">50 Sachet</p>
                            </div>
                        </div>
                        <p class="text-xl font-semibold">Rp. 959.000</p>
                    </div>
                    <div class="divider my-0"></div>
                    <div class="flex flex-row items-center justify-between">
                        <h1 class="text-xl text-gray-500">Total: <span class="text-white font-semibold">Rp. 959.000</span></h1>
                        <a href="<?= base_url('/user/pesanan/detail') ?>" class="btn btn-soft">Detail</a>
                    </div>
                </div>
                <div class="col-span-4 flex flex-col p-8 gap-5 bg-base-300 rounded-xl">
                    <h1 class="text-lg">Pengiriman</h1>
                    <div class="flex flex-row items-center justify-between gap-3">
                        <div class="kiri flex flex-row items-center gap-3">
                            <div class="avatar">
                                <div class="w-18 rounded">
                                    <img src="https://img.daisyui.com/images/profile/demo/batperson@192.webp" />
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <h1>JNE Express</h1>
                                <p class="text-sm text-gray-400">Reguler</p>
                            </div>
                        </div>
                        <p>Rp. 10.000</p>
                    </div>
                    <div class="btn">Detail Kurir</div>
                </div>
                <div class="col-span-5 flex flex-col p-8 gap-5 bg-base-300 rounded-xl">
                    <h1 class="text-lg">Ringkasan Pesanan</h1>
                    <div class="flex flex-row items-center justify-between">
                        <p class="text-sm text-gray-400">Subtotal</p>
                        <p class="text-sm font-semibold">Rp. 969.000</p>
                    </div>
                    <div class="flex flex-row items-center justify-between">
                        <p class="text-sm text-gray-400">Diskon</p>
                        <p class="text-sm font-semibold">Rp. 0</p>
                    </div>
                    <div class="divider my-0"></div>
                    <div class="flex flex-row items-center justify-between">
                        <p class="text-sm text-gray-400">Total</p>
                        <p class="text-sm font-semibold">Rp. 969.000</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-3 flex flex-col gap-5 p-8 bg-base-300 rounded-xl self-start">
            <h1 class="text-lg font-semibold">Detail Pengiriman</h1>
            <div class="flex flex-col gap-1">
                <p class="text-sm">Rayhan Dwi Putra</p>
                <p class="text-xs text-gray-400 font-semibold">08123456789</p>
            </div>
            <div class="divider my-1"></div>
            <div class="flex flex-col gap-2">
                <p class="text-sm">Alamat</p>
                <p class="text-xs text-gray-400 font-semibold text-justify">Jl.Bendungan Jago No. 16 RT.009/RW.002, Kel. Serdang, Kec. Kemayoran, Kota Jakarta Pusat, DKI Jakarta 10640</p>
                <p class="text-xs text-gray-400 font-semibold text-justify">Kel. Serdang</p>
                <p class="text-xs text-gray-400 font-semibold text-justify">Kec. Kemayoran</p>
                <p class="text-xs text-gray-400 font-semibold text-justify">Kota Jakarta Pusat</p>
                <p class="text-xs text-gray-400 font-semibold text-justify">DKI Jakarta</p>
                <p class="text-xs text-gray-400 font-semibold text-justify">10640</p>
            </div>
            <div class="divider my-1"></div>
            <div class="flex flex-col gap-2">
                <p class="text-sm">Estimasi Sampai</p>
                <p class="text-xs text-gray-400 font-semibold text-justify">10 November 2025</p>
            </div>
        </div>
    </div>
    <?= $this->endSection() ?>