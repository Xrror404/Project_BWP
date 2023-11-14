<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch announcements from the database
        $announcements = DB::table('pengumuman')->get();

        return view('home', compact('announcements'));
    }
}
