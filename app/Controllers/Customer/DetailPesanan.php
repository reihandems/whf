<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;

class DetailPesanan extends BaseController {
    public function index() {
        $data = [
            'menu' => 'pesanan'
        ];

        return view('pages/customer/view_detail_pesanan', $data);
    }
}