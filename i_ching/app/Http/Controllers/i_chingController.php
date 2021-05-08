<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class i_chingController extends Controller
{
    
    public function index()
    {
       return view('i_ching.index');
    }
}
