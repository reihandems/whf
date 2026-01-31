<?php

namespace App\Controllers\Supplier;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'menu' => 'dashboard',
            'title' => 'Dashboard'
        ];

        return view('pages/supplier/index', $data);
    }
}
