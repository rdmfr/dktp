<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class Admin extends BaseController
{
    public function index()
    {
        $data['title'] = 'Dashboard';
        return view('dashboard',$data);
    }

    public function profile()
    {
        $data['title'] = 'Profile';
        $userModel = model(User::class);
        $data['user'] = $userModel->getSpesifikUser(['email'=>session()->get('email')]);
        return view('profil',$data);
    }
}
