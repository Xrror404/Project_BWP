<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function showDosenSchedule()
    {
        // Ambil data user dengan role 1
        $dosen = User::where('role_user', 1)->first();

        // Kirim data ke view
        return view('nama-view', compact('dosen'));
    }
}
