<?php

namespace App\Controllers;

use App\Models\Usermodel;

class Home extends BaseController
{
    public function index()
    {
        $model = new Usermodel();
        $data['users'] = $model->getAll(); //memperbaiki tulisan GetAll
        return view('user', $data); //menambahkan titik koma
    }

    public function tambah()
    {
        if ($this->request->getMethod() === 'post') {
            $userModel = new Usermodel(); //memperbaiki tulisan UserModel

            $userModel->insert([
                'name'       => $this->request->getPost('nama'),
                'email'      => $this->request->getPost('email'), //memperbaiki dan menyamakan menggunakan getPost
                'created_at' => date('Y-m-d'),
            ]);

            return redirect()->to('/');
        }

        return view('form'); // pakai return daripada echo
    }
}
