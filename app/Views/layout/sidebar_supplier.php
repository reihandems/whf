<div class="drawer lg:drawer-open shadow-lg shadow-gray-500/50 h-full">
    <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content flex flex-row items-start justify-start gap-2 px-8 py-3">
        <!-- Page content here -->
        <label for="my-drawer-3" class="btn drawer-button lg:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </label>
        <div class="avatar">
            <div class="w-10 rounded">
                <img src="<?= base_url('assets/img/logo-light.png') ?>" />
            </div>
        </div>
    </div>
    <div class="drawer-side">
        <label for="my-drawer-3" aria-label="close sidebar" class="drawer-overlay"></label>
        <ul class="menu bg-base-200 min-h-full w-80 p-4">
            <!-- Sidebar content here -->
            <li>
                <div class="flex flex-row items-center gap-2 my-1">
                    <div class="avatar">
                        <div class="w-16 rounded">
                            <img src="<?= base_url('assets/img/logo-light.png') ?>" />
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-lg font-bold">WHF</span>
                        <span class="text-sm text-gray-400">Supplier</span>
                    </div>
                </div>
            </li>
            <div class="divider my-1"></div>
            <li>
                <a href="<?= base_url('/supplier/dashboard') ?>" class="flex flex-row items-center gap-2 my-1 p-3 <?= ($menu == 'dashboard') ? 'bg-base-300 text-primary-500 font-bold' : 'text-gray-400' ?>" </a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M10.995 4.68v3.88A2.44 2.44 0 0 1 8.545 11h-3.86a2.38 2.38 0 0 1-1.72-.72a2.4 2.4 0 0 1-.71-1.72V4.69a2.44 2.44 0 0 1 2.43-2.44h3.87a2.42 2.42 0 0 1 1.72.72a2.4 2.4 0 0 1 .72 1.71m10.75.01v3.87a2.46 2.46 0 0 1-2.43 2.44h-3.88a2.5 2.5 0 0 1-1.73-.71a2.44 2.44 0 0 1-.71-1.73V4.69a2.4 2.4 0 0 1 .72-1.72a2.42 2.42 0 0 1 1.72-.72h3.87a2.46 2.46 0 0 1 2.44 2.44m0 10.75v3.87a2.46 2.46 0 0 1-2.43 2.44h-3.88a2.5 2.5 0 0 1-1.75-.69a2.42 2.42 0 0 1-.71-1.73v-3.87a2.4 2.4 0 0 1 .72-1.72a2.42 2.42 0 0 1 1.72-.72h3.87a2.46 2.46 0 0 1 2.44 2.44zm-10.75.01v3.87a2.46 2.46 0 0 1-2.45 2.43h-3.86a2.42 2.42 0 0 1-2.43-2.43v-3.87A2.46 2.46 0 0 1 4.685 13h3.87a2.5 2.5 0 0 1 1.73.72a2.45 2.45 0 0 1 .71 1.73" />
                    </svg>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="<?= base_url('/supplier/pesanan') ?>" class="flex flex-row items-center gap-2 my-1 p-3 <?= ($menu == 'pesanan') ? 'bg-base-300 text-primary-500 font-bold' : 'text-gray-400' ?>" </a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor" fill-rule="evenodd" d="M5.586 4.586C5 5.172 5 6.114 5 8v9c0 1.886 0 2.828.586 3.414S7.114 21 9 21h6c1.886 0 2.828 0 3.414-.586S19 18.886 19 17V8c0-1.886 0-2.828-.586-3.414S16.886 4 15 4H9c-1.886 0-2.828 0-3.414.586M9 8a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2zm0 4a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2zm0 4a1 1 0 1 0 0 2h4a1 1 0 1 0 0-2z" clip-rule="evenodd" />
                    </svg>
                    Pesanan
                </a>
            </li>
            <li>
                <a href="#" class="flex flex-row items-center gap-2 my-1 p-3 <?= ($menu == 'profil') ? 'bg-base-300 text-primary-500 font-bold' : 'text-gray-400' ?>" </a>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd" />
                    </svg>
                    Profil
                </a>
            </li>
            <li class="mt-auto">
                <a href="#" class="flex flex-row items-center gap-2 my-1 p-3 btn btn-error btn-soft">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M5 21q-.825 0-1.412-.587T3 19V5q0-.825.588-1.412T5 3h6q.425 0 .713.288T12 4t-.288.713T11 5H5v14h6q.425 0 .713.288T12 20t-.288.713T11 21zm12.175-8H10q-.425 0-.712-.288T9 12t.288-.712T10 11h7.175L15.3 9.125q-.275-.275-.275-.675t.275-.7t.7-.313t.725.288L20.3 11.3q.3.3.3.7t-.3.7l-3.575 3.575q-.3.3-.712.288t-.713-.313q-.275-.3-.262-.712t.287-.688z" />
                    </svg>
                    Logout
                </a>
            </li>
        </ul>
    </div>
</div>