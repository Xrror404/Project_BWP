<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function RedirectTo(Request $request)
    {
        return view('admin');
    }
}
