<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;

class CheckoutTrainer extends BaseController
{
    public function index()
    {
        $data = [
            'menu' => 'cart'
        ];

        return view('pages/customer/view_checkout_trainer', $data);
    }
}
