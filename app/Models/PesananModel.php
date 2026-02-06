<?php

namespace App\Models;

use CodeIgniter\Model;

class PesananModel extends Model
{
    protected $table            = 'pesanan';
    protected $primaryKey       = 'id_pesanan';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'kode_pesanan',
        'id_customer',
        'id_kurir',
        'id_promo',
        'nama_penerima',
        'no_hp_penerima',
        'provinsi',
        'kota',
        'kecamatan',
        'kelurahan',
        'kode_pos',
        'alamat_lengkap',
        'detail_alamat',
        'subtotal',
        'diskon',
        'ongkir',
        'total',
        'status_pesanan',
        'resi_pengiriman',
        'estimasi_sampai',
        'tanggal_pesanan',
        'tanggal_pembayaran',
        'tanggal_dikirim',
        'tanggal_selesai'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function getOrdersBySupplier($supplier_id, $status = null)
    {
        $builder = $this->select('pesanan.*')
            ->distinct()
            ->join('detail_pesanan', 'detail_pesanan.id_pesanan = pesanan.id_pesanan')
            ->join('produk', 'produk.id_produk = detail_pesanan.id_produk')
            ->where('produk.id_supplier', $supplier_id);

        if ($status && $status !== 'semua') { // 'semua' implies no filter, though usually just null/empty checks suffice
            // Map simplified status if needed, but assuming direct match for now.
            // Special case: 'pending' might map to 'menunggu_pembayaran'
            if ($status == 'pending') {
                $builder->whereIn('pesanan.status_pesanan', ['pending', 'menunggu_pembayaran']);
            } else {
                $builder->where('pesanan.status_pesanan', $status);
            }
        }

        return $builder->orderBy('pesanan.created_at', 'DESC')
            ->findAll();
    }
}
