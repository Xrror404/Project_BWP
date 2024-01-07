<?php

namespace App\Http\Controllers;

use App\Models\Nilai as ModelsNilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Nilai extends Controller
{
    public function showNilai()
    {
        $userId = Auth::id();
        $nilai = ModelsNilai::with('matkul')->where('id_user', $userId)->get();

        return view('laporan', compact('nilai'));
    }
}
