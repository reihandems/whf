<?php

namespace App\Models;

use CodeIgniter\Model;

class CartModel extends Model
{
    protected $table            = 'cart';
    protected $primaryKey       = 'id_cart';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_customer', 'id_produk', 'jumlah'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getCartByCustomer($id_customer)
    {
        return $this->select('cart.*, produk.nama_produk, produk.harga, produk.foto_produk, brands.nama_brand')
            ->join('produk', 'produk.id_produk = cart.id_produk')
            ->join('brands', 'brands.id_brand = produk.id_brand')
            ->where('cart.id_customer', $id_customer)
            ->findAll();
    }
}
