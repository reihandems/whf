<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class Produk extends BaseController
{
    public function index()
    {
        $kategoriModel = new \App\Models\KategoriModel();
        $produkModel = new ProdukModel();

        $subcategory = $this->request->getGet('subcategory');

        if ($subcategory) {
            $products = $produkModel->getProductsBySubCategory($subcategory);
        } else {
            $products = $produkModel->getAllProducts();
        }

        $data = [
            'menu' => 'produk',
            'categoriesGrouped' => $kategoriModel->getAllCategoriesGrouped(),
            'products' => $products,
            'currentSubcategory' => $subcategory
        ];

        return view('produk', $data);
    }

    public function detail($id)
    {
        $produkModel = new ProdukModel();
        $produk = $produkModel->getProduk($id);

        if (!$produk) {
            return redirect()->to('/produk');
        }

        // Increment views
        $produkModel->update($id, ['views' => $produk['views'] + 1]);

        // Fetch reviews
        $reviewModel = new \App\Models\ReviewProdukModel();
        $reviews = $reviewModel->getReviewsByProduct($id);

        $data = [
            'menu' => 'produk',
            'p' => $produk,
            'reviews' => $reviews
        ];

        return view('detail', $data);
    }
}
