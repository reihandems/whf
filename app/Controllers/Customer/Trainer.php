<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;

class Trainer extends BaseController {
    public function index() {
        $data = [
            'menu' => 'trainer'
        ];

        return view('pages/customer/view_trainer.php', $data);
    }
}