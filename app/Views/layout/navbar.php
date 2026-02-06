<div class="navbar bg-base-100 shadow-sm px-6 md:px-12">
    <div class="navbar-start">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </div>
            <ul
                tabindex="-1"
                class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                <li>
                    <a href="<?= base_url('/home') ?>" class="text-xs <?= ($menu == 'home') ? 'hover:underline text-primary font-bold' : 'text-xs font-semibold' ?>">HOME</a>
                </li>
                <li>
                    <a href="<?= base_url('/user/produk') ?>" class="text-xs <?= ($menu == 'produk') ? 'hover:underline text-primary font-bold' : 'text-xs font-semibold' ?>">PRODUK</a>
                </li>
                <li>
                    <a href="<?= base_url('/user/trainer') ?>" class="text-xs <?= ($menu == 'trainer') ? 'hover:underline text-primary font-bold' : 'text-xs font-semibold' ?>">TRAINER</a>
                </li>
                <li>
                    <a href="<?= base_url('/user/blog') ?>" class="text-xs <?= ($menu == 'blog') ? 'hover:underline text-primary font-bold' : 'text-xs font-semibold' ?>">BLOG</a>
                </li>
                <li>
                    <a href="<?= base_url('/user/faq') ?>" class="text-xs <?= ($menu == 'faq') ? 'hover:underline text-primary font-bold' : 'text-xs font-semibold' ?>">FAQ</a>
                </li>
            </ul>
        </div>
        <div class="avatar me-3">
            <div class="w-14 h-14 rounded-full dynamic-logo"></div>
        </div>
        <p class="text-3xl me-3 md:flex hidden">|</p>
        <ul class="menu menu-horizontal px-1 md:flex hidden">
            <li>
                <a href="<?= base_url('/home') ?>" class="text-xs <?= ($menu == 'home') ? 'hover:underline text-primary font-bold' : 'text-xs font-semibold' ?>">HOME</a>
            </li>
            <li>
                <a href="<?= base_url('/user/produk') ?>" class="text-xs <?= ($menu == 'produk') ? 'hover:underline text-primary font-bold' : 'text-xs font-semibold' ?>">PRODUK</a>
            </li>
            <li>
                <a href="<?= base_url('/user/trainer') ?>" class="text-xs <?= ($menu == 'trainer') ? 'hover:underline text-primary font-bold' : 'text-xs font-semibold' ?>" class="text-xs font-semibold">TRAINER</a>
            </li>
            <li>
                <a href="<?= base_url('/user/blog') ?>" class="text-xs <?= ($menu == 'blog') ? 'hover:underline text-primary font-bold' : 'text-xs font-semibold' ?>" class="text-xs font-semibold">BLOG</a>
            </li>
            <li>
                <a href="<?= base_url('/user/faq') ?>" class="text-xs <?= ($menu == 'faq') ? 'hover:underline text-primary font-bold' : 'text-xs font-semibold' ?>" class="text-xs font-semibold">FAQ</a>
            </li>
        </ul>
    </div>
    <div class="navbar-end">
        <label class="input rounded-2xl w-40 me-3 md:flex hidden">
            <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <g
                    stroke-linejoin="round"
                    stroke-linecap="round"
                    stroke-width="2.5"
                    fill="none"
                    stroke="currentColor">
                    <circle cx="11" cy="11" r="8"></circle>
                    <path d="m21 21-4.3-4.3"></path>
                </g>
            </svg>
            <input type="search" required placeholder="Search" />
        </label>
        <a href="<?= base_url(relativePath: '/user/cart') ?>" class="me-3 <?= ($menu == 'cart') ? 'text-primary' : '' ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="currentColor" d="M17 18c-1.11 0-2 .89-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2M1 2v2h2l3.6 7.59l-1.36 2.45c-.15.28-.24.61-.24.96a2 2 0 0 0 2 2h12v-2H7.42a.25.25 0 0 1-.25-.25q0-.075.03-.12L8.1 13h7.45c.75 0 1.41-.42 1.75-1.03l3.58-6.47c.07-.16.12-.33.12-.5a1 1 0 0 0-1-1H5.21l-.94-2M7 18c-1.11 0-2 .89-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2" />
            </svg>
        </a>
        <a href="<?= base_url('/user/pesanan') ?>" class="me-3 <?= ($menu == 'pesanan') ? 'text-primary' : '' ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 1024 1024">
                <path fill="currentColor" d="M704 192h160v736H160V192h160v64h384zM288 512h448v-64H288zm0 256h448v-64H288zm96-576V96h256v96z" />
            </svg>
        </a>
        <a href="<?= base_url('/user/booking') ?>" class="me-3 <?= ($menu == 'booking') ? 'text-primary' : '' ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 50 50">
                <path fill="currentColor" d="M17.96 44.87c.37.4.35 1.04-.05 1.42l-2.17 2.03c-.4.38-1.04.35-1.41-.05L1.68 34.64c-.37-.4-.35-1.04.05-1.42l2.17-2.03a.996.996 0 0 1 1.41.05zM34.1 19.22c.37.4.35 1.04-.05 1.42L20.38 33.41c-.4.38-1.04.35-1.41-.05l-3.26-3.52c-.37-.4-.35-1.04.05-1.42l13.67-12.77c.4-.37 1.04-.35 1.41.05l3.27 3.52zm-11.49 21.3c.37.4.35 1.04-.05 1.42l-2.17 2.03c-.4.38-1.04.35-1.41-.05L6.34 30.29c-.37-.4-.35-1.04.05-1.42l2.17-2.03c.4-.37 1.04-.35 1.41.05l12.65 13.63zm21.06-20.81c.37.4.35 1.04-.05 1.42l-2.17 2.03c-.4.38-1.04.35-1.41-.05L27.4 9.48c-.37-.4-.35-1.04.05-1.42l2.18-2.03c.4-.37 1.04-.35 1.41.05l12.64 13.63zm4.64-4.34c.37.4.35 1.04-.05 1.42l-2.17 2.03c-.4.38-1.04.35-1.41-.05L32.04 5.14c-.37-.4-.35-1.04.05-1.42l2.17-2.03a.997.997 0 0 1 1.41.05l12.64 13.64z" />
            </svg>
        </a>
        <div class="dropdown dropdown-bottom md:dropdown-hover dropdown-end">
            <a href="#" class="avatar <?= ($menu == 'profil') ? 'text-primary' : '' ?>" tabindex="0" role="button">
                <div class="w-12 rounded-full">
                    <?php if (session()->get('foto')) : ?>
                        <img src="<?= base_url('assets/img/customer/' . session()->get('foto')) ?>" />
                    <?php else : ?>
                        <img src="https://ui-avatars.com/api/?background=random&name=<?= session()->get('nama') ?>" />
                    <?php endif; ?>
                </div>
            </a>
            <ul tabindex="-1" class="dropdown-content menu bg-base-200 rounded-box z-1 w-52 p-2 shadow-sm mt-1">
                <li>
                    <a href="<?= base_url('/user/profil') ?>" class="<?= ($menu == 'profil') ? 'text-primary' : '' ?>" tabindex="0" role="button"">
                        <svg xmlns=" http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd" />
                        </svg>
                        Profil
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('/logout') ?>" class="text-red-500">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <path stroke-dasharray="46" d="M16 5v-1c0 -0.55 -0.45 -1 -1 -1h-9c-0.55 0 -1 0.45 -1 1v16c0 0.55 0.45 1 1 1h9c0.55 0 1 -0.45 1 -1v-1">
                                    <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.5s" values="46;0" />
                                </path>
                                <path stroke-dasharray="14" stroke-dashoffset="14" d="M10 12h11">
                                    <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.6s" dur="0.2s" to="0" />
                                </path>
                                <path stroke-dasharray="8" stroke-dashoffset="8" d="M21 12l-3.5 -3.5M21 12l-3.5 3.5">
                                    <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.8s" dur="0.2s" to="0" />
                                </path>
                            </g>
                        </svg>
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>