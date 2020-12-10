<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'product';
    protected $allowedFields = ['brand', 'type'];

    public function search($keyword)
    {
        return $this->table('product')->like('brand', $keyword)->orLike('type', $keyword);
    }
}
