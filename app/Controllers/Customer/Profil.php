<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;

class Profil extends BaseController
{
    public function index()
    {
        $id_customer = session()->get('user_id');
        $customerModel = new \App\Models\CustomerModel();

        $user = $customerModel->find($id_customer);

        $data = [
            'menu' => 'profil',
            'user' => $user
        ];

        return view('pages/customer/view_profil.php', $data);
    }

    public function update()
    {
        $id_customer = session()->get('user_id');
        $customerModel = new \App\Models\CustomerModel();

        $data = [
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'username'     => $this->request->getPost('username'),
            'email'        => $this->request->getPost('email'),
            'no_hp'        => $this->request->getPost('no_hp'),
            'provinsi'     => $this->request->getPost('provinsi'),
            'kota'         => $this->request->getPost('kota'),
            'kecamatan'    => $this->request->getPost('kecamatan'),
            'kelurahan'    => $this->request->getPost('kelurahan'),
            'kode_pos'     => $this->request->getPost('kode_pos'),
            'alamat_lengkap' => $this->request->getPost('alamat_lengkap'),
            'detail_alamat'  => $this->request->getPost('detail_alamat'),
        ];

        $file = $this->request->getFile('foto_profil');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $userLama = $customerModel->find($id_customer);
            $newName = $file->getRandomName();
            $file->move('assets/img/customer', $newName);
            $data['foto_profil'] = $newName;

            // Delete old photo
            if ($userLama['foto_profil'] && file_exists('assets/img/customer/' . $userLama['foto_profil'])) {
                unlink('assets/img/customer/' . $userLama['foto_profil']);
            }

            // Update session photo
            session()->set('foto', $newName);
        }

        $customerModel->update($id_customer, $data);

        // Update session name if changed
        session()->set('nama', $data['nama_lengkap']);

        return redirect()->back()->with('success', 'Profil berhasil diperbarui.');
    }
}
