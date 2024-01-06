<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poin;
use App\Models\PenerimaPoin;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class PoinController extends Controller
{
    public function index(Request $request)
    {
        // $poinAll = Poin::all()->first();
        // yang seharusnya seperti yang atas ^ bukan yang V
        $poinAll = Poin::all();
        // dd($poin->Orang);
        $mahasiswaData = Cookie::get('mahasiswa');

        // Decode the cookie value
        $mahasiswaData = json_decode($mahasiswaData, true);

        // Get the 'user_username' from the cookie
        $id_user = $mahasiswaData['id_user'];

        $user = User::find($id_user);
        // Adjust the view name to 'Point'
        return view('point', compact('poinAll', 'user'));
    }
}
