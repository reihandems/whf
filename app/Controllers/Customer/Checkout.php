<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;

class Checkout extends BaseController {
    public function index() {
        $data = [
            'menu' => 'cart'
        ];

        return view('pages/customer/view_checkout', $data);
    }
}