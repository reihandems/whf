<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;

use App\Models\CartModel;

class Cart extends BaseController
{
    public function index()
    {
        $cartModel = new CartModel();
        $id_customer = session()->get('user_id');
        $cartItems = $cartModel->getCartByCustomer($id_customer);

        $subtotal = 0;
        foreach ($cartItems as $item) {
            $subtotal += $item['harga'] * $item['jumlah'];
        }

        $data = [
            'menu' => 'cart',
            'cartItems' => $cartItems,
            'subtotal' => $subtotal,
            'shipping' => 10000 // Placeholder shipping fee
        ];

        return view('pages/customer/view_cart.php', $data);
    }

    public function add()
    {
        $cartModel = new CartModel();
        $id_produk = $this->request->getPost('id_produk');
        $qty = (int)$this->request->getPost('qty') ?: 1;
        $id_customer = session()->get('user_id');

        // Check if item already in cart
        $exist = $cartModel->where([
            'id_customer' => $id_customer,
            'id_produk' => $id_produk
        ])->first();

        if ($exist) {
            $cartModel->update($exist['id_cart'], [
                'jumlah' => $exist['jumlah'] + $qty
            ]);
        } else {
            $cartModel->insert([
                'id_customer' => $id_customer,
                'id_produk' => $id_produk,
                'jumlah' => $qty
            ]);
        }

        return redirect()->to('/user/cart')->with('success', 'Berhasil menambah ke keranjang');
    }

    public function update()
    {
        $cartModel = new CartModel();
        $id_cart = $this->request->getPost('id_cart');
        $qty = (int)$this->request->getPost('qty');

        if ($qty <= 0) {
            $cartModel->delete($id_cart);
        } else {
            $cartModel->update($id_cart, ['jumlah' => $qty]);
        }

        return $this->response->setJSON(['status' => 'success']);
    }

    public function delete($id)
    {
        $cartModel = new CartModel();
        $cartModel->delete($id);

        return redirect()->to('/user/cart')->with('success', 'Produk dihapus dari keranjang');
    }
}
