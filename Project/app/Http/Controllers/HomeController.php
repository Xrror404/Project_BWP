<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{


    public function index(Request $request)
    {
        // Fetch announcements using Eloquent model
        $announcements = $this->getAnnouncements();
        return response()->view('home', [
            'announcements' => $announcements,
        ]);
    }


    // Function to fetch announcements (replace this with your actual logic)
    private function getAnnouncements()
    {
        $announcements = DB::connection("KoneksiDatabase")
            ->table("Pengumuman")
            ->get();

        return $announcements;
    }
}
