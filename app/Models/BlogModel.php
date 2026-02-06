<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $table            = 'blog';
    protected $primaryKey       = 'id_blog';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $allowedFields    = [
        'judul',
        'slug',
        'konten',
        'foto_cover',
        'author',
        'views',
        'is_published',
        'tanggal_publish'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getLatest($limit = 1)
    {
        return $this->where('is_published', 1)
            ->orderBy('tanggal_publish', 'DESC')
            ->limit($limit)
            ->findAll();
    }

    public function getMostRead($limit = 3, $excludeId = null)
    {
        $builder = $this->where('is_published', 1);
        if ($excludeId) {
            $builder->where('id_blog !=', $excludeId);
        }
        return $builder->orderBy('views', 'DESC')
            ->limit($limit)
            ->findAll();
    }

    public function getOtherArticles($limit = 8, $excludeIds = [])
    {
        $builder = $this->where('is_published', 1);
        if (!empty($excludeIds)) {
            $builder->whereNotIn('id_blog', $excludeIds);
        }
        return $builder->orderBy('tanggal_publish', 'DESC')
            ->limit($limit)
            ->findAll();
    }
}
