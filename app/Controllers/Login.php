<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;


class Login extends BaseController
{
    public function index()
    {
        // view login
        return view('login');
    }

    public function authenticate(){
        $userModel = new UserModel();
        $obj =  file_get_contents('php://input');
        $data = json_decode($obj);
        $email = $data->email;
        $password = $data->password;
        // $userModel = new UserModel();
        // $email = $this->request->getVar('email');
        // $password = $this->request->getVar('password');

        $user = $userModel->where('email', $email)->first();
        if (!$user) {
            # code...
            return $this->response->setStatusCode(404)->setJSON(['message' => 'User tidak ditemukan']);
            // return redirect()->to('/login')->with('eror', 'email tidak ditemukan');
        }
        if (!password_verify($password, $user['password'])) {
            # code...
            return $this->response->setStatusCode(404)->setJSON(['message' => 'Password tidak ditemukan']);
            // return redirect()->to('/login')->with('eror', 'password salah!');
        }
        session()->set([
            'user_id' => $user['id'],
            'email' => $user['email'],
            'logged_in' => true
        ]);
        return redirect()->to('/dashboard');
    }
}
