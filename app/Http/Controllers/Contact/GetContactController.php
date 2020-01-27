<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GetContactController extends Controller
{
    public function index()
    {
        return view('Contact.Index');
    }
}
