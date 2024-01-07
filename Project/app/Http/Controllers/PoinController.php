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

        $user_username = Auth::user()->id_user;
        $poin_user = PenerimaPoin::with('poins')->where('id_penerima', $user_username)->get();
        return view('point', compact('poin_user'));
    }
}
