<div class="navbar bg-base-100 shadow-sm px-2 md:px-12 fixed top-0 right-0 left-0 z-[100]">
    <div class="navbar-start">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </div>
            <ul tabindex="-1" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                <li><a href="<?= base_url('/home') ?>" class="text-xs <?= ($menu == 'home') ? 'hover:underline text-primary font-bold' : 'text-xs font-semibold' ?>">HOME</a></li>
                <li><a href="<?= base_url('/produk') ?>" class="text-xs <?= ($menu == 'produk') ? 'hover:underline text-primary font-bold' : 'text-xs font-semibold' ?>">PRODUK</a></li>
                <li><a href="<?= base_url('/trainer') ?>" class="text-xs <?= ($menu == 'trainer') ? 'hover:underline text-primary font-bold' : 'text-xs font-semibold' ?>">TRAINER</a></li>
                <li><a href="<?= base_url('/blog') ?>" class="text-xs <?= ($menu == 'blog') ? 'hover:underline text-primary font-bold' : 'text-xs font-semibold' ?>">BLOG</a></li>
                <li><a href="<?= base_url('/faq') ?>" class="text-xs <?= ($menu == 'faq') ? 'hover:underline text-primary font-bold' : 'text-xs font-semibold' ?>">FAQ</a></li>
            </ul>
        </div>
        <div class="avatar me-3">
            <div class="w-14 h-14 rounded-full dynamic-logo"></div>
        </div>
        <p class="text-3xl me-3 md:flex hidden">|</p>
        <ul class="menu menu-horizontal px-1 md:flex hidden">
            <li><a href="<?= base_url('/home') ?>" class="text-xs <?= ($menu == 'home') ? 'hover:underline text-primary font-bold' : 'text-xs font-semibold' ?>">HOME</a></li>
            <li><a href="<?= base_url('/produk') ?>" class="text-xs <?= ($menu == 'produk') ? 'hover:underline text-primary font-bold' : 'text-xs font-semibold' ?>">PRODUK</a></li>
            <li><a href="<?= base_url('/trainer') ?>" class="text-xs <?= ($menu == 'trainer') ? 'hover:underline text-primary font-bold' : 'text-xs font-semibold' ?>">TRAINER</a></li>
            <li><a href="<?= base_url('/blog') ?>" class="text-xs <?= ($menu == 'blog') ? 'hover:underline text-primary font-bold' : 'text-xs font-semibold' ?>">BLOG</a></li>
            <li><a href="<?= base_url('/faq') ?>" class="text-xs <?= ($menu == 'faq') ? 'hover:underline text-primary font-bold' : 'text-xs font-semibold' ?>">FAQ</a></li>
        </ul>
    </div>
    <div class="navbar-end">
        <div class="relative me-3 md:block hidden" id="search-container">
            <form action="<?= base_url('/search') ?>" method="GET" id="navbar-search-form" class="m-0 p-0">
                <label class="input input-sm rounded-2xl w-48 flex items-center gap-2">
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
        <a href="<?= base_url('/login') ?>" class="mx-3">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
            </svg>
        </a>
        <a href="<?= base_url('/login') ?>">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd" />
            </svg>
        </a>
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
                                itemEl.href = `<?= base_url('/produk/detail/') ?>/${item.id_produk}`;
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