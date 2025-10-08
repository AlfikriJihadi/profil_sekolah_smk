<?php

namespace App\Models;

use CodeIgniter\Model;

class GambarModel extends Model
{
    protected $table = 'images';
    protected $primaryKey = 'id';
    protected $allowedFields = ['filename', 'path', 'created_at', 'updated_at'];

    public function getImages()
    {
        return $this->findAll();
    }
}
