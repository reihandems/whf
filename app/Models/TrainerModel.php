<?php

namespace App\Models;

use CodeIgniter\Model;

class TrainerModel extends Model
{
    protected $table            = 'trainers';
    protected $primaryKey       = 'id_trainer';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'nama_trainer',
        'username',
        'email',
        'password',
        'no_hp',
        'jenis_kelamin',
        'kategori',
        'harga_per_sesi',
        'pengalaman_tahun',
        'lokasi',
        'deskripsi',
        'foto_profil',
        'rating',
        'jumlah_review'
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
    public function filterTrainers($filters = [])
    {
        $builder = $this->builder();

        if (!empty($filters['gender'])) {
            $builder->where('jenis_kelamin', $filters['gender']);
        }

        if (!empty($filters['category'])) {
            $builder->where('kategori', $filters['category']);
        }

        if (!empty($filters['price_range'])) {
            if ($filters['price_range'] === '<500') {
                $builder->where('harga_per_sesi <', 500000);
            } elseif ($filters['price_range'] === '500-1000') {
                $builder->where('harga_per_sesi >=', 500000)->where('harga_per_sesi <=', 1000000);
            } elseif ($filters['price_range'] === '>1000') {
                $builder->where('harga_per_sesi >', 1000000);
            }
        }

        if (!empty($filters['location'])) {
            $builder->where('lokasi', $filters['location']);
        }

        return $builder->get()->getResultArray();
    }

    public function getDistinctCategories()
    {
        return $this->select('kategori')->distinct()->findAll();
    }

    public function getDistinctLocations()
    {
        return $this->select('lokasi')->distinct()->findAll();
    }
}
