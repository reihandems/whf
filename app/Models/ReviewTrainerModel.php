<?php

namespace App\Models;

use CodeIgniter\Model;

class ReviewTrainerModel extends Model
{
    protected $table            = 'review_trainer';
    protected $primaryKey       = 'id_review';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_trainer',
        'id_customer',
        'id_booking',
        'rating',
        'komentar',
        'created_at'
    ];

    protected $useTimestamps = false;

    public function getReviewsByTrainer($id_trainer)
    {
        return $this->select('review_trainer.*, customers.nama_lengkap, customers.foto_profil')
            ->join('customers', 'customers.id_customer = review_trainer.id_customer')
            ->where('id_trainer', $id_trainer)
            ->orderBy('review_trainer.created_at', 'DESC')
            ->findAll();
    }
}
