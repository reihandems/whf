<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailPesananModel extends Model
{
    protected $table            = 'detail_pesanan';
    protected $primaryKey       = 'id_detail';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_pesanan',
        'id_produk',
        'nama_produk',
        'harga',
        'jumlah',
        'subtotal'
    ];

    // Dates
    protected $useTimestamps = false;
}
