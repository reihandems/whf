<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\SupplierModel;

class Supplier extends BaseController
{
    protected $supplierModel;

    public function __construct()
    {
        $this->supplierModel = new SupplierModel();
    }

    public function index()
    {
        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            $this->supplierModel->like('nama_supplier', $keyword)
                ->orLike('username', $keyword)
                ->orLike('email', $keyword);
        }

        $data = [
            'menu' => 'supplier',
            'title' => 'Data Supplier',
            'supplier' => $this->supplierModel->paginate(10, 'supplier'),
            'pager' => $this->supplierModel->pager,
            'keyword' => $keyword
        ];

        return view('pages/admin/view_data_supplier', $data);
    }

    public function store()
    {
        $rules = [
            'username' => 'required|is_unique[trainers.username]|is_unique[customers.username]|is_unique[admins.username]|is_unique[suppliers.username]',
            'email'    => 'required|valid_email|is_unique[trainers.email]|is_unique[customers.email]|is_unique[admins.email]|is_unique[suppliers.email]',
            'password' => 'required|min_length[6]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('error', $this->validator->listErrors());
        }

        $foto = $this->request->getFile('foto_profil');
        $namaFoto = null;

        if ($foto && $foto->isValid() && !$foto->hasMoved()) {
            $namaFoto = $foto->getRandomName();
            $foto->move('assets/img/supplier', $namaFoto);
        }

        $this->supplierModel->save([
            'nama_supplier' => $this->request->getPost('nama_supplier'),
            'username'      => $this->request->getPost('username'),
            'email'         => $this->request->getPost('email'),
            'password'      => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'no_hp'         => $this->request->getPost('no_hp'),
            'alamat'        => $this->request->getPost('alamat'),
            'foto_profil'   => $namaFoto
        ]);

        return redirect()->to(base_url('/admin/data-supplier'))->with('success', 'Supplier berhasil ditambahkan.');
    }

    public function update()
    {
        $id = $this->request->getPost('id_supplier');
        $supplierLama = $this->supplierModel->find($id);

        $rules = [
            'username' => "required|is_unique[suppliers.username,id_supplier,{$id}]|is_unique[customers.username]|is_unique[admins.username]|is_unique[trainers.username]",
            'email'    => "required|valid_email|is_unique[suppliers.email,id_supplier,{$id}]|is_unique[customers.email]|is_unique[admins.email]|is_unique[trainers.email]"
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('error', $this->validator->listErrors());
        }

        $foto = $this->request->getFile('foto_profil');
        $namaFoto = $supplierLama['foto_profil'];

        if ($foto && $foto->isValid() && !$foto->hasMoved()) {
            $namaFoto = $foto->getRandomName();
            $foto->move('assets/img/supplier', $namaFoto);

            if ($supplierLama['foto_profil']) {
                $oldPath = 'assets/img/supplier/' . $supplierLama['foto_profil'];
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
            }
        }

        $data = [
            'nama_supplier' => $this->request->getPost('nama_supplier'),
            'username'      => $this->request->getPost('username'),
            'email'         => $this->request->getPost('email'),
            'no_hp'         => $this->request->getPost('no_hp'),
            'alamat'        => $this->request->getPost('alamat'),
            'foto_profil'   => $namaFoto
        ];

        if ($this->request->getPost('password')) {
            $data['password'] = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);
        }

        $this->supplierModel->update($id, $data);

        return redirect()->to(base_url('/admin/data-supplier'))->with('success', 'Data supplier berhasil diperbarui.');
    }

    public function delete($id)
    {
        $supplier = $this->supplierModel->find($id);
        if ($supplier['foto_profil']) {
            $path = 'assets/img/supplier/' . $supplier['foto_profil'];
            if (file_exists($path)) {
                unlink($path);
            }
        }

        $this->supplierModel->delete($id);
        return redirect()->to(base_url('/admin/data-supplier'))->with('success', 'Data supplier berhasil dihapus.');
    }
}
