<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Supplier extends BaseController
{
    public function index()
    {
        $data = [
            'menu' => 'supplier',
            'title' => 'Data Supplier'
        ];

        return view('pages/admin/view_data_supplier', $data);
    }
}
