<?= $this->extend('main/customer/view_main') ?>
<?= $this->section('content') ?>
<div class="col-span-12">
    <div class="grid grid-cols-12 px-8 md:px-12 py-6 gap-x-8 gap-y-2">
        <div class="col-span-12">
            <div class="breadcrumbs text-sm">
                <ul>
                    <li>
                        <a class="text-gray-500">Profil</a>
                    </li>
                    <li class="font-semibold">Booking</li>
                </ul>
            </div>
        </div>
        <div class="col-span-12">
            <h1 class="text-2xl font-semibold">Daftar Booking Trainer</h1>
        </div>
        <div class="col-span-12 md:col-span-6 flex flex-col gap-5 p-8 bg-base-300 mt-3 rounded-xl">
            <div class="flex flex-row items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 1024 1024">
                    <path fill="currentColor" d="M704 192h160v736H160V192h160v64h384zM288 512h448v-64H288zm0 256h448v-64H288zm96-576V96h256v96z" />
                </svg>
                <p>TRN-001</p>
            </div>
            <div class="flex flex-row items-center gap-4">
                <div class="jam flex flex-row items-center gap-2 p-3 border border-base-100 rounded-lg bg-base-200">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 0 0 0-1.5h-3.75V6Z" clip-rule="evenodd" />
                    </svg>
                    <p class="text-sm text-gray-400">Jam Transaksi: 07 November 2025 17:03</p>
                </div>
            </div>
            <div class="divider my-0"></div>
            <div class="flex flex-row items-center justify-between border border-base-100 rounded-lg p-3">
                <div class="kiri flex flex-row gap-3 items-center">
                    <div class="avatar">
                        <div class="w-14 md:w-24 rounded">
                            <img src="https://img.daisyui.com/images/profile/demo/batperson@192.webp" />
                        </div>
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="text-xs md:text-sm text-gray-400">Muscle Gain</p>
                        <h1 class="text-base md:text-2xl">Walter Blanda</h1>
                        <p class="text-xs md:text-sm text-gray-400">20 Sesi</p>
                    </div>
                </div>
                <p class="md:text-xl text-sm font-semibold">Rp. 70.000 / sesi</p>
            </div>
            <div class="divider my-0"></div>
            <div class="flex flex-row items-center justify-between">
                <h1 class="md:text-xl text-base text-gray-500">Total: <span class="text-white font-semibold">Rp. 1.380.000</span></h1>
            </div>
        </div>
        <div class="col-span-6 mt-3">
            <div role="alert" class="alert alert-info alert-soft h-full flex justify-center">
                <span class="text-lg">Belum ada booking trainer lainnya</span>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>