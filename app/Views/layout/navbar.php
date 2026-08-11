<div class="navbar bg-base-100 shadow-sm px-2 md:px-12 fixed top-0 right-0 left-0 z-[100]">
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
        <div class="relative me-3 md:block hidden" id="search-container">
            <form action="<?= base_url('/user/search') ?>" method="GET" id="navbar-search-form" class="m-0 p-0">
                <label class="input rounded-2xl w-48 flex items-center gap-2">
                    <svg class="h-[1em] opacity-50 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" fill="none" stroke="currentColor">
                            <circle cx="11" cy="11" r="8"></circle>
                            <path d="m21 21-4.3-4.3"></path>
                        </g>
                    </svg>
                    <input type="search" name="q" id="navbar-search-input" required placeholder="Cari Produk..." class="grow bg-transparent border-none focus:outline-none text-sm" autocomplete="off" />
                </label>
            </form>
            <div id="search-dropdown" class="hidden absolute left-0 right-0 mt-2 bg-base-100 rounded-2xl shadow-xl border border-base-content/5 z-[999] overflow-hidden max-h-[360px] overflow-y-auto w-72">
                <!-- Dropdown items will be injected here via JS -->
            </div>
        </div>
        <?php
            // Fetch initial counts for logged-in user
            $id_customer_nav = session()->get('user_id');
            $cart_count_nav = 0;
            $pesanan_count_nav = 0;
            $booking_count_nav = 0;
            
            if ($id_customer_nav) {
                $db_nav = \Config\Database::connect();
                
                // Cart count (total quantity)
                $cart_query = $db_nav->table('cart')->selectSum('jumlah')->where('id_customer', $id_customer_nav)->get()->getRow();
                $cart_count_nav = $cart_query ? (int)$cart_query->jumlah : 0;
                
                // Active pesanan count
                $pesanan_count_nav = $db_nav->table('pesanan')->where('id_customer', $id_customer_nav)->whereIn('status_pesanan', ['menunggu_pembayaran', 'proses', 'dikirim'])->countAllResults();
                
                // Active booking count
                $booking_count_nav = $db_nav->table('booking_trainer')->where('id_customer', $id_customer_nav)->whereIn('status_booking', ['menunggu_pembayaran', 'aktif'])->countAllResults();
            }

            function formatBadgeCount($count) {
                if ($count > 98) return '99+';
                return $count;
            }
        ?>

        <a href="<?= base_url(relativePath: '/user/cart') ?>" class="me-3 relative inline-block <?= ($menu == 'cart') ? 'text-primary' : '' ?>" id="nav-cart-btn">
            <div class="indicator">
                <span class="indicator-item badge badge-xs badge-primary font-bold text-[9px] w-5 h-5 flex items-center justify-center p-0" id="nav-cart-badge"><?= formatBadgeCount($cart_count_nav) ?></span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M17 18c-1.11 0-2 .89-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2M1 2v2h2l3.6 7.59l-1.36 2.45c-.15.28-.24.61-.24.96a2 2 0 0 0 2 2h12v-2H7.42a.25.25 0 0 1-.25-.25q0-.075.03-.12L8.1 13h7.45c.75 0 1.41-.42 1.75-1.03l3.58-6.47c.07-.16.12-.33.12-.5a1 1 0 0 0-1-1H5.21l-.94-2M7 18c-1.11 0-2 .89-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2" />
                </svg>
            </div>
        </a>
        <a href="<?= base_url('/user/pesanan') ?>" class="me-3 relative inline-block <?= ($menu == 'pesanan') ? 'text-primary' : '' ?>">
            <div class="indicator">
                <span class="indicator-item badge badge-xs badge-primary font-bold text-[9px] w-5 h-5 flex items-center justify-center p-0"><?= formatBadgeCount($pesanan_count_nav) ?></span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 1024 1024">
                    <path fill="currentColor" d="M704 192h160v736H160V192h160v64h384zM288 512h448v-64H288zm0 256h448v-64H288zm96-576V96h256v96z" />
                </svg>
            </div>
        </a>
        <a href="<?= base_url('/user/booking') ?>" class="me-3 relative inline-block <?= ($menu == 'booking') ? 'text-primary' : '' ?>">
            <div class="indicator">
                <span class="indicator-item badge badge-xs badge-primary font-bold text-[9px] w-5 h-5 flex items-center justify-center p-0"><?= formatBadgeCount($booking_count_nav) ?></span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 50 50">
                    <path fill="currentColor" d="M17.96 44.87c.37.4.35 1.04-.05 1.42l-2.17 2.03c-.4.38-1.04.35-1.41-.05L1.68 34.64c-.37-.4-.35-1.04.05-1.42l2.17-2.03a.996.996 0 0 1 1.41.05zM34.1 19.22c.37.4.35 1.04-.05 1.42L20.38 33.41c-.4.38-1.04.35-1.41-.05l-3.26-3.52c-.37-.4-.35-1.04.05-1.42l13.67-12.77c.4-.37 1.04-.35 1.41.05l3.27 3.52zm-11.49 21.3c.37.4.35 1.04-.05 1.42l-2.17 2.03c-.4.38-1.04.35-1.41-.05L6.34 30.29c-.37-.4-.35-1.04.05-1.42l2.17-2.03c.4-.37 1.04-.35 1.41.05l12.65 13.63zm21.06-20.81c.37.4.35 1.04-.05 1.42l-2.17 2.03c-.4.38-1.04.35-1.41-.05L27.4 9.48c-.37-.4-.35-1.04.05-1.42l2.18-2.03c.4-.37 1.04-.35 1.41.05l12.64 13.63zm4.64-4.34c.37.4.35 1.04-.05 1.42l-2.17 2.03c-.4.38-1.04.35-1.41-.05L32.04 5.14c-.37-.4-.35-1.04.05-1.42l2.17-2.03a.997.997 0 0 1 1.41.05l12.64 13.64z" />
                </svg>
            </div>
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
<style>
    body {
        padding-top: 80px !important;
    }
