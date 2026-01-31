<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ProdukModel;
use App\Models\KategoriModel;
use App\Models\BrandModel;
use App\Models\SupplierModel;

class Produk extends BaseController
{
    protected $produkModel;
    protected $kategoriModel;
    protected $brandModel;
    protected $supplierModel;

    public function __construct()
    {
        $this->produkModel = new ProdukModel();
        $this->kategoriModel = new KategoriModel();
        $this->brandModel = new BrandModel();
        $this->supplierModel = new SupplierModel();
    }

    public function index()
    {
        $keyword = $this->request->getVar('keyword');

        $produk = $this->produkModel
            ->select('produk.*, kategori_produk.nama_kategori, kategori_produk.sub_kategori, brands.nama_brand, suppliers.nama_supplier')
            ->join('kategori_produk', 'kategori_produk.id_kategori = produk.id_kategori')
            ->join('brands', 'brands.id_brand = produk.id_brand')
            ->join('suppliers', 'suppliers.id_supplier = produk.id_supplier', 'left');

        if ($keyword) {
            $produk->groupStart()
                ->like('nama_produk', $keyword)
                ->orLike('kategori_produk.nama_kategori', $keyword)
                ->orLike('kategori_produk.sub_kategori', $keyword)
                ->orLike('brands.nama_brand', $keyword)
                ->groupEnd();
        }

        $data = [
            'menu' => 'produk',
            'title' => 'Data Produk',
            'produk' => $produk->paginate(10, 'produk'),
            'pager' => $this->produkModel->pager,
            'kategori' => $this->kategoriModel->findAll(),
            'brand' => $this->brandModel->findAll(),
            'supplier' => $this->supplierModel->findAll(),
            'keyword' => $keyword
        ];

        return view('pages/admin/view_data_produk', $data);
    }

    public function store()
    {
        $foto = $this->request->getFile('foto_produk');
        $namaFoto = null;

        if ($foto && $foto->isValid() && !$foto->hasMoved()) {
            $namaFoto = $foto->getRandomName();
            $foto->move('assets/img/produk', $namaFoto);
        }

        $this->produkModel->save([
            'id_kategori'   => $this->request->getPost('id_kategori'),
            'id_brand'      => $this->request->getPost('id_brand'),
            'id_supplier'   => $this->request->getPost('id_supplier'),
            'nama_produk'   => $this->request->getPost('nama_produk'),
            'deskripsi'     => $this->request->getPost('deskripsi'),
            'harga'         => $this->request->getPost('harga'),
            'stok'          => $this->request->getPost('stok'),
            'berat'         => $this->request->getPost('berat'),
            'ukuran'        => $this->request->getPost('ukuran'),
            'flavour'       => $this->request->getPost('flavour'),
            'foto_produk'   => $namaFoto,
            'is_active'     => 1
        ]);

        return redirect()->to(base_url('/admin/data-produk'))->with('success', 'Produk berhasil ditambahkan.');
    }

    public function update()
    {
        $id = $this->request->getPost('id_produk');
        $produkLama = $this->produkModel->find($id);

        $foto = $this->request->getFile('foto_produk');
        $namaFoto = $produkLama['foto_produk'];

        if ($foto && $foto->isValid() && !$foto->hasMoved()) {
            $namaFoto = $foto->getRandomName();
            $foto->move('assets/img/produk', $namaFoto);

            // Hapus foto lama jika ada
            if ($produkLama['foto_produk']) {
                $oldPath = 'assets/img/produk/' . $produkLama['foto_produk'];
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
            }
        }

        $this->produkModel->update($id, [
            'id_kategori'   => $this->request->getPost('id_kategori'),
            'id_brand'      => $this->request->getPost('id_brand'),
            'id_supplier'   => $this->request->getPost('id_supplier'),
            'nama_produk'   => $this->request->getPost('nama_produk'),
            'deskripsi'     => $this->request->getPost('deskripsi'),
            'harga'         => $this->request->getPost('harga'),
            'stok'          => $this->request->getPost('stok'),
            'berat'         => $this->request->getPost('berat'),
            'ukuran'        => $this->request->getPost('ukuran'),
            'flavour'       => $this->request->getPost('flavour'),
            'foto_produk'   => $namaFoto,
            'is_active'     => $this->request->getPost('is_active') ?? 1
        ]);

        return redirect()->to(base_url('/admin/data-produk'))->with('success', 'Produk berhasil diperbarui.');
    }

    public function delete($id)
    {
        $produk = $this->produkModel->find($id);

        if ($produk['foto_produk']) {
            $path = 'assets/img/produk/' . $produk['foto_produk'];
            if (file_exists($path)) {
                unlink($path);
            }
        }

        $this->produkModel->delete($id);
        return redirect()->to(base_url('/admin/data-produk'))->with('success', 'Produk berhasil dihapus.');
    }
}
