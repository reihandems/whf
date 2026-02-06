<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;

class CheckoutTrainer extends BaseController
{
    public function index()
    {
        $id_trainer = $this->request->getGet('id_trainer');
        $tanggal_sesi = $this->request->getGet('tanggal_sesi');
        $jumlah_sesi = (int)$this->request->getGet('jumlah_sesi') ?: 1;

        if (!$id_trainer) {
            return redirect()->to('/user/trainer');
        }

        $trainerModel = new \App\Models\TrainerModel();
        $customerModel = new \App\Models\CustomerModel();

        $trainer = $trainerModel->find($id_trainer);
        $id_customer = session()->get('user_id');
        $customer = $customerModel->find($id_customer);

        if (!$trainer) {
            return redirect()->to('/user/trainer')->with('error', 'Trainer tidak ditemukan.');
        }

        $price_per_session = (int)$trainer['harga_per_sesi'];
        $subtotal = $price_per_session * $jumlah_sesi;
        $total = $subtotal; // Add other fees if necessary

        $data = [
            'menu' => 'trainer',
            'trainer' => $trainer,
            'customer' => $customer,
            'tanggal_sesi' => $tanggal_sesi,
            'jumlah_sesi' => $jumlah_sesi,
            'subtotal' => $subtotal,
            'total' => $total
        ];

        return view('pages/customer/view_checkout_trainer', $data);
    }

    public function process()
    {
        $id_customer = session()->get('user_id');
        $id_trainer = $this->request->getPost('id_trainer');
        $tanggal_sesi = $this->request->getPost('tanggal_sesi');
        $jumlah_sesi = (int)$this->request->getPost('jumlah_sesi');

        $trainerModel = new \App\Models\TrainerModel();
        $bookingModel = new \App\Models\BookingTrainerModel();
        $dokuLibrary = new \App\Libraries\DokuLibrary();

        $trainer = $trainerModel->find($id_trainer);
        if (!$trainer) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Trainer tidak ditemukan']);
        }

        $subtotal = (int)$trainer['harga_per_sesi'] * $jumlah_sesi;
        $total = $subtotal;
        $kode_booking = 'BOK' . date('YmdHis') . rand(100, 999);

        $bookingData = [
            'kode_booking' => $kode_booking,
            'id_customer' => $id_customer,
            'id_trainer' => $id_trainer,
            'nama_trainee' => $this->request->getPost('nama_lengkap'),
            'email_trainee' => $this->request->getPost('email'),
            'no_hp_trainee' => $this->request->getPost('no_hp'),
            'alamat_trainee' => $this->request->getPost('alamat_lengkap'),
            'tanggal_booking' => $tanggal_sesi,
            'jumlah_sesi' => $jumlah_sesi,
            'harga_per_sesi' => $trainer['harga_per_sesi'],
            'subtotal' => $subtotal,
            'total' => $total,
            'status_booking' => 'menunggu_pembayaran',
            'created_at' => date('Y-m-d H:i:s')
        ];

        $bookingModel->insert($bookingData);
        $id_booking = $bookingModel->getInsertID();

        // Prepare DOKU Request
        $dokuRequest = [
            'order' => [
                'amount' => (int)$total,
                'invoice_number' => $kode_booking,
                'currency' => 'IDR',
                'callback_url' => base_url('user/booking'),
                'line_items' => [
                    [
                        'name' => 'Booking Trainer: ' . $trainer['nama_trainer'],
                        'price' => (int)$trainer['harga_per_sesi'],
                        'quantity' => $jumlah_sesi
                    ]
                ]
            ],
            'customer' => [
                'name' => $bookingData['nama_trainee'],
                'email' => $bookingData['email_trainee'],
                'phone' => $bookingData['no_hp_trainee'],
                'address' => $bookingData['alamat_trainee'],
                'country' => 'ID'
            ],
            'payment' => [
                'payment_due_date' => 60
            ]
        ];

        $response = $dokuLibrary->initiatePayment($dokuRequest);

        if (isset($response['response']['payment']['url'])) {
            return $this->response->setJSON([
                'status' => 'success',
                'payment_url' => $response['response']['payment']['url']
            ]);
        }

        return $this->response->setJSON([
            'status' => 'error',
            'message' => 'Gagal menginisialisasi pembayaran DOKU.',
            'doku_response' => $response
        ]);
    }
}
