<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;

class DetailPesanan extends BaseController
{
    public function index($id = null)
    {
        if (!$id) {
            return redirect()->to('/user/pesanan');
        }

        $id_customer = session()->get('user_id');
        $pesananModel = new \App\Models\PesananModel();
        $detailPesananModel = new \App\Models\DetailPesananModel();

        $order = $pesananModel->select('pesanan.*, (SELECT COUNT(*) FROM review_produk WHERE id_pesanan = pesanan.id_pesanan) as review_count')
            ->where('id_pesanan', $id)
            ->where('id_customer', $id_customer)
            ->first();

        if (!$order) {
            return redirect()->to('/user/pesanan')->with('error', 'Pesanan tidak ditemukan.');
        }

        $items = $detailPesananModel->select('detail_pesanan.*, produk.foto_produk, brands.nama_brand')
            ->join('produk', 'produk.id_produk = detail_pesanan.id_produk')
            ->join('brands', 'brands.id_brand = produk.id_brand', 'left')
            ->where('id_pesanan', $id)
            ->findAll();

        $data = [
            'menu' => 'pesanan',
            'order' => $order,
            'items' => $items
        ];

        return view('pages/customer/view_detail_pesanan', $data);
    }
}
