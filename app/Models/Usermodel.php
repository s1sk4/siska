<?php

namespace App\Models;

use CodeIgniter\Model; //mengubah ke huruf besar menjadi CodeIgniter

class Usermodel extends Model
{
    protected $table = 'user'; //nama tabel menggunakan user
    protected $allowedFields = ['name', 'email', 'created_at'];
    public function getAll()    //menambahkan method GetAll karena dipanggil di controller Home::index()
    {
        return $this->findAll();
    }
}
