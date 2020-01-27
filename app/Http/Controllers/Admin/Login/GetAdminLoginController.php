<?php

namespace App\Http\Controllers\Admin\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GetAdminLoginController extends Controller
{
    public function index(){
    return view('Admin.Login.Index');
    }
}
