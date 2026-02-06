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
            <div role="tablist" class="tabs tabs-box">
                <a href="<?= base_url('/user/pesanan?status=menunggu_pembayaran') ?>" role="tab" class="tab <?= $current_status == 'menunggu_pembayaran' ? 'tab-active' : '' ?>">Pending (<?= $counts['menunggu_pembayaran'] ?>)</a>
                <a href="<?= base_url('/user/pesanan?status=diproses') ?>" role="tab" class="tab <?= $current_status == 'diproses' ? 'tab-active' : '' ?>">Diproses (<?= $counts['diproses'] ?>)</a>
                <a href="<?= base_url('/user/pesanan?status=dikirim') ?>" role="tab" class="tab <?= $current_status == 'dikirim' ? 'tab-active' : '' ?>">Dikirim (<?= $counts['dikirim'] ?>)</a>
                <a href="<?= base_url('/user/pesanan?status=selesai') ?>" role="tab" class="tab <?= $current_status == 'selesai' ? 'tab-active' : '' ?>">Selesai</a>
            </div>
        </div>
        <?php if (empty($orders)): ?>
            <div class="col-span-12 p-8 bg-base-300 mt-3 rounded-xl text-center italic opacity-50">
                Belum ada pesanan.
            </div>
        <?php else: ?>
            <?php foreach ($orders as $order): ?>
                <div class="col-span-12 flex flex-col gap-5 p-8 bg-base-300 mt-3 rounded-xl">
                    <div class="flex flex-row items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 1024 1024">
                            <path fill="currentColor" d="M704 192h160v736H160V192h160v64h384zM288 512h448v-64H288zm0 256h448v-64H288zm96-576V96h256v96z" />
                        </svg>
                        <p class="font-bold"><?= $order['kode_pesanan'] ?></p>
                        <?php if ($order['status_pesanan'] == 'menunggu_pembayaran'): ?>
                            <div class="badge badge-soft badge-warning">&bull; Pending</div>
                        <?php elseif ($order['status_pesanan'] == 'diproses'): ?>
                            <div class="badge badge-soft badge-info">&bull; Diproses</div>
                        <?php elseif ($order['status_pesanan'] == 'dikirim'): ?>
                            <div class="badge badge-soft badge-success">&bull; Dikirim</div>
                        <?php elseif ($order['status_pesanan'] == 'selesai'): ?>
                            <div class="badge badge-soft badge-primary">&bull; Selesai</div>
                        <?php else: ?>
                            <div class="badge badge-soft badge-ghost">&bull; <?= ucfirst($order['status_pesanan']) ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="flex flex-col md:flex-row md:items-center items-start gap-4">
                        <div class="jam flex flex-row items-center gap-2 p-3 border border-base-100 rounded-lg bg-base-200">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 0 0 0-1.5h-3.75V6Z" clip-rule="evenodd" />
                            </svg>
                            <p class="text-sm text-gray-400">Jam Transaksi: <?= date('d M Y, H:i', strtotime($order['created_at'])) ?></p>
                        </div>
                        <?php if ($order['estimasi_sampai']): ?>
                            <div class="jam flex flex-row items-center gap-2 p-3 border border-base-100 rounded-lg bg-base-200">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                    <path d="M3.375 4.5C2.339 4.5 1.5 5.34 1.5 6.375V13.5h12V6.375c0-1.036-.84-1.875-1.875-1.875h-8.25ZM13.5 15h-12v2.625c0 1.035.84 1.875 1.875 1.875h.375a3 3 0 1 1 6 0h3a.75.75 0 0 0 .75-.75V15Z" />
                                    <path d="M8.25 19.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0ZM15.75 6.75a.75.75 0 0 0-.75.75v11.25c0 .087.015.17.042.248a3 3 0 0 1 5.958.464c.853-.175 1.522-.935 1.464-1.883a18.659 18.659 0 0 0-3.732-10.104 1.837 1.837 0 0 0-1.47-.725H15.75Z" />
                                    <path d="M19.5 19.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z" />
                                </svg>
                                <p class="text-sm text-gray-400">Estimasi Sampai: <?= date('d M Y', strtotime($order['estimasi_sampai'])) ?></p>
                            </div>
                        <?php endif; ?>
                        <div class="jam flex flex-row items-center gap-2 p-3 border border-base-100 rounded-lg bg-base-200">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                            </svg>
                            <p class="text-sm text-gray-400">Dikirim ke: <?= $order['kota'] ?></p>
                        </div>
                    </div>
                    <div class="divider my-0"></div>
                    <div class="flex flex-row items-center justify-between border border-base-100 rounded-lg p-3">
                        <div class="kiri flex flex-row gap-3 items-center">
                            <div class="avatar">
                                <div class="w-14 md:w-24 rounded">
                                    <img src="<?= base_url('assets/img/produk/' . $order['foto_produk']) ?>" alt="<?= $order['nama_produk'] ?>" />
                                </div>
                            </div>
                            <div class="flex flex-col gap-0 md:gap-1">
                                <h1 class="text-lg md:text-xl font-semibold"><?= $order['nama_produk'] ?></h1>
                                <p class="text-xs md:text-sm text-gray-400">Rp. <?= number_format($order['harga_produk'], 0, ',', '.') ?></p>
                            </div>
                        </div>
                        <p class="text-lg md:text-2xl font-semibold">Rp. <?= number_format($order['total'], 0, ',', '.') ?></p>
                    </div>
                    <div class="divider my-0"></div>
                    <div class="flex flex-row items-center justify-between">
                        <h1 class="md:text-xl text-lg text-gray-500">Total: <span class="text-white font-semibold">Rp. <?= number_format($order['total'], 0, ',', '.') ?></span></h1>
                        <div class="flex flex-row gap-2">
                            <a href="<?= base_url('/user/pesanan/detail/' . $order['id_pesanan']) ?>" class="btn btn-soft btn-sm md:btn-md">Detail</a>
                            <?php if ($order['status_pesanan'] == 'dikirim'): ?>
                                <a href="<?= base_url('/user/pesanan/complete/' . $order['id_pesanan']) ?>" class="btn btn-primary text-white btn-sm md:btn-md" onclick="return confirm('Apakah Anda yakin telah menerima pesanan ini?')">Terima Pesanan</a>
                            <?php elseif ($order['status_pesanan'] == 'selesai'): ?>
                                <?php if ($order['review_count'] > 0): ?>
                                    <a href="<?= base_url('/user/pesanan/reorder/' . $order['id_pesanan']) ?>" class="btn btn-primary btn-sm md:btn-md">Beli Lagi</a>
                                <?php else: ?>
                                    <button class="btn btn-primary btn-sm md:btn-md" onclick="openRatingModal(<?= $order['id_pesanan'] ?>)">Beri Nilai</button>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>

