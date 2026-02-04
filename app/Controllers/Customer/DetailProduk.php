<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;
use App\Models\ProdukModel;

class DetailProduk extends BaseController
{
    public function index($id)
    {
        $produkModel = new ProdukModel();
        $produk = $produkModel->getProduk($id);

        if (!$produk) {
            return redirect()->to('/user/produk');
        }

        // Increment views
        $produkModel->update($id, ['views' => $produk['views'] + 1]);

        $data = [
            'menu' => 'detail-produk',
            'p' => $produk
        ];

        return view('pages/customer/view_detail_produk.php', $data);
    }
}