</style>

<!-- Loading Skeleton Overlay -->
<div id="loading-skeleton" class="fixed inset-0 bg-base-100 z-[9999] p-6 md:p-12 overflow-hidden transition-opacity duration-500 ease-in-out">
    <div class="max-w-7xl mx-auto space-y-12">
        <!-- Navbar Skeleton -->
        <div class="flex justify-between items-center border-b border-base-content/5 pb-6">
            <div class="flex items-center gap-4">
                <div class="skeleton w-12 h-12 rounded-full shrink-0"></div>
                <div class="skeleton h-6 w-32 rounded-lg"></div>
            </div>
            <div class="flex gap-4 md:flex hidden">
                <div class="skeleton h-6 w-16 rounded-lg"></div>
                <div class="skeleton h-6 w-16 rounded-lg"></div>
                <div class="skeleton h-6 w-16 rounded-lg"></div>
            </div>
            <div class="flex gap-3">
                <div class="skeleton w-10 h-10 rounded-full"></div>
                <div class="skeleton w-10 h-10 rounded-full"></div>
            </div>
        </div>
        
        <!-- Grid Skeleton representing dashboard / list -->
        <div class="grid grid-cols-12 gap-8">
            <!-- Left Side / Main Content -->
            <div class="col-span-12 lg:col-span-8 space-y-6">
                <div class="skeleton h-10 w-2/3 rounded-xl"></div>
                <div class="skeleton h-6 w-full rounded-lg"></div>
                <div class="skeleton h-6 w-4/5 rounded-lg"></div>
                
                <!-- Card Grid Simulator -->
                <div class="grid grid-cols-12 gap-6 pt-6">
                    <div class="col-span-6 md:col-span-4 space-y-3">
                        <div class="skeleton h-40 w-full rounded-2xl"></div>
                        <div class="skeleton h-4 w-3/4 rounded-lg"></div>
                        <div class="skeleton h-4 w-1/2 rounded-lg"></div>
                    </div>
                    <div class="col-span-6 md:col-span-4 space-y-3">
                        <div class="skeleton h-40 w-full rounded-2xl"></div>
                        <div class="skeleton h-4 w-3/4 rounded-lg"></div>
                        <div class="skeleton h-4 w-1/2 rounded-lg"></div>
                    </div>
                    <div class="col-span-6 md:col-span-4 md:block hidden space-y-3">
                        <div class="skeleton h-40 w-full rounded-2xl"></div>
                        <div class="skeleton h-4 w-3/4 rounded-lg"></div>
                        <div class="skeleton h-4 w-1/2 rounded-lg"></div>
                    </div>
                </div>
            </div>
            
            <!-- Right Side / Sidebar -->
            <div class="col-span-12 lg:col-span-4 space-y-6 lg:block hidden">
                <div class="skeleton h-8 w-1/2 rounded-xl"></div>
                <div class="skeleton h-48 w-full rounded-2xl"></div>
                <div class="skeleton h-12 w-full rounded-xl"></div>
            </div>
        </div>
    </div>
