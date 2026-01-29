<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;

class Cart extends BaseController
{
    public function index()
    {
        $data = [
            'menu' => 'cart'
        ];

        return view('pages/customer/view_cart.php', $data);
    }
}
