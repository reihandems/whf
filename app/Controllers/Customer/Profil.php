<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;

class Profil extends BaseController
{
    public function index()
    {
        $data = [
            'menu' => 'profil',
        ];

        return view('pages/customer/view_profil.php', $data);
    }
}
