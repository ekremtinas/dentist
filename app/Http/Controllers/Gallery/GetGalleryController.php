<?php

namespace App\Http\Controllers\Gallery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GetGalleryController extends Controller
{
   public function index()
   {
       return view('Gallery.Index');
   }
}
