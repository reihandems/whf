<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\TrainerModel;

class Trainer extends BaseController
{
    protected $trainerModel;

    public function __construct()
    {
        $this->trainerModel = new TrainerModel();
    }

    public function index()
    {
        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            $this->trainerModel->like('nama_trainer', $keyword)
                ->orLike('username', $keyword)
                ->orLike('email', $keyword)
                ->orLike('kategori', $keyword);
        }

        $data = [
            'menu' => 'trainer',
            'title' => 'Data Trainer',
            'trainer' => $this->trainerModel->paginate(10, 'trainer'),
            'pager' => $this->trainerModel->pager,
            'keyword' => $keyword
        ];

        return view('pages/admin/view_data_trainer', $data);
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
            $foto->move('assets/img/trainer', $namaFoto);
        }

        $this->trainerModel->save([
            'nama_trainer'      => $this->request->getPost('nama_trainer'),
            'username'          => $this->request->getPost('username'),
            'email'             => $this->request->getPost('email'),
            'password'          => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'no_hp'             => $this->request->getPost('no_hp'),
            'jenis_kelamin'     => $this->request->getPost('jenis_kelamin'),
            'kategori'          => $this->request->getPost('kategori'),
            'harga_per_sesi'    => $this->request->getPost('harga_per_sesi'),
            'pengalaman_tahun'  => $this->request->getPost('pengalaman_tahun'),
            'lokasi'            => $this->request->getPost('lokasi'),
            'deskripsi'         => $this->request->getPost('deskripsi'),
            'foto_profil'       => $namaFoto
        ]);

        return redirect()->to(base_url('/admin/data-trainer'))->with('success', 'Trainer berhasil ditambahkan.');
    }

    public function update()
    {
        $id = $this->request->getPost('id_trainer');
        $trainerLama = $this->trainerModel->find($id);

        $rules = [
            'username' => "required|is_unique[trainers.username,id_trainer,{$id}]|is_unique[customers.username]|is_unique[admins.username]|is_unique[suppliers.username]",
            'email'    => "required|valid_email|is_unique[trainers.email,id_trainer,{$id}]|is_unique[customers.email]|is_unique[admins.email]|is_unique[suppliers.email]"
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('error', $this->validator->listErrors());
        }

        $foto = $this->request->getFile('foto_profil');
        $namaFoto = $trainerLama['foto_profil'];

        if ($foto && $foto->isValid() && !$foto->hasMoved()) {
            $namaFoto = $foto->getRandomName();
            $foto->move('assets/img/trainer', $namaFoto);

            if ($trainerLama['foto_profil']) {
                $oldPath = 'assets/img/trainer/' . $trainerLama['foto_profil'];
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
            }
        }

        $data = [
            'nama_trainer'      => $this->request->getPost('nama_trainer'),
            'username'          => $this->request->getPost('username'),
            'email'             => $this->request->getPost('email'),
            'no_hp'             => $this->request->getPost('no_hp'),
            'jenis_kelamin'     => $this->request->getPost('jenis_kelamin'),
            'kategori'          => $this->request->getPost('kategori'),
            'harga_per_sesi'    => $this->request->getPost('harga_per_sesi'),
            'pengalaman_tahun'  => $this->request->getPost('pengalaman_tahun'),
            'lokasi'            => $this->request->getPost('lokasi'),
            'deskripsi'         => $this->request->getPost('deskripsi'),
            'foto_profil'       => $namaFoto
        ];

        if ($this->request->getPost('password')) {
            $data['password'] = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);
        }

        $this->trainerModel->update($id, $data);

        return redirect()->to(base_url('/admin/data-trainer'))->with('success', 'Data trainer berhasil diperbarui.');
    }

    public function delete($id)
    {
        $trainer = $this->trainerModel->find($id);
        if ($trainer['foto_profil']) {
            $path = 'assets/img/trainer/' . $trainer['foto_profil'];
            if (file_exists($path)) {
                unlink($path);
            }
        }

        $this->trainerModel->delete($id);
        return redirect()->to(base_url('/admin/data-trainer'))->with('success', 'Data trainer berhasil dihapus.');
    }
}
