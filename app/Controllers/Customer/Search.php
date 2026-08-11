<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;
use App\Models\ProdukModel;

class Search extends BaseController
{
    public function index()
    {
        $keyword = $this->request->getGet('q');
        
        $produkModel = new ProdukModel();
        $products = [];
        
        if (!empty($keyword)) {
            $products = $produkModel->searchProducts($keyword);
        }

        $data = [
            'menu' => 'produk',
            'products' => $products,
            'keyword' => $keyword
        ];

        return view('pages/customer/view_search_results', $data);
    }
}
