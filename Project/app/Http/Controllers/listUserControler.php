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
    public function search(Request $request)
    {
        $query = $request->input('query');
        $results = Mahasiswa::where('nama_user', 'like', '%' . $query . '%')->get();

        return response()->json($results);
    }
    public function getAllUsers()
    {
        $users = Mahasiswa::all();
        return response()->json($users);
    }
}
