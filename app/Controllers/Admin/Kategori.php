<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\KategoriModel;

class Kategori extends BaseController
{
    protected $kategoriModel;

    public function __construct()
    {
        $this->kategoriModel = new KategoriModel();
    }

    public function index()
    {
        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            $this->kategoriModel->like('nama_kategori', $keyword)
                ->orLike('sub_kategori', $keyword);
        }

        $data = [
            'menu' => 'kategori',
            'title' => 'Data Kategori',
            'kategori' => $this->kategoriModel->paginate(10, 'kategori'),
            'pager' => $this->kategoriModel->pager,
            'keyword' => $keyword
        ];

        return view('pages/admin/view_data_kategori', $data);
    }

    public function store()
    {
        $this->kategoriModel->save([
            'nama_kategori' => $this->request->getPost('nama_kategori'),
            'sub_kategori'  => $this->request->getPost('sub_kategori'),
            'deskripsi'     => $this->request->getPost('deskripsi')
        ]);

        return redirect()->to(base_url('/admin/data-kategori'))->with('success', 'Kategori berhasil ditambahkan.');
    }

    public function update()
    {
        $id = $this->request->getPost('id_kategori');
        $this->kategoriModel->update($id, [
            'nama_kategori' => $this->request->getPost('nama_kategori'),
            'sub_kategori'  => $this->request->getPost('sub_kategori'),
            'deskripsi'     => $this->request->getPost('deskripsi')
        ]);

        return redirect()->to(base_url('/admin/data-kategori'))->with('success', 'Kategori berhasil diperbarui.');
    }

    public function delete($id)
    {
        $this->kategoriModel->delete($id);
        return redirect()->to(base_url('/admin/data-kategori'))->with('success', 'Kategori berhasil dihapus.');
    }
}
