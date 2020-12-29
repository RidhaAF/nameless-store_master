<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\TransactionModel;
use Wildanfuady\WFcart\WFcart;

class Transaction extends BaseController
{
    protected $productModel;
    protected $transactionModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
        $this->transactionModel = new TransactionModel();
        // membuat variabel untuk menampung class WFcart
        $this->cart = new WFcart();
    }

    public function index()
    {
        // $data = [
        //     'product' => $this->productModel->getProduct($slug)
        // ];

        $data = [
            'items' => $this->cart->totals(),
            'total' => $this->cart->count_totals()
        ];

        // cara connect db dengan model
        return view('transaction/index', $data);
    }

    public function saveTransaction($id)
    {
        $this->productModel->join('transaction', 'transaction.id_product=product.id');
        $this->transactionModel->save([
            'id_transaction' => $this->request->getVar('id_transaction'),
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'alamat' => $this->request->getVar('alamat'),
            'kota_tujuan' => $this->request->getVar('kota_tujuan'),
            'kurir' => $this->request->getVar('kurir'),
            'pembayaran' => $this->request->getVar('pembayaran'),
            'id_product' => $id
        ]);

        session()->setFlashdata('pesan', 'Transaksi berhasil.');

        return redirect()->to('/product');
    }
}
