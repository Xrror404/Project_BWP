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
        // $request->validate([
        //     'Username' => ['required', 'string'],
        //     'password' => ['required', 'string'],
        // ]);

        // $username = $request->input('Username');
        // $password = $request->input('password');

        // $hashedPassword = Hash::make($request->input('user_password'));

        // if (Auth::attempt(['user_username' => $username, 'user_password' => $password])) {
        //     return redirect()->route('home')->with('Username', $username);
        // } else {
        //     return redirect()->route('login')->with('error', 'Username or password is incorrect');
        // }

        $credentials = [
            "user_username" => $request->Username,
            "password" => $request->password
        ];

        // $credentials = $request->only('user_username', 'password');

        // $credentials['user_username'] = $credentials['Username'];
        // $credentials['user_password'] = $credentials['password'];

        if (Auth::attempt($credentials)) {
            return redirect()->route('home')->with('Username', $request->input('Username'));
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
