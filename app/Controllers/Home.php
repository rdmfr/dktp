<?php

namespace App\Controllers;

use App\Models\Penduduk;
use App\Models\Admin;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = 'Login';
        if ($this->request->getMethod() == 'post' and $this->validate([
            'email' => 'trim|required|valid_email',
            'password' => 'trim|required|alpha_numeric_space|min_length[6]|max_length[16]',
        ])) {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            return $this->login($email, $password);
        // }else{
            // $data['validation'] = $this->validator;
            // return view('login', $data);
        }
        $data['validation'] = $this->validator;
        return view('login', $data);
    }

    public function login(string $email, string $password)
    {
        $pendudukModel = model(Penduduk::class);
        $penduduk = $pendudukModel->getSpesifikPenduduk(['email' => $email]);
        if ($penduduk && password_verify($password, $penduduk['password'])) {
            return redirect('test')->with('msg', '<div class="alert alert-primary" role="alert">
            Login berhasil!
            </div>');
        } else {
            return redirect('login')->with('msg','<div class="alert alert-danger" role="alert">
                Username atau Password salah!
                </div>');
        }
    }

    public function test()
    {
        $adminModel = model(Admin::class);
        $data['admin'] = $adminModel->getAdmin();
        // var_dump($data);
        // var_dump(password_verify('Penduduk62',$data['penduduk']['password']));
        return view('test',$data);
    }
}
