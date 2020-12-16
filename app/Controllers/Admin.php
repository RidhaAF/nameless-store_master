<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Admin extends BaseController
{
    protected $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function index()
    {

        $currentPage = $this->request->getVar('page_product') ? $this->request->getVar('page_product') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $product = $this->productModel->search($keyword);
        } else {
            $product = $this->productModel;
        }

        $data = [
            // 'product' => $this->productModel->findAll(),
            'product' => $product->paginate(10, 'product'),
            'pager' => $this->productModel->pager,
            'currentPage' => $currentPage
        ];

        // cara connect db dengan model
        return view('admin/product/product', $data);
    }
    public function addProduct()
    {
        return view('admin/product/addProduct');
    }
    public function saveProduct()
    {
        $slug = url_title($this->request->getVar('type'), '-', true);
        $this->productModel->save([
            'brand' => $this->request->getVar('brand'),
            'type' => $this->request->getVar('type'),
            'slug' => $slug,
            'price' => $this->request->getVar('price'),
            'os' => $this->request->getVar('os'),
            'storage' => $this->request->getVar('storage'),
            'cpu' => $this->request->getVar('cpu'),
            'ram' => $this->request->getVar('ram'),
            'image' => $this->request->getVar('image')
        ]);

        return redirect()->to('/admin');
    }

    public function users()
    {

        $data = [
            'product' => $this->productModel->findAll(),
        ];

        // cara connect db dengan model
        return view('admin/users/users', $data);
    }
}
