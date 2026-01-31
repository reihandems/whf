<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table            = 'produk';
    protected $primaryKey       = 'id_produk';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_kategori',
        'id_brand',
        'id_supplier',
        'nama_produk',
        'deskripsi',
        'harga',
        'stok',
        'berat',
        'ukuran',
        'flavour',
        'foto_produk',
        'rating',
        'jumlah_review',
        'is_active'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Joins to get labels instead of IDs
    public function getProduk($id = false)
    {
        $builder = $this->db->table($this->table);
        $builder->select('produk.*, kategori_produk.nama_kategori, kategori_produk.sub_kategori, brands.nama_brand, suppliers.nama_supplier');
        $builder->join('kategori_produk', 'kategori_produk.id_kategori = produk.id_kategori');
        $builder->join('brands', 'brands.id_brand = produk.id_brand');
        $builder->join('suppliers', 'suppliers.id_supplier = produk.id_supplier', 'left');

        if ($id === false) {
            return $builder->get()->getResultArray();
        }

        return $builder->where(['id_produk' => $id])->get()->getRowArray();
    }
}
