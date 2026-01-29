<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;

class DetailTrainer extends BaseController
{
    public function index()
    {
        $data = [
            'menu' => 'detail-trainer',
        ];

        return view('pages/customer/view_detail_trainer.php', $data);
    }
}
