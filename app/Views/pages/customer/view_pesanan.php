<?= $this->extend('main/customer/view_main') ?>
<?= $this->section('content') ?>
<div class="col-span-12">
    <div class="grid grid-cols-12 px-8 md:px-12 py-6 gap-x-8 gap-y-2">
        <div class="col-span-12">
            <div class="breadcrumbs text-sm">
                <ul>
                    <li>
                        <a class="text-gray-500">Home</a>
                    </li>
                    <li class="font-semibold">Pesanan</li>
                </ul>
            </div>
        </div>
        <div class="col-span-12">
            <h1 class="text-2xl font-semibold">Pesanan Saya</h1>
        </div>
        <div class="col-span-12 mt-3">
            <div role="tablist" class="tabs tabs-box w-76">
                <a role="tab" class="tab tab-active">Semua</a>
                <a role="tab" class="tab">Diproses</a>
                <a role="tab" class="tab">Dikirim</a>
                <a role="tab" class="tab">Selesai</a>
            </div>
        </div>
        <div class="col-span-12 flex flex-col gap-5 p-8 bg-base-300 mt-3 rounded-xl">
            <div class="flex flex-row items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 1024 1024">
                    <path fill="currentColor" d="M704 192h160v736H160V192h160v64h384zM288 512h448v-64H288zm0 256h448v-64H288zm96-576V96h256v96z" />
                </svg>
                <p>PSN-001</p>
                <div class="badge badge-soft badge-warning">&bull; Diproses</div>
            </div>
            <div class="flex flex-col md:flex-row md:items-center items-start gap-4">
                <div class="jam flex flex-row items-center gap-2 p-3 border border-base-100 rounded-lg bg-base-200">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 0 0 0-1.5h-3.75V6Z" clip-rule="evenodd" />
                    </svg>
                    <p class="text-sm text-gray-400">Jam Transaksi: 07 November 2025 17:03</p>
                </div>
                <div class="jam flex flex-row items-center gap-2 p-3 border border-base-100 rounded-lg bg-base-200">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path d="M3.375 4.5C2.339 4.5 1.5 5.34 1.5 6.375V13.5h12V6.375c0-1.036-.84-1.875-1.875-1.875h-8.25ZM13.5 15h-12v2.625c0 1.035.84 1.875 1.875 1.875h.375a3 3 0 1 1 6 0h3a.75.75 0 0 0 .75-.75V15Z" />
                        <path d="M8.25 19.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0ZM15.75 6.75a.75.75 0 0 0-.75.75v11.25c0 .087.015.17.042.248a3 3 0 0 1 5.958.464c.853-.175 1.522-.935 1.464-1.883a18.659 18.659 0 0 0-3.732-10.104 1.837 1.837 0 0 0-1.47-.725H15.75Z" />
                        <path d="M19.5 19.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z" />
                    </svg>
                    <p class="text-sm text-gray-400">Estimasi Sampai: 10 November 2025</p>
                </div>
                <div class="jam flex flex-row items-center gap-2 p-3 border border-base-100 rounded-lg bg-base-200">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                    </svg>
                    <p class="text-sm text-gray-400">Dikirim ke: Jakarta Pusat</p>
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
                    <div class="flex flex-col gap-0 md:gap-1">
                        <p class="text-xs md:text-sm text-gray-400">Evolene</p>
                        <h1 class="text-lg md:text-2xl">Isolene</h1>
                        <p class="text-xs md:text-sm text-gray-400">50 Sachet</p>
                    </div>
                </div>
                <p class="text-lg md:text-2xl font-semibold">Rp. 959.000</p>
            </div>
            <div class="divider my-0"></div>
            <div class="flex flex-row items-center justify-between">
                <h1 class="md:text-xl text-lg text-gray-500">Total: <span class="text-white font-semibold">Rp. 959.000</span></h1>
                <a href="<?= base_url('/user/pesanan/detail') ?>" class="btn btn-soft">Detail</a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>