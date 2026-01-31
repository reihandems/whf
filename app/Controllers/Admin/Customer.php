<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\CustomerModel;

class Customer extends BaseController
{
    protected $customerModel;

    public function __construct()
    {
        $this->customerModel = new CustomerModel();
    }

    public function index()
    {
        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            $this->customerModel->like('nama_lengkap', $keyword)
                ->orLike('username', $keyword)
                ->orLike('email', $keyword);
        }

        $data = [
            'menu' => 'customer',
            'title' => 'Data Customer',
            'customer' => $this->customerModel->paginate(10, 'customer'),
            'pager' => $this->customerModel->pager,
            'keyword' => $keyword
        ];

        return view('pages/admin/view_data_customer', $data);
    }

    public function delete($id)
    {
        $this->customerModel->delete($id);
        return redirect()->to(base_url('/admin/data-customer'))->with('success', 'Data customer berhasil dihapus.');
    }
}
