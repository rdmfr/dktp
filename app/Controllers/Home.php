<?php

namespace App\Controllers;

use App\Models\Penduduk;
use App\Models\Admin;

class Home extends BaseController
{
    // public function index()
    // {
    //     $data['title'] = 'Login';
    //     if ($this->request->getMethod() == 'post' and $this->validate([
    //         'email' => 'trim|required|valid_email',
    //         'password' => 'trim|required|alpha_numeric_space|min_length[6]|max_length[16]',
    //     ])) {
    //         $email = $this->request->getPost('email');
    //         $password = $this->request->getPost('password');
    //         return $this->login($email, $password);
    //     }
    //     $data['validation'] = $this->validator;
    //     return view('login', $data);
    // }

    // public function login(string $email, string $password)
    // {
    //     $pendudukModel = model(Penduduk::class);
    //     $penduduk = $pendudukModel->getSpesifikPenduduk(['email' => $email]);
    //     if ($penduduk && password_verify($password, $penduduk['password'])) {
    //         $session = [
    //             'nama' => $penduduk['nama'],
    //             'email' => $penduduk['email'],
    //             'level' => 'penduduk'
    //         ];
    //         $this->session->set($session);
    //         return redirect('test')->with('msg', '<div class="alert alert-primary" role="alert">
    //         Login berhasil!
    //         </div>');
    //     } else {
    //         return redirect('login')->with('msg','<div class="alert alert-danger" role="alert">
    //             Username atau Password salah!
    //             </div>');
    //     }
    // }

    // public function test()
    // {
    //     $adminModel = model(Admin::class);
    //     $data['admin'] = $adminModel->getAdmin();
    //     return view('test',$data);
    // }

    // public function register()
    // {
    //     $data['title'] = 'Register';
    //     if ($this->request->getMethod() == 'post' and $this->validate([
    //         'nik' => 'trim|required|numeric|is_unique[penduduk.nik]',
    //         'nama' => 'trim|required|alpha_numeric_space',
    //         'email' => 'trim|required|valid_email|is_unique[penduduk.email]',
    //         'password' => 'trim|required|alpha_numeric_space|min_length[6]|max_length[15]',
    //     ])) {
    //         $pendudukModel = model(Penduduk::class);
    //         $penduduk = [
    //             'nik' => $this->request->getPost('nik'),
    //             // 'no_kk' => null,
    //             'nama' => $this->request->getPost('nama'),
    //             // 'tempat_lahir' => $this->request->getPost('tempat_lahir'),
    //             // 'tgl_lahir' => $this->request->getPost('tgl_lahir'),
    //             // 'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
    //             // 'alamat' => $this->request->getPost('alamat'),
    //             // 'rt_rw' => $this->request->getPost('rt_rw'),
    //             // 'agama' => $this->request->getPost('agama'),
    //             // 'golongan_darah' => $this->request->getPost('golongan_darah'),
    //             // 'status_perkawinan' => $this->request->getPost('status_perkawinan'),
    //             // 'pekerjaan' => $this->request->getPost('pekerjaan'),
    //             // 'pendidikan' => $this->request->getPost('pendidikan'),
    //             // 'kewarganegaraan' => $this->request->getPost('kewarganegaraan'),
    //             // 'tgl_pembuatan' => $this->request->getPost('tgl_pembuatan'),
    //             'email' => $this->request->getPost('email'),
    //             'password' => password_hash($this->request->getPost('password'),PASSWORD_DEFAULT),
    //             'status' => 'aktif'
    //         ];
    //         if($pendudukModel->createPenduduk($penduduk)){
    //             return redirect('login')->with('msg','<div class="alert alert-primary" role="alert">
    //             Register berhasil, Silahkan Login!
    //             </div>');
    //         }else{
    //             return redirect('register')->with('msg','<div class="alert alert-danger" role="alert">
    //             Register gagal!
    //             </div>');
    //         }
    //     }
    //     $data['validation'] = $this->validator;
    //     return view('register', $data);
    // }

    // public function logout()
    // {
    //     // return $this->session
    // }
}
