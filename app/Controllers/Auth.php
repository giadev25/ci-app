<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function index()
    {
        return redirect()->to('/auth/login');
    }
    public function registration()
    {
        return view('auth/registration', [
            'title' => 'Registration'
        ]);
    }

    public function regis_process()
    {
        $userModel = new \App\Models\UserModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $password2 = $this->request->getPost('password2');
        if ($password == $password2) {
            $password = password_hash($password, PASSWORD_DEFAULT);
            $data = [
                'email' => $email,
                'password' => $password,
                'status' => 1,
                'image' => "https://avatars.dicebear.com/api/initials/" . explode('@', $email)[1] . ".svg"
            ];
            $userModel->insert($data);
        }
    }

    public function login()
    {
        return view('auth/login', [
            'title' => 'Login'
        ]);
    }
}
