<?php

namespace App\Models;

use CodeIgniter\Model;

class ReviewProdukModel extends Model
{
    protected $table            = 'review_produk';
    protected $primaryKey       = 'id_review';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_produk',
        'id_customer',
        'id_pesanan',
        'rating',
        'komentar',
        'created_at'
    ];

    protected $useTimestamps = false; // Manually handled by DB usually, or just use created_at

    public function getReviewsByProduct($id_produk)
    {
        return $this->select('review_produk.*, customers.nama_lengkap, customers.foto_profil')
            ->join('customers', 'customers.id_customer = review_produk.id_customer')
            ->where('id_produk', $id_produk)
            ->orderBy('review_produk.created_at', 'DESC')
            ->findAll();
    }
}
