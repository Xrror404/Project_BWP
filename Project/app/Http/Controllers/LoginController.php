<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function ToLogin(Request $request)
    {
        return view('Login');
    }
    public function AreUserExist(Request $request)
    {
        // Validate the user input
        $validatedData = $request->validate([
            'Username' => 'required|string|max:255',
            'password' => 'required|string|max:255',
        ]);

        // Check for SQL injection in the input
        $inputContainsSQL = $this->containsSQL($validatedData['Username']) || $this->containsSQL($validatedData['password']);

        if ($inputContainsSQL) {
            Session::flash('error', 'Inputan Mengandung SQL!');
            return redirect('Login');
        }

        $Username = $validatedData['Username'];
        $Password = $validatedData['password'];
        $isValid = false;

        $mahasiswa = Mahasiswa::where('user_username', $Username)
            ->where('user_password', $Password)
            ->first();

        if ($mahasiswa) {
            $isValid = true;
        } else {
            $isValid = false;
        }

        $mahasiswa = Mahasiswa::getByNrp($Username);
        $cookie = Cookie::make('mahasiswa', json_encode($mahasiswa), 300);
        if ($isValid) {
            return redirect('Home')->with('Username', $Username)->withCookie($cookie);
        } 
        else {
            Session::flash('error', 'Username Atau Password Anda Salah');
            return redirect('Login');
        }
    }

    private function containsSQL($input)
    {
        $sqlKeywords = ['SELECT', 'INSERT', 'UPDATE', 'DELETE', 'FROM', 'WHERE', 'DROP', 'UNION', 'JOIN', 'AND', 'OR'];
        foreach ($sqlKeywords as $keyword) {
            if (str_contains(strtoupper($input), $keyword)) {
                return true;
            }
        }

        return false;
    }
}
