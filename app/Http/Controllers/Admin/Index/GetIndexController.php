<?php

namespace App\Http\Controllers\Admin\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GetIndexController extends Controller
{
   public function index(){
       return view('Admin.Index.Index');
   }
}