<!-- Rating Modal -->
<dialog id="rating_modal" class="modal">
    <div class="modal-box w-11/12 max-w-2xl bg-base-300">
        <h3 class="text-lg font-bold">Beri Nilai Pesanan</h3>
        <form action="<?= base_url('/user/pesanan/review/submit') ?>" method="POST" id="rating_form">
            <input type="hidden" name="id_pesanan" id="modal_id_pesanan">
            <div id="modal_items_container" class="py-4 flex flex-col gap-4">
                <!-- Items will be loaded here -->
                <div class="flex justify-center p-4">
                    <span class="loading loading-spinner loading-lg"></span>
                </div>
            </div>
            <div class="modal-action">
                <button type="button" class="btn" onclick="rating_modal.close()">Batal</button>
                <button type="submit" class="btn btn-primary">Kirim Ulasan</button>
            </div>
        </form>
    </div>
</dialog>

<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
    function openRatingModal(id_pesanan) {
        const modal = document.getElementById('rating_modal');
        const container = document.getElementById('modal_items_container');
        const idInput = document.getElementById('modal_id_pesanan');

        idInput.value = id_pesanan;
        container.innerHTML = `<div class="flex justify-center p-4"><span class="loading loading-spinner loading-lg"></span></div>`;
        modal.showModal();

        fetch(`<?= base_url('/user/pesanan/get-items/') ?>${id_pesanan}`)
            .then(response => response.json())
            .then(data => {
                container.innerHTML = '';
                data.forEach(item => {
                    const itemHtml = `
                        <div class="flex flex-col gap-3 p-4 bg-base-200 rounded-xl border border-base-100">
                            <div class="flex flex-row gap-3 items-center">
                                <div class="avatar">
                                    <div class="w-12 rounded">
                                        <img src="<?= base_url('assets/img/produk/') ?>${item.foto_produk}" alt="${item.nama_produk}" />
                                    </div>
                                </div>
                                <p class="font-semibold text-sm">${item.nama_produk}</p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <p class="text-xs text-gray-400">Rating Produk</p>
                                <div class="rating rating-md">
                                    <input type="radio" name="rating[${item.id_produk}]" value="1" class="mask mask-star-2 bg-orange-400" />
                                    <input type="radio" name="rating[${item.id_produk}]" value="2" class="mask mask-star-2 bg-orange-400" />
                                    <input type="radio" name="rating[${item.id_produk}]" value="3" class="mask mask-star-2 bg-orange-400" />
                                    <input type="radio" name="rating[${item.id_produk}]" value="4" class="mask mask-star-2 bg-orange-400" />
                                    <input type="radio" name="rating[${item.id_produk}]" value="5" class="mask mask-star-2 bg-orange-400" checked />
                                </div>
                                <textarea name="comment[${item.id_produk}]" class="textarea textarea-bordered w-full text-sm" placeholder="Ceritakan pengalaman Anda menggunakan produk ini..."></textarea>
                            </div>
                        </div>
                    `;
                    container.insertAdjacentHTML('beforeend', itemHtml);
                });
            })
            .catch(error => {
                console.error('Error:', error);
                container.innerHTML = `<p class="text-red-500 text-center">Gagal memuat produk. Silahkan coba lagi.</p>`;
            });
    }
</script>
<?= $this->endSection() ?>