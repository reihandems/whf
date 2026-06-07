<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;
use App\Models\PesananModel;
use App\Models\BookingTrainerModel;

class PaymentSimulator extends BaseController
{
    public function simulate($kode)
    {
        $pesananModel = new PesananModel();
        $bookingModel = new BookingTrainerModel();

        // Search in Pesanan
        $transaksi = $pesananModel->where('kode_pesanan', $kode)->first();
        $type = 'produk';

        // If not found, search in Booking
        if (!$transaksi) {
            $transaksi = $bookingModel->where('kode_booking', $kode)->first();
            $type = 'trainer';
        }

        if (!$transaksi) {
            return redirect()->to('/user/home')->with('error', 'Transaksi tidak ditemukan.');
        }

        // Ensure transaction is still pending
        $status = ($type == 'produk') ? $transaksi['status_pesanan'] : $transaksi['status_booking'];
        if ($status != 'menunggu_pembayaran') {
            return redirect()->to('/user/home')->with('error', 'Transaksi sudah diproses.');
        }

        $data = [
            'menu' => 'simulasi',
            'transaksi' => $transaksi,
            'kode' => $kode,
            'type' => $type,
            'amount' => $transaksi['total']
        ];

        return view('pages/customer/view_payment_simulator', $data);
    }

    public function confirm()
    {
        $kode = $this->request->getPost('kode');
        $type = $this->request->getPost('type');

        if ($type == 'produk') {
            $pesananModel = new PesananModel();
            $pesanan = $pesananModel->where('kode_pesanan', $kode)->first();

            if ($pesanan) {
                $pesananModel->update($pesanan['id_pesanan'], ['status_pesanan' => 'diproses']);
                
                // Clear cart when payment is confirmed
                $cartModel = new \App\Models\CartModel();
                $id_customer = session()->get('user_id');
                if ($id_customer) {
                    $cartModel->where('id_customer', $id_customer)->delete();
                }

                return redirect()->to('/user/pesanan?status=diproses')->with('success', 'Pembayaran berhasil dikonfirmasi. Pesanan Anda sedang diproses.');
            }
        } else {
            $bookingModel = new BookingTrainerModel();
            $booking = $bookingModel->where('kode_booking', $kode)->first();

            if ($booking) {
                $bookingModel->update($booking['id_booking'], [
                    'status_booking' => 'terkonfirmasi',
                    'tanggal_pembayaran' => date('Y-m-d H:i:s')
                ]);
                return redirect()->to('/user/booking?status=terkonfirmasi')->with('success', 'Pembayaran berhasil dikonfirmasi. Sesi trainer Anda telah terdaftar.');
            }
        }

        return redirect()->to('/user/home')->with('error', 'Gagal mengonfirmasi pembayaran.');
    }
}
