<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class Home extends BaseController
{
    public function index(): mixed
    {
        if (session()->get('logged_in') && session()->get('role') === 'customer') {
            return redirect()->to(base_url('/user/home'));
        }

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

        return view('landing_page', $data);
    }
}
