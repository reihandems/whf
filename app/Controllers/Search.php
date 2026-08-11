<?php

namespace App\Controllers;

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

        return view('search_results', $data);
    }
}
