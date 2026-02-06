<?php

namespace App\Controllers\Supplier;

use App\Controllers\BaseController;

class Pesanan extends BaseController
{
    public function index()
    {
        $session = session();
        $supplier_id = $session->get('user_id'); // Assuming 'user_id' stores supplier ID for supplier role

        if (!$supplier_id) {
            return redirect()->to('/login');
        }

        $pesananModel = new \App\Models\PesananModel();

        $status_filter = $this->request->getGet('status') ?: 'pending';

        // Get counts for each status
        $counts = [
            'pending' => count($pesananModel->getOrdersBySupplier($supplier_id, 'pending')),
            'diproses' => count($pesananModel->getOrdersBySupplier($supplier_id, 'diproses')),
            'dikirim' => count($pesananModel->getOrdersBySupplier($supplier_id, 'dikirim')),
            'selesai' => count($pesananModel->getOrdersBySupplier($supplier_id, 'selesai')),
        ];

        $orders = $pesananModel->getOrdersBySupplier($supplier_id, $status_filter);

        $data = [
            'menu' => 'pesanan',
            'title' => 'Pesanan',
            'orders' => $orders,
            'current_status' => $status_filter,
            'counts' => $counts
        ];

        return view('pages/supplier/view_pesanan', $data);
    }

    public function process($id)
    {
        $pesananModel = new \App\Models\PesananModel();
        $pesananModel->update($id, ['status_pesanan' => 'diproses']);
        return redirect()->to('/supplier/pesanan')->with('success', 'Pesanan berhasil diproses.');
    }

    public function ship($id)
    {
        // For now, just update status. Later we can add Resi input.
        $pesananModel = new \App\Models\PesananModel();
        $pesananModel->update($id, [
            'status_pesanan' => 'dikirim',
            'tanggal_dikirim' => date('Y-m-d H:i:s')
        ]);
        return redirect()->to('/supplier/pesanan')->with('success', 'Pesanan berhasil dikirim.');
    }
}
