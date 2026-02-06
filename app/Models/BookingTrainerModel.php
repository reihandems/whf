<?php

namespace App\Models;

use CodeIgniter\Model;

class BookingTrainerModel extends Model
{
    protected $table            = 'booking_trainer';
    protected $primaryKey       = 'id_booking';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'kode_booking',
        'id_customer',
        'id_trainer',
        'id_paket',
        'nama_trainee',
        'email_trainee',
        'no_hp_trainee',
        'alamat_trainee',
        'tanggal_booking',
        'jumlah_sesi',
        'harga_per_sesi',
        'subtotal',
        'diskon',
        'total',
        'status_booking',
        'tanggal_pembayaran',
        'tanggal_selesai',
        'created_at',
        'updated_at'
    ];

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getBookingByCustomer($id_customer)
    {
        return $this->select('booking_trainer.*, trainers.nama_trainer, trainers.foto_profil, trainers.kategori')
            ->join('trainers', 'trainers.id_trainer = booking_trainer.id_trainer')
            ->where('id_customer', $id_customer)
            ->orderBy('created_at', 'DESC')
            ->findAll();
    }
}
