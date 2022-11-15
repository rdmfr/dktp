<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Approval as ApprovalModel;

class Approval extends BaseController
{
    public function index($id = false)
    {
        $approvalModel = model(ApprovalModel::class);
        $data['title'] = 'Approval';
        $data['approval'] = $approvalModel->getFullApproval();
        if($id){
            return view('admin/approval_detail');
        }
        return view('admin/approval',$data);
    }
}
