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

        // Fetch reviews
        $reviewModel = new \App\Models\ReviewProdukModel();
        $reviews = $reviewModel->getReviewsByProduct($id);

        // Fetch related products (same category, exclude current product)
        $relatedProducts = $produkModel->select('produk.*, brands.nama_brand')
            ->join('brands', 'brands.id_brand = produk.id_brand')
            ->where('id_kategori', $produk['id_kategori'])
            ->where('id_produk !=', $id)
            ->where('is_active', 1)
            ->limit(4)
            ->find();

        $data = [
            'menu' => 'detail-produk',
            'p' => $produk,
            'reviews' => $reviews,
            'relatedProducts' => $relatedProducts
        ];

        return view('pages/customer/view_detail_produk.php', $data);
    }
}
