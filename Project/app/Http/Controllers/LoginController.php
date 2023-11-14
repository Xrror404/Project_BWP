<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function ToLogin(Request $request){
        return view('Login');
    }
    public function AreUserExist(Request $request){
        //ini udah selesai untuk nangkep nya cuman tinggal ditambahi ae database nya

        $username = $request->input('Username');
        $password = $request->input('password');
        $isValid=true;

        if ($isValid) {
            // Successful login
            return redirect('Login')->with([
                "pesansukses" => "Berhasil Login $username dengan password $password",
                "tipe" => "sukses"
            ]);
        } else {
            // Unsuccessful login
            return redirect('Login')->with([
                "pesansukses" => "Gagal Login. Salah Password",
                "tipe" => "gagal"
            ]);
        }
    }
}
