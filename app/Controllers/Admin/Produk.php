<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Produk extends BaseController
{
    public function index()
    {
        $data = [
            'menu' => 'produk',
            'title' => 'Data Produk'
        ];

        return view('pages/admin/view_data_produk', $data);
    }
}
