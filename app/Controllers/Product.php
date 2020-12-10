<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Product extends BaseController
{
    protected $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function index()
    {
        // $keyword = $this->request->getVar('keyword');
        // if ($keyword) {
        //     $product = $this->productModel->search($keyword);
        // } else {
        //     $product = $this->productModel;
        // }

        $data = [
            'product' => $this->ProductModel->findAll()
            // 'product' => $product->paginate(10, 'product')
        ];

        // cara connect db dengan model
        return view('product/index', $data);
    }
}
