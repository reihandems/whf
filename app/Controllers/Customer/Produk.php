<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;

class Produk extends BaseController
{
    public function index()
    {
        $kategoriModel = new \App\Models\KategoriModel();
        $produkModel = new \App\Models\ProdukModel();

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

        return view('pages/customer/view_produk.php', $data);
    }
}
