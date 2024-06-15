<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('auth/register');
    }

    public function loginProcess()
    {
        $model = new UserModel();
        $user = $model->where('email', $this->request->getVar('email'))->first();

        if ($user && password_verify($this->request->getVar('password'), $user['password'])) {
            session()->set(['isLoggedIn' => true, 'user' => $user]);
            return redirect()->to('/dashboard');
        }

        return redirect()->back()->with('error', 'Invalid credentials');
    }

    public function registerProcess()
    {
        $model = new UserModel();
        $data = [
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password')
        ];
        $model->save($data);
        return redirect()->to('/login')->with('success', 'Registration successful');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
