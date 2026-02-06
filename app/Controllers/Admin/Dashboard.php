<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();

        $kategoriModel = new \App\Models\KategoriModel();
        $produkModel = new \App\Models\ProdukModel();
        $customerModel = new \App\Models\CustomerModel();
        $trainerModel = new \App\Models\TrainerModel();
        $supplierModel = new \App\Models\SupplierModel();

        // Calculate Revenue
        $pesananRevenue = $db->table('pesanan')->selectSum('total')->get()->getRow()->total;
        $bookingRevenue = $db->table('booking_trainer')->selectSum('total')->get()->getRow()->total;
        $totalRevenue = $pesananRevenue + $bookingRevenue;

        // Calculate Sales/Orders Count
        $totalPesanan = $db->table('pesanan')->countAllResults();
        $totalBooking = $db->table('booking_trainer')->countAllResults();

        $data = [
            'menu' => 'dashboard',
            'title' => 'Dashboard',
            'total_revenue' => $totalRevenue,
            'total_produk' => $produkModel->countAllResults(),
            'total_customer' => $customerModel->countAllResults(),
            'total_trainer' => $trainerModel->countAllResults(),
            'total_supplier' => $supplierModel->countAllResults(),
        ];

        return view('pages/admin/index', $data);
    }
}
