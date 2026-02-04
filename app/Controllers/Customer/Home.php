<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;
use App\Models\ProdukModel;

class Home extends BaseController
{
    public function index()
    {
        $produkModel = new ProdukModel();

        $categories = ['Protein', 'Creatine', 'Pre-Workout', 'Fat Burner', 'Recovery'];
        $productsByCategory = [];

        foreach ($categories as $cat) {
            $productsByCategory[$cat] = $produkModel->getProductsByCategory($cat, 4);
        }

        $data = [
            'menu' => 'home',
            'categories' => $categories,
            'productsByCategory' => $productsByCategory,
            'mostSearched' => $produkModel->getMostSearchedProducts(8)
        ];

        return view('pages/customer/index', $data);
    }
}
