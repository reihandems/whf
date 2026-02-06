<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TrainerModel;

class Trainer extends BaseController
{
    public function index()
    {
        $trainerModel = new TrainerModel();

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

        return view('trainer', $data);
    }

    public function detail($id)
    {
        $trainerModel = new TrainerModel();
        $trainer = $trainerModel->find($id);

        if (!$trainer) {
            return redirect()->to('/trainer');
        }

        // Fetch reviews
        $reviewModel = new \App\Models\ReviewTrainerModel();
        $reviews = $reviewModel->getReviewsByTrainer($id);

        $data = [
            'menu' => 'trainer',
            't' => $trainer,
            'reviews' => $reviews
        ];

        return view('detail_trainer', $data);
    }
}
