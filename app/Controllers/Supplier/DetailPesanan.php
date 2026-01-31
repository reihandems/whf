<?php

namespace App\Controllers\Supplier;

use App\Controllers\BaseController;

class DetailPesanan extends BaseController
{
    public function index()
    {
        $data = [
            'menu' => 'pesanan',
            'title' => 'Pesanan'
        ];

        return view('pages/supplier/view_detail_pesanan', $data);
    }
}
