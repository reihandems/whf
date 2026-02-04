<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;

class DetailTrainer extends BaseController
{
    public function index($id)
    {
        $trainerModel = new \App\Models\TrainerModel();
        $trainer = $trainerModel->find($id);

        if (!$trainer) {
            return redirect()->to('/user/trainer');
        }

        $data = [
            'menu' => 'detail-trainer',
            't' => $trainer
        ];

        return view('pages/customer/view_detail_trainer.php', $data);
    }
}
