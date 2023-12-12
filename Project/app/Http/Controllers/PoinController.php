<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poin;
use App\Models\PenerimaPoin;
use App\Models\User;

class PoinController extends Controller
{
    public function index(Request $request)
    {
        // $poinAll = Poin::all()->first();
        // yang seharusnya seperti yang atas ^ bukan yang V
        $poinAll = Poin::all();
        // dd($poin->Orang);
        $user = User::find('MHSINF0003');
        // Adjust the view name to 'Point'
        return view('point', compact('poinAll', 'user'));
    }
}
