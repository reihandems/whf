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
                        <span class="text-sm text-gray-400">Administrator</span>
                    </div>
                </div>
            </li>
            <div class="divider my-1"></div>
            <li>
                <a href="<?= base_url('/admin/dashboard') ?>" class="flex flex-row items-center gap-2 my-1 p-3 <?= ($menu == 'dashboard') ? 'bg-base-300 text-primary-500 font-bold' : 'text-gray-400' ?>" </a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M10.995 4.68v3.88A2.44 2.44 0 0 1 8.545 11h-3.86a2.38 2.38 0 0 1-1.72-.72a2.4 2.4 0 0 1-.71-1.72V4.69a2.44 2.44 0 0 1 2.43-2.44h3.87a2.42 2.42 0 0 1 1.72.72a2.4 2.4 0 0 1 .72 1.71m10.75.01v3.87a2.46 2.46 0 0 1-2.43 2.44h-3.88a2.5 2.5 0 0 1-1.73-.71a2.44 2.44 0 0 1-.71-1.73V4.69a2.4 2.4 0 0 1 .72-1.72a2.42 2.42 0 0 1 1.72-.72h3.87a2.46 2.46 0 0 1 2.44 2.44m0 10.75v3.87a2.46 2.46 0 0 1-2.43 2.44h-3.88a2.5 2.5 0 0 1-1.75-.69a2.42 2.42 0 0 1-.71-1.73v-3.87a2.4 2.4 0 0 1 .72-1.72a2.42 2.42 0 0 1 1.72-.72h3.87a2.46 2.46 0 0 1 2.44 2.44zm-10.75.01v3.87a2.46 2.46 0 0 1-2.45 2.43h-3.86a2.42 2.42 0 0 1-2.43-2.43v-3.87A2.46 2.46 0 0 1 4.685 13h3.87a2.5 2.5 0 0 1 1.73.72a2.45 2.45 0 0 1 .71 1.73" />
                    </svg>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="<?= base_url('/admin/data-produk') ?>" class="flex flex-row items-center gap-2 my-1 p-3 <?= ($menu == 'produk') ? 'bg-base-300 text-primary-500 font-bold' : 'text-gray-400' ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 16 16">
                        <path fill="currentColor" d="m4.036 2.488l6.611 2.833L8 6.455L1.427 3.638c.148-.151.329-.273.535-.352zm1.338-.514l1.55-.596a3 3 0 0 1 2.153 0l4.962 1.908c.205.08.386.2.534.352l-2.656 1.138zm9.62 2.572L8.5 7.329v7.45q.295-.05.577-.158l4.962-1.909a1.5 1.5 0 0 0 .961-1.4V4.686q0-.07-.007-.14M7.5 14.779v-7.45L1.007 4.546a2 2 0 0 0-.007.14v6.626a1.5 1.5 0 0 0 .962 1.4l4.961 1.909q.282.108.577.158" />
                    </svg>
                    Data Produk
                </a>
            </li>
            <li>
                <a href="<?= base_url('/admin/data-kategori') ?>" class="flex flex-row items-center gap-2 my-1 p-3 <?= ($menu == 'kategori') ? 'bg-base-300 text-primary-500 font-bold' : 'text-gray-400' ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd" d="M5.25 2.25a3 3 0 0 0-3 3v4.318a3 3 0 0 0 .879 2.121l9.58 9.581c.92.92 2.39 1.186 3.548.428a18.849 18.849 0 0 0 5.441-5.44c.758-1.16.492-2.629-.428-3.548l-9.58-9.581a3 3 0 0 0-2.122-.879H5.25ZM6.375 7.5a1.125 1.125 0 1 0 0-2.25 1.125 1.125 0 0 0 0 2.25Z" clip-rule="evenodd" />
                    </svg>
                    Data Kategori
                </a>
            </li>
            <li>
                <a href="<?= base_url('/admin/data-brand') ?>" class="flex flex-row items-center gap-2 my-1 p-3 <?= ($menu == 'brand') ? 'bg-base-300 text-primary-500 font-bold' : 'text-gray-400' ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512">
                        <path fill="currentColor" fill-rule="evenodd" d="M42.667 85.333v341.334h426.666V85.333zm188.333 256V164.208h49q31.25 0 50 6q24.5 7.875 37.5 29.25q13 21.25 13 53.375q0 33-13 53.875q-16.25 26.375-50.25 32q-15.625 2.625-40 2.625zm39.875-31.25h7.625q27.25 0 40.375-8.875q11.5-7.625 16.625-23.625q3.75-11.874 3.75-25.25q0-14.374-4.375-26.625q-4.375-12.249-12-19.125q-7.25-6.5-16.5-8.75q-9.25-2.375-27.875-2.375h-7.625zM149 164.208v177.125h39.875V164.208z" clip-rule="evenodd" />
                    </svg>
                    Data Brand
                </a>
            </li>
            <li>
                <a href="<?= base_url('/admin/data-customer') ?>" class="flex flex-row items-center gap-2 my-1 p-3 <?= ($menu == 'customer') ? 'bg-base-300 text-primary-500 font-bold' : 'text-gray-400' ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd" d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z" clip-rule="evenodd" />
                        <path d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z" />
                    </svg>
                    Data Customer
                </a>
            </li>
            <li>
                <a href="<?= base_url('/admin/data-trainer') ?>" class="flex flex-row items-center gap-2 my-1 p-3 <?= ($menu == 'trainer') ? 'bg-base-300 text-primary-500 font-bold' : 'text-gray-400' ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 50 50">
                        <path fill="currentColor" d="M17.96 44.87c.37.4.35 1.04-.05 1.42l-2.17 2.03c-.4.38-1.04.35-1.41-.05L1.68 34.64c-.37-.4-.35-1.04.05-1.42l2.17-2.03a.996.996 0 0 1 1.41.05zM34.1 19.22c.37.4.35 1.04-.05 1.42L20.38 33.41c-.4.38-1.04.35-1.41-.05l-3.26-3.52c-.37-.4-.35-1.04.05-1.42l13.67-12.77c.4-.37 1.04-.35 1.41.05l3.27 3.52zm-11.49 21.3c.37.4.35 1.04-.05 1.42l-2.17 2.03c-.4.38-1.04.35-1.41-.05L6.34 30.29c-.37-.4-.35-1.04.05-1.42l2.17-2.03c.4-.37 1.04-.35 1.41.05l12.65 13.63zm21.06-20.81c.37.4.35 1.04-.05 1.42l-2.17 2.03c-.4.38-1.04.35-1.41-.05L27.4 9.48c-.37-.4-.35-1.04.05-1.42l2.18-2.03c.4-.37 1.04-.35 1.41.05l12.64 13.63zm4.64-4.34c.37.4.35 1.04-.05 1.42l-2.17 2.03c-.4.38-1.04.35-1.41-.05L32.04 5.14c-.37-.4-.35-1.04.05-1.42l2.17-2.03a.997.997 0 0 1 1.41.05l12.64 13.64z" />
                    </svg>
                    Data Trainer
                </a>
            </li>
            <li>
                <a href="<?= base_url('/admin/data-supplier') ?>" class="flex flex-row items-center gap-2 my-1 p-3 <?= ($menu == 'supplier') ? 'bg-base-300 text-primary-500 font-bold' : 'text-gray-400' ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12 3c2.21 0 4 1.79 4 4s-1.79 4-4 4s-4-1.79-4-4s1.79-4 4-4m4 10.54c0 1.06-.28 3.53-2.19 6.29L13 15l.94-1.88c-.62-.07-1.27-.12-1.94-.12s-1.32.05-1.94.12L11 15l-.81 4.83C8.28 17.07 8 14.6 8 13.54c-2.39.7-4 1.96-4 3.46v4h16v-4c0-1.5-1.6-2.76-4-3.46" />
                    </svg>
                    Data Supplier
                </a>
            </li>
            <li>
                <a href="<?= base_url('/admin/data-blog') ?>" class="flex flex-row items-center gap-2 my-1 p-3 <?= ($menu == 'blog') ? 'bg-base-300 text-primary-500 font-bold' : 'text-gray-400' ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M5 21q-.825 0-1.412-.587T3 19V5q0-.825.588-1.412T5 3h11l5 5v11q0 .825-.587 1.413T19 21zm2-4h10v-2H7zm0-4h10v-2H7zm8-4h4l-4-4zM7 9h5V7H7z" />
                    </svg>
                    Data Blog
                </a>
            </li>
            <li>
                <a href="#" class="flex flex-row items-center gap-2 my-1 p-3 <?= ($menu == 'profil') ? 'bg-base-300 text-primary-500 font-bold' : 'text-gray-400' ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd" />
                    </svg>
                    Profil
                </a>
            </li>
            <li class="mt-auto">
                <a href="<?= base_url('/logout') ?>" class="flex flex-row items-center gap-2 my-1 p-3 btn btn-error btn-soft">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M5 21q-.825 0-1.412-.587T3 19V5q0-.825.588-1.412T5 3h6q.425 0 .713.288T12 4t-.288.713T11 5H5v14h6q.425 0 .713.288T12 20t-.288.713T11 21zm12.175-8H10q-.425 0-.712-.288T9 12t.288-.712T10 11h7.175L15.3 9.125q-.275-.275-.275-.675t.275-.7t.7-.313t.725.288L20.3 11.3q.3.3.3.7t-.3.7l-3.575 3.575q-.3.3-.712.288t-.713-.313q-.275-.3-.262-.712t.287-.688z" />
                    </svg>
                    Logout
                </a>
            </li>
        </ul>
    </div>
</div>