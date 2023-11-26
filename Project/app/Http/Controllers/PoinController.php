<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoinController extends Controller
{
    public function RedirectTo(Request $request)
    {
        return view('Point');
    }
}

