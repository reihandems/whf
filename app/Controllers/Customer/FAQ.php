<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;

class FAQ extends BaseController
{
    public function index()
    {
        $data = [
            'menu' => 'faq',
        ];

        return view('pages/customer/view_faq.php', $data);
    }
}
