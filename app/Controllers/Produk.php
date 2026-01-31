<?php 

namespace App\Controllers;

class Produk extends BaseController
{
    public function index() {
        $data = [
            'menu' => 'produk'
        ];

        return view('produk', $data);
    }

    public function detail() {
        $data = [
            'menu' => 'produk'
        ];

        return view('detail', $data);
    }
}