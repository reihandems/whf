<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;

class Pesanan extends BaseController
{
    public function index()
    {
        $id_customer = session()->get('user_id');
        $pesananModel = new \App\Models\PesananModel();
        $status_filter = $this->request->getGet('status') ?: 'menunggu_pembayaran';

        // Get counts for each status
        $counts = [
            'menunggu_pembayaran' => $pesananModel->where('id_customer', $id_customer)->where('status_pesanan', 'menunggu_pembayaran')->countAllResults(),
            'diproses' => $pesananModel->where('id_customer', $id_customer)->where('status_pesanan', 'diproses')->countAllResults(),
            'dikirim' => $pesananModel->where('id_customer', $id_customer)->where('status_pesanan', 'dikirim')->countAllResults(),
            'selesai' => $pesananModel->where('id_customer', $id_customer)->where('status_pesanan', 'selesai')->countAllResults(),
        ];

        $builder = $pesananModel->select('pesanan.*, MAX(detail_pesanan.nama_produk) as nama_produk, MAX(detail_pesanan.harga) as harga_produk, MAX(produk.foto_produk) as foto_produk, (SELECT COUNT(*) FROM review_produk WHERE id_pesanan = pesanan.id_pesanan) as review_count')
            ->join('detail_pesanan', 'detail_pesanan.id_pesanan = pesanan.id_pesanan')
            ->join('produk', 'produk.id_produk = detail_pesanan.id_produk')
            ->where('pesanan.id_customer', $id_customer)
            ->where('pesanan.status_pesanan', $status_filter);

        $orders = $builder->groupBy('pesanan.id_pesanan')
            ->orderBy('pesanan.created_at', 'DESC')
            ->findAll();

        $data = [
            'menu' => 'pesanan',
            'orders' => $orders,
            'current_status' => $status_filter,
            'counts' => $counts
        ];

        return view('pages/customer/view_pesanan', $data);
    }

    public function complete($id)
    {
        $id_customer = session()->get('user_id');
        $pesananModel = new \App\Models\PesananModel();

        $pesanan = $pesananModel->where('id_pesanan', $id)
            ->where('id_customer', $id_customer)
            ->first();

        if (!$pesanan) {
            return redirect()->back()->with('error', 'Pesanan tidak ditemukan.');
        }

        if ($pesanan['status_pesanan'] != 'dikirim') {
            return redirect()->back()->with('error', 'Pesanan belum dikirim atau sudah selesai.');
        }

        $pesananModel->update($id, ['status_pesanan' => 'selesai']);

        return redirect()->to('/user/pesanan?status=selesai')->with('success', 'Pesanan telah diterima. Silahkan berikan ulasan Anda.');
    }

    public function getItems($id)
    {
        $id_customer = session()->get('user_id');
        $detailPesananModel = new \App\Models\DetailPesananModel();

        $items = $detailPesananModel->select('detail_pesanan.*, produk.foto_produk')
            ->join('produk', 'produk.id_produk = detail_pesanan.id_produk')
            ->where('detail_pesanan.id_pesanan', $id)
            ->findAll();

        return $this->response->setJSON($items);
    }

    public function submitReview()
    {
        $id_customer = session()->get('user_id');
        $id_pesanan = $this->request->getPost('id_pesanan');
        $ratings = $this->request->getPost('rating'); // Array of ratings [id_produk => value]
        $comments = $this->request->getPost('comment'); // Array of comments [id_produk => value]

        $db = \Config\Database::connect();
        $db->transStart();

        foreach ($ratings as $id_produk => $rating) {
            $db->table('review_produk')->insert([
                'id_produk' => $id_produk,
                'id_customer' => $id_customer,
                'id_pesanan' => $id_pesanan,
                'rating' => $rating,
                'komentar' => $comments[$id_produk] ?? '',
                'created_at' => date('Y-m-d H:i:s')
            ]);

            // Update product average rating
            $avgRating = $db->table('review_produk')
                ->where('id_produk', $id_produk)
                ->selectAvg('rating')
                ->get()
                ->getRow()->rating;

            $totalReview = $db->table('review_produk')
                ->where('id_produk', $id_produk)
                ->countAllResults();

            $db->table('produk')
                ->where('id_produk', $id_produk)
                ->update([
                    'rating' => $avgRating,
                    'jumlah_review' => $totalReview
                ]);
        }

        $db->transComplete();

        if ($db->transStatus() === FALSE) {
            return redirect()->back()->with('error', 'Gagal mengirim ulasan.');
        }

        return redirect()->to('/user/pesanan?status=selesai')->with('success', 'Terima kasih atas ulasan Anda!');
    }

    public function reorder($id)
    {
        $id_customer = session()->get('user_id');
        $detailPesananModel = new \App\Models\DetailPesananModel();

        $items = $detailPesananModel->where('id_pesanan', $id)->findAll();

        if (!$items) {
            return redirect()->back()->with('error', 'Pesanan tidak ditemukan.');
        }

        $db = \Config\Database::connect();
        $db->transStart();

        foreach ($items as $item) {
            // Check if product exists and is active
            $product = $db->table('produk')->where('id_produk', $item['id_produk'])->where('is_active', 1)->get()->getRowArray();
            if ($product) {
                // Check if already in cart
                $existingCart = $db->table('cart')
                    ->where('id_customer', $id_customer)
                    ->where('id_produk', $item['id_produk'])
                    ->get()
                    ->getRowArray();

                if ($existingCart) {
                    $db->table('cart')
                        ->where('id_cart', $existingCart['id_cart'])
                        ->update(['jumlah' => $existingCart['jumlah'] + $item['jumlah']]);
                } else {
                    $db->table('cart')->insert([
                        'id_customer' => $id_customer,
                        'id_produk' => $item['id_produk'],
                        'jumlah' => $item['jumlah'],
                        'created_at' => date('Y-m-d H:i:s')
                    ]);
                }
            }
        }

        $db->transComplete();

        if ($db->transStatus() === FALSE) {
            return redirect()->back()->with('error', 'Gagal memproses pembelian ulang.');
        }

        return redirect()->to('/user/cart')->with('success', 'Produk dari pesanan sebelumnya telah ditambahkan ke keranjang.');
    }
}
