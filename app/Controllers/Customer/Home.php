<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index(){
        $data = [
            'menu' => 'home',
        ];

        return view('pages/customer/view_home', $data);
    }
}