<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Models\ProdukModel;

class Search extends BaseController
{
    public function index()
    {
        $keyword = $this->request->getGet('q');
        
        if (empty($keyword) || strlen($keyword) < 2) {
            return $this->response->setJSON([]);
        }

        $produkModel = new ProdukModel();
        // Limit autocomplete results to 5
        $results = $produkModel->searchProducts($keyword, 5);

        return $this->response->setJSON($results);
    }
}
