<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class listUserControler extends Controller
{
    public function RedirectTo(Request $request)
    {
        $mahasiswa = Mahasiswa::all();
        return view('listUser', ['mahasiswa' => $mahasiswa]);
    }
}
