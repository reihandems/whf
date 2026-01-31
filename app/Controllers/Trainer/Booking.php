<?php

namespace App\Controllers\Trainer;

use App\Controllers\BaseController;

class Booking extends BaseController
{
    public function index()
    {
        $data = [
            'menu' => 'booking',
            'title' => 'Daftar Booking'
        ];

        return view('pages/trainer/view_booking', $data);
    }
}
