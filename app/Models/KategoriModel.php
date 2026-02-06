<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table            = 'kategori_produk';
    protected $primaryKey       = 'id_kategori';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['nama_kategori', 'sub_kategori', 'parent_id', 'deskripsi'];
    protected $useTimestamps    = false;

    public function getAllCategoriesGrouped()
    {
        $categories = $this->findAll();
        $grouped = [];
        foreach ($categories as $cat) {
            $grouped[$cat['nama_kategori']][] = $cat['sub_kategori'];
        }
        return $grouped;
    }
}
