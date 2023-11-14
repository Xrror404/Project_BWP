<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function ToLogin(Request $request){
        return view('Login');
    }
    public function AreUserExist(Request $request){

        $daftarMhs=DB::connection("KoneksiDatabase")->table("mahasiswa")->get();

        $Username = $request->input('Username');
        $Password = $request->input('password');
        $isValid=false;
        foreach ($daftarMhs as $Mahasiswa) {
            if ($Mahasiswa->nama_mhs === $Username) {
                if ($Mahasiswa->nama_mhs === $Username) {
                    $isValid = true;
                }
            }
        }
        if ($isValid) {
            return redirect('Login')->with([
                "pesansukses" => "Berhasil Login $Username dengan password $Password",
                "tipe" => "sukses"
            ]);
        } else {
            return redirect('Login')->with([
                "pesansukses" => "Gagal Login. Salah Password",
                "tipe" => "gagal"
            ]);
        }
    }
}
