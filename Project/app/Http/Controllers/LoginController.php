<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function ToLogin(Request $request)
    {
        return view('Login');
    }

    public function login(Request $request)
    {
        $credentials = [
            "user_username" => $request->Username,
            "password" => $request->password
        ];

        // if ($credentials['user_username'] === 'admin' && $credentials['password'] === 'admin') {
        //     return redirect()->route('admin');
        // }

        if (Auth::attempt($credentials)) {
            $authenticatedUser = Auth::user();
            if ($authenticatedUser) {
                $idUser = $authenticatedUser->id_user;
                $namaUser = $authenticatedUser->nama_user;
                $userUsername = $authenticatedUser->user_username;
                $roleUser = $authenticatedUser->role_user;
                $jurusanMhs = $authenticatedUser->id_jurusan;
                if ($roleUser == 0) {
                    $mahasiswaData = [
                        'id_user' => $idUser,
                        'nama_user' => $namaUser,
                        'user_username' => $userUsername,
                        'roleUser' => $roleUser,
                        'jurusanMhs' => $jurusanMhs
                    ];
                    $cookie = Cookie::make('mahasiswa', json_encode($mahasiswaData), 300);
                    return redirect('home')->withCookie($cookie);
                } else if ($roleUser == 2) {
                    return redirect()->route('admin');
                } else {
                    // nanti yang buat form dosen ini buat login ke form dosen kalau role nya 2 ya
                    return redirect()->route('login')->with('error', 'form dosen belom dibuat');
                }
            } else {
                return redirect()->route('login')->with('error', 'Failed to retrieve user details');
            }
        } else {
            return redirect()->route('login')->with('error', 'Username or password is incorrect');
        }
    }
}