</div>

<script>
    (function() {
        function hideSkeleton() {
            const skeleton = document.getElementById('loading-skeleton');
            if (skeleton) {
                skeleton.style.opacity = '0';
                setTimeout(() => {
                    skeleton.remove();
                }, 500);
            }
        }
        // Fallback timeout in case page load event takes too long
        const fallback = setTimeout(hideSkeleton, 1500);
        
        window.addEventListener('load', function() {
            clearTimeout(fallback);
            hideSkeleton();
        });
    })();

    // Search Autocomplete Logic
    (function() {
        const searchInput = document.getElementById('navbar-search-input');
        const searchDropdown = document.getElementById('search-dropdown');
        const searchForm = document.getElementById('navbar-search-form');
        let debounceTimer;

        if (!searchInput || !searchDropdown) return;

        searchInput.addEventListener('input', function() {
            clearTimeout(debounceTimer);
            const query = this.value.trim();

            if (query.length < 2) {
                searchDropdown.classList.add('hidden');
                searchDropdown.innerHTML = '';
                return;
            }

            debounceTimer = setTimeout(() => {
                fetch(`<?= base_url('/api/search') ?>?q=${encodeURIComponent(query)}`)
                    .then(res => res.json())
                    .then(data => {
                        searchDropdown.innerHTML = '';
                        if (data.length === 0) {
                            searchDropdown.innerHTML = `
                                <div class="p-4 text-xs text-base-content/60 italic text-center">
                                    Produk tidak ditemukan
                                </div>`;
                        } else {
                            data.forEach(item => {
                                const photo = item.foto_produk ? `<?= base_url('assets/img/produk/') ?>/${item.foto_produk}` : 'https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp';
                                const price = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', minimumFractionDigits: 0 }).format(item.harga);
                                
                                const itemEl = document.createElement('a');
                                itemEl.href = `<?= base_url('/user/produk/detail/') ?>/${item.id_produk}`;
                                itemEl.className = "flex items-center gap-3 p-3 hover:bg-base-200 transition-colors border-b border-base-content/5 last:border-0";
                                itemEl.innerHTML = `
                                    <img src="${photo}" class="w-10 h-10 object-cover rounded-lg shrink-0" />
                                    <div class="overflow-hidden">
                                        <p class="text-xs font-bold text-primary truncate uppercase tracking-wider">${item.nama_brand}</p>
                                        <p class="text-xs font-bold text-base-content truncate mt-0.5">${item.nama_produk}</p>
                                        <p class="text-[11px] font-semibold text-base-content/60 mt-0.5">${price}</p>
                                    </div>
                                `;
                                searchDropdown.appendChild(itemEl);
                            });
                        }

                        // Add "View All" link
                        const viewAllEl = document.createElement('button');
                        viewAllEl.type = 'button';
                        viewAllEl.className = "w-full text-center p-3 text-xs font-bold text-primary hover:bg-primary/5 transition-colors border-t border-base-content/5";
                        viewAllEl.innerText = `Lihat semua hasil untuk "${query}"`;
                        viewAllEl.onclick = () => searchForm.submit();
                        searchDropdown.appendChild(viewAllEl);

                        searchDropdown.classList.remove('hidden');
                    })
                    .catch(err => console.error('Error fetching search results:', err));
            }, 300);
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', function(e) {
            if (!document.getElementById('search-container').contains(e.target)) {
                searchDropdown.classList.add('hidden');
            }
        });

        // Close dropdown on Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                searchDropdown.classList.add('hidden');
            }
        });
    })();
</script>