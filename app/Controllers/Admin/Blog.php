<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\BlogModel;

class Blog extends BaseController
{
    protected $blogModel;

    public function __construct()
    {
        $this->blogModel = new BlogModel();
        helper(['url', 'text']);
    }

    public function index()
    {
        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            $this->blogModel->like('judul', $keyword)
                ->orLike('author', $keyword);
        }

        $data = [
            'menu' => 'blog',
            'title' => 'Data Blog',
            'blog' => $this->blogModel->orderBy('created_at', 'DESC')->paginate(10, 'blog'),
            'pager' => $this->blogModel->pager,
            'keyword' => $keyword
        ];

        return view('pages/admin/view_data_blog', $data);
    }

    public function store()
    {
        $foto = $this->request->getFile('foto_cover');
        $namaFoto = null;

        if ($foto && $foto->isValid() && !$foto->hasMoved()) {
            $namaFoto = $foto->getRandomName();
            $foto->move('assets/img/blog', $namaFoto);
        }

        $judul = $this->request->getPost('judul');
        $slug = url_title($judul, '-', true);

        $this->blogModel->save([
            'judul'           => $judul,
            'slug'            => $slug,
            'konten'          => $this->request->getPost('konten'),
            'author'          => session()->get('nama_lengkap') ?? 'Admin',
            'foto_cover'      => $namaFoto,
            'is_published'    => $this->request->getPost('is_published') ?? 1,
            'tanggal_publish' => date('Y-m-d'),
        ]);

        return redirect()->to(base_url('/admin/data-blog'))->with('success', 'Artikel berhasil diterbitkan.');
    }

    public function update()
    {
        $id = $this->request->getPost('id_blog');
        $blogLama = $this->blogModel->find($id);

        $foto = $this->request->getFile('foto_cover');
        $namaFoto = $blogLama['foto_cover'];

        if ($foto && $foto->isValid() && !$foto->hasMoved()) {
            $namaFoto = $foto->getRandomName();
            $foto->move('assets/img/blog', $namaFoto);

            if ($blogLama['foto_cover']) {
                $oldPath = 'assets/img/blog/' . $blogLama['foto_cover'];
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
            }
        }

        $judul = $this->request->getPost('judul');
        $slug = url_title($judul, '-', true);

        $this->blogModel->update($id, [
            'judul'        => $judul,
            'slug'         => $slug,
            'konten'       => $this->request->getPost('konten'),
            'foto_cover'   => $namaFoto,
            'is_published' => $this->request->getPost('is_published') ?? 1
        ]);

        return redirect()->to(base_url('/admin/data-blog'))->with('success', 'Artikel berhasil diperbarui.');
    }

    public function delete($id)
    {
        $blog = $this->blogModel->find($id);
        if ($blog['foto_cover']) {
            $path = 'assets/img/blog/' . $blog['foto_cover'];
            if (file_exists($path)) {
                unlink($path);
            }
        }

        $this->blogModel->delete($id);
        return redirect()->to(base_url('/admin/data-blog'))->with('success', 'Artikel berhasil dihapus.');
    }
}
