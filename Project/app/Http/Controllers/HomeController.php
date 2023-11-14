<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $announcements = DB::table('pengumuman')->get();
        return view('home', compact('announcements'));
    }
}
