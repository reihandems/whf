<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;

class Trainer extends BaseController
{
    public function index()
    {
        $trainerModel = new \App\Models\TrainerModel();

        $filters = [
            'gender' => $this->request->getGet('gender'),
            'category' => $this->request->getGet('category'),
            'price_range' => $this->request->getGet('price_range'),
            'location' => $this->request->getGet('location'),
        ];

        $data = [
            'menu' => 'trainer',
            'trainers' => $trainerModel->filterTrainers($filters),
            'categories' => $trainerModel->getDistinctCategories(),
            'locations' => $trainerModel->getDistinctLocations(),
            'currentFilters' => $filters
        ];

        return view('pages/customer/view_trainer.php', $data);
    }
}
