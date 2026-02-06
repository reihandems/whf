<?php

namespace App\Controllers\Supplier;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        $id_supplier = session()->get('user_id');

        // Total Products by this supplier
        $totalProduk = $db->table('produk')->where('id_supplier', $id_supplier)->countAllResults();

        // Total Items Sold (Return Count logic might be missing in DB, so using static for now or just excluding it)
        // Calculating Revenue from sold products linked to this supplier
        // Join detail_pesanan -> produk -> supplier
        $penjualan = $db->table('detail_pesanan')
            ->selectSum('detail_pesanan.subtotal')
            ->join('produk', 'produk.id_produk = detail_pesanan.id_produk')
            ->where('produk.id_supplier', $id_supplier)
            ->get()->getRow()->subtotal;

        // Count total orders (distinct orders containing supplier's products)
        $totalPesanan = $db->table('detail_pesanan')
            ->select('detail_pesanan.id_pesanan')
            ->join('produk', 'produk.id_produk = detail_pesanan.id_produk')
            ->where('produk.id_supplier', $id_supplier)
            ->distinct()
            ->countAllResults();

        $data = [
            'menu' => 'dashboard',
            'title' => 'Dashboard',
            'total_penjualan' => $penjualan ?? 0,
            'total_produk' => $totalProduk,
            'total_pesanan_hari_ini' => $totalPesanan // Actually total orders, but label says 'Hari Ini', maybe adjust label later
        ];

        return view('pages/supplier/index', $data);
    }
}
