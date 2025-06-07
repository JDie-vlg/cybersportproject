<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller as BaseController;

class AdminPanelController extends BaseController
{

    public function index(){
        return view('admin.admin_main', [

            ]
        );
    }

    public function getAdminPanel()
    {

    }
}
