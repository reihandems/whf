<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;

class Pesanan extends BaseController
{
    public function index()
    {
        $data = [
            'menu' => 'pesanan',
        ];

        return view('pages/customer/view_pesanan.php', $data);
    }
}
