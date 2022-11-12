<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Approval;
use App\Models\Penduduk;
use App\Models\User;

class Admin extends BaseController
{
    public function index()
    {
        $data['title'] = 'Dashboard';
        $userModel = model(User::class);
        $approvalModel = model(Approval::class);
        // $pendudukModel = model(Penduduk::class);
        $data['petugas'] = count($userModel->filterUser(['level'=>'admin']));
        $data['penduduk'] = count($userModel->filterUser(['level'=>'user']));
        $data['approval'] = count($approvalModel->getApproval());
        $data['approval_proses'] = count($approvalModel->filterApproval(['status_approval'=>'proses']));
        $data['approval_selesai'] = count($approvalModel->filterApproval(['status_approval'=>'selesai']));
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
