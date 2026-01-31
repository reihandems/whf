<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\BrandModel;

class Brand extends BaseController
{
    protected $brandModel;

    public function __construct()
    {
        $this->brandModel = new BrandModel();
    }

    public function index()
    {
        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            $this->brandModel->like('nama_brand', $keyword);
        }

        $data = [
            'menu' => 'brand',
            'title' => 'Data Brand',
            'brand' => $this->brandModel->paginate(10, 'brand'),
            'pager' => $this->brandModel->pager,
            'keyword' => $keyword
        ];

        return view('pages/admin/view_data_brand', $data);
    }

    public function store()
    {
        $rules = [
            'nama_brand' => 'required|is_unique[brands.nama_brand]'
        ];

        $messages = [
            'nama_brand' => [
                'is_unique' => 'Nama Brand "{value}" sudah ada, silakan gunakan nama lain.'
            ]
        ];

        if (!$this->validate($rules, $messages)) {
            return redirect()->back()->withInput()->with('error', $this->validator->getError('nama_brand'));
        }

        $logo = $this->request->getFile('logo');
        $namaLogo = null;

        if ($logo && $logo->isValid() && !$logo->hasMoved()) {
            $namaLogo = $logo->getRandomName();
            $logo->move('assets/img/brand', $namaLogo);
        }

        $this->brandModel->save([
            'nama_brand' => $this->request->getPost('nama_brand'),
            'deskripsi'  => $this->request->getPost('deskripsi'),
            'logo'       => $namaLogo
        ]);

        return redirect()->to(base_url('/admin/data-brand'))->with('success', 'Brand berhasil ditambahkan.');
    }

    public function update()
    {
        $id = $this->request->getPost('id_brand');

        $rules = [
            'nama_brand' => "required|is_unique[brands.nama_brand,id_brand,{$id}]"
        ];

        $messages = [
            'nama_brand' => [
                'is_unique' => 'Nama Brand "{value}" sudah digunakan oleh brand lain.'
            ]
        ];

        if (!$this->validate($rules, $messages)) {
            return redirect()->back()->withInput()->with('error', $this->validator->getError('nama_brand'));
        }

        $brandLama = $this->brandModel->find($id);

        $logo = $this->request->getFile('logo');
        $namaLogo = $brandLama['logo'];

        if ($logo && $logo->isValid() && !$logo->hasMoved()) {
            $namaLogo = $logo->getRandomName();
            $logo->move('assets/img/brand', $namaLogo);

            if ($brandLama['logo']) {
                $oldPath = 'assets/img/brand/' . $brandLama['logo'];
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
            }
        }

        $this->brandModel->update($id, [
            'nama_brand' => $this->request->getPost('nama_brand'),
            'deskripsi'  => $this->request->getPost('deskripsi'),
            'logo'       => $namaLogo
        ]);

        return redirect()->to(base_url('/admin/data-brand'))->with('success', 'Brand berhasil diperbarui.');
    }

    public function delete($id)
    {
        $brand = $this->brandModel->find($id);
        if ($brand['logo']) {
            $path = 'assets/img/brand/' . $brand['logo'];
            if (file_exists($path)) {
                unlink($path);
            }
        }

        $this->brandModel->delete($id);
        return redirect()->to(base_url('/admin/data-brand'))->with('success', 'Brand berhasil dihapus.');
    }
}
