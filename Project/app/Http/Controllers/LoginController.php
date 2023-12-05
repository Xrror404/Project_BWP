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

        if (Auth::attempt($credentials)) {
            // Retrieve the authenticated user
            $authenticatedUser = Auth::user();

            if ($authenticatedUser) {
                $namaUser = $authenticatedUser->nama_user;
                $userUsername = $authenticatedUser->user_username;
                $mahasiswaData = [
                    'nama_user' => $namaUser,
                    'user_username' => $userUsername,
                ];
                $cookie = Cookie::make('mahasiswa', json_encode($mahasiswaData), 300);
                return redirect('Home')->withCookie($cookie);
            } else {
                return redirect()->route('login')->with('error', 'Failed to retrieve user details');
            }
        } else {
            return redirect()->route('login')->with('error', 'Username or password is incorrect');
        }
    }


    // private function containsSQL($input)
    // {
    //     $sqlKeywords = ['SELECT', 'INSERT', 'UPDATE', 'DELETE', 'FROM', 'WHERE', 'DROP', 'UNION', 'JOIN', 'AND', 'OR'];
    //     foreach ($sqlKeywords as $keyword) {
    //         if (str_contains(strtoupper($input), $keyword)) {
    //             return true;
    //         }
    //     }

    //     return false;
    // }
}
