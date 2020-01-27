<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GetIndexController extends Controller
{
    public function index()
    {
        return view('Index');
    }
}
