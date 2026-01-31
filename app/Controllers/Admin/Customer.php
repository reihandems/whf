<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Customer extends BaseController
{
    public function index()
    {
        $data = [
            'menu' => 'customer',
            'title' => 'Data Customer'
        ];

        return view('pages/admin/view_data_customer', $data);
    }
}
