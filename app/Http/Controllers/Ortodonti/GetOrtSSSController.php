<?php

namespace App\Http\Controllers\Ortodonti;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GetOrtSSSController extends Controller
{
    public  function index(){
        return view('Ortodonti.SSS');
    }
}
