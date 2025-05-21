<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function showLogin()
    {
        $data = [
            'title' => 'Login'
        ];

        return view('auth/login', $data);
    }

    public function login()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $userModel = new UserModel();
        $user = $userModel->where('email', $email)->first();

        if ($user && password_verify($password, $user['password'])) {
            session()->set([
                'isLoggedIn' => true,
                'user_id'    => $user['id'],
                'username'   => $user['username'],
                'email'      => $user['email'],
            ]);
            return redirect()->to('/buku');
        }

        return redirect()->back()->with('error', 'Login gagal. Cek email dan password.');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }

    public function buatPassword()
    {
        echo password_hash('admin123', PASSWORD_DEFAULT);
    }
}
