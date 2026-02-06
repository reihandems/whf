<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;
use App\Models\CartModel;
use App\Models\CustomerModel;

class Checkout extends BaseController
{
    public function index()
    {
        $cartModel = new CartModel();
        $customerModel = new CustomerModel();

        $id_customer = session()->get('user_id');
        $cartItems = $cartModel->getCartByCustomer($id_customer);
        $customer = $customerModel->find($id_customer);

        if (empty($cartItems)) {
            return redirect()->to('/user/cart')->with('error', 'Keranjang belanja Anda kosong.');
        }

        $subtotal = 0;
        foreach ($cartItems as $item) {
            $subtotal += $item['harga'] * $item['jumlah'];
        }

        $data = [
            'menu' => 'cart',
            'cartItems' => $cartItems,
            'customer' => $customer,
            'subtotal' => $subtotal
        ];

        return view('pages/customer/view_checkout', $data);
    }

    public function process()
    {
        log_message('debug', 'Checkout::process started');
        $cartModel = new \App\Models\CartModel();
        $pesananModel = new \App\Models\PesananModel();
        $detailPesananModel = new \App\Models\DetailPesananModel();
        $dokuLibrary = new \App\Libraries\DokuLibrary();

        $id_customer = session()->get('user_id');
        $cartItems = $cartModel->getCartByCustomer($id_customer);

        if (empty($cartItems)) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Keranjang kosong']);
        }

        $subtotal = 0;
        foreach ($cartItems as $item) {
            $subtotal += $item['harga'] * $item['jumlah'];
        }

        $shipping_cost = (int)$this->request->getPost('shipping_cost');
        $total = $subtotal + $shipping_cost;
        $kode_pesanan = 'WHF' . date('YmdHis') . rand(100, 999);

        $orderData = [
            'kode_pesanan' => $kode_pesanan,
            'id_customer' => $id_customer,
            'nama_penerima' => $this->request->getPost('nama_lengkap'),
            'no_hp_penerima' => $this->request->getPost('no_hp'),
            'provinsi' => $this->request->getPost('provinsi'),
            'kota' => $this->request->getPost('kota'),
            'kecamatan' => $this->request->getPost('kecamatan'),
            'kelurahan' => $this->request->getPost('kelurahan'),
            'kode_pos' => $this->request->getPost('kode_pos'),
            'alamat_lengkap' => $this->request->getPost('alamat_lengkap'),
            'detail_alamat' => $this->request->getPost('detail_alamat'),
            'subtotal' => $subtotal,
            'ongkir' => $shipping_cost,
            'total' => $total,
            'status_pesanan' => 'menunggu_pembayaran',
        ];

        $pesananModel->insert($orderData);
        $id_pesanan = $pesananModel->getInsertID();

        foreach ($cartItems as $item) {
            $detailPesananModel->insert([
                'id_pesanan' => $id_pesanan,
                'id_produk' => $item['id_produk'],
                'nama_produk' => $item['nama_produk'],
                'harga' => $item['harga'],
                'jumlah' => $item['jumlah'],
                'subtotal' => $item['harga'] * $item['jumlah'],
            ]);
        }

        // Prepare DOKU Request
        $lineItems = [];
        foreach ($cartItems as $item) {
            $lineItems[] = [
                'name' => $item['nama_produk'],
                'price' => (int)$item['harga'],
                'quantity' => (int)$item['jumlah']
            ];
        }

        // Add Shipping as a line item if > 0
        if ($shipping_cost > 0) {
            $lineItems[] = [
                'name' => 'Ongkos Kirim',
                'price' => $shipping_cost,
                'quantity' => 1
            ];
        }

        $dokuRequest = [
            'order' => [
                'amount' => (int)$total,
                'invoice_number' => $kode_pesanan,
                'currency' => 'IDR',
                'callback_url' => base_url('user/cart'),
                'line_items' => $lineItems
            ],
            'customer' => [
                'name' => $orderData['nama_penerima'],
                'email' => session()->get('email'),
                'phone' => $orderData['no_hp_penerima'],
                'address' => $orderData['alamat_lengkap'],
                'country' => 'ID'
            ],
            'shipping_address' => [
                'first_name' => $orderData['nama_penerima'],
                'address' => $orderData['alamat_lengkap'],
                'city' => $orderData['kota'],
                'postal_code' => $orderData['kode_pos'],
                'phone' => $orderData['no_hp_penerima'],
                'country' => 'ID'
            ],
            'payment' => [
                'payment_due_date' => 60 // 60 minutes
            ]
        ];

        $response = $dokuLibrary->initiatePayment($dokuRequest);

        // Tambahkan log untuk debugging
        log_message('debug', 'DOKU Response: ' . json_encode($response));

        // ✅ Cek struktur yang benar
        if (isset($response['response']['payment']['url'])) {
            // Clear cart
            $cartModel->where('id_customer', $id_customer)->delete();

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
