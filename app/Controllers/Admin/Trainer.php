<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Trainer extends BaseController
{
    public function index()
    {
        $data = [
            'menu' => 'trainer',
            'title' => 'Data Trainer'
        ];

        return view('pages/admin/view_data_trainer', $data);
    }
}
