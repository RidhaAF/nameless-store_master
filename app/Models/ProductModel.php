<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'product';
    protected $allowedFields = ['brand', 'type', 'slug', 'price', 'os', 'storage', 'cpu', 'ram', 'image'];

    public function search($keyword)
    {
        return $this->table('product')->like('brand', $keyword)->orLike('type', $keyword);
    }

    public function getProduct($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
