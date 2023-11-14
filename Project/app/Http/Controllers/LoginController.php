<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            return redirect('Login')->with([
                "pesansukses" => "Input contains SQL keywords. Login failed.",
                "tipe" => "gagal"
            ]);
        }

        $Username = $validatedData['Username'];
        $Password = $validatedData['password'];
        $isValid = false;

        $daftarMhs = DB::connection("KoneksiDatabase")
            ->table("mahasiswa")
            ->where('nama_mhs', $Username)
            ->where('password_mhs', $Password)
            ->get();

        // Check if the provided credentials are valid (without hashing the password)
        foreach ($daftarMhs as $Mahasiswa) {
            if ($Mahasiswa->nama_mhs === $Username && $Mahasiswa->password_mhs === $Password) {
                $isValid = true;
                break;
            }
        }

        // Redirect based on validation and SQL injection check result
        if ($isValid) {
            return redirect('Login')->with([
                "pesansukses" => "Berhasil Login $Username",
                "tipe" => "sukses"
            ]);
        } else {
            return redirect('Login')->with([
                "pesansukses" => "Gagal Login. Salah Password",
                "tipe" => "gagal"
            ]);
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
