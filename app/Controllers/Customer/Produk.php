<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;

class Produk extends BaseController {
    public function index() {
        $data = [
            'menu' => 'produk',
        ];

        return view('pages/customer/view_produk.php', $data);
    }
}