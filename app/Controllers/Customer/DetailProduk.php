<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;

class DetailProduk extends BaseController
{
    public function index()
    {
        $data = [
            'menu' => 'detail-produk',
        ];

        return view('pages/customer/view_detail_produk.php', $data);
    }
}
