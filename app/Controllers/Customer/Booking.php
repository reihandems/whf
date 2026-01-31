<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;

class Booking extends BaseController
{
    public function index()
    {
        $data = [
            'menu' => 'booking',
        ];

        return view('pages/customer/view_booking.php', $data);
    }
}
