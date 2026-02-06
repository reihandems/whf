<?php

namespace App\Controllers\Supplier;

use App\Controllers\BaseController;

class DetailPesanan extends BaseController
{
    public function index($id = null)
    {
        if (!$id) {
            return redirect()->to('/supplier/pesanan');
        }

        $session = session();
        $supplier_id = $session->get('user_id');

        $pesananModel = new \App\Models\PesananModel();
        $detailModel = new \App\Models\DetailPesananModel();

        $order = $pesananModel->find($id);

        if (!$order) {
            return redirect()->to('/supplier/pesanan')->with('error', 'Pesanan tidak ditemukan.');
        }

        // Only get details that belong to this supplier
        $details = $detailModel->select('detail_pesanan.*, produk.nama_produk as original_name')
            ->join('produk', 'produk.id_produk = detail_pesanan.id_produk')
            ->where('detail_pesanan.id_pesanan', $id)
            ->where('produk.id_supplier', $supplier_id)
            ->findAll();

        if (empty($details)) {
            return redirect()->to('/supplier/pesanan')->with('error', 'Anda tidak memiliki akses ke pesanan ini.');
        }

        $data = [
            'menu' => 'pesanan',
            'title' => 'Detail Pesanan',
            'order' => $order,
            'details' => $details
        ];

        return view('pages/supplier/view_detail_pesanan', $data);
    }
}
