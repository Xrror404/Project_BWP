<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use Illuminate\Http\Request;

class listMatkulController extends Controller
{
    public function RedirectTo(Request $request)
    {
        $matkul = Matkul::all();
        return view('listMatkul', ['matkul' => $matkul]);
    }
}
