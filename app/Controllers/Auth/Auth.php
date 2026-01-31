<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\CustomerModel;
use App\Models\SupplierModel;
use App\Models\TrainerModel;

class Auth extends BaseController
{
    public function login()
    {
        if (session()->get('logged_in')) {
            return $this->redirectBasedOnRole(session()->get('role'));
        }
        return view('auth/view_login');
    }

    public function loginProcess()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Order of checking: Admin -> Customer -> Supplier -> Trainer

        // 1. Check Admin
        $adminModel = new AdminModel();
        $admin = $adminModel->where('username', $username)->orWhere('email', $username)->first();
        if ($admin && password_verify($password, $admin['password'])) {
            $this->setSession($admin, 'admin');
            return redirect()->to(base_url('/admin/dashboard'))->with('success', 'Selamat datang Admin!');
        }

        // 2. Check Customer
        $customerModel = new CustomerModel();
        $customer = $customerModel->where('username', $username)->orWhere('email', $username)->first();
        if ($customer && password_verify($password, $customer['password'])) {
            $this->setSession($customer, 'customer');
            return redirect()->to(base_url('/user/home'))->with('success', 'Selamat datang!');
        }

        // 3. Check Supplier
        $supplierModel = new SupplierModel();
        $supplier = $supplierModel->where('username', $username)->orWhere('email', $username)->first();
        if ($supplier && password_verify($password, $supplier['password'])) {
            $this->setSession($supplier, 'supplier');
            return redirect()->to(base_url('/supplier/dashboard'))->with('success', 'Selamat datang Supplier!');
        }

        // 4. Check Trainer
        $trainerModel = new TrainerModel();
        $trainer = $trainerModel->where('username', $username)->orWhere('email', $username)->first();
        if ($trainer && password_verify($password, $trainer['password'])) {
            $this->setSession($trainer, 'trainer');
            return redirect()->to(base_url('/trainer/dashboard'))->with('success', 'Selamat datang Trainer!');
        }

        return redirect()->back()->withInput()->with('error', 'Username atau Password salah!');
    }

    private function setSession($user, $role)
    {
        $id_field = 'id_' . $role;
        $sessionData = [
            'user_id'   => $user[$id_field],
            'username'  => $user['username'],
            'email'     => $user['email'],
            'nama'      => $user['nama_lengkap'] ?? $user['nama_supplier'] ?? $user['nama_trainer'],
            'role'      => $role,
            'logged_in' => true,
        ];
        session()->set($sessionData);
    }

    private function redirectBasedOnRole($role)
    {
        switch ($role) {
            case 'admin':
                return redirect()->to(base_url('/admin/dashboard'));
            case 'supplier':
                return redirect()->to(base_url('/supplier/dashboard'));
            case 'trainer':
                return redirect()->to(base_url('/trainer/dashboard'));
            case 'customer':
                return redirect()->to(base_url('/user/home'));
            default:
                return redirect()->to(base_url('/'));
        }
    }

    public function register()
    {
        if (session()->get('logged_in')) {
            return $this->redirectBasedOnRole(session()->get('role'));
        }
        return view('auth/view_register');
    }

    public function registerProcess()
    {
        $rules = [
            'nama_lengkap'       => 'required|min_length[3]|max_length[100]',
            'username'           => 'required|alpha_numeric|min_length[3]|max_length[50]|is_unique[customers.username]|is_unique[admins.username]|is_unique[suppliers.username]|is_unique[trainers.username]',
            'email'              => 'required|valid_email|is_unique[customers.email]|is_unique[admins.email]|is_unique[suppliers.email]|is_unique[trainers.email]',
            'password'           => 'required|min_length[6]',
            'konfirmasi_password' => 'required|matches[password]',
            'terms'              => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator->getErrors());
        }

        $customerModel = new CustomerModel();
        $data = [
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'username'     => $this->request->getPost('username'),
            'email'        => $this->request->getPost('email'),
            'password'     => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ];

        if ($customerModel->insert($data)) {
            return redirect()->to(base_url('/login'))->with('success', 'Registrasi berhasil! Silakan login.');
        } else {
            return redirect()->back()->withInput()->with('error', 'Gagal mendaftar. Silakan coba lagi.');
        }
    }

    public function logout()
    {
        $role = session()->get('role');
        session()->destroy();

        if ($role === 'customer') {
            return redirect()->to(base_url('/'))->with('success', 'Anda telah logout.');
        }

        return redirect()->to(base_url('/login'))->with('success', 'Anda telah logout.');
    }
}
